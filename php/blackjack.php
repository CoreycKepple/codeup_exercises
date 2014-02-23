<?php

function get_input($upper = FALSE) {
    if($upper == TRUE){
        return strtoupper(trim(fgets(STDIN)));
    }else {
        return trim(fgets(STDIN));
    }

}

$suits = ['C', 'H', 'S', 'D'];
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];


function buildDeck($suits, $cards) {
  	foreach ($suits as $suit) {
		foreach ($cards as $card) {
			$deck[] = $card.' '.$suit;
		}
	}
	shuffle($deck);
	return $deck;
}


// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card) {
  	if (is_numeric($card[0])) {
  	$num=$card[0];
  		if ($num == 1) {
  			return $cardvalue = 10;
  		}else {
  			return $cardvalue = $num;
  		};
  }elseif ($card[0] == 'K' || $card[0] =='Q' || $card[0] == 'J') {
  	return $cardvalue = 10;
  }elseif ($card[0] == 'A') {
  	return $cardvalue = 11;
  }
}

// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
  $total = 0;
  foreach ($hand as $card) {
  	$score = getCardValue($card);
  	if ($total>=11 && $score == 11) {
  		$score = 1;
  	}
  	$total += $score;
  }return $total;
}
// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)
function drawCard(&$hand, &$deck) {
 $newcard1 = array_pop($deck);
 array_push($hand, $newcard1);
 return $hand;
}


// print out a hand of cards
// name is the name of the player
// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12
function echoHand($hand, $name, $hidden = false) {
  if ($hidden == TRUE) {
   	foreach ($hand as $card) {
   	 	echo  "[".$card."]"." ";
   	 } 
   } else{
   	echo  "[???]".' '."[".$hand[1]."]".PHP_EOL;
   }
}

echo PHP_EOL."\t ***** Welcome to Blackjack ******".PHP_EOL.PHP_EOL;

// build the deck of cards
$deck = buildDeck($suits, $cards);

// initialize a dealer and player hand
$dealer = [];
$player = [];

//Take in player name
$name1 = 'Player';
$name2 = 'Dealer';

// dealer and player each draw two cards
$player = drawCard($player,$deck);
$dealer = drawCard($dealer,$deck);
$player = drawCard($player,$deck);
$dealer = drawCard($dealer,$deck);

// echo the dealer hand, only showing the first card
echo "Dealer: ";
echoHand($dealer,$name2,FALSE);


$dealerscore = getHandTotal($dealer);
echo PHP_EOL;

// // echo the player hand
echo "Player: ";
echoHand($player,$name1,TRUE);


$playerscore = getHandTotal($player);

echo PHP_EOL."Score: ".$playerscore.PHP_EOL;


// // allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
echo PHP_EOL;
while ($playerscore<21) {
  	echo 'Would you like to (H)it or (S)tay?: ';
  	$input = get_input(TRUE);
	if ($input == 'H') {
  		$player = drawCard($player,$deck);
  		echoHand($player,$name1,TRUE);
  		$playerscore = getHandTotal($player);
  		echo PHP_EOL."Player Score: ".$playerscore.PHP_EOL.PHP_EOL;
  	}else{
  	break;
  }
}
echo PHP_EOL;

// // if neither of the above are true, then the dealer needs to draw more cards
// // dealer draws until their hand has a value of at least 17
// // show the dealer hand each time they draw a card

while ($dealerscore < 21  && $playerscore < 21) {
	if ($dealerscore < 17) {
		$dealer = drawCard($dealer,$deck);
		echoHand($dealer,$name2,TRUE);
		$dealerscore = getHandTotal($dealer);
		echo PHP_EOL."Dealer Score: ".$dealerscore.PHP_EOL.PHP_EOL;
	}elseif ($dealerscore == 17 && $playerscore >=17 && $playerscore <= 21) {
		$dealer = drawCard($dealer,$deck);
		echoHand($dealer,$name2,TRUE);
		$dealerscore = getHandTotal($dealer);
		echo PHP_EOL."Dealer Score: ".$dealerscore.PHP_EOL.PHP_EOL;
	}elseif ($dealerscore >= $playerscore) {
		break;
	}
}

// // show the dealer's hand (all cards)
echo "Dealer: ";
echoHand($dealer,$name2,TRUE);
echo PHP_EOL;
echo "Player: ";
echoHand($player,$name1,TRUE);
echo PHP_EOL;

// // todo (all comments below)
echo PHP_EOL."\t **!! Score Board !!**".PHP_EOL;
// // at this point, if the player has more than 21, tell them they busted
// // otherwise, if they have 21, tell them they won (regardless of dealer hand)
if ($playerscore>21) {
	echo PHP_EOL.PHP_EOL.'[!!BUST!!] ~ Player Total over 21 ~'.PHP_EOL;
	echo "Player Score: ".$playerscore.PHP_EOL;
	echo "Dealer Score: ".$dealerscore.PHP_EOL;
	echo PHP_EOL.'[!!LOSS!!] ~ Dealer wins with a score of '.$dealerscore.' to '.$playerscore.' ~'.PHP_EOL;
	exit(0);
}elseif ($playerscore == 21) {
	echo PHP_EOL.PHP_EOL.'[!!WINNER!!] ~ Nice job, you got 21! ~'.PHP_EOL;
	echo "Player Score: ".$playerscore.PHP_EOL;
	echo "Dealer Score: ".$dealerscore.PHP_EOL;
	echo PHP_EOL.'[!!WINNER!!] ~ Player wins with a score of '.$playerscore.' to '.$dealerscore.' ~'.PHP_EOL;
	exit(0);
}

// // finally, we can check and see who won
// // by this point, if dealer has busted, then player automatically wins
// // if player and dealer tie, it is a "push"
// // if dealer has more than player, dealer wins, otherwise, player wins

if ($dealerscore>21) {
	echo PHP_EOL."[!!DEALER BUST!!]".PHP_EOL;
	echo "Player Score: ".$playerscore.PHP_EOL;
	echo "Dealer Score: ".$dealerscore.PHP_EOL;
	echo PHP_EOL.'[!!WINNER!!] ~ Player wins with a score of '.$playerscore.' to '.$dealerscore.' ~'.PHP_EOL;
}elseif ($dealerscore>$playerscore) {
	echo PHP_EOL;
	echo "Player Score: ".$playerscore.PHP_EOL;
	echo "Dealer Score: ".$dealerscore.PHP_EOL;
	echo PHP_EOL.'[!!LOSS!!] ~ Dealer wins with a score of '.$dealerscore.' to '.$playerscore.' ~'.PHP_EOL;
}elseif ($dealerscore<$playerscore) {
	echo PHP_EOL;
	echo "Player Score: ".$playerscore.PHP_EOL;
	echo "Dealer Score: ".$dealerscore.PHP_EOL;
	echo PHP_EOL.'[!!WINNER!!] ~ Player wins with a score of '.$playerscore.' to '.$dealerscore.' ~'.PHP_EOL;
}elseif ($dealerscore==$playerscore) {
	echo PHP_EOL;
	echo "Player Score: ".$playerscore.PHP_EOL;
	echo "Dealer Score: ".$dealerscore.PHP_EOL;
	echo PHP_EOL.'[!!PUSH!!] ~ Tie, Please play again! ~'.PHP_EOL;
}



