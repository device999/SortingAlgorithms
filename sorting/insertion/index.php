<?php
/*
Algorithm of insertion sort;
*/
function insertionSort($ourArr)
{
	for($i=0;$i<count($ourArr);$i++)
	{
		$inVal = $ourArr[$i];
		$j = $i-1;
		while(($j>=0) && ($ourArr[$j]>$inVal))
		{
			$ourArr[$j+1] = $ourArr[$j];
			$j = $j -1;
		}
		$ourArr[$j+1] = $inVal;
	}
	return $ourArr;
}
?>