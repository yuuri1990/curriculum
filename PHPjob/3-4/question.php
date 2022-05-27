<link rel="stylesheet" href="index_style.css">

<?php
//POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST['my_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
    $question_1 = ["80","22","20","21"];
    $question_2 = ["PHP","Python","JAVA","HTML"];
    $question_3 = ["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください

    $q1_seikai = $question_1[0];
    $q2_seikai = $question_2[3];
    $q3_seikai = $question_3[1];

?>


<p>お疲れ様です<?php echo $my_name?>さん</p>

<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<p><?php
foreach($question_1 as $value){?>
    <input type="radio" name ="question_1" value =<?php echo $value;?>>
<?php   echo $value;
}
?></p>

<h2>②Webページを作成するための言語は？</h2>

<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<p><?php
foreach($question_2 as $value){?>
    <input type="radio" name ="question_2" value = <?php echo $value;?>>
<?php   echo $value;
}
?></p>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>

<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<p><?php
foreach($question_3 as $value){?>
    <input type="radio" name ="question_3" value = <?php echo $value;?>>
<?php   echo $value;
}
?></p>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
<input type="hidden" name="q1_seikai" value="<?php echo $q1_seikai; ?>">
<input type="hidden" name="q2_seikai" value="<?php echo $q2_seikai; ?>">
<input type="hidden" name="q3_seikai" value="<?php echo $q3_seikai; ?>">

<input type="submit" value="回答する" >




