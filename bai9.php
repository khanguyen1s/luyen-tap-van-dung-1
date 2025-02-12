<?php
$income = 15000000;
if ($income <= 10000000){
    $thue = $income * 0.05;
    echo "thu nhập sau thuế 5% là :". $thu_nhap = $income - $thue;
}
elseif ($income > 10000000  && $income <= 20000000){
    $thue = $income * 0.10;
    echo "thu nhập sau thuế 5% là :". $thu_nhap = $income - $thue;
}
else{
    $thue = $income * 0.20;
    echo "thu nhập sau thuế 5% là :". $thu_nhap = $income - $thue;
}
?>