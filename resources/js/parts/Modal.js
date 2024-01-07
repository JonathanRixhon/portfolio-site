import Nav from "./Nav";

export default class Modal {
    constructor(el) {
        this.modal = el;
        this.close = el.querySelector('.modal__close');
        this.container = el.querySelector('.modal__container');
        this.interactible = el.querySelectorAll('input, textarea, button, a');
        this.togglers = document.querySelectorAll(`[data-modal="${this.modal.getAttribute('id')}"]`);
    }

    init() {
        if (!this.modal) return null;
        this.closeModal();
        this.setEvents();
    }

    setEvents() {
        document.addEventListener('wheel', (e) =>{
            if (! this.modal.classList.contains('modal--active')) return
            e.preventDefault();
            e.stopPropagation();
        }, {passive: false});

        this.togglers.forEach((el) => {
            el.addEventListener('click', (e) => {
                e.preventDefault();
                this.openModal();
            });
        });

        this.modal.addEventListener('click', (e) => {
            if (!(this.container.contains(e.target) || this.container === e.target)) {
                this.closeModal();
            }
        });

        this.close.addEventListener('click', (e) => {
            e.preventDefault();
            this.closeModal();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') this.closeModal();
        });
    }

    openModal() {
        this.modal.classList.add('modal--active')
        window.app.nav.closeNav();
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
