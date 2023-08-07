<header class="bg-black text-white fixed top-0 left-0 w-full z-50">
    <nav class="flex py-[28px] items-center justify-between w-[92%] mx-auto">
        <!-- Company Logo -->
        <a href="index.php"><img src="images/logo_white_red.svg" width="90" class="hover:opacity-60 transition-all duration-500"></a>

        <!-- menu -->
        <div class="flex overflow-hidden">  <!-- This flex is for contained the nav and the menu -->
            <div class="nav-links duration-500 absolute md:static bg-black min-h-[60vh] md:min-h-fit left-0 top-[-600%] w-full md:w-auto text-center flex justify-center items-center px-5">
                <ul class="flex w-full md:flex-row flex-col gap-6 md:items-center md:gap-[4vw]">
                    <!-- <li class="nav-item"><a href="#" class="nav-link">Home</a></li> -->
                    <li><a class="text-mdhamtext font-nunito p-2 hover:text-[#FFE4E0] hover-stroke" href="index.php#about">About</a></li>
                    <li><a class="text-mdhamtext font-nunito p-2 hover:text-[#FFE4E0] hover-stroke" href="index.php#menu">Menu</a></li>
                    <li><a class="text-mdhamtext font-nunito p-2 hover:text-[#FFE4E0] hover-stroke" href="index.php#gallery">Gallery</a></li>
                    <li><a class="text-mdhamtext font-nunito p-2 hover:text-[#FFE4E0] hover-stroke" href="index.php#contact">Contact</a></li>
                    <li>
                        <div class="w-full">
                            <a class="text-mdhamtext font-nunito bg-[#D63241] text-white max-w-screen-md flex justify-center items-center mx-auto px-[80px] py-[15px] md:px-[20px] md:py-[10px] hover:bg-[#FFE4E0] hover:text-black ease-in-out duration-300" href="reservations.php">Reservation</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- hamburger icon -->
            <div>
                <ion-icon onclick="toggleMenu(this)" class="text-white cursor-pointer md:hidden" size="large" name="menu"></ion-icon>
            </div>
        </div>
    </nav>
    <script>
        const navLinks = document.querySelector('.nav-links');
        const menuIcon = document.querySelector('ion-icon');

        // Toggle menu
        function toggleMenu(icon) {
            navLinks.classList.toggle('top-[91%]');
            icon.name = icon.name === 'menu' ? 'close' : 'menu';
        }

        // Close menu
        function closeMenu() {
            navLinks.classList.remove('top-[91%]');
            menuIcon.name = 'menu'; // Change icon back to burger menu
        }

        // Call close menu function after clicking a link
        const links = navLinks.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    </script>
</header>