<html>
    <head>
        <title>Address List</title>
    </head>
    <body>
        <h1>Address List</h1>
        
        <?php include("form.php")?>

        <?php if($show_table) : ?>
            <h2>List of address</h2>
            <hr>
            <?php include("table.php")?>
        <?php endif;?>
    </body>
</html>