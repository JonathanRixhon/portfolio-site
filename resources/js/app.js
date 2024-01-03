import './bootstrap';
import Skills from './parts/Skills';
import Gradient from './parts/Gradient';
import Modals from './parts/Modals';

class App {
    constructor() {
        let skills = new Skills();
        let modals = new Modals();
        let gradient = new Gradient();
    }
}

window.addEventListener('load', () => {
    window.app = new App();
});

