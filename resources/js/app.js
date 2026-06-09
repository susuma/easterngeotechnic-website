import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

const initialiseRevealAnimations = () => {
    const root = document.documentElement;
    const revealElements = [...document.querySelectorAll('[data-reveal]')];
    const counterElements = [...document.querySelectorAll('[data-counter]')];
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!document.querySelector('[data-hero-reveal], [data-reveal], [data-counter]')) {
        return;
    }

    root.classList.add('motion-ready');

    if (reduceMotion || !('IntersectionObserver' in window)) {
        revealElements.forEach((element) => element.classList.add('is-revealed'));
        root.classList.add('page-ready');
        return;
    }

    const animateCounter = (element) => {
        const target = Number(element.dataset.counter);
        const suffix = element.dataset.counterSuffix ?? '';
        const duration = Number(element.dataset.counterDuration ?? 900);
        const startedAt = performance.now();

        const update = (now) => {
            const progress = Math.min((now - startedAt) / duration, 1);
            const easedProgress = 1 - Math.pow(1 - progress, 3);
            element.textContent = `${Math.round(target * easedProgress)}${suffix}`;

            if (progress < 1) {
                requestAnimationFrame(update);
            }
        };

        requestAnimationFrame(update);
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            entry.target.classList.add('is-revealed');
            observer.unobserve(entry.target);
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -7% 0px',
    });

    revealElements.forEach((element) => observer.observe(element));

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
        });
    }, {
        threshold: 0.65,
    });

    counterElements.forEach((element) => {
        element.textContent = `0${element.dataset.counterSuffix ?? ''}`;
        counterObserver.observe(element);
    });

    requestAnimationFrame(() => requestAnimationFrame(() => root.classList.add('page-ready')));
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initialiseRevealAnimations);
} else {
    initialiseRevealAnimations();
}
