<?php

    require('../app/init.php');

?><!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php require('partials/global/head.php'); ?>

<body>

    <!-- Header -->
    <?php require('partials/global/header.php'); ?>
   
    <main>

        <!-- Hero Section -->
        <?php require('partials/home/hero.php'); ?>

        <!-- About Section -->
        <?php require('partials/home/about.php'); ?>

        <!-- Menu Section -->
        <?php require('partials/home/menu.php'); ?>

        <!-- Reservation Btn -->
        <?php require('partials/home/reservation-btn.php'); ?>

        <!-- Gallery Section -->
        <?php require('partials/home/gallery.php'); ?>

    </main>
    
    <!-- Footer -->
    <?php require('partials/global/footer.php'); ?>

    <!-- Scripts -->
    <?php require('partials/global/scripts.php'); ?>
    
</body>
</html>