import Modal from './Modal';

export default class Modals {
    constructor() {
        this.togglers = document.querySelectorAll('[data-modal]');
        this.modals = Array
            .from(document.querySelectorAll('.modal'))
            .forEach((modal) => (new Modal(modal)).init());
    }
}
