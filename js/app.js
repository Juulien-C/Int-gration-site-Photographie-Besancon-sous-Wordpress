const navSlide = () => {
    const burger = document.querySelector('nav .burger');
    const nav    = document.querySelector('nav ul.nav-links');
    const navLinks   = document.querySelectorAll('.nav-links li');

  
    burger.addEventListener('click', () => {
        //toggle de la Navbar
        nav.classList.toggle('nav-active');

        // animation des liens
        navLinks.forEach((link, index) => {
            if(link.style.animation){
                link.style.animation = '';
            } else {
             link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });

        // animation icone burger
        burger.classList.toggle('toggle');
    });

}

navSlide();
