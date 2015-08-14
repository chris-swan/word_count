<?php
    class Count
    {
        function countWord($phrase, $word)
        {
              $lc_word = strtolower($word);
              $lc_phrase = strtolower($phrase);
              $phrase_array = explode(" ", $lc_phrase);
              $output = array();

              foreach($phrase_array as $count){
                sort($phrase_array);
                  if($word == $phrase_array) {
                    array_push($output, $count);
                  }
              }
              return $word;
        }
    }
?>
