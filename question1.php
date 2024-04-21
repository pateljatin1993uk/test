
<?php
class FizzBuzz
{
   function set_message()
   {
      $i = 1;
      do {
         if (($i % 3) == 0 && ($i % 5) == 0) {
            echo  nl2br (" FizzBuzz\n  ");
          }else if (($i % 3) == 0) {
            echo  nl2br (" Fizz\n  ");
         }else if (($i % 5) == 0) {
            echo  nl2br (" Buzz\n  ");
         }else{
            echo  nl2br ($i."\n  ");
         }
         $i++;
      } while ($i <= 100);
   }
}

$fizzBuzz = new FizzBuzz();

echo $fizzBuzz->set_message();

?>
