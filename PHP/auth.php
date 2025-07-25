<?php
$title = "Авторизация";
$href = "CSS/auth.css";
require_once("blocks/header.php");
require_once 'blocks/footer.php';
?>
<main><p id="reg">Регистрация:</p>
    <form action="actions/auth_post.php" method="post" id="reg_form">
        <label for="name">Введите имя:</label>
        <input required type="text" name="name"><br>
        <label for="login">Введите логин:</label>
        <input required type="text" name="login"><br>
        <label for="pass">Введите пароль:</label>
        <input required type="password" name="pass"><br>
        <label for="repass">Повторите пароль:</label>
        <input required type="password" name="repass"><br>
        <label for="gender">Выберите пол:</label>
        <select required name="gender">
            <option disabled selected  value="None"></option>
            <option  value="male">Мужской</option>
            <option  value="feemale">Женский</option>
        </select><br>
        <input type="submit" value="Зарегистрироваться">
    </form>
</main>