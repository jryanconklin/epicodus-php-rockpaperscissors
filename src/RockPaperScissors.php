<?php

    class RockPaperScissors
    {

        function playGame($player_one, $player_two)
        {
            if ($player_one == $player_two) {
                return "Draw!";
            } elseif ($player_one == "rock" && $player_two == "scissors" || $player_one == "scissors" && $player_two == "paper" || $player_one == "paper" && $player_two == "rock") {
                return "Player 1 Wins!";
            } else {
                return "Player 2 Wins!";
            }
        }

        function playComputer() {
        $computer_choice_array = array("rock", "paper", "scissors");
        $random_number = rand(0, 2);
        $result = $computer_choice_array[$random_number];
        return $result;
        }
    }
?>
