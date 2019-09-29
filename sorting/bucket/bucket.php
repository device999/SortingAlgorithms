<?php
/*
PHP implementation of Bucket Sorting
we use buble sorting as a main sorting function.
Main point here is divide and conquer strategy.
*/
function bubleSort($arr)
{
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
        return $arr;
    }
}
}
$arr = array(4,54,12,34,65,54,76,55,45);
print_r($arr);
print "<br/>";
print "After Sorting";
print "<br/>";
$firstPart = array();
$secondPart = array();
for($i=0;$i<count($arr);$i++)
{
    if($arr[$i]<40)
    {
        array_push($firstPart,$arr[$i]);
    }
    else
    {
        array_push($secondPart,$arr[$i]);
    }
}
$firstPart = bubleSort($firstPart);
$secondPart = bubleSort($secondPart);
$arr = array();
for($i=0;$i<count($firstPart);$i++)
{
    array_push($arr,$firstPart[$i]);
}
for($i=0;$i<count($secondPart);$i++)
{
    array_push($arr,$secondPart[$i]);
}
print_r($arr);
?>