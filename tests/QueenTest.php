<?php

require_once "src/Queen.php";

class QueenTest extends PHPUnit_Framework_TestCase
{

    function test_canAttack_noAttack()
    {
        //Arrange
        $test_Queen = new Queen;
        $input1 = 4;
        $input2 = 7;
        $input3 = 8;
        $input4 = 5;

        //Act
        $result = $test_Queen->canAttack($input1, $input2, $input3, $input4);

        //Assert
        $this->assertEquals(false, $result);
    }
    function test_canAttack_diagAttack()
    {
        //Arrange
        $test_Queen = new Queen;
        $input1 = 4;
        $input2 = 7;
        $input3 = 8;
        $input4 = 3;

        //Act
        $result = $test_Queen->canAttack($input1, $input2, $input3, $input4);

        //Assert
        $this->assertEquals(true, $result);
    }
    function test_canAttack_verticalAttack()
    {
        //Arrange
        $test_Queen = new Queen;
        $input1 = 4;
        $input2 = 7;
        $input3 = 4;
        $input4 = 3;

        //Act
        $result = $test_Queen->canAttack($input1, $input2, $input3, $input4);

        //Assert
        $this->assertEquals(true, $result);
    }
}

?>
