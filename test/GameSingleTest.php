<?php


   require_once "src/GameSingle.php";




    class GameSingleTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors1()
        {
            //Arrange
            $test_RockPaperScissors = new GameSingle;
            // $input1="rock";


            //Act
            $result = $test_RockPaperScissors->playRandom();
            if ($result == "rock") {
                $input1 = "rock";
            } elseif ($result == "paper") {
                $input1 = "paper";
            } elseif ($result == "scissors") {
                $input1 = "scissors";
            } else {
                $this->assertEquals("something", "is wrong");
            }


            //Assert
            // $this->assertTrue($result == "rock" || $result == "scissors" || $result == "paper");

            $output= $test_RockPaperScissors->playGame($input1, $result);
            $this->assertEquals("Draw",$output);

        }
}

?>
