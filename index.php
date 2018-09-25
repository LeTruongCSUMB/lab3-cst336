<!DOCTYPE html>

<?php include "inc/functions.php"; ?>


<html>
    <head>
        <meta charset="utf-8"/>
        <link href="css/styles.css"  rel="stylesheet" />
        <title>Silverjack</title>
    </head>
    <body>
           
            <?php
                $starttime = microtime(true);
                setupCards();
                seatPlayers();
                play();
                score();
                
            ?>
    </body>
</html>