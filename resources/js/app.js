import './bootstrap';
import Skills from './parts/Skills';
import Modals from './parts/Modals';

class App {
    constructor() {
        let skills = new Skills();
        let modals = new Modals();
    }
}

window.addEventListener('load', () => {
    window.app = new App();
});

