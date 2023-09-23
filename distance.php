<?php
error_reporting(0);
$dis=$_POST["t1"];
$t2=$_POST["t2"];

if($t2==="mile_to_kilometer")
{
  $k=$dis*1.6;
  echo("<h1> Mile To Kilometer Conver :".$k."</h1> ");
}
elseif($t2==="kilometer_to_mile")
{
  $mil=$dis/1.6;
 echo("<h1> Kilometer To Mile :".$mil."</h1> ");
}
?>