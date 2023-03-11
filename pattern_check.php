<?php

function countPattern($given_text, $given_pattern) {
  $text_length = strlen($given_text); //get the length of given text length
  $pattern_length = strlen($given_pattern);//get the length of given pattern length
  $found = 0; //initially 0

  for ($i = 0; $i <= $text_length - $pattern_length; $i++) { //given pattern wise loop decide (how many time loop need to run)
    $match = true; //flag
    for ($j = 0; $j < $pattern_length; $j++) { //loop run according to pattern length
      if ($given_text[$i + $j] != $given_pattern[$j]) { // check the sub string if doesn't match. then check from the next letter.
        $match = false;
        break;
      }
    }
    if ($match) { //if matched
      $found++; //increase the counter value
    }
  }

  return $found;
}

$given_text = "tadadattaetadadadafa";
$given_pattern = "dada";
$found = countPattern($given_text, $given_pattern);

echo 'Here the Patern ('.$given_pattern.') appears in text ('.$given_text.') 3 times'; 

?>
