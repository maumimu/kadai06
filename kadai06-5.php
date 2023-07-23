<?php
//strip_tags 文字列からHTMLタグを取り除く

$str = "<h1>タグを取る</h1>";
 echo strip_tags($str);
 echo "\n";
 
 
 //array_push 配列の末尾に要素を加える
 
 $scores = [30, 40, 50];
 array_push ($scores, 60, 70);
 print_r($scores);
 echo  "\n";
 
 //array_merge 複数の配列をつなげる
 
 $array1 = [3, 4, 8];
 $array2 = [4, 8, 12];
 $array3 = [1, 2];
 $array = array_merge($array1, $array2, $array3);
 print_r($array);
 
 
 //time 現在のUNIXタイムスタンプを取得,mktime 引数で指定した日付のUNIXタイムスタンプを取得
 
 echo time();
 echo "\n";
 
 
 $time = mktime(12, 30, 30, 7, 23, 2023);
 
 echo $time;
 echo "\n";
 
 
 //date 現在の年月日を取得
 
 echo date("y-m-d h:i:s");
 echo "\n";
 

 
 
 
 
 


