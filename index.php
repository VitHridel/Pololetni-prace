
    <?php include 'assets/data.php';
    include 'partials/header.php'; ?>

    <div class="container home">
        
        <?php include 'partials/index_menu.php'; ?>

        <section>
           
           <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page']; 
                include 'podstranky/'.$page.'.php';
            } else {
                include 'podstranky/askola.php';
            }
            ?>

        </section>
    </div>

    <?php include 'partials/footer.php'; ?>