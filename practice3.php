<?php
//1.1から100までの数の中で、3の倍数のときのみ「nは3の倍数です」と出力させるコードを書いてください。

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 3 == 0)
    echo $i."は3の倍数です"."\n";
    }
    
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 3 == 0)
    echo count($i);
    }
 

  
    