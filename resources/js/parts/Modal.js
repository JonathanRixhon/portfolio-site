export default class Modal {
    constructor(el) {
        this.modal = el;
        this.close = el.querySelector('.modal__close');
        this.container = el.querySelector('.modal__container');
        this.init();
    }

    init() {
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

    closeModal() {
        this.modal.classList.remove('modal--active')
    }
}
