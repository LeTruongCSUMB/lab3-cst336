<!DOCTYPE html>

<?php
    include "inc/functions.php";
?>


<html>
    <head>
        <meta charset="utf-8"/>
        <title>Silverjack</title>
    </head>
    <body>
            <?php
                setupCards();
                seatPlayers();
                play();
                score();
            ?>
    </body>
</html>