</main> 
<section class="pre-footer">
    <div class="container">
        <aside class="footer-part">
            <ul>
                <li><h4>Základní škola pro první stupeň</h4></li>
                <li>Strossmayerovo náměstí 4,</li>
                <li>170 00  Praha 7</li>
                
                <li><h4>Vize školy</h4></li>
                <li>Jsme školou úspěšného života. Společně hledáme správný směr. Nacházíme cestu pro celoživotní vzdělávání každého žáka. Stavíme ji na přátelských vztazích mezi dětmi, rodiči a učiteli.</li>

                <li><h4>Právní forma</h4></li>
                <li><p>Příspěvková organizace</p></li>
            </ul>
            
            <ul>
                <li><h4>Ředitelka</h4></li>
                <li>PhDr. Mgr. Martina Thumsová</li>
                
                <li><h4>Fakturační údaje</h4></li>
                <li>IČO: 61388530</li>
                <li>DIČ: CZ61388530</li>
            </ul>

            <ul id="small-nav">
               <li><h4>Rychlá navigace</h4></li>
            <?php 
            foreach ($menu as $item) {
                $item_name = basename($item, '.php');
                if ($item_name == 'index') {
                    $item_name = 'Úvod';
                } elseif ($item_name == 'about') {
                    $item_name = 'o nás';
                } elseif ($item_name == 'contact') {
                    $item_name = 'kontakty';
                } elseif ($item_name == 'documents') {
                    $item_name = 'dokumenty';
                }
                echo '<li><a href="'.$item.'">'.ucfirst($item_name).'</a></li>';
            } 
            ?>
            </ul>

        </aside>

        <div class="inspirace">
            <p>Inspirováno: <a href="https://www.zsmendelova.cz/" target="_blank">https://www.zsmendelova.cz/</a></p>
        </div>

    </div>
</section>
<footer>
    <div class="container">
        <p id="copy">Všechna práva vyhrazena. Copyright &copy; 2021</p>
    </div>
</footer>

</body>
</html>