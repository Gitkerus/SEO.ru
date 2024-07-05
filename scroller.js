const scrollers = document.querySelectorAll(".scroller");

/*
    Если нужно добавить скроллер на другие блоки с элементами,
    присвоить класс "scroller" внейшней обертке контейнера, и scroler__inner внутреннему контейнеру с элементами. 
    атрибут direction указывает направление анимации, по умолчанию вправо.
*/


if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    addAnimation();
};

function addAnimation() {
    scrollers.forEach(scroller => {
        scroller.setAttribute('data-animated', true);
        
        const scrollerInner = scroller.querySelector(".scroller__inner");
        const scrollerContent = Array.from(scrollerInner.children);

        scrollerContent.forEach(item => {
            const dupedItem = item.cloneNode(true);
            dupedItem.setAttribute("aria-hidden", true);
            scrollerInner.appendChild(dupedItem);
        })
    });

};