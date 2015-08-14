<?php
    class Count
    {
        function countWord($phrase, $word)
        {
              $lc_word = strtolower($word);
              $lc_phrase = strtolower($phrase);
              $phrase_array = explode(" ", $lc_phrase);
              $output = array();

              $count_word = array_count_values($phrase_array);

          }


    }

?>
