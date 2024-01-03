export default class Modal {
    constructor(el) {
        this.modal = el;
        this.close = el.querySelector('.modal__close');
        this.container = el.querySelector('.modal__container');
        this.interactible = el.querySelectorAll('input, textarea, button, a');
        this.init();
    }

    init() {
        this.closeModal();
        this.setEvents();
    }

    setEvents() {
        this.modal.addEventListener('click', (e) => {
            if (!(this.container.contains(e.target) || this.container === e.target)) {
                this.closeModal();
            }
        });

        this.close.addEventListener('click', (e) => {
            e.preventDefault();
            this.closeModal();
        });

        this.close.addEventListener('click', (e) => {
            e.preventDefault();
            this.closeModal();
        });
    }

    openModal() {
        this.modal.classList.add('modal--active')
        this.interactible.forEach((el) => {
            el.setAttribute('tabindex', '0');
        });
    }
    closeModal() {
        this.modal.classList.remove('modal--active');
        this.interactible.forEach((el) => {
            el.setAttribute('tabindex', '-1');
        });
    }
}
