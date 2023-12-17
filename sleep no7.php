<html>
<head>
<h1 align="center">Operations On  Associative Array</h1>
<style>
  body {
    background-color: black;
    color: white;
   cursor: pointer;
    h1;
  }
  
  input[type="radio"],
  input[type="submit"],
  input[type="reset"]
{
    cursor: pointer;
   background-color: orange;
    color: white;
    padding: 5px 10px;
    border: none;
}
  
</style>
</head>
<body>
<form  method="POST" action="sleep no7.php">
  <input type="radio" name="r1" value=1>Display<br><br>
  <input type="radio" name="r1" value=2>Size of Array<br><br>
  <input type="radio" name="r1" value=3>Delete Array<br><br>
  <input type="radio" name="r1" value=4>Reverse of Array<br><br>
  <input type="radio" name="r1" value=5>Traverse the elements<br><br>
  <input type="submit" value="Ok">  <input type="reset" value="Clear"><br>
</form>
</body>
</html>

<?php
$a=array("Rno"=>1,"Name"=>'Om',"Per"=>86,"Class"=>'Sy');
$ch=$_POST["r1"];
switch($ch)
{
case 1:
         foreach($a AS $key=>$val)
          {
               echo("<br> Key : ".$key);
               echo("<br> val : ".$val);
         }
           break;
case 2:
            echo("<br>Size of Array : ");
             print_r(count($a));
             break;
case 3:
             echo("<br>Delete Array : ");
            $a=array();
            print_r($a);
            break;
case 4:
           echo("<br>Reverse Array : ");
           $a=array_reverse($a);
           print_r($a);
           break;
case 5:
          echo("<br>Traverse Array : ");
          shuffle($a);
          print_r($a);
          break;
}
?>
</body>