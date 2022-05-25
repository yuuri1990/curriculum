<?php
    $number = $_POST['number'];
    $rnd = mt_rand(0,strlen($number)-1);
    $my_number = substr($number,$rnd,1);

    // echo "入力：$number <br/>";
    // echo "ランダム：$rnd <br/>";
    // echo "選択：$my_number";

   if ($my_number == "0") {
       $omikuzi = "凶";

    }elseif ($my_number >= "1" and $my_number <= "3"){
        $omikuzi = "小吉";

    }elseif ($my_number >= "4" and $my_number <= "6"){
       $omikuzi = "中吉";

    }elseif ($my_number >= "7" and $my_number <= "8"){
       $omikuzi = "吉";

    }elseif ($my_number == "9"){
       $omikuzi = "大吉";
    }

   ?>
   <p><?php echo  date("Y/m/d", time()); ?>の運勢は</p>
   <p>選ばれた数字は<?php echo $my_number; ?></p>
   <p><?php echo $omikuzi; ?></p>