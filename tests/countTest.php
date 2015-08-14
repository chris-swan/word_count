<?php

    require_once "src/count.php";

    class CountTest extends PHPUnit_Framework_TestCase
    {
      function test_countWord_phrase()
      {
        //Arrange
        $test_Count = new Count;
        $phrase = "Jack and Jill fell down the hill";
        $word = "fell";

        //Act
        $result = $test_Count->countWord($phrase, $word);

        //Assert
        $this->assertEquals("jack and jill fell down the hill", $result);
      }
      function test_countWord_lc_phrase()
      {
      //Arrange
      $test_Count = new Count;
      $phrase = "JACK AND Jill fell down the hill";
      $word = "fell";

      //Act
      $result = $test_Count->countWord($phrase, $word);

      //Assert
      $this->assertEquals("jack and jill fell down the hill", $result);
      }
      function test_countWord_word()
      {
      //Arrange
      $test_Count = new Count;
      $phrase = "Jack and Jill fell down the hill";
      $word = "fell";

      //act
      $result = $test_Count->countWord($phrase, $word);

      //Assert
      $this->assertEquals("fell", $result);
      }


    }

?>
