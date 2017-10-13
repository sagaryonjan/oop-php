<div class="col-md-3 top-nav">
    <div class="logo">
        <a href="index.php"><h1>Blogger</h1></a>
    </div>
    <div class="top-menu">
        <span class="menu"> </span>

        <ul class="cl-effect-16">
            <?php

            $file = explode('/', $_SERVER['REQUEST_URI']);
            ?>

            <li><a  <?php echo  $file[1] != 'index.php'?'':"class='active'";  ?> href="index.php" data-hover="HOME">Home</a></li>
            <li><a <?php echo   $file[1] != 'about.php'?'':"class='active'";  ?>href="about.php" data-hover="About">About</a></li>
            <li><a <?php echo   $file[1] != 'services.php'?'':"class='active'";  ?>href="services.php" data-hover="Services">Services</a></li>
            <li><a <?php echo  $file[1] != 'gallery.php'?'':"class='active'";  ?>href="gallery.php" data-hover="Gallery">Gallery</a></li>
            <li><a <?php echo  $file[1] != 'contact.php'?'':"class='active'";  ?> href="contact.php" data-hover="CONTACT">Contact</a></li>
        </ul>

    </div>
</div>