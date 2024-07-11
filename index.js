const mobileNavMenu = document.querySelector(".mobileNavMenu");

const handleMobileNavContentClick = (event) => {
        const target = event.target.closest(".mobileNavMenu__link__sub");
        if (target) {
            const targetSubmenu = target.parentNode.querySelector(".mobileNavMenuSubMenus");
            if(targetSubmenu.classList.contains("mobileNavMenuSubMenus-open")){
                targetSubmenu.classList.remove("mobileNavMenuSubMenus-open")
                target.classList.remove("mobileNavMenu__link__sub-open"); 
            } else {
                const subLink = mobileNavMenu.querySelector(".mobileNavMenu__link__sub-open");
                subLink?.classList.remove("mobileNavMenu__link__sub-open");  
                target.classList.toggle("mobileNavMenu__link__sub-open"); 
                const submenu = mobileNavMenu.querySelector(".mobileNavMenuSubMenus-open");
                submenu?.classList.remove("mobileNavMenuSubMenus-open");
                targetSubmenu.classList.toggle("mobileNavMenuSubMenus-open")
            }
            
        }
}

mobileNavMenu?.addEventListener("click", (e) => handleMobileNavContentClick(e) )

const siteContent = document.getElementById("siteContent");
const burgerBtns = document.querySelectorAll(".header__mobileMenuBtn");
const modalMobileNav = document.querySelector(".mobileNav");
const handleBurgerClick = () => {
    modalMobileNav.classList.toggle("mobileNav-open");
    siteContent.classList.toggle("siteContent-noScroll");
};
burgerBtns.forEach((element) => {
    element.addEventListener("click", () => handleBurgerClick());
});


const desktopMenuCategoryLinks = document.querySelectorAll(".navBar__menu__category__link");

const handleDesktopMenuCategoryClick = (e) => {
    if(e.target.parentNode.classList.contains("navBar__menu__category-active")) {
        e.target.parentNode.classList.remove("navBar__menu__category-active");
    } else {
        desktopMenuCategoryLinks.forEach((element) => {
            element.parentNode.classList.remove("navBar__menu__category-active");
            e.target.parentNode.classList.add("navBar__menu__category-active");
        })
    }

}

desktopMenuCategoryLinks.forEach((element) => {
    element.addEventListener("click", (e) => handleDesktopMenuCategoryClick(e))
});

const desktopSubMenuLinks = document.querySelectorAll(".submenu__link");
const subLinksWrappers = document.querySelectorAll(".sublinksWrapper");

const handleDesktopSubMenuLinksClick = (e) => {

    if(e.target.closest(".submenu__link").classList.contains("submenu__link-active")) {
        e.target.closest(".submenu__link").classList.remove("submenu__link-active");
        subLinksWrappers.forEach((element) => {
            console.log(element);
            element.classList.remove("sublinksWrapper-open");
        });
    } else if(!e.target.closest(".submenu__link").classList.contains("submenu__link-active")){
        desktopSubMenuLinks.forEach((element) => {
            element.classList.remove("submenu__link-active");
        });
        const target = e.target.closest(".submenu__link");
        target.classList.add("submenu__link-active");
        subLinksWrappers.forEach((element) => {
            console.log(element);
            element.classList.remove("sublinksWrapper-open");
        });
        const sublinksID = target.getAttribute("sublinks");
        const sublink = document.getElementById(sublinksID);
        sublink?.classList.add("sublinksWrapper-open");
    }
};

desktopSubMenuLinks.forEach((element) => {
    element.addEventListener("click", (e) => handleDesktopSubMenuLinksClick(e))
});

const modalCloseBtn = document.querySelector(".modal__closeBtn");
const openModalFormBtn = document.querySelector(".header__contacts__btn");
const modal = document.querySelector(".modal");

const handleModalToggle = () => {
    modal.classList.toggle("modal-open");
}

openModalFormBtn.addEventListener("click", () => handleModalToggle());
modalCloseBtn.addEventListener("click", () => handleModalToggle());

