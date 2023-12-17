<html>
<body>
<title>Arithmetic Operation</title>
<h2 >Arithmetic Operation</h2>
<form method="POST" action="practice.php">
Enter No 1:
<input type="text" name="t1"><br>
<br>
Enter No 2:
<input type="text" name="t2"><br>
<br>
<input type="radio" name="r1" value="1">Addtion<br>
<br>
<input type="radio" name="r1" value="2">Substraction<br>
<br>
<input type="radio" name="r1" value="3">Multiplicaton<br>
<br>
<input type="radio" name="r1" value="4">Division<br>
<br>
<input type="submit" value="  Calculate  ">
<br>
<br>

<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["r1"];
switch($ch)
{
Add($a,$b);
sub($a,$b);
mul($a,$b);
div($a,$b);
}
case 1: 
      function Add()
    {
      $c=$a+$b;
    echo("Addtion : ".$c);
       break;
     }
  case 2:        
    function sub()
     {
       $c=$a-$b;
     echo("Substraction : ".$c);
       break;
     }
case 3: 
 function mul()
     {
       $c=$a*$b;
       echo("Multiplication : ".$c);
      break;
     }
case 4: 
    function div()
     {
     $c=$a*$b;
    echo("Division : ".$c);
       break;
    }


?>













