<?php
$needle = "London, England , uk";
$haystack = array(
   1 => array("London", "Ontario", "UK"),
   8 => array("Greater London", "England", "UK"),
   9 => array("London", "England", "United Kingdom"),
   4 => array("London", "California", "United states")
);


function best_match($needle = "", $wordLists = [])
{
   foreach ($wordLists as $key => $wordList) {
      $match = [];
      $string = explode(",", $needle);
      foreach ($string as $position => $letter) {
         if (stripos(trim(strtolower($wordList[$position])), trim(strtolower($letter))) !== false) {
            $match[$position] = $wordList[$position];
         }
      }
      if (count($match, COUNT_RECURSIVE) == count($string)) {
         return $key;
      }
   }
}
echo best_match($needle, $haystack);
exit;
?>