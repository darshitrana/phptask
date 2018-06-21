<?php

$count=0;
for($i=0;$i<4;$i++)
{
    echo "@";
    for($j=0;$j<3;$j++)
    {
        $count++;
    }
    echo "#";
    echo "<br/>";
}

echo "<br/>".$count;
?>