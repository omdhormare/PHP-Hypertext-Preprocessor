<h1>Indexed Array</h1>
1) Using print_r();<br>
2) Using for loop<br>
3)Using foreach
---------------------------------------------------------------------------------------------------
<?php
//$a=array("1","om","85.38");
//echo("<br>");
//print_r($a);


//$a=array(1,"om",85.38);
//for($i=0;$i<3;$i++)
//{
//echo("<br>".$a[$i]);
//}
echo("<br><br><br>");
$a=array("1","om","85.38");
foreach($a as $val)
{
echo("<br>".$val);
}
?>