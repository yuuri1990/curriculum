<link rel="stylesheet" href="index_style.css">

<?php 

//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];

$question_1 = $_POST['question_1'];
$question_2 = $_POST['question_2'];
$question_3 = $_POST['question_3'];

$q1_seikai = $_POST['q1_seikai'];
$q2_seikai = $_POST['q2_seikai'];
$q3_seikai = $_POST['q3_seikai'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

function question_1($q1,$q1_s){
    
    if ($q1 == $q1_s){
        echo "正解！";
    }else {
            echo "残念・・・";
    };
}

function question_2($q2,$q2_s){
    if ($q2 == $q2_s){
        echo "正解！";
    }else {
            echo "残念・・・";
    };
}

function question_3($q3,$q3_s){
    if ($q3 == $q3_s){
        echo "正解！";
    }else {
            echo "残念・・・";
    };
}
?>

<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php 
echo question_1($question_1,$q1_seikai);
?></p> 

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php 
echo question_2($question_2,$q2_seikai);
?></p> 

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php 
echo question_3($question_3,$q3_seikai);
?></p> 
 