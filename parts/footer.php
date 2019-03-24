
<div class='wrapper'>
<footer class="footer">
        <div class="collection">
            <h2>Колекции</h2>
            <a href="#" class="collection__categori">Женщинам</a>
            <a href="#" class="collection__categori">Мужчинам</a>
            <a href="#" class="collection__categori">Детям</a>
            <a href="#" class="collection__categori">Новинки</a>
        </div>
        <div class="shop">
            <h2>Магазин</h2>
            <a href="" class="shop__categori">О нас</a>
            <a href="" class="shop__categori">Доставка</a>
            <a href="" class="shop__categori">Работай с нами</a>
            <a href="" class="shop__categori">Контакты</a>
        </div>
        <div class="social">
            <h2>Мы в социальных сетях</h2>
            <div class="social__text">Сайт разработан в inordic.ru<br>2018 Все права защищены</div>
            <div class="social__icon">
                <a href="" class="social__icon__pic twitter"></a>
                <a href="" class="social__icon__pic facebook"></a>
                <a href="" class="social__icon__pic insta"></a>
            </div>
        </div>
    </footer>
    
    </div>
    <?php foreach( $pageConfig['jsFiles'] as $file ): ?>
         <script src="<?=$file ?>"></script>
    <?php endforeach;?>
    
</body>
</html>