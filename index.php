<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <main>
       <h1>Мой кабинет</h1>
       <div class="content-main">
            <aside>
                <div class="logo-profile">
                    <div class="logo-container">
                        <img src="Icon.jpg">
                    </div>
                    <div class="data-name">
                        <ul>
                            <li>Михаил Мингалёв</li>
                            <li>Покупатель</li>
                        </ul>
                    </div>
                </div>
                <ul class="nav-side">
                    <li class="border-top border-left">Мой профиль</li>
                    <li class="border-top">Statut Club</li>
                    <li class="border-top">Заказы</li>
                    <li class="border-top">Избранные товары</li>
                    <li class="border-top">Отзывы о товарах</li>
                    <li class="border-top">Выход</li>
                </ul>
            </aside>
            <section class="profile-set">
                <h2>Мой профиль</h2>
                <ul class="nav-set">
                    <li><button>Личные данные</button></li>
                    <li>Адреса доставки</li>
                    <li>Пароль</li>
                </ul>
                
                <form class="formAccount size" action="send.php" method="post">
                    <label class="label-mail" for="mail">E-mail<span> *</span></label>
                    <label style="position: relative;">
                        <input class="email" type="email" name="mail" id="mail" value="mingalyovuxcheck@gmail.com">
                        <img src="Icon.svg" class="img-gal">
                    </label>
                    <div class="phone">
                        <div class="size-input">
                            <label class="tel" for="tel">Номер телефона<span> *</span></label>
                            <label style="position: relative;">
                                <input class="first-tel required" type="tel" name="tel" id="tel" value="+7 910 832 26 28">
                                <img src="Icon.svg" class="img-gal-1">
                            </label>    
                        </div>
                        <div class="size-input">
                            <label class="tel-add" for="tel-add">Дополнительный номер</label>
                            <input class="second-tel" type="tel" name="tel-add" id="tel-add">
                        </div>
                    </div>
                    <label class="surname" for="surname">Фамилия<span> *</span></label>
                    <label style="position:relative;">
                        <input class="required" type="text" name="surname" id="surname">
                        <img src="Icon.svg" class="img-gal" >
                    </label> 
                    <label class="name" for="name">Имя<span> *</span></label>
                    <label style="position:relative;">
                        <input class="required" type="text" name="name" id="name" value="Михаил">
                        <img src="Icon.svg" class="img-gal" >
                    </label>
                    <label class="fathername" for="fathername">Отчество</label>
                    <label style="position:relative;">
                        <input type="text" name="fathername" id="fathername" value="Михайлович">
                        <img src="Icon.svg" class="img-gal" >
                    </label>
                    <label class="date">Дата рождения</label>
                    <div class="date-of-birth">
                        <select class="date-select number">
                            <option value="23">23</option>
                        </select>
                        <select class="date-select month">
                            <option value="Сентября">Сентября</option>
                        </select>
                        <select class="date-select year">
                            <option value="1993">1993</option>
                        </select>
                    </div>
                    <div class="gender">
                        <label class="wm">Пол</label>
                        <div class="wm-button">
                            <input class="radio-1" id="rd1" name="gend" type="radio" checked>
                            <label class="label-rd" for="rd1">Мужской</label>
                            <input class="radio-2" id="rd2" name="gend" type="radio">
                            <label class="label-rd" for="rd2">Женский</label>
                        </div>
                    </div>
                    <button class="submit-form" type="submit">Сохранить изменения</button>
                </form>
            </section>
       </div>
   </main>
   <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>
   <script src="val.js"></script> 
</body>
</html>