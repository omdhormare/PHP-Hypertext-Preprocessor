<?php
{
   $n1=$n;
   $sum=0;
   while($n>0)
   {
    $n=$n%10;
    $sum=$sum+$d*$d*$d;
    $n=$n/10;
   }
   for($i=1;$i<100;$i++)
   {
    if($n1==$sum)
    {
        print("Armstrong No :".$i);
    }
   }

}
?>
