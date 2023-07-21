<?php

    require('../app/init.php');

?><!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php require('partials/global/head.php'); ?>

<body>
    <div class="bg-wrapper">
    
    <!-- Header -->
    <?php require('partials/global/header.php'); ?>
   
    <main>

        <!-- Main Hero Section -->
        <?php require('partials/home/hero.php'); ?>

    </div>  <!-- end of the background image -->

        <!-- Opening hours/reservations -->
        <?php require('partials/home/reservations.php'); ?>

        <!-- About Hisani Section -->
        <?php require('partials/home/about.php'); ?>

        <!-- Menu section -->
        <?php require('partials/home/menu.php'); ?>

        <!-- Contact Section -->
        <?php require('partials/home/contact.php'); ?>
        
    </main>
    
    <!-- Footer -->
    <?php require('partials/global/footer.php'); ?>

    <!-- Scripts -->
    <?php require('partials/global/scripts.php'); ?>
    
</body>
</html>