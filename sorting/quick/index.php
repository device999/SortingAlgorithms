<?php
/*
PHP implementation of quick sort
*/
function sort($array)
{
    if (count($array) == 0)
        return array();

    $pivot_element = $array[0];
    $left_element = $right_element = array();

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] <$pivot_element)
            $left_element[] = $array[$i];
        else
            $right_element[] = $array[$i];
    }

    return array_merge(quicksort($left_element), array($pivot_element), quicksort($right_element));
}
?>