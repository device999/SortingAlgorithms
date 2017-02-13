<?php
/*
Radix sort implementation on PHP
least significant digit
*/
function radixSort($str,$sub)
{
        $swap = true;
        while($swap)
        {
            $swap = false;
            for($i=0;$i<count($str);$i++)
        {
            if($i+1<count($str))
            {
                $pos = strlen($str[$i]);
                $posS = strlen($str[$i+1]);
                if(($posS-$sub>-1)&&($pos-$sub>-1))
                {
                    if(intval($str[$i][$pos-$sub]) > intval($str[$i+1][$posS-$sub]))
                    {
                        $temp = $str[$i];
                        $str[$i] = $str[$i+1];
                        $str[$i+1] = $temp;
                        $swap = true;
                    }
                }
                //else if (($posS-$sub<0) && ($pos-$sub>-1))
                else if ((strlen($str[$i+1])<$sub) && (strlen($str[$i])>=$sub))
                {
                    $temp = $str[$i];
                    $str[$i] = $str[$i+1];
                    $str[$i+1] = $temp;
                    $swap = true;

                }

            }
            
            
        }
        }
return $str;
}
$arr = array(515,51,42,65,11,662,7,12,3,10);
$out = array();
$str = array();
$size= 0;
for($i=0;$i<count($arr);$i++)
{
    $val = strval($arr[$i]);
    array_unshift($str,$val);
    if(strlen(strval($arr[$i]))>$size)
    {
        $size = strlen(strval($arr[$i]));
    }
}

for($i=1;$i<$size+2;$i++)
    {
        $str = radixSort($str,$i);
        print_r($str);
        print "<br/>";
    }
?>