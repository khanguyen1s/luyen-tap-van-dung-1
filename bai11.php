<?php
$gia_bac_1 = 1678;
$gia_bac_2 = 1734;
$gia_bac_3 = 2014;
$tong_tien = 0;
$tien_dien = 0;
$so_kwh = 120;


if ($so_kwh <= 50) {
    $tongTien = $so_kwh * $gia_bac_1;
} elseif ($so_kwh <= 100) {
    $tongTien = (50 * $gia_bac_1) + (($so_kwh - 50) * $gia_bac_2);
} else {
    $tongTien = (50 * $gia_bac_1) + (50 * $gia_bac_2) + (($so_kwh - 100) * $gia_bac_3);
}
echo "Tổng tiền điện cho $so_kwh kWh là: $tongTien VNĐ";
?>
