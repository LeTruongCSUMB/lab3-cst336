<?php
    $playerNames = array("Reginald", "Baldwin", "Tammy", "Judge Kattis");
    $players = array();
    $players[] = array();
    $cards = array();
    $cards[] = array();
    
    // Setting up cards
    $cards[]["suit"] = "clubs";
    $cards[]["taken"] = 1; // When card is added
    
    function setupCards() {
         
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
        
    
    }
    
    ///////////////////////////////////////////// seatPlayers()
    function seatPlayers() {
        // Player are randomly seated
        for($i = 0; $i < 4; $i++) {
            $randNum = rand(0, $count($playerNames)-1);
            $players[$i]["name"] = $playerNames[$randNum];
            $players[$i]["score"] = 0;
            unset($playerNames[$randNum]);
        }
        return true;
    }
    
    ///////////////////////////////////////////// Play
    function play () {
        
        for ($i = 0; $i < 4; $i++){
            
            while($players[$i]["score"] < 38) {
                $randNum = rand(1, count($cards)-1);
                // echo img with something like (yes this should be possible, but you have to adjust the quotes to be correct)
                // href= "cards/$cards[$randNum]["suit"]/$cards[$randNum]["value"].png"
                $players[$i]["score"] += $cards[$randNum]["value"];
                unset($cards[$randNum]);
            }
            
    }
    
    ///////////////////////////////////////////// Score
    function score() {
        
    }
    
 
    
  

?>