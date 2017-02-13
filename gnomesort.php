<?php
/*
PHP implementation of gnome sort

Gnome Sort is based on the technique used by the standard Dutch Garden Gnome (Du.: tuinkabouter). 
Here is how a garden gnome sorts a line of flower pots. Basically, he looks at the flower pot next to him and the previous one; 
if they are in the right order he steps one pot forward, otherwise he swaps them and steps one pot backwards. 
Boundary conditions: if there is no previous pot, he steps forwards; if there is no pot next to him, he is done.
*/
$arr = array(514,7642,32,234,4,21,550,78,12,45);
print_r($arr);
print "<br/>";
print "Here we begin";
print "<br/>";
$i=0;
while($i<count($arr))
{
	if(($i==0 )||($arr[$i-1]<=$arr[$i]))
	{
		$i++;
	}
	else
	{
		$tmp = $arr[$i];
		$arr[$i] = $arr[$i-1];
		$arr[--$i]=$tmp;
	}
}
print_r($arr);
?>