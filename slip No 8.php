<html>
<body>
<h1>Operations on associative arrays</h1> 
<form method="POST" action="slip No 8.php">
<input type="radio" name="t1" value="1">(a) Sort the array by values (changing the keys) in ascending, descending order<br><br>
<input type="radio" name="t1" value="2">(b) Also sort the array by values without changing the keys. <br><br>
<input type="radio" name="t1" value="3">(c) Filter the odd elements from an array. <br><br>
<input type="radio" name="t1" value="4">(d) Sort the different arrays at a glance using single function.  <br><br>
<input type="radio" name="t1" value="5">(e) Merge the given arrays.. <br><br>
<input type="radio" name="t1" value="6">(f) Find the Union, intersection& set difference of two arrays<br><br>
<input type="submit" value="Check">
<?php
error_reporting(0);
$s1=$_POST["t1"];
$a1=array("a"=>1,"b"=>3,"c"=>7,"d"=>1);
$a2=array("E"=>10,"F"=>5,"g"=>7,"E"=>15);
switch($s1)
{
    case 1:
        asort($a1);
        print("<br>Ascending Order:\n<br>");
        print_r($a1);
     
        arsort($a1);
        print("<br>Descending Order:\n<br>");
        print_r($a1);
        break;
case 2:
        arsort($a1);
        echo "<br>Descending Order without changing keys:<br>";
        print_r($a1);
        break;
case 3:
           foreach ($a1 as $key => $value)
           if ($value % 2 == 1)
           echo("<br>Odd Number: " .$value);
           break;
case 5:
           $c=array_merge($a1,$a2);
           print("<br> Merge Of Two Array <br>");
           print_r($c);
           break;
case 6:
        $union = array_unique(array_merge($a1, $a2));
        $intersection = array_intersect($a1, $a2);
        $difference = array_diff($a1, $a2);
        
        echo("<br>Union: ");
        print_r($union);
        echo("<br>Intersection:  ");
        print_r($intersection);
        echo("<br>Set Difference:  ");
        print_r($difference);
        break;

}
?>





