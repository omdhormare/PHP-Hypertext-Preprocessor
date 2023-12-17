<?php
$n1=$_POST["t1"];
$n2=$_POST["t2"];
$n3=$_POST["t3"];
$n4=$_POST["t4"];

$a=explode(' ',$n1);
$b=explode(' ',$n2);
$c=explode(' ',$n3);
$d=explode(' ',$n4);

echo("<table border='1'>");
echo("<tr><th> Item Code");
echo("<th> Item Name");
echo("<th> Item unit sold");
echo("<th> Item Rate");
echo("</th></tr>");

$total=0;
for($i=0;$i<count($a);$i++)
{
    echo("<tr><td>".($i+1));
    echo("<td>".$b[$i]."</td>");
    echo("<td>".$c[$i]."</td>");
    echo("<td>".$d[$i]."</td>");
    $t=$c[$i] * $d[$i];
    echo("</tr>");
    $total=$total+$t;
}
echo("</table>");
echo("<br><h3><u><p><b>The Total Bill : ".$total);
?>