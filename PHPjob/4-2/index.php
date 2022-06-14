<?php
require_once("pdo.php");
require_once("getData.php");

 $getdata = new getData();
 $userdata = $getdata->getUserData()

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <div class = "header">
        <div class = "header_left"></div>
        <div class = "header_right">
            <div class = "header_right_1">
                <p class = "username">ようこそ　<?php echo $userdata["last_name"].$userdata["first_name"]?>　さん　</p> 
            </div>
            <div class = "header_right_2">
                <p class = "username">最終ログイン日：<?php echo $userdata["last_login"]?>　</p> 
            </div>
        </div>
    </div>
    
    <div class = "main">
        <table>
            <tr>
                <th width="50px">記事ID</th><th width="200px">タイトル</th><th width="70px">カテゴリ</th><th width="300px">本文</th><th>投稿日</th>
            </tr>

            <?php
                foreach($getdata->getPostData()->fetchall(PDO::FETCH_ASSOC) as $g){
                  echo "<tr>";
                  echo "<td>".$g["id"]."</td>";
                  echo "<td>".$g["title"]."</td>";

                  if ($g["category_no"] == 1){
                      echo "<td>食事</td>";
                  }elseif($g["category_no"] == 2){
                      echo "<td>旅行</td>";
                  }else{
                      echo "<td>その他</td>";
                  }
                  echo "<td>".$g["comment"]."</td>";
                  echo "<td>".$g["created"]."</td>";
                  echo "</tr>";
                }

             ?>

        </table>

    </div>
    <div class = "footer">
        <p>Y&I group.intc</p>
    </div>
    
</body>
</html>
