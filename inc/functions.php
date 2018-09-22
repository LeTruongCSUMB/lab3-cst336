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
                        $cards[j]["suit"] = "spades";
                        
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
        for ($j = 0; $j < 4; $j++){
            if($j == 0){
                $randNum = rand(1, count($cards)-1);
                //gets a number from 1-52
                $cards[$randNum];
                //sets the card's number
                unset($cards[$randNum]);
                //removes card from the array
                while($players[$j]["cardSum"] < 36) {
                    $randNum = rand(1, count($cards)-1);
                    $player[$j]["cardSum"] += $randNum;
                    if ($randNum < 14) {
                        
                    }else if ($randNum < 27) {
                        $randNum = $randNum - 13;
                    }
                     echo "<img src='$randNum.png'>";
                     
                }
                
            }
        }
        return true;
    }
    
    ///////////////////////////////////////////// Score
    function score() {
        
    }
    
 
    
  

?>