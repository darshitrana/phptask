<?php
$a = 1;
for ($i = 1; $i < 4; $i++) {

    for ($j = 1; $j < 4; $j++) {
//        if()
        echo $a++ . " ";


    }
    echo "<br/>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
$b = 1;
$sum = 0;
for ($i = 1; $i < 4; $i++) {

    for ($j = 1; $j < 4; $j++) {
        if ($i == $j) {
            echo "#" . "   ";
        }
        else {
            echo $b . " ";
            $sum = $sum + $b;

        }
        $b++;


    }
    echo "<br/>";


}

echo "sum is : " . $sum;
?>