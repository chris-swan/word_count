<?php

    require_once "src/count.php";

    class CountTest extends PHPUnit_Framework_TestCase
    {   

        function test_countWord_one_letter()
            //Arrange
            $text_Count = new Count;
            $phrase = "f";
            $word = "f";

            //Act 
            $result = $test_Count->countWord($phrase, $word);

            //Assert
            $this->assertEquals(1, $result)
            
        function test_countWord_one_word_one_count()
        {
            //Arrange
            $test_Count = new Count;
            $phrase = "fell";
            $word = "fell";

            //Act
            $result = $test_Count->countWord($phrase, $word);

            //Assert
            $this->assertEquals(1, $result);
        }
        
        function test_countWord_word()
        {
            //Arrange
            $test_Count = new Count;
            $phrase = "Jack and Jill fell down the hill!!!";
            $word = "fell";

            //act
            $result = $test_Count->countWord($phrase, $word);

            //Assert
            $this->assertEquals("fell", $result);
        }
        function text_exclude_none_letters()
        {
            //Arrange
            $text_Count = new count;
            $phrase = "Jack and jill fell down the hill!!!"
            $word = "!!!"

            //Act
            $result = $text_Count->countWord($phrase, $word);

            //Assert
            $this->assertEquals("Your word is not found in this phrase.")


        }
  }

?>
