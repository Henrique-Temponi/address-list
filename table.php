<table>
    <thead>
        <th>Name</th>
        <th>E-mail</th>
        <th>Tele</th>
        <th>Bookmarked</th>
    </thead>
    <?php foreach ($list_address as $address) : ?>
        <tr>
            <td> <?php echo $address['name']; ?></td>
            <td> <?php echo $address['email']; ?></td>
            <td> <?php echo $address['tele']; ?></td>
            <td> <?php echo $address['bookmarked']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>