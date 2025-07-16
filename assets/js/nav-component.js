document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    checkScroll();
    window.addEventListener('scroll', function() {
        requestAnimationFrame(checkScroll);
    });
    
    function checkScroll() {
        if (window.scrollY > 30) {
            navbar.classList.add('.scrolled');
        } else {
            navbar.classList.remove('.scrolled');
        }
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const burgerMenu = document.querySelector('.burger-menu');
    const navbarMenu = document.querySelector('.navbar-menu');
    const dropdownTitles = document.querySelectorAll('.dropdown-title');

    burgerMenu.addEventListener('click', function() {
        this.classList.toggle('active');
        navbarMenu.classList.toggle('active');

        this.querySelectorAll('.burger-line').forEach((line, index) => {
            if (index === 0) {
                line.style.transform = this.classList.contains('active') ? 'rotate(45deg) translate(5px, 6px)' : '';
            } else if (index === 1) {
                line.style.opacity = this.classList.contains('active') ? '0' : '1';
            } else if (index === 2) {
                line.style.transform = this.classList.contains('active') ? 'rotate(-45deg) translate(5px, -6px)' : '';
            }
        });
    });

    dropdownTitles.forEach(title => {
        title.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                const dropdown = this.parentElement;
                dropdown.classList.toggle('active');
            }
        });
    });

    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 768 && navbarMenu.classList.contains('active')) {
            if (!e.target.closest('.navbar-menu') && !e.target.closest('.burger-menu')) {
                burgerMenu.classList.remove('active');
                navbarMenu.classList.remove('active');
                document.querySelectorAll('.burger-line').forEach(line => {
                    line.style.transform = '';
                    line.style.opacity = '';
                });
            }
        }
    });

    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});