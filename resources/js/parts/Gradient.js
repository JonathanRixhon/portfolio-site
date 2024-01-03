export default class Gradient {
    constructor() {
        this.el = document.querySelector('.gradient-effect');
        this.reactiveTagNames = ['A', 'BUTTON', 'INPUT', 'TEXTAREA', 'LABEL'];
        this.mouseFollow = document.querySelector('.gradient-effect__mouse-follow');
        this.init();
    }

    init() {
        this.setEvents();
    }


    setEvents() {
        let debounceTimeout;
        document.addEventListener('mousemove', (e) => {
            clearTimeout(debounceTimeout);
            debounceTimeout = setTimeout(() => {
                this.updateMouseFollow(e);
            }, 0.1);
        });
    }

    updateMouseFollow(e) {
        let mouse = this.mouseFollow.getBoundingClientRect()
        this.reactiveElement(e, mouse)
        this.mouseFollow.style.transform = `translate(${e.clientX - (mouse.width / 2)}px, ${e.clientY - (mouse.height / 2)}px)`;
    }

    reactiveElement(e, mouse) {
        let targetPosition = e.target.getBoundingClientRect();

        if (this.reactiveTagNames.includes(e.target.tagName)) {
            if (targetPosition.width > mouse.width) {
                this.mouseFollow.style.width = `${targetPosition.width}px`;
            }

            if (targetPosition.height > mouse.height) {
                this.mouseFollow.style.height = `${targetPosition.height}px`;
            }

            this.mouseFollow.classList.add('gradient-effect__mouse-follow--active');
            return;
        }

        this.mouseFollow.style.width = ``;
        this.mouseFollow.style.height = ``;
        this.mouseFollow.classList.remove('gradient-effect__mouse-follow--active');
    }
}
