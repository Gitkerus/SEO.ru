<?php
    if(isset($_POST["modalForm_submit"])) {
        if(empty($_POST["modalForm_name"]) || empty($_POST["modalForm_site-adress"]) || empty($_POST["modalForm_email"]) || empty($_POST["modalForm_phone"])) {
            $response = "Заполните все обязательные поля";
        } else {
            $message = "Имя клиента: {$$_POST["modalForm_name"]}, <br> Сайт клиента: {$_POST["modalForm_site-adress"]}, <br> Электронная почта: {$_POST["modalForm_email"]}  <br> Контактный номер: {$_POST["modalForm_phone"]}";
            $response = sendMail($message);
        }
    }
?>
<div class="modal">
        <form id="modal-form" action="" class="modal__form" method="post" enctype="multipart/form-data">
                <button class="modal__closeBtn">
                    <img src="./assets/closeBtn.svg" alt="closeBtn">
                </button>
                <header class="modal__form__header">Оставьте заявку <br> на продвижение Вашего сайта!</header>
                <div class="modal__form__subHeader">Наш  эксперт свяжется с Вами в ближайшее время.</div>
                <div class="modal__formInputWrapper">
                    <input class="modal__form__input" type="text" name="modalForm_name" required placeholder="Ваше имя">
                    <input class="modal__form__input" type="url" name="modalForm_site-adress" required placeholder="Адрес сайта">
                    <input class="modal__form__input" type="email" name="modalForm_email" required placeholder="Email">
                    <input class="modal__form__input" type="tel" name="modalForm_phone" required placeholder="Номер телефона">
                    <span class="modal__form__info">Добавить информацию о проекте</span>
                </div>
                <input class="modal__form__submit" type="submit" name="modalForm_submit" value="Получить предложение!"> 
                <div class="modal__form__policy">Отправляя заявку, вы соглашаетесь с <a href="#">условиями передачи информации.</a></div>               
                <?php
                    if(@$response == "success") {
                        $alert = '<span class="alert-msg success">Спасибо, ваша заявка принята!</span>';
                        echo $alert;
                    }; 
                ?>
        </form>
</div>