<?php include 'partials/header.php'; ?>
<?php include 'assets/data.php'; ?>
<div class="container contact">

    <h2>Kontakty</h2>
    <p><strong>Adresa: </strong>Strossmayerovo náměstí 4, 170 00 Praha 7</p>

    <p><strong>IČO: </strong>61388530<br>
        <strong>DIČ: </strong>CZ61388530<br>
        <strong>ID schránky: </strong>4pu22fh
    </p>
    
    <p><strong>Kancelář školy: </strong><?php echo '<a href="tel:+'.$contact_phone.'">+'.number_format($contact_phone, 0, " ", " ").'</a>'?><br>
        <strong>Email: </strong><?php echo '<a href="mailto:'.$contact_email.'">'.$contact_email.'</a>' ?><br>
        <strong>Družina: </strong><?php echo '<a href="tel:+'.$druzina_phone.'">+'.number_format($druzina_phone, 0, " ", " ").'</a>' ?><br>
        <strong>Jídelna: </strong><?php echo '<a href="tel:+'.$jidelna_phone.'">+'.number_format($jidelna_phone, 0, " ", " ").'</a>' ?>
    </p>    

    <h4>Úřední hodiny:</h4>
    <p>pondělí - pátek 6:30 - 18:30</p>
    <p>Během hlavních prázdnin v červenci a sprnu jsou úřední hodiny pondělí až pátek v 8:00 – 15:00</p>
    
    <p><strong>Právní forma: </strong>Příspěvková organizace<br>
        <strong>Zřizovatel: </strong><a href="http://www.praha11.cz/">MČ Praha 11</a>
    </p>

    <div class="persons-form-holder">

        <div class="persons bus">
            <?php 
                    foreach ($contacts as $person) {
                        echo '<ul class="udaje">';
                        echo '<li><h3>'.$person['who'].'</h3></li>';
                        echo '<li><h4>'.$person['name'].'</h4></li>';
                        echo '<li>Tel.: '.number_format($person['tel'], 0, ' ', ' ').'</li>';
                        echo '<li>Mobil: '.number_format($person['mob'], 0, ' ', ' ').'</li>';
                        echo '</ul>';
                    }                        
            ?>
            
            <ul class="spoj">
                <li><h4>Autobusové spojení</h4></li>
                <li><p>
                    Stanice metra: C Háje<br>
                    Zastávky: Horčičkova, Poliklinika Háje <br>
                    Linky: 125, 136, 154, 165, 170, 183, 203, 213, 226, 227, 240, 381,382, 383, 387, 203
                </p></li>
            </ul>
        </div>

        <form action="#" method="get">
            <h4>Pokud máte dotaz neváhejte vyplnit náš kontaktní formulář</h4>
            <input type="email" placeholder="@" required>
            <textarea rows="10" placeholder="Poznámka..." required></textarea>
            <button>Odeslat</button>
        </form>

    </div>

</div>
<?php include 'partials/footer.php'; ?>
    