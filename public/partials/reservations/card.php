<article>
    <div class="text-black">
        <div class="flex justify-between items-center">
            <h3 class="h3"><?php echo h($reservation['first_name'] . ' ' . $reservation['last_name']); ?></h2>
            <div class="w-9 h-auto">
                <img src="images/check-icon.svg" alt="Checkmark icon">
            </div>
        </div>
        <hr class="h-px my-8 bg-black border-0">
        <div class="flex flex-wrap gap-x-2 justify-between items-center mb-8">
            <p class="p"><?php echo h(date('g:ia', strtotime($reservation['reservation_time']))); ?></p>
            <p class="p">|</p>
            <p class="p"><?php echo h(date('l, M j, Y', strtotime($reservation['reservation_date']))); ?></p>
            <p class="p">|</p>
            <p class="p"><?php echo h($reservation['party_size']); ?> people</p>
        </div>
        <p class="p italic"><?php echo h('"' . $reservation['special_request'] . '"'); ?></p>
    </div>
</article>