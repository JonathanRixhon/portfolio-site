export default class Nav {
    constructor() {
        this.nav = document.querySelector('.nav');
        this.toggle = document.querySelector('.nav__toggle');
        this.texts = {
            open: this.toggle.textContent,
            close: this.toggle.dataset.close,
        };
        this.init();
    }

    init() {
        this.setEvents();
    }

    setEvents() {

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') this.closeNav();
        });

        document.addEventListener('click', (e) => {
            if (this.nav.contains(e.target)) return;
            this.closeNav();
        })

        this.toggle.addEventListener('click', (e) => {
            e.preventDefault();
            this.toggleNav();
        });
    }

    toggleNav() {
        if (this.nav.classList.contains('nav--open')) {
            this.closeNav();
            return;
        }
        this.openNav();
    }

    closeNav() {
        this.nav.classList.remove('nav--open');
        this.toggle.textContent = this.texts.open;
    }

    openNav() {
        this.nav.classList.add('nav--open');
        this.toggle.textContent = this.texts.close;
    }
}
