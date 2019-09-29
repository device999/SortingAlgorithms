<?php
/*
PHP implementation of buble sort
*/
function sort($arr){
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
    return $arr;
}
?>