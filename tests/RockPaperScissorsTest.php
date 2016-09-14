<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "rock";
            $player_two = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($player_one, $player_two);

            //Assert
            $this->assertEquals("Player 1 Wins!", $result);

        }

        function test_rock_paper()
        {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "rock";
            $player_two = "paper";

            //Act
            $result = $test_RockPaperScissors->playGame($player_one, $player_two);

            //Assert
            $this->assertEquals("Player 2 Wins!", $result);

        }

        function test_paper_scissors()
        {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "paper";
            $player_two = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($player_one, $player_two);

            //Assert
            $this->assertEquals("Player 2 Wins!", $result);

        }

        function test_draw()
        {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "paper";
            $player_two = "paper";

            //Act
            $result = $test_RockPaperScissors->playGame($player_one, $player_two);

            //Assert
            $this->assertEquals("Draw!", $result);

        }




    }


?>
