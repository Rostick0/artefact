export function classRemove(elem, className) {
    if (!elem.classList.contains(className)) return;

    elem.classList.remove(className);
}

export function classAdd(elem, className) {
    if (elem.classList.contains(className)) return;

    elem.classList.add(className);
}