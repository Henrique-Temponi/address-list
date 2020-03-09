<?php session_start(); ?>
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
                    Telelphone:
                    <br>
                    <input type="text" name="tele">
                </label>
                <input type="submit" value="Send">
            </fieldset>
        </form>

        <?php

            $person = array();

            if (isset($_GET['name'])) {
                $person['name'] = $_GET['name'];
            }

            if (isset($_GET['tele'])) {
                $person['tele'] = $_GET['tele'];
            }

            $list_address = array();
            
            $_SESSION['list_address'][] = $person;

            $list_address = $_SESSION['list_address'];

        ?>
        <h2>List of address</h2>
        <hr>
        <table>
            <thead>
                <th>Name</th>
                <th>Telelphone</th>
            </thead>
            <?php foreach ($list_address as $address) : ?>
                <tr>
                    <td> <?php echo $address['name']; ?></td>
                    <td> <?php echo $address['tele']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>