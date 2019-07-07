<?php
//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum($max) {
    $result = $max*2;
    return $result;
}
    echo sum(50);

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function f($a,$b){
 $sum=$a+$b;
 return $sum;
}

$result = f(4,5);
echo $result;

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function b($arr){
    $result = 1;
    foreach($arr as $a){
        $result = $result*$a;
    }
    return $result;
    
}
$array = array(1,3,5,7,9);
echo b($array) ."\n";
 
//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags

$string = "<h1>ビルトイン関数</h1>"
  . "<p>タグ取り除きます</p>";
echo strip_tags($string) ."\n";

//array_push

$fruits = array("apple","banana","peach");
    array_push($fruits,"grape","strawberry");
    print_r ($fruits) ."\n";
    
//array_merge

$a = array(
    0 => "blue",
    1 => "pink",
    "a" => "black",
    "b" => "green",
    );
    
$b = array(
    1 => "blue",
    2 => "pink",
    "b" => "green"
    );
    
$result= array_merge($a,$b);
print_r($result) ."\n";

//time, mktime

$now = time();
print $now ."\n";

$timestamp =mktime(0,0,0,7,7,2019);
print $timestamp ."\n";

//date

$timestamp =time();
echo date("Y/m/d",$timestamp);


