<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaCode</title>
    <link rel="stylesheet" href="./css/style.css">
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

        if(isset($_GET['page']) && $_GET['page'] == 'home'){
            include('views/pages/home.php');
        } 

        elseif(isset($_GET['page']) && $_GET['page'] == 'profile'){
            include('views/pages/profile.php');
        } 
        
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