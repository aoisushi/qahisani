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
   
    <main class="bg-gradient-to-tl from-black from-40% to-[#505050] reservations">

        <div class="max-w-screen-2xl mx-auto px-5 md:px-16">
            <div class="grid grid-cols-4 lg:grid-cols-12 pt-10 lg:py-56">
                <div class="col-span-4 lg:col-span-6">
                    <h1 class="h2 text-white mb-10 md:pt-20 lg:pt-0 lg:mt-0">Reservation</h1>
                    <p class="p text-white mb-10">Reserving your table at Hisani is as effortless as indulging in our delectable dishes. To ensure your preferred dining time, we encourage you to make a reservation in advance.</p>
                    <p class="p text-white mb-10">Whether you're planning an intimate dinner for two or arranging a gathering of friends and family, our team is dedicated to accommodating your needs and preferences. </p>
                    <p class="h3 text-white italic mb-10">Experience the artistry of our master chefs, the elegant ambiance, and impeccable service by reserving your table now. </p>
                </div>
                <!-- Reservation Form -->
                <?php require('partials/reservations/form.php'); ?>
            </div>
        </div>

    </main>
    
    <!-- Footer -->
    <?php require('partials/global/footer.php'); ?>

    <!-- Scripts -->
    <?php require('partials/global/scripts.php'); ?>
    
</body>
</html>