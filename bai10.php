<?php
$weight = 70;
$height = 1.75;
$bmi = $weight * ($height*$height);

if ($bmi < 18.5){
    echo "Thiếu cân";
}
elseif ($bmi >= 18.5  && $bmi < 24.9){
    echo "Bình thường";
}
elseif ($bmi >= 25  && $bmi < 29.9){
    echo "Thừa cân";
}
else{   
    echo "Béo phì";
}
?>