<?php
/*
PHP implementation of selection sort
*/
function selectionSort($arr){
    for($i=0;$i<count($arr)-1;$i++)
    {
        $lowestKey = -1;
        $lowestValue = $arr[$i];
        for($j=$i+1;$j<count($arr);$j++)
        {
            if(($arr[$i]>$arr[$j])&&($arr[$j]<$lowestValue))
            {
                $lowestKey = $j;
                $lowestValue = $arr[$j];
            }

        }
        if($lowestKey!=-1)
            {
                $temp = $arr[$lowestKey];
                $arr[$lowestKey]=$arr[$i];
                $arr[$i] = $temp;
            }

    }
    return $arr;
}
?>