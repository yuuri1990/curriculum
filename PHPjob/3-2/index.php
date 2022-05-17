<?php

$fruits = ["りんご"=>"100","みかん"=>"50","もも"=>"1000"];

function Total($tanka,$kosu){
    return $tanka*$kosu;
}

foreach($fruits as $key => $value){
    $Goke = Total($value,3);
    echo "$key は $Goke 円です。<br>";

}

?>