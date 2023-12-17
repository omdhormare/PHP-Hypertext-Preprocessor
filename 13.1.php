<?php
$k=$_POST["t1"];
$ch=$_POST["r1"];
switch($ch)
{
    case 1: $a=1.609*$k;
            echo("<br><h2>Miles To Kilometer  : ".$a);
            break;
    case 2: $a=1.609/$k;
            echo("<br><h2> Kilometer To Miles : ".$a);
            break;
}

?>