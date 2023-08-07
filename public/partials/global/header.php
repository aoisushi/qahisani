<header class="bg-black text-white">
    <nav class="flex py-[28px] items-center justify-between w-[92%] mx-auto">
        <!-- Company Logo -->
        <a href="index.php"><img src="images/logo_white_red.svg" width="90" class="hover:opacity-60 transition-all duration-500"></a>

        <!-- menu -->
        <div class="flex overflow-hidden">  <!-- This flex is for contained the nav and the menu -->
            <div class="nav-links duration-500 absolute md:static bg-black min-h-[60vh] md:min-h-fit left-0 top-[-100%] w-full md:w-auto flex items-center px-5">
                <ul class="flex md:flex-row flex-col gap-6 md:items-center md:gap-[4vw]">
                    <!-- <li class="nav-item"><a href="#" class="nav-link">Home</a></li> -->
                    <li><a class="text-mdhamtext font-nunito p-2 hover:text-[#FFE4E0] hover-stroke" href="index.php#about">About</a></li>
                    <li><a class="text-mdhamtext font-nunito p-2 hover:text-[#FFE4E0] hover-stroke" href="index.php#menu">Menu</a></li>
                    <li><a class="text-mdhamtext font-nunito p-2 hover:text-[#FFE4E0] hover-stroke" href="index.php#gallery">Gallery</a></li>
                    <li><a class="text-mdhamtext font-nunito p-2 hover:text-[#FFE4E0] hover-stroke" href="index.php#contact">Contact</a></li>
                    <li><a href="reservations.php"><button class="font-nunito bg-[#D63241] text-mdhamtext text-white px-[80px] py-[15px] mx-2 md:px-[20px] md:py-[10px] hover:bg-[#FFE4E0] hover:text-black ease-in-out duration-300">Reservation</button></a></li>
                </ul>
            </div>
            <!-- hamburger icon -->
            <div>
                <ion-icon onclick="openMenu(this)" class="text-white cursor-pointer md:hidden" size="large" name="menu"></ion-icon>
            </div>
        </div>
    </nav>
    <script>
        const navLinks = document.querySelector('.nav-links')
        function openMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</header>