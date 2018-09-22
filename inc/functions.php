<?php
    $playerNames = array("Reginald", "Baldwin", "Tammy", "Judge Kattis");
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
                        $cards[$j]["taken"] = 0;
                        }
                    else if($j < 27) {
                        $cards[$j]["suit"] = "diamonds";
                        $cards[$j]["value"] = $j-13;
                        $cards[$j]["taken"] = 0;
                    }
                    else if($j < 40) {
                        $cards[$j]["suit"] = "hearts";
                        $cards[$j]["value"] = $j-26;
                        $cards[$j]["taken"] = 0;
                    }
                    else {
                        $cards[$j]["suit"] = "spades";
                        $cards[$j]["value"] = $j-39;
                        $cards[$j]["taken"] = 0;
                    }
                        
                }
        
    
    }
    
    ///////////////////////////////////////////// seatPlayers()
    function seatPlayers() {
        global $players;
        // Player are randomly seated
        for($i = 0; $i < 4; $i++) {
            $randNum = rand(0, count($playerNames)-1);
            $players[$i]["name"] = $playerNames[$randNum];
            $players[$i]["score"] = 0;
            unset($playerNames[$randNum]);
        }
        return true;
    }
    
    ///////////////////////////////////////////// Play
    function play () {
        global $cards, $players;
        for ($i = 0; $i < 4; $i++){
            
            while($players[$i]["score"] < 38) {
                $randNum = rand(1, count($cards)-1);
                 while($cards[$randNum]["taken"] == 1) {
                     $randNum = rand(1, count($cards)-1);
                 }
                
                echo '<img src= "cards/' . $cards[$randNum]['suit'] . "/" . $cards[$randNum]["value"] . ".png" . '"/>';
                $players[$i]["score"] += $cards[$randNum]["value"];
                $cards[$randNum]["taken"] = 1;
            }
            echo $players[$i]["score"];
            echo "<br><br>";
        }
    }
    
    ///////////////////////////////////////////// Score
    function score() {
        
    }
    
 
    
  

?>