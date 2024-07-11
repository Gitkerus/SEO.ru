<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO.RU</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include("./mobileNav.php");
    ?>
    <div class="siteContent" id="siteContent">
    <div class="block-top">
        <header class="header">
            <div class="header__logo">
                <img src="./assets/logoImg.svg" alt="logoImg" class="header__logo__img">
                <div class="header__logo__text">
                    <div class="header__logo__text-year">1999</div>
                    <div class="header__logo__text-tagline">Первым быть просто!</div>
                </div>
            </div>
            <div class="header__contacts">
                <a href="tel:+78003505501">8 800 350 55 01</a>
                <a href="tel:+74951182222">+7 495 118 22 22</a>
                <a href="mailto:@seo.ru">1@SEO.ru</a>
                <button class="header__contacts__btn">
                    Отправить заявку
                </button>
            </div>
            <button class="header__mobileMenuBtn">
                <img src="./assets/menuBurger.svg" alt="menuBurger" class="header__mobileMenuBtn__img">
            </button>
        </header>
        <div class="navBar">
            <div class="navBar__menu">
                <div class="navBar__menu__category">
                    <span class="navBar__menu__category__link">
                        Услуги и Решения
                    </span>
                    <div class="pointer"></div>
                    <div class="submenuWrapper">
                        <div class="submenu">
                            <a class="submenu__link" href="#" sublinks="sublinks1">
                                <div class="submenu__linkContainer">
                                    <img class="submenu__link__img" src="./assets/icons/violin.png" alt="🎻">
                                    <span class="submenu__link__text">Поисковое продвижение SEO</span>
                                </div>
                                <img class="submenu__link__arrow" src='./assets/ArrowRight.svg' alt='arrow'>
                            </a>
                            <a class="submenu__link" href="#">
                                <div class="submenu__linkContainer">
                                    <img class="submenu__link__img" src="./assets/icons/rupor.png" alt="📣">
                                    <span class="submenu__link__text">Контекстная реклама</span>
                                </div>
                                <img class="submenu__link__arrow" src='./assets/ArrowRight.svg' alt='arrow'>
                            </a>
                            <a class="submenu__link" href="#">
                                <div class="submenu__linkContainer">
                                    <img class="submenu__link__img" src="./assets/icons/chat.png" alt="💬">
                                    <span class="submenu__link__text">Управление репутацией</span>
                                </div>
                                <img class="submenu__link__arrow" src='./assets/ArrowRight.svg' alt='arrow'>
                            </a>
                            <a class="submenu__link" href="#">
                                <div class="submenu__linkContainer">
                                    <img class="submenu__link__img" src="./assets/icons/pc.png" alt="👨‍💻">
                                    <span class="submenu__link__text">Разработка сайтов</span>
                                </div>
                                <img class="submenu__link__arrow" src='./assets/ArrowRight.svg' alt='arrow'>
                            </a>
                            <a class="submenu__link" href="#">
                                <div class="submenu__linkContainer">
                                    <img class="submenu__link__img" src="./assets/icons/arcade.png" alt="🎡">
                                    <span class="submenu__link__text">Комплексное продвижение</span>
                                </div>
                                <img class="submenu__link__arrow" src='./assets/ArrowRight.svg' alt='arrow'>
                            </a>                    
                    
                            <a class="submenu__link" href="#">
                                <div class="submenu__linkContainer">
                                    <img class="submenu__link__img" src="./assets/icons/zoom.png" alt="🔍">
                                    <span class="submenu__link__text">Анализ сайтов</span>
                                </div>    
                            </a>                  
                            <a class="submenu__link" href="#">
                                <div class="submenu__linkContainer">
                                    <img class="submenu__link__img" src="./assets/icons/note.png" alt="📝">
                                    <span class="submenu__link__text">SEO-копирайтинг</span>
                                </div>
                            </a>
                        </div>
                        <div class="sublinksWrapper" id="sublinks1">
                            <a class="sublinks__text" href="#">Поисковый аудит сайта</a>
                            <a class="sublinks__text" href="#">Продвижение в Яндексе</a>
                            <div class="sublinks__divider"></div>
                            <a class="sublinks__text" href="#">Продвижение сайта по трафику</a>
                            <a class="sublinks__text" href="#">Для интернет-магазина</a>
                            <a class="sublinks__text" href="#">Для корпоративного сайта</a>
                            <a class="sublinks__text" href="#">Для лендинга</a>
                            <a class="sublinks__text" href="#">Для молодых сайтов</a>
                        </div>
                    </div>
                </div>
                <div class="navBar__menu__category">
                    <span class="navBar__menu__category__link">
                        О SEO
                    </span>    
                </div>
                <div class="navBar__menu__category">
                    <span class="navBar__menu__category__link">
                        О нас
                    </span>       
                </div>
                <div class="navBar__menu__category">
                    <span class="navBar__menu__category__link">    
                        Акции
                    </span>        
                </div>
                <div class="navBar__menu__category">
                    <span class="navBar__menu__category__link">
                        Клиенты
                    </span>    
                </div>
                <div class="navBar__menu__category">
                    <span class="navBar__menu__category__link">
                        Контакты
                    </span>    
                </div>
            </div>
            <div class="navBar__control">
                <button class="navBar__control__language">English</button>
                <form  class="navBar__control__search">
                    <input type="text" class="navBar__control__search__input" placeholder="ПОИСК">
                    <input type="image" class="navBar__control__search__submit" alt="magn-glass" src="./assets/magn-glass.svg">
                </form>
            </div>
        </div>
        <div class="content">
            <h1 class="content__header">
                <span class="content__header-green">Продвижение сайтов</span> <br>
                Получайте на 300% больше потенциальных клиентов всего через 2 месяца
            </h1>
            <div class="content__subHeader">используя технологию продвижения Эльбрус 
                <button class="content__subHeader__button"><img src="./assets/questionMark.svg" alt="questionMark"></button>
            </div>
            <form id="content-form" action="" class="content__form" method="post" enctype="multipart/form-data">
                <input class="content__form__input" type="url" name="form_site-adress" required placeholder="Адрес сайта">
                <input class="content__form__input" type="tel" name="form_phone" required placeholder="Номер телефона">
                <input class="content__form__submit" type="submit" name="form_submit" value="Получить предложение!">
                <?php
                    if(@$response == "success") {
                        $alert = '<span class="alert-msg success">Спасибо, ваша заявка принята!</span>';
                        echo $alert;
                    }; 
                ?>
            </form>
            <div class="content__policy">
                Отправляя заявку, вы соглашаетесь с Условиями передачи информации.
            </div>
        </div>
    </div>
    <?php 
        include("./scroller.php");
        include("./modalForm.php");
    ?>
    </div>
</body>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script src="./index.js"></script>

</html>
<?php
    require("./send-mail.php");

    if(isset($_POST["form_submit"])) {
        if(empty($_POST["form_site-adress"]) || empty($_POST["form_phone"])) {
            $response = "Заполните все обязательные поля";
        } else {
            $message = "Сайт клиента: {$_POST["form_site-adress"]}, <br> Контактный номер: {$_POST["form_phone"]}";
            $response = sendMail($message);
        }
    }
?>
