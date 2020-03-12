<html>
    <head>
        <title>Address List</title>
    </head>
    <body>
        <h1>Address List</h1>
        <form>
            <fieldset>
                <legend>New address</legend>
                <label>
                    Name:
                    <br>
                    <input type="text" name="name">
                </label>
                <br>
                <label>
                    E-mail:
                    <br>
                    <input type="text" name="email">
                </label>
                <br>
                <label>
                    Telephone:
                    <br>
                    <input type="text" name="tele">
                </label>
                <br>
                <label>
                    Bookmarked:
                    <br>
                    <input type="checkbox" name="bookmarked" value="1">
                </label>
                <br>
                <input type="submit" value="Send">
            </fieldset>
        </form>

        <h2>List of address</h2>
        <hr>
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
                    <td> <?php echo $address['email']; ?>
                    <td> <?php echo $address['tele']; ?>
                    <td> <?php echo $address['bookmarked']; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>