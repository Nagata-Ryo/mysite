
<?php

$number = 1;
while($number <= 100){

  if ($number % 15 == 0) {
    echo 'fizzbuzz,';
  }//15で割って余りが0の時FIZZBUZZを表示

  elseif($number % 3 == 0){
    echo 'fizz,';
  }//3で割って余りが0の時FIZZを表示

  elseif($number % 5 == 0){
    echo 'buzz,';
  }//5で割って余りが0の時BUZZを表示


  else {
    echo $number.',';
    // code...
  }

  $number++;
}




 ?>
