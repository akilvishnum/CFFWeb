<?php
     $a="mam ";
       $i=0; while($a[$i]!='\0'){$i++; };
     palindrome($a,$i);
    





function palindrome($a,$i)
{


for($k=0,$j=$i-1; $k<=$i; $k++,$j-- )
{
    
    $b[$k]=$a[$j];
    
}
    if($a===$b)
        echo "Palindrome";
    else
        echo "Not a Palindrome";
}
  ?>   