<?php


   require_once "src/Game.php";




    class GameTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors1()
        {
            //Arrange
            $test_RockPaperScissors = new Game;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player1", $result);
        }


        function test_rock_scissors2()
        {
            //Arrange
            $test_RockPaperScissors = new Game;
            $first_input = "scissors";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }


        function test_rock_scissors3()
        {
            //Arrange
            $test_RockPaperScissors = new Game;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_rock_scissors4()
        {
            //Arrange
            $test_RockPaperScissors = new Game;
            $first_input = "paper";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_rock_scissors5()
        {
            //Arrange
            $test_RockPaperScissors = new Game;
            $first_input = "paper";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
        function test_rock_scissors6()
        {
            //Arrange
            $test_RockPaperScissors = new Game;
            $first_input = "scissors";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
        function test_rock_scissorsDraw1()
        {
            //Arrange
            $test_RockPaperScissors = new Game;
            $first_input = "paper";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
        }
        function test_rock_scissorsDraw2()
        {
            //Arrange
            $test_RockPaperScissors = new Game;
            $first_input = "rock";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
        }
        function test_rock_scissorsDraw3()
        {
            //Arrange
            $test_RockPaperScissors = new Game;
            $first_input = "scissors";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
        }
    }

?>
