// Mobile navigatie toggle
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('navToggle');
    const links = document.getElementById('navLinks');

    if (toggle && links) {
        toggle.addEventListener('click', function () {
            links.classList.toggle('open');
            // Animatie hamburger
            toggle.classList.toggle('active');
        });

        // Sluit menu na klik op een link
        links.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                links.classList.remove('open');
                toggle.classList.remove('active');
            });
        });
    }

    // Actieve link highlight bij scrollen (optioneel)
    const sections = document.querySelectorAll('section[id]');
    window.addEventListener('scroll', function () {
        let current = '';
        sections.forEach(function (section) {
            const top = section.offsetTop - 120;
            if (pageYOffset >= top) {
                current = section.getAttribute('id');
            }
        });

        document.querySelectorAll('.nav-links a').forEach(function (a) {
            a.classList.remove('active');
            if (a.getAttribute('href') === '#' + current) {
                a.classList.add('active');
            }
        });
    });
});
