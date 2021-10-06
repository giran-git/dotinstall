<?php

 

//サイコロをふるPHPプログラム

 

$dice1 = rand(1, 100);

$dice2 = rand(1, 100);

$dice3 = rand(1, 1);


$goukei = $dice1 + $dice2 + $dice3;

 

?>

 

<!DOCTYPE html>

<html lang=”ja”>

<head>

<meta charset=”UTF-8″ />

<title>PHP独習「サイコロをふるぞ」</title>

</head>

<body>

<h1>PHP独習「サイコロをふるぞ」</h1>

<p>サイコロ1の目は「<?php echo $dice1; ?>」でした。</p>

<p>サイコロ2の目は「<?php echo $dice2; ?>」でした。</p>

<p>サイコロ3の目は「<?php echo $dice3; ?>」でした。</p>


<p>サイコロ1と2と3の合計は「<?php echo $goukei; ?>」でした。</p>
<?php
       if($goukei < 200){
          echo '成功';
       } else {
          echo '失敗' ;
       }
     ?>

</body>

</html>