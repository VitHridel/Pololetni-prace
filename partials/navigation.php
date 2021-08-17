
<nav class="navigation">  
    <ul>
        <?php    
        include 'functions.php';

        $menu = glob('*.php');
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
            echo '<li><a '.item_selected($item).' href="'.$item.'">'.ucfirst($item_name).'</a></li>';
        }

        ?>
    </ul>
</nav>