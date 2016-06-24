<?php
#rock paper scissors


$player_score = 0;
$comp_score = 0;
#keep Score


$player_choice = strtolower(readline("To play, choose: Rock, Paper or Scissors- 
	you know how it's done!\n"));
#USER INPUT FOR ROCK PAPER OR SCISSORS

$comp_choice = rand(1,3);
#computer input

#loop
while ($player_score != 5 && $comp_score != 5) {
	$player_choice = strtolower(readline()"Choose Rock, Paper or Scissors")
}



switch ($comp_choice) {
	case 1:
		$comp_choice = "Rock";
	break;
	
	case 2:
		$comp_choice = "Paper";
		break;
		case 3:
		$comp_choice = "Scissors";
		break
}
#convert computer choice to string

 while ($player_choice != "rock" && $player_choice != "paper" && $player_choice != "scissors: \n"){
 	echo "not a valid entry\n";
 	$player_choice = readline("Choose Rock, Paper or Scissors: \n);
}

 echo "You chose: . $player_choice  .and the computer chose: . $comp_choice \n " ;
 	
 }

#CHECK FOR VALID INPUT

#RULES OF THE GAME

#KEEP SCORE






		break;
	
	case '$kitAnswerPaper':
		echo "Paper";
		break;:
	case '$kitAnswerScissors':
		echo "Scissors";
		break;
		break;
}
switch ($kitAnswerRock) {
	case '1':
		echo "Rock";


