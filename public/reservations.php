<?php

    require('../app/init.php');

    // Check if data has been submitted to a page
    if(is_post_request()) {
        
        // Create a new reservation object from the form data
        $reservation = new Reservation($_POST);

        // Call the create method 
        $reservation->create();

        // Redirect to the confirmation page
        redirect("reservations-confirm.php");
    }

?><!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php require('partials/global/head.php'); ?>

<body>
    
    <!-- Header -->
    <?php require('partials/global/header.php'); ?>
   
    <main>

        <!-- Reservation Form -->
        <?php require('partials/reservations/form.php'); ?>

    </main>
    
    <!-- Footer -->
    <?php require('partials/global/footer.php'); ?>

    <!-- Scripts -->
    <?php require('partials/global/scripts.php'); ?>
    
</body>
</html>