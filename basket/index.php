<?php
    $cssFiles = [
        '/css/basket.css'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>


    <div class="wrapper">
        <header class= "header">
            <div class="logo"></div>
            <nav class="navigation">
                <a class="navigation__item"  href="#">Женщинам</a>
                <a class="navigation__item" href="#">Мужчинам</a>
                <a class="navigation__item" href="#">Детям</a>
                <a class="navigation__item" href="#">Новинки</a>
                <a class="navigation__item" href="#">О нас</a>
            </nav>
            <div class="user-info">
                <div class="user-info__pic"></div>
                <div class="user-info__text">
                    Привет, Алексей
                    (<span class="text_active">выйти</span>)
                </div>
            </div>
            <div class="basket">
                <div class="basket__pic"></div>
                <div class="basket__text">Корзина(5)</div>
            </div>
        </header>
        <main class="main">
            <h1 class="main-header">ВАША КОРЗИНА</h1>
            <h3 class="main-notification">Товары резервируются на ограниченное время</h3>
            <table class="shopping">
                <tr class="shopping__title">
                    <th>ФОТО</th>
                    <th>НАИМЕНОВАНИЕ</th>
                    <th>РАЗМЕР</th>
                    <th>КОЛИЧЕСТВО</th>
                    <th>СТОИМОСТЬ</th>
                    <th>УДАЛИТЬ</th>
                </tr>
                <tr class="shopping__coat">
                    <td><div class="shopping__coat__pic"></div> </td>
                    <td><span class="text-bold">КУРТКА СИНЯЯ</span><br>
                    <span class="art">арт.123412</span></td>
                    <td>39</td>
                    <td>
                        <div class="change">
                            <div class="change__left">1</div>
                            <div class="change__right">
                                <a href="#" class="change__item"></a>
                                <a href="#" class="change__item"></a>
                            </div>
                        </div>
                    </td>
                    <td>3800 руб.</td>
                    <td class="close"></td>
                </tr>
                <tr class="shopping__boots">
                    <td><div class="shopping__boots__pic"></div> </td>
                    <td><span class="text-bold">КЕДЫ СЕРЫЕ</span><br>
                    <span class="art">арт.2348329</span></td>
                    <td>M</td>
                    <td>
                        <div class="change">
                            <div class="change__left">1</div>
                            <div class="change__right">
                                <a href="#" class="change__item"></a>
                                <a href="#" class="change__item"></a>
                            </div>
                        </div>
                    </td>
                    <td>5200 руб.</td>
                    <td class="close"></td>
                </tr>
                <tr class="shopping__jeans">
                    <td><div class="shopping__jeans__pic"></div> </td>
                    <td><span class="text-bold">ДЖИНСЫ ГОЛУБЫЕ</span><br>
                    <span class="art">арт.3423355</span></td>
                    <td>S</td>
                    <td>
                        <div class="change">
                            <div class="change__left">2</div>
                            <div class="change__right">
                                <a href="#" class="change__item"></a>
                                <a href="#" class="change__item"></a>
                            </div>
                        </div>
                    </td>
                    <td>3500 руб.</td>
                    <td class="close"></td>
                </tr>
                <tr class="shopping__total">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Итого:</td>
                    <td class="text_active">12500 руб.</td>
                    <td></td>
                </tr>
            </table>
            <div class="divide">
                <div class="divide__el"></div>
            </div>
            <div class="delivery">
                <h2 class="main-title">АДРЕС ДОСТАВКИ</h2>
                <h3 class="main-notification">Все поля обязательны для заполнения</h3>
                <form method="GET" autocomplete="off" class="delivery-form">
                    <p>ВЫБЕРИТЕ ВАРИАНТ ДОСТАВКИ</p>
                    <select name="type" id="type">
                        <option value="Курьерская служба - 500 руб.">Курьерская служба - 500 руб.</option>
                        <option value="Самовывоз">Самовывоз - 0 руб.</option>
                    </select>
                    <div class="form-container">
                        <div class="left-side">
                            <p>ИМЯ</p>
                            <input type="text">
                        </div>
                        <div class="right-side">
                            <p>ФАМИЛИЯ</p>
                            <input type="text">
                        </div>
                    </div>
                    <p>АДРЕС</p>
                    <input type="text" name="adress">
                    <div class="form-container">
                        <div class="left-side">
                            <p>ГОРОД</p>
                            <input type="text" name="city">
                        </div>
                        <div class="right-side">
                            <p>ИНДЕКС</p>
                            <input type="text" name="index">
                        </div>
                    </div>
                    <div class="form-container">
                        <div class="left-side">
                            <p>ТЕЛЕФОН</p>
                            <input type="phone" name="phone">
                        </div>
                        <div class="right-side">
                            <p>E-MAIL</p>
                            <input type="email" name="e-mail">
                        </div>
                    </div>
                </form>
            </div>
            <div class="divide">
                <div class="divide__el"></div>
            </div>
            <div class="payment">
                <h2 class="main-title">ВАРИАНТЫ ОПЛАТЫ</h2>
                <h3 class="main-notification">Все поля обязательны для заполнения</h3>
                <div class="payment__box">
                    <p>Стоимость: 12500 руб.</p>
                    <p>Доставка: 500 руб.</p>
                    <p class="text_active">Итого: 13000 руб.</p>
                    <p>ВЫБЕРИТЕ СПОСОБ ОПЛАТЫ</p>
                    <select name="payment_type">
                        <option value="card">Банковская карта</option>
                        <option value="paypal">Paypal</option>
                    </select><br>
                    <input type="submit" value="ЗАКАЗАТЬ">
                </div>
            </div>
        </main>
    <!-- <script src="/js/catalog.js"></script> -->




<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?> 
