<?php

/*
Odd-even sort
This is basically a variation of bubble-sort. This algorithm is divided into two phases- Odd and Even Phase. 
The algorithm runs until the array elements are sorted and in each iteration two phases occurs- Odd and Even Phases.
*/
$arr = array(4101,14111,223,3765,415,7771,1524,5134);
print_r($arr);
print "<br/>";
for($i=0;$i<count($arr);$i++)
{
	if (($i+1<count($arr))&&($arr[$i]>$arr[$i+1]))
	{
		$temp = $arr[$i];
		$arr[$i] = $arr[$i+1];
		$arr[$i+1] = $temp;
		$i=-1;
	}
}
print_r($arr);
?>