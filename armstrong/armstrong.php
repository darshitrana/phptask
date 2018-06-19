<?php
$a=371;
$temp=0;
$sum=$a;
while($temp!=0)
{
    $r=$sum%10;
    $temp=$temp+$r*$r*$r;
    $sum=$sum/10;
}
if($a==$sum)
{
    echo"it is armstrong";
}
else
{
    echo"not armstrong";
}
?>