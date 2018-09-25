<?php
    $players = array();
    $players[] = array();
    $cards = array();
    $cards[] = array();
    
    function setupCards() {
                global $cards;
                for($j = 1; $j <= 52; $j++) {
                    
                    if($j < 14) {
                        $cards[$j]["suit"] = "clubs";
                        $cards[$j]["value"] = $j;
                    }
                    else if($j < 27) {
                        $cards[$j]["suit"] = "diamonds";
                        $cards[$j]["value"] = $j-13;
                    }
                    else if($j < 40) {
                        $cards[$j]["suit"] = "hearts";
                        $cards[$j]["value"] = $j-26;
                    }
                    else {
                        $cards[$j]["suit"] = "spades";
                        $cards[$j]["value"] = $j-39;
                    }
                        
                }
                
                unset($cards[0]);
                $cards = array_values($cards);
                shuffle($cards);
        
    
    }
    
    ///////////////////////////////////////////// seatPlayers()
    function seatPlayers() {
        global $players;
        
        $playerNames = array("Reginald", "Garfield", "Tammy", "Judge Kattis");\
        shuffle($playerNames);
        // Player are randomly seated
        for($i = 0; $i < 4; $i++) {
            $players[$i]["name"] = $playerNames[$i];
            $players[$i]["score"] = 0;
        }
        return true;
    }
    
    ///////////////////////////////////////////// Play
    function play () {
        global $cards, $players;
        echo "<div class='main'>";
        echo "<header>Ultimate Cat Silverjack</header>";
        for ($i = 0; $i < 4; $i++){
            echo "<div class='player'>";
            echo '<img class=image src= "img/' . $players[$i]["name"] . ".jpg" . '" width=100px height=100px />';
            echo "<span class='name'>". $players[$i]['name'] . "</span>";
            echo "</div>";
            while($players[$i]["score"] < 38) {
                
                echo '<img class="card" src= "cards/' . $cards[0]['suit'] . "/" . $cards[0]["value"] . ".png" . '"/>';
                $players[$i]["score"] += $cards[0]["value"];
                
                unset($cards[0]);
                $cards = array_values($cards);
            }
            echo "<div class='score'> ".$players[$i]["score"]. " Pts.</div>";
            echo "<br>";
           
          
            echo "<br>";
        }

    }
    
    ///////////////////////////////////////////// Score
    function score() {
        global $cards, $players, $starttime;
        $winners = array();
        
        for($i = 42; $i >= 38; $i--) {
            for($j = 0; $j < 4; $j++)
                if($players[$j]["score"]==$i)
                    $winners[] = $j;
        
            if(count($winners) > 0)
                break;
        }

        for($i = 0; $i < count($winners); $i++) {
            $players[$winners[$i]]["score"] = 0;
            for($j = 0; $j < 4; $j++) {
                if(!in_array($j, $winners)) {
                    $players[$winners[$i]]["score"] += $players[$j]["score"];
                }
            }
            
            echo "<div class='winner'>" . $players[$winners[$i]]["name"] . " has won " 
                    . $players[$winners[$i]]["score"] . " points!" . "</div>";
            echo "<br>";
        }
        
        if(count($winners)==0)
            echo "<div class='winner'>Everyone Lost!</div>";
            
        $endtime = microtime(true);
        $timediff = $endtime - $starttime;
        echo "<div class='end'>$timediff seconds have elapsed</div>";   
        
        session_start();

        if (!isset($_SESSION['visited'])) {
            
            $_SESSION['visited'] = TRUE;
            $_SESSION['totalTime'] = 0;
            $_SESSION['counter'] = 0;
        }
        $_SESSION['counter']++;
        $_SESSION['totalTime'] += $timediff;
        
        echo"<div class='end'>The average time elapsed is ". $_SESSION['totalTime']/$_SESSION['counter'] . " seconds</div>";
        
        $word = " time";
        if($_SESSION['counter'] > 1)
            $word = " times";
            
        echo "<div class='end'>This page has been visited ". $_SESSION['counter'] . "$word </div>";
        echo "</div>";
      


    }
    

    
  

?>