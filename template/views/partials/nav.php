<nav class="bg-primary p-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="?page=home" class="btn <?php if(isset($_GET['page']) && $_GET['page'] == 'home') { echo 'btn-dark'; } else { echo 'btn-outline-dark'; } ?>">Home</a>
                <a href="?page=profile" class="btn <?php if(isset($_GET['page']) && $_GET['page'] == 'profile') { echo 'btn-dark'; } else { echo 'btn-outline-dark'; } ?>">Profile</a>
                <a href="?page=gallery" class="btn <?php if(isset($_GET['page']) && $_GET['page'] == 'gallery') { echo 'btn-dark'; } else { echo 'btn-outline-dark'; } ?>">Gallery</a>
                <a href="?page=contact" class="btn <?php if(isset($_GET['page']) && $_GET['page'] == 'contact') { echo 'btn-dark'; } else { echo 'btn-outline-dark'; } ?>">Contact</a>
            </div>
        </div>
    </div>
</nav>