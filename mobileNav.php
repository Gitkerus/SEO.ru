<?php 
    require("./navigatonData.php");
?>

<div class="mobileNav">
        <header class="header header-mobileNav">
            <div class="header__logo">
                <img src="./assets/logoImg.svg" alt="logoImg" class="header__logo__img">
                <div class="header__logo__text">
                    <div class="header__logo__text-year">1999</div>
                    <div class="header__logo__text-tagline">Первым быть просто!</div>
                </div>
            </div>
            <button class="header__mobileMenuBtn">
                <img src="./assets/menuBurger-close.svg" alt="menuBurger-close" class="header__mobileMenuBtn__img">
            </button>
        </header>
        <div class="mobileNavContent">
            <form class="mobileNav__search">
                <input class="mobileNav__search__input" type="text" placeholder="ПОИСК">
                <input type="image" class="mobileNav__search__submit" alt="magn-glass" src="./assets/magn-glass.svg">    
            </form>
            <div class="mobileNavMenu">
                <?php

                foreach($menu_data as $menu) {
                    if(!isset($menu["submenus_data"])) {
                        $link = "
                        <a class='mobileNavMenu__link' href={$menu['link']}>{$menu['menu-header']}</a>
                        ";
                        echo $link;
                    } else if (isset($menu["submenus_data"])){
                        $link = "
                            <div class='mobileNavMenu__link'>
                            <div class='mobileNavMenu__link__sub'>
                            {$menu["menu-header"]}<img src='./assets/arrowDown.svg' alt='arrow'>
                            </div>
                            <div class='mobileNavMenuSubMenus'>
                        ";
                        echo $link;
                        foreach($menu["submenus_data"] as $submenu) {
                            $submenu_link = "
                                <a class='mobileNavMenu__submenu' href={$submenu['link']}><img src='{$submenu['icon']}' alt='{$submenu['icon-alt']}'>{$submenu['text']}</a>
                            ";
                            echo $submenu_link;
                        }
                        echo "</div> </div>" ; 
                    }
                };
                ?>
            </div>
            <div class="mobileNav__contacts">
                <a href="tel:+78003505501">8 800 350 55 01</a>
                <a href="tel:+74951182222">+7 495 118 22 22</a>
                <a href="mailto:@seo.ru">1@SEO.ru</a>
            </div>
            <div class="mobileNav__language">
                <button class="mobileNav__language__btn">RU</button>
                <span style="height: 21px; width: 0px; border-left: 1px solid;"></span>
                <button class="mobileNav__language__btn">EN</button>
            </div>
        </div>
</div>