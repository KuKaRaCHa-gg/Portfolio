// Animation d'apparition des sections au défilement avec effet rétro
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section');

    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        const triggerHeight = window.innerHeight / 1.3;
        
        if (sectionTop < triggerHeight) {
            section.classList.add('glitch-in');  // Nouvelle classe pour un effet rétro
        }
    });
});
