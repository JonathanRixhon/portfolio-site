import './bootstrap';
import Skills from './parts/Skills';
import Gradient from './parts/Gradient';
import Modals from './parts/Modals';
import Flash from './parts/Flash';
import Contact from './parts/Contact';
const modules = import.meta.glob([
    '../favicon/**',
    '../img/**'
])
class App {
    constructor() {
        let skills = new Skills();
        let modals = new Modals();
        let gradient = new Gradient();
        let flash = new Flash();
        let contact = new Contact();
    }
}

window.addEventListener('load', () => {
    window.app = new App();
});

