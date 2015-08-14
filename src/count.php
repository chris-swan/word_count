<?php
    class Count
    {
        function countWord($phrase, $word)
        {
            //set all input to lower case to ensure all matches are caught
              $lc_word = strtolower($word);
              $lc_phrase = strtolower($phrase);

              //expldoe the array so that each word can be evaluated on its own with individual strings
              $phrase_array = explode(" ", $lc_phrase);
              $output = array();
              // from here, I've tried a lot of different ways to approach the problem, nothing turned productive so its left in pieces and not working yet.
              //using array count values to get the inital arrays values and numbers of times each word works - this function has been working, I can var_dump to get my values
              //I can also get it to print using echo of the basic number of times each in the phrase is printed cat=> 3, dog=> 2 the=> 3...              $count_word = array_count_values($phrase_array);
              //
              $key = array_push($count_word, $lc_word);

              //from here, I have not come up with the right way to draw out that info and assign it to a specific selected word from the user.


                $value = substr_count($key, $lc_word);

              }


        }
      }
?>


            ///Here is another way i tried approaching the problem, but axed it out in other attempts.
//
  //        foreach($phrase_array as $counted_word) {
//            if($counted_word->word === $lc_word ) {
  //            $count++;
            //  }
          //      if ($counted_word != 0){
        //        return $count_word;
      //        }
    //        }
  //        }
