<html>
<body bgcolor="red">
<form align="left" method="POST" action="h.php"><br><br>
Enter String 1:
<input type="text" name="t1"><br><br>

Enter String 2:
<input type="text" name="t2"><br><br>

<input type="radio" name="r1" value="1">Compare The string<br><br>

<input type="radio" name="r1" value="2">Append The String<br><br>

<input type="radio" name="r1" value="3">Reverce the string<br><br>
        <div>
            <span style="color: red;">
                <input type="submit">
            </span>
            <span style="color: blue">
                <input type="reset">
            </span>
        </div>
    </form>
</body>
</html>

<body align="cente">
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$ch=$_POST["r1"];

switch($ch)
{
case 1:
Compare($s1,$s2);
    break;
case 2:
 Append($s1,$s2);
  break;
case 3:
   rev($s1);
   break;
}
function Compare($s1,$s2)
{
$s=strcmp($s1===$s2);
if($s===0)
echo("<br> String Are Equal.........");
else
echo("<br> String  NOT Equal.........");
}

function Append($s1,$s2)
{
$s=($s1.$s2);
echo("<br> Append String : ".$s);
}

function Rev($s1)
{
$s=strrev($s1);
echo("<br> Rev String : ".$s);
}

?>
</body>