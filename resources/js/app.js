import './bootstrap';
import Skills from './parts/Skills';

class App {
    constructor() {
        let skills = new Skills();
    }
}

window.addEventListener('load', () => {
    window.app = new App();
});

