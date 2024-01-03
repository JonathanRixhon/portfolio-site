export default class Flash {
    constructor() {
        this.element = document.querySelector('.flash');
        if (!this.element) return;
        this.init();
    }

    init() {
        this.element.classList.add('flash--active');

        this.element.addEventListener('transitionend', () => {
            if (this.element.classList.contains('flash--active')) {
                return;
            }
            this.element.parentElement.removeChild(this.element);
        });

        setTimeout(() => {
            this.element.classList.remove('flash--active');
        }, 4000);
    }
}
