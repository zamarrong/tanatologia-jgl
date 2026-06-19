// resources/js/animations.js

export function initScrollAnimations() {
    const animatedElements = document.querySelectorAll(".animate-on-scroll");

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const animationClass = el.dataset.animate;

                // Quitar invisibilidad y añadir animación
                el.classList.remove("opacity-0");
                el.classList.add(animationClass);

                // Si solo quieres que se anime una vez
                observer.unobserve(el);
            }
        });
    }, {
        threshold: 0.2
    });

    animatedElements.forEach(el => observer.observe(el));
}
