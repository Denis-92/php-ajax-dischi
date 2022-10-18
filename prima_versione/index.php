<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Dischi in PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<?php include __DIR__ . "/database.php"; ?>

<div id="filter-input">

    <form action="./index.php" method="get">
        <input type="text" name="show_only" value="<?= $show_only ?>" />
        <input type="submit" value="Filter">
    </form>

</div>

<div class="container" id="songs">

    <?php

        foreach ( $data as $song ) {
            echo "<div>";
            include __DIR__ . "/component_song.php";
            echo "</div>";
        }

    ?>

</div>

</body>
</html>