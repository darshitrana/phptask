<?php
$n=123;
$p=$n;
$rvn=0;
while($n!=0)
{
    $rvn=$rvn*10+$n%10;
    $n=$n/10;
}
if($rvn==$p)
{
    echo"$p is palindrome";
}
else
    {
        echo"$p is not palindrome";
    }
    ?>