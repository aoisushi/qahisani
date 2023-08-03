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
   
    <main class="bg-gradient-to-tl from-black from-40% to-[#505050] lg:from-[#0A0F12] lg:from-60% lg:to-[#505050] relative">
        <div class="absolute top-1/2 right-0 transform -translate-y-1/2 z-0 collapse lg:visible">
            <img src="images/sushi-chopstick.png" alt="Chopsticks holding salmon maki sushi.">
        </div>
        <div class="max-w-screen-2xl mx-auto px-5 md:px-16">
            <div class="grid grid-cols-4 lg:grid-cols-12 pt-10 lg:py-56">
                <div class="col-span-4 lg:col-span-6 z-10">
                    <div class="my-10 lg:my-0">
                        <h1 class="h2 text-white mb-10 lg:mb-8 lg:mt-5">Reservation Confirmed</h1>
                        <p class="p text-white mb-10 lg:mb-8">Thank you for reserving a table with Hisani. Your reservation has been sent to you by text and email.</p>
                        <p class="h3 text-white italic mb-10 lg:mb-8">We will be looking forward to hosting you.</p>
                    </div>
                    <div class="py-14 lg:pt-6 mb-10 lg:mb-0">

                        <!-- Reservation Details -->
                        <div class="bg-white px-4 py-6 lg:p-6 mb-4">
                            <?php while($reservation = $reservations->fetch_assoc()):
                                require(get_path('public/partials/reservations/card.php'));
                            endwhile; ?>
                        </div>

                        <!-- Go back home btn -->
                        <a href="index.php" class="p bg-white text-black uppercase flex justify-center items-center gap-2 font-bold hover:opacity-60 transition transition-all duration-500" title="Return to homepage">
                            <img src="images/home-icon.svg" alt="Home icon">
                            <p class="py-6" href="">Go Back Home</p>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <?php require('partials/global/footer.php'); ?>

    <!-- Scripts -->
    <?php require('partials/global/scripts.php'); ?>
    
</body>
</html>