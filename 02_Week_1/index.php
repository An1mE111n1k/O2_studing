<?php
$mes = '';

mail('yoremail@mail.com', "subject", "msg");
if(isset($_POST['set'])){
    if(preg_match("^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$^",$_POST['phone']))
    {
        if(mail($_POST['email'], 'Ваши данные!', "ФИО: {$_POST['surname']} {$_POST['name']} {$_POST['fathername']}\r\n 
        phone: {$_POST['phone']} \r\n
        second phone: {$_POST['addPhone']} \r\n
        : {$_POST['dayOfBirth']}.{$_POST['monthOfBirth']}.{$_POST['yearOfBirth']} \r\n
        Ваш пол: {$_POST['sex']}"))
            $mes="Вы успешно зарегистрировались! Проверьте свою почту!";
        else
            $mes="Возникла ошибка отправки, попробуйте заново!";
    }
    else
        $mes = "Ошибка телефона!";
}
?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/fonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Test-1</title>
</head>
<body>

    <div class="profile">
        <p class="profile_title">Мой профиль</p>
    </div>
    <div class="slide">
        <div class="slides">
            <p class="slide_text">Личная информация</p>
        </div>
        <div class="slides">
            <p class="slide_text">Адреса доставки</p>
        </div>
        <div class="slides">
            <p class="slide_text">Пароль</p>  
        </div>
    </div>
    <form class="info" action="#" method="post">
    <input type="hidden" name="set" value="true">
        <p class="form_text must_be" >E-mail</p>
        <input class="client_info" type="text" name="E-mail" required>
        <div class="tel">
            <div class="tel_area">
                 <p class="form_text must_be" >Номер телефона</p>
                <input class="number" type="tel" name="phone" required>
            </div>
            <div class="tel_area">
                <p class="form_text">Дополнительный номер</p>
                <input class="number" type="tel" name="phone">
            </div>
        </div>
        <p class="form_text must_be">Фамилия</p>
        <input class="client_info" type="text" name="" required>

        <p class="form_text must_be">Имя</p>
        <input class="client_info" type="text" name="name" required>

        <p class="form_text">Отчество</p>
        <input class="client_info" type="text" name="fathername" >
        <div class="lastinfo">
            <div class="formRow tripleInputRow">
                <div>
                    <label for="dayOfBirth" class="addInfo">Дата рождения</label>
                    <select id="dayOfBirth" name="dayOfBirth" class="pickDate"></select>
                </div>
                <div>
                    <select id="monthOfBirth" name="monthOfBirth" class="pickDate"></select>
                </div>
                <div>
                    <select id="yearOfBirth" name="yearOfBirth" class="pickDate"></select>
                </div>
        </div>

        <div class="formRow formRowSex ">
            <div>
                <p class="addInfo">Пол</p>
                <input type="radio" id="sexM" value="male" name="sex" checked>
                <label for="sexM" class="radioLabel">Мужской</label>
            </div>
            <div>
                <input type="radio" id="sexF" value="female" name="sex">
                <label for="sexF" class="radioLabel">Женский</label>
            </div>
        </div>
    </div>
    </form>
 <input class="save_info" type="submit"><p class="btn_text">Сохранить изменения</p>
 <script src="script.js"></script>
</body>
</html>