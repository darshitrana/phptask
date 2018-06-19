<?php
$evenCount=0;
$oddCount=0;
for($i=1;$i<=50;$i++)
{

    if($i%2==0)
    {
//        echo"even"."</br>";
        $evenCount++;
    }
    else
    {
//        echo"odd"."</br>";
        $oddCount++;
    }
}
echo"$evenCount";
echo"$oddCount";
?>