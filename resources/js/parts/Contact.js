import axios from "axios";
import Flash from "./Flash";
import Modal from "./Modal";

export default class Contact {
    constructor() {
        this.form = document.querySelector('.modal .contact-form');
        this.inputs = document.querySelectorAll('input, textarea');
        this.submit = this.form.querySelector('[type="submit"]');
        this.init();
    }

    init() {
        this.setEvents();
    }

    setEvents() {
        this.form.addEventListener('submit', (e) => {
            e.preventDefault();
            this.reset();
            this.send();
        });
    }

    send() {
        const formData = new FormData(this.form);
        this.loading(true)
        axios.post(this.form.action, formData)
            .then((response) => {
                this.loading(false)
                this.renderFlash(response.data.flash);
                this.clearModal();
            })
            .catch((error) => {
                this.loading(false)
                if (error.response) this.handleErrors(error.response.data.errors)
            })
    }

    handleErrors(errors) {
        Object.keys(errors).forEach((key) => {
            let input = this.form.querySelector(`[for="${key}"]`);
            let error = errors[key][0];
            input.classList.add('input--error');
            input.insertAdjacentHTML('afterend', `<p class="input__hint">${error}</p>`);
        });
    }

    reset() {
        let errors = this.form.querySelectorAll('.input--error'),
            hints = this.form.querySelectorAll('.input__hint');

        errors.forEach((el) => {
            el.classList.remove('input--error');
        });

        hints.forEach((el) => {
            el.remove();
        });
    }

    renderFlash(flash) {
        document.body.insertAdjacentHTML('afterbegin', flash);
        new Flash();
    }

    clearModal() {
        let modal = this.form.parentElement.parentElement;
        (new Modal(modal)).init().closeModal();
        console.log(this.inputs);
        this.inputs.forEach((el) => {
            el.value = "";
        });
    }

    loading(state) {
        this.submit.classList.toggle('button--loading', state);
        if (state) {
            this.submit.setAttribute("disabled", "");
            return;
        }

        this.submit.removeAttribute("disabled");
    }
}
