<?php
  class Count
  {
    function countWord($phrase, $word)
    {
      //set all input to lower case to ensure all matches are caught
      $lc_word = strtolower($word);
      $lc_phrase = strtolower($phrase);
      $phrase_array = explode(" ", $lc_phrase);
      $result = 0;
        
      foreach ($phrase_array as $match) {
         if ($lc_word === $match) {
            ++$result;
         }
      }
      if ($result > 1) {
        return "Your word, '" . $word . "', appeared $result times in the phrase: $phrase";
      } elseif ($result == 1) {
        return "Your word, '" . $word . "', appeared one time in the phrase: $phrase";
      }else {
        return "Your word is not found in this phrase.";
      } 
    }
  }
?>
