<nav class="index_menu">
    <ul>
        <?php            
            $pages = glob('podstranky/*.php');
            foreach ($pages as $page) {
                $page = basename($page, '.php');
                if ($page == 'druzina') {
                    $page_name = 'družina';
                    echo '<li id="'.$page.'"><a href="index.php?page='.$page.'"><span class="menu-text">'.ucfirst($page_name).'</span><i class="fa fa-igloo"></i></a></li>';
                } elseif ($page == 'askola') {
                    $page_name = 'Škola';
                    echo '<li id="'.$page.'"><a href="index.php?page='.$page.'"><span class="menu-text">'.ucfirst($page_name).'</span><i class="fas fa-school"></i></a></li>';
                } elseif ($page == 'jidelna') {
                    $page_name = 'jídelna';
                    echo '<li id="'.$page.'"><a href="index.php?page='.$page.'"><span class="menu-text">'.ucfirst($page_name).'</span><i class="fas fa-utensils"></i></a></li>';
                } elseif ($page == 'krouzky') {
                    $page_name = 'kroužky';
                    echo '<li id="'.$page.'"><a href="index.php?page='.$page.'"><span class="menu-text">'.ucfirst($page_name).'</span><i class="fas fa-bowling-ball"></i></a></li>';
                } 
            }
        ?>
    </ul>
</nav>