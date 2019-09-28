<?php
/*
Comb sort php implementation
http://www.geeksforgeeks.org/comb-sort/
Comb Sort is mainly an improvement over Bubble Sort. 
Bubble sort always compares adjacent values. 
So all inversions are removed one by one. 
Comb Sort improves on Bubble Sort by using gap of size more than 1. 
The gap starts with a large value and shrinks by a factor of 1.3 in every iteration until it reaches the value 1. 
Thus Comb Sort removes more than one inversion counts with one swap and performs better than Bublle Sort.
*/
$arr = array(8, 4, 1, 56, 3, -44, 23, -6, 28, 0);
$gap = 1.3;
$step = intval(count($arr)/$gap);
print_r($arr);
print "<br/>";

$swap = true;
while($step>=1)
{
	for($i=0;$i<count($arr);$i++)
	{
		$j = $i+$step;
		if(($j<count($arr)) &&($arr[$i]>$arr[$j]))
		{
			$temp = $arr[$j];
			$arr[$j] = $arr[$i];
			$arr[$i] = $temp;
			
		}
	}
	$step = intval($step /$gap);
	print_r($arr);
	print "<br/>";
}
print_r($arr);
?>