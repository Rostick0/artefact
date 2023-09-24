export function classRemove(elem, className) {
    if (!elem.classList.contains(className)) return;

    elem.classList.remove(className);
}

export function classAdd(elem, className) {
    if (elem.classList.contains(className)) return;

    elem.classList.add(className);
}

export function observerOnce(elem, func) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;

            func();
            observer.unobserve(elem);
        });
    });
    observer.observe(elem);
}