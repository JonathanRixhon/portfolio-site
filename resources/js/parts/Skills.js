export default class Skills {
    constructor() {
        if (!(this.element = document.querySelector('#skills'))) {
            return;
        }
        this.disciplineLinks = Array.from(this.element.querySelectorAll('.skills__discipline-link'));
        this.disciplines = Array.from(this.element.querySelectorAll('.skills__discipline'));
        this.init();
    }

    init() {
        this.setEvents();
    }

    setEvents() {
        this.disciplineLinks.forEach((link) => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                this.toggleLink(event.target);
                this.toggleDiscipline(event.target);
            });
        });
    }

    toggleDiscipline(link) {
        this.disciplines.forEach((discipline) => {
            if (link.getAttribute("href").substring(1) === discipline.id) {
                discipline.classList.add('skills__discipline--active');
                discipline.querySelectorAll('.skills__technology-link').forEach((technologyLink) => {
                    technologyLink.setAttribute('tabindex', '0');
                });
                return;
            }
            discipline.querySelectorAll('.skills__technology-link').forEach((technologyLink) => {
                technologyLink.setAttribute('tabindex', '-1');
            });
            discipline.classList.remove('skills__discipline--active');
        });
    }

    toggleLink(link) {
        this.disciplineLinks.forEach((disciplineLink) => {
            if (link === disciplineLink) {
                link.classList.add('skills__discipline-link--active');
                return;
            }

            disciplineLink.classList.remove('skills__discipline-link--active');
        });
    }
}
