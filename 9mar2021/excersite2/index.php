<?php
$mang_so_nguyen = "5,6,1,8,3,9";
$mang_tam = explode(',', $mang_so_nguyen);
$tong_gia_tri = 0;
$do_dai_mang = count($mang_tam);
foreach($mang_tam as $gia_tri)
{
    $tong_gia_tri += $gia_tri;
}
$gia_tri_trung_binh = $tong_gia_tri/$do_dai_mang;
echo "Giá trị trung bình: ".$gia_tri_trung_binh."";
sort($mang_tam);
echo "<br>Liệt kê số nguyên nhỏ nhất: ";
for ($i=0; $i < 1; $i++)
{
    echo $mang_tam[$i].", ";
}
echo "<br>Liệt kê số nguyên lớn nhất: ";
for ($i=($do_dai_mang-1); $i < ($do_dai_mang); $i++)
{
    echo $mang_tam[$i].", ";
}
?>

