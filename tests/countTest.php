<?php

    require_once "src/count.php";

    class CountTest extends PHPUnit_Framework_TestCase
    {
      function test_findString_String()
      {
        //Arrange
        $test_Count = new Count;
        $phrase = "Jack and Jill fell down the hill.";
        $word = "fell";

        //Act
        $result = $test_Count->countWord($phrase, $word);

        //Assert
        $this->assertEquals(1, $result);

      }
    }

?>
