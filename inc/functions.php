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
                    
                    if(j < 14)
                        $cards[j]["suit"] = "clubs";
                    else if(j < 27)
                        $cards[j]["suit"] = "diamonds";
                    else if(j < 40)
                        $cards[j]["suit"] = "hearts";
                    else
                        $cards[j]["suit"] = "hearts";
                        
                    $cards[j]["value"] = j;
                    $cards[j]["taken"] = 0;
                }
        
    
    }
    
    ///////////////////////////////////////////// seatPlayers()
    function seatPlayers() {
        // Player are randomly seated
        for($i = 0; $i < 4; $i++) {
            $randNum = rand(0, $count($playerNames)-1);
            $players[i]["name"] = $playerNames[$randNum];
            unset($playerNames[$randNum]);
        }
        return true;
    }
    
    ///////////////////////////////////////////// Play
    function play () {
        return true;
    }
    
    ///////////////////////////////////////////// Score
    function score() {
       
        return true;
    }
    
 
    
  

?>