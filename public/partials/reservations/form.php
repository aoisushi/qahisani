<div>
    <form action="<?php echo get_public_url('/reservations.php'); ?>" method="POST">
        <div>
            <label for="first_name"></label>
            <input id="first_name" type="text" name="first_name" placeholder="First Name" required>
        </div>
        <div>
            <label for="last_name"></label>
            <input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
        </div>
        <div>
            <label for="phone_number"></label>
            <input id="phone_number" type="tel" name="phone_number" placeholder="Enter Phone Number" required>
        </div>
        <div>
            <label for="email"></label>
            <input id="email" type="email" name="email" placeholder="Enter Email Address" required>
        </div>
        <div>
            <label for="party_size"></label>
            <select name="party_size" id="party_size" required>
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
            <!-- <input id="party_size" type="number" name="party_size" min="1" max="15" step="1" value="1" placeholder="Select Party Size" required> -->
        </div>
        <div>
            <label for="reservation_date"></label>
            <input id="reservation_date" type="date" min="<?= date('Y-m-d'); ?>" max="2023-12-31" name="reservation_date" placeholder="Select Date" required>
        </div>
        <div>
            <label for="reservation_time"></label>
            <input id="reservation_time" type="time" min="15:00" max="21:00" name="reservation_time" placeholder="Select Time" required>
        </div>
        <div>
            <label for="special_request"></label>
            <input id="special_request" type="textarea" name="special_request" maxlength="300" placeholder="Special Request (Optional)">
        </div>
        <button type="submit">RESERVE A TABLE</button>
    </form>
    </div>