<div class="col-span-4 lg:col-start-8 lg:col-span-5 mb-10">
    <form action="<?php echo get_public_url('/reservations.php'); ?>" method="POST">
        <div class="flex flex-col lg:flex-row gap-0 lg:gap-4 justify-center items-center">
            <div class="w-full mb-4 lg:mt-5">
                <label for="first_name"></label>
                <input class="p w-full py-5 px-4 outline-none placeholder:text-gray" id="first_name" type="text" name="first_name" placeholder="First Name" required>
            </div>
            <div class="w-full mb-4 lg:mt-5">
                <label for="last_name"></label>
                <input class="p w-full py-5 px-4 outline-none placeholder:text-gray" id="last_name" type="text" name="last_name" placeholder="Last Name" required>
            </div>
        </div>
        <div class="w-full mb-4">
            <label for="phone_number"></label>
            <input class="p w-full py-5 px-4 outline-none placeholder:text-gray" id="phone_number" type="tel" name="phone_number" placeholder="Enter Phone Number" required>
        </div>
        <div class="w-full mb-4">
            <label for="email"></label>
            <input class="p w-full py-5 px-4 outline-none placeholder:text-gray" id="email" type="email" name="email" placeholder="Enter Email Address" required>
        </div>
        <div class="w-full mb-4">
            <label for="party_size"></label>
            <select class="p w-full py-5 px-4 outline-none placeholder:text-gray appearance-none" name="party_size" id="party_size" required>
                <option value="">Select Party Size</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="w-full mb-4">
            <label for="reservation_date"></label>
            <input class="p w-full py-5 px-4 outline-none placeholder:text-gray" id="reservation_date" type="date" min="<?= date('Y-m-d'); ?>" max="2023-12-31" name="reservation_date" placeholder="Select Date" required>
        </div>
        <div class="w-full mb-4">
            <label for="reservation_time"></label>
            <input class="p w-full py-5 px-4 outline-none placeholder:text-gray" id="reservation_time" type="time" min="15:00" max="21:00" name="reservation_time" placeholder="Select Time" required>
        </div>
        <div class="w-full mb-4">
            <label for="special_request"></label>
            <textarea class="p w-full py-5 px-4 outline-none placeholder:text-gray" id="special_request" type="textarea" name="special_request" maxlength="300" placeholder="Special Request (Optional)"></textarea>
        </div>
        <button class="p w-full py-6 px-4 bg-red mb-4 text-white font-bold hover:opacity-60 transition transition-all duration-500" type="submit">RESERVE A TABLE</button>
    </form>
    </div>