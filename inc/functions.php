<?php
    $players = array();
    $cards = array();
    $cards[] = array();
    
    // Setting up cards
    $cards[]["suit"] = "clubs";
    $cards[]["taken"] = 1; // When card is added
    
    ///////////////////////////////////////////// Setup for Setup
    function initialize() {
        setupPlayers();
        setupCards();
    }
    
    function setupPlayers() {
        // Players will have stuff go look it up
    }
    
    function setupCards() {
        for($i = 0; $i < 4; $i++) {
            
            //clubs
            if($i==0) {
                for($j = 1; $j <= 13; $j++) {
                    $cards[]["suit"] = "clubs";
                    $cards[]["value"] = j;
                    $cards[]["taken"] = 0;
                }
            }
             //diamonds
            if($i==1) {
                for($j = 1; $j <= 13; $j++) {
                    $cards[]["suit"] = "diamonds";
                    $cards[]["value"] = j;
                    $cards[]["taken"] = 0;
                }
            }
             //hearts
            if($i==2) {
                for($j = 1; $j <= 13; $j++) {
                    $cards[]["suit"] = "hearts";
                    $cards[]["value"] = j;
                    $cards[]["taken"] = 0;
                }
            }
             //spades
            if($i==3) {
                for($j = 1; $j <= 13; $j++) {
                    $cards[]["suit"] = "spades";
                    $cards[]["value"] = j;
                    $cards[]["taken"] = 0;
                }
            }
        }
    }
    
    ///////////////////////////////////////////// Setup
    function setup() {
        // Players take a seat at a table.
        seatPlayers();
        // Dealer is selected.
        selectDealer();
        // Cards taken out of box.
        takeCardsOutOfBox();
        // Dealer shuffles the cards.
        shuffleCards();
        // Player to the right of the deal cuts the cards.
        cutCards();
        // Dealer deals cards according to the rules, starting to the left, and around to him
        deal();
    }
    
    function seatPlayers() {
        return true;
    }
    
    function selectDealer() {
        return true;
    }
    
    function takeCardsOutOfBox() {
        return true;
    }
    
    function shuffleCards() {
        return true;
    }
    
    function cutCards() {
        return true;
    }
    
    function deal() {
        return true;
    }

    ///////////////////////////////////////////// Play
    function play () {
        for ($j = 0, $j < 4; $j++){
        }
        return true;
    }
    
    ///////////////////////////////////////////// Score
    function score() {

        return true;
    }
    
 
    
  

?>