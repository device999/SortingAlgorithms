<?php
/*
PHP implementation of buble sort

This is usually uses swaps
*/
$arr = array(45,12,4,234,23,12,3,41,65);
while(true)
{
    $swapped = false;
    for($i=1;$i<count($arr);$i++)
    {
        if($arr[$i-1]>$arr[$i])
        {
            $temp = $arr[$i-1];
            $arr[$i-1]=$arr[$i];
            $arr[$i] = $temp;
            $swapped = true;
        }
    }
    if(!$swapped)
    {
        break;
    }
}
print_r($arr);
?>