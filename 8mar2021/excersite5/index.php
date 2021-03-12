<?php
$x = 160;
$a = $x * 450;
$y = (10/100) * $a;
$z = $x - 100;
$b = $a + ($z*600);
$n = $x - 200;
$c = $a + $b +  ($n*750);
$m = $x - 300;
$d = $ + ($m*900);

if ($x <= "100") {
    echo "truoc khi tinh thue VAT: " . $a . "<br>";
    echo "sau khi tinh thue VAT: " . ($a + $y) . "<br>";
}
elseif ("101"<$x && $x < "200"){
    echo "truoc khi tinh thue VAT" . $b . "<br>";
    echo "sau khi tinh thue VAT" . ($b+$y) . "<br>";
}
elseif ("201" < $x && $x < "300") {
    echo "truoc khi tinh thue VAT" . $c . "<br>";
    echo "sau khi tinh thue VAT" . ($c+$y) . "<br>";
}
elseif ("201" < $x && $x < "300") {
    echo "truoc khi tinh thue VAT" . $c . "<br>";
    echo "sau khi tinh thue VAT" . ($c+$y) . "<br>";
}


?>