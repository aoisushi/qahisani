<article>
    <div>
        <h2><?php echo h($reservation['first_name'] . ' ' . $reservation['last_name']); ?></h2>
        <p><?php echo h($reservation['reservation_time']); ?></p>
        <p><?php echo h($reservation['reservation_date']); ?></p>
        <p><?php echo h($reservation['party_size']); ?> people</p>
        <p><?php echo h($reservation['special_request']); ?></p>
    </div>
</article>