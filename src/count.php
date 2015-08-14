<?php
    class Count
    {
        function countWord($phrase, $word)
        {
          $lc_phrase=strtolower($phrase);
          $lc_word=strtolower($word);
          $phrase_array = explode(" ", $phrase);
          //may need ", " instead of just " ^^
          //$output = array();

          foreach($phrase_array as $counted_word) {
            if($counted_word->word === $lc_word ) {
              $count++;
              }
                if ($counted_word != 0){
                return $count_word;
              }
            }
          }


      //return $count;
    //}
    }

  //  foreach ($phrase_array as $outcome){
  //    $counted_word = ($outcome, $lc_word);


?>
