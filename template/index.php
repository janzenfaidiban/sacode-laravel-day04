<?php include('config/settings.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$siteTitle?></title>
    <link rel="stylesheet" href="./css/style.css">

    <link rel="icon" type="image/x-icon" href="<?=$siteFavicon?>">

</head>
<body>

    <!-- header start -->
    <?php include('views/partials/header.php'); ?>
    <!-- header end -->
    
    <!-- nav start -->
    <?php include('views/partials/nav.php'); ?>
    <!-- nav end -->

    <!-- main start -->
    <?php 

        // home 
        if(isset($_GET['page']) && $_GET['page'] == 'home'){
            include('views/pages/home.php');
        } 

        // profile
        elseif(isset($_GET['page']) && $_GET['page'] == 'profile'){
            include('views/pages/profile.php');
        } 

        // gallery
        elseif(isset($_GET['page']) && $_GET['page'] == 'gallery'){
            include('views/pages/gallery.php');
        } 

        // contact
        elseif(isset($_GET['page']) && $_GET['page'] == 'contact'){
            include('views/pages/contact.php');
        } 

        // page not found        
        else {
            echo '
            <section class="p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>Error 404</h3>
                            <p>page not found!</p>
                        </div>
                    </div>
                </div>
            </section>
            ';
        }

    ?>
    <!-- main end -->

    <!-- footer start -->
    <?php include('views/partials/footer.php'); ?>
    <!-- footer end -->
</body>
</html>