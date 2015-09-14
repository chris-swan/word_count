<?php

    require_once "src/count.php";

    class CountTest extends PHPUnit_Framework_TestCase
    {   

        function test_count_oneLetter()
        {
            //Arrange
            $test_Count = new Count;
            $phrase = "f";
            $word = "f";

            //Act 
            $result = $test_Count->countWord($phrase, $word);

            //Assert
            $this->assertEquals("Your word, 'f', appeared one time in the phrase: 'f'", $result);
        }

        function test_count_oneWord()
        {
            //Arrange
            $test_Count = new Count;
            $phrase = "fell";
            $word = "fell";

            //Act
            $result = $test_Count->countWord($phrase, $word);

            //Assert
            $this->assertEquals("Your word, 'fell', appeared one time in the phrase: 'fell'", $result);
        }
        
        function test_count_word()
        {
            //Arrange
            $test_Count = new Count;
            $phrase = "Jack and Jill fell down the hill!!!";
            $word = "fell";

            //act
            $result = $test_Count->countWord($phrase, $word);

            //Assert
            $this->assertEquals("Your word, 'fell', appeared one time in the phrase: 'Jack and Jill fell down the hill!!!'", $result);
        }
        function text_count_excludeNoneLetters()
        {
            //Arrange
            $text_Count = new count;
            $phrase = "Jack and jill fell down the hill!!!";
            $word = "!!!";

            //Act
            $result = $text_Count->countWord($phrase, $word);

            //Assert
            $this->assertEquals("Your word is not found in this phrase.");


        }

  }

?>
