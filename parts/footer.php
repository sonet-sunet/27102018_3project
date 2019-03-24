    <footer class="footer wrapper">
        <div class="footer-item ">
            <h4>Коллекции</h4>
            <a href="#">Женщинам (1725)</a>
            <a href="#">Мужчинам (635)</a>
            <a href="#">Детям (2514)</a>
            <a href="#">Новинки (76)</a>
        </div>
        <div class="footer-break"></div>
        <div class="footer-item  footer-item_center">
            <h4>Магазин</h4>
            <a href="#">О нас</a>
            <a href="#">Доставка</a>
            <a href="#">Работай с нами</a>
            <a href="#">Контакты</a>
        </div>
        <div class="footer-break"></div>
        <div class="footer-item ">
            <h4>Мы в социальных сетях</h4>
            <span>Сайт разработан в inordic.ru</span>
            <span>2018 © Все права защищены</span>
            <div class="footer-item__socials">
                <a id="twitter" href="#"></a>
                <a id="facebook" href="#"></a>
                <a id="instagram" href="#"></a>
            </div>
        </div>
    </footer>
    <?php foreach( $pageConfig['jsFiles'] as $file): ?>
        <script src="<?=$file?>"></script> 
    <?php endforeach; ?>
    
</body>
</html>