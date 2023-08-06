<?php

    require('../app/init.php');

?><!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php require('partials/global/head.php'); ?>

<body>

    <!-- Header -->
    <?php require('partials/global/header.php'); ?>
   
    <main class="overflow-x-hidden">

        <!-- Hero Section -->
        <?php require('partials/home/hero.php'); ?>

        <!-- About Section -->
        <?php require('partials/home/about.php'); ?>

        <!-- Menu Section -->
        <?php require('partials/home/menu.php'); ?>

        <!-- Reservation Btn -->
        <?php require('partials/home/reservation-btn.php'); ?>

        <!-- Gallery Section -->
        <?php require('partials/home/gallery2.php'); ?>

    </main>
    
    <!-- Footer -->
    <?php require('partials/global/footer.php'); ?>

    <!-- Scripts -->
    <?php require('partials/global/scripts.php'); ?>
    
</body>
<!-- Icon -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- For the slider 1: CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });
</script>
</html>