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

        for ($i = 0; $i < 4; $i++){
            
            echo '<img src= "img/' . $players[$i]["name"] . ".jpg" . '" width=100px height=100px />';
            while($players[$i]["score"] < 38) {
                
                echo '<img src= "cards/' . $cards[0]['suit'] . "/" . $cards[0]["value"] . ".png" . '"/>';
                $players[$i]["score"] += $cards[0]["value"];
                
                unset($cards[0]);
                $cards = array_values($cards);
            }
            echo $players[$i]["score"];
            echo "<br>";
            echo $players[$i]["name"];
            echo "<br>";
        }
    }
    
    ///////////////////////////////////////////// Score
    function score() {
        global $cards, $players;
        $closest;
        for ($i = 0; $i < 4; $i++){
            echo $players[$i]['name'];
            echo "<br><br>";
            if ($players[$i]["score"] == 42) {
                echo "Player ". $players[$i]['name']. " has won!";
                echo $players[$i]["score"];
                echo "<br><br>";
                break;
            }else {
                for ($k = 1; $k <= 42; $k++) {
                    $closest = $players[$i]["score"] - $k;
                    if ($closest == 42) {
                        echo "Player ". $players[$i]["name"] . " has won!";
                        echo $players[$i]["score"];
                        echo "<br><br>";
                        break 2;
                    }else if ($closest == 0) {
                        echo "Player ". $players[$i]["name"] . " has won!";
                        echo $players[$i]["score"];
                        echo "<br><br>";
                        break 2;
                    }
                }
            }
        }
        echo "End of for Loop";
        echo "<br><br>";
    }
    
 
    
  

?>