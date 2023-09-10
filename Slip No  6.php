Write a PHP script for the following: Design a form to accept two strings. Compare the two strings using both methods
 (= = operator &strcmp function). 
Append second string to the first string. 
Accept the position from the user; from where the characters from the first string 
are reversed. (Use radio buttons)
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<html>
<head>
<style>
    body 
    {
        background-color: red;
    }

    form {
        color: orange;
     }
  input[type="submit,Check"]
   {
     color: orange;
    }
</style>
</head>
<body>
<form method="POST" action="sleep No 6.php">
Enter String 1 :
<input type="text" name="t1"><br><br>
Enter String 2 :
<input type="text" name="t2"><br><br>
<input type="radio" name="r1" value="1">Comapre The  Two string<br><br>
<input type="radio" name="r1" value="2"> Two string To First string<br><br>
<input type="radio" name="r1" value="3">First String Reverece<br><br>
<input type="submit" value=" Check ">
<input type="Reset">
</form>
</html>
</body>

<?php
 
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$ch=$_POST["r1"];
switch($ch)
{
case 1:
       Comapre($s1,$s2);
              break;
case 2:
       concat($s1,$s2);
              break;
case 3:
        rev($s1);
             break;
}
 
function  Comapre($s1,$s2)
{
    $result = strcmp($s1, $s2);
    if ($result === 0) 
        echo "<br> Strings are equal ";
     else 
        echo "<br> Strings are not equal ";
}

function concat($s1,$s2)
{
    $s =$s1 . $s2;
    echo("Appended second string to the first string: " . $s);
}


function rev($s1)
{
    $s=strrev($s1);
   echo("Reverced string : ".$s);
}
?>