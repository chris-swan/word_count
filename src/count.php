<?php
  class Count
  {
      function countWord($phrase, $word)
      {
          //set all input to lower case to ensure all matches are caught
          $exclude_punctuation = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '+', '=');
          $non_punctuated_phrase = str_replace($exclude_punctuation, " ", $phrase); 
          $lower_case_word = strtolower($word);
          $lower_case_phrase = strtolower($non_punctuated_phrase);
          $phrase_array = explode(" ", $lower_case_phrase);

          
          //Set key to zero to begin counting
          $result = 0;
            
          //loop through the phrase array to check words in the phrase against the input word.
          //keeping track and tallying each time the word matches, and adding it to result using the ++
          foreach ($phrase_array as $match) {
              if ($lower_case_word === $match) {
                  ++$result;
              }
          }

          //depending on what output matches, return specifics of input workd and match.
          if ($result > 1) {
              return "Your word, '" . $word . "', appeared $result times in the phrase: $phrase";
          } elseif ($result == 1) {
              return "Your word, '" . $word . "', appeared one time in the phrase: $phrase";
          } else {
              return "Your word is not found in this phrase.";
          }
      }
  }
?>
