<?php 
error_reporting(0);
$code = $_POST["t1"];
$Name = $_POST["t2"];
$sold = $_POST["t3"];
$rate = $_POST["t4"];

$a = explode(" ", $code);
$b = explode(" ", $Name);
$c = explode(" ", $sold);
$d = explode(" ", $rate);

echo("<table border='2' style='width: 85%;' align='center' bgcolor='orange'>");
echo("<tr><th size='10';style='text-align: center'> Item Code ");
echo("<th> Item Name");
echo("<th> Item Sold ");
echo("<th> Item Rate ");
echo("</th></tr>");

$total = 0; 

for ($i = 0; $i < count($a); $i++)
 {
    echo("<tr><td>" . ($i+ 1) ); 
    echo("<td>" . $b[$i] . "</td>");
    echo("<td>" . $c[$i] . "</td>");
    echo("<td>" . $d[$i] . "</td>");
    $itemTotal = $c[$i] * $d[$i];
    echo("</tr>");
    $total =$total+$itemTotal; 
}
echo("</table>");
echo("<h2 style='text-align: center; font-family: Bernard MT;'> Total Bill Amount : " . $total . "</h2>");

?>
