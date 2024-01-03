import Modal from './Modal';

export default class Modals {
    constructor() {
        this.togglers = document.querySelectorAll('[data-modal]');
        this.modals = Array.from(document.querySelectorAll('.modal')).map((modal) => new Modal(modal));
        this.init();
    }

    init() {
        this.setEvents();
    }

    setEvents() {
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.modals.forEach((modal) => {
                    modal.closeModal();
                });
            }
        });

        this.togglers.forEach((toggle) => {
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                this.openModal(e.target);
            });
        });
    }

    openModal(toggle) {
        let modal = document.querySelector('#' + toggle.dataset.modal);
        modal.classList.add('modal--active');
    }
}
