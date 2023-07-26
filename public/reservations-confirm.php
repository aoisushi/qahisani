<?php

    require('../app/init.php');

    $reservations = Reservation::display_reso();

?><!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php require('partials/global/head.php'); ?>

<body>
    
    <!-- Header -->
    <?php require('partials/global/header.php'); ?>
   
    <main>

        <!-- Reservation Details -->
        <div>
            <?php while($reservation = $reservations->fetch_assoc()):
                require(get_path('public/partials/reservations/card.php'));
            endwhile; ?>
        </div>

    </main>
    
    <!-- Footer -->
    <?php require('partials/global/footer.php'); ?>

    <!-- Scripts -->
    <?php require('partials/global/scripts.php'); ?>
    
</body>
</html>