<?php
/*
Algorithm of insertion sort;
Array is given by us.
*/
function insert($ourArr)
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
$beforeS = array(3,14,5,7,10,1,56,100,2);
$beforeS = insert($beforeS);
print_r($beforeS);
?>