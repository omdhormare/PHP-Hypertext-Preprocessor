<html>
<body>
<form method="POST" action="p9.php"><br><br>
Enter String : 
<input type="text" name="t1"><br><br>
<input type="radio" name="r1" value="1">Count Vowel<br><br>
<input type="radio" name="r1" value="2">Occurances of Each  Vowel String<br><br>
<input type="radio" name="r1" value="3">Palindrom String Or Not <br><br>
<input type="submit" value="  Check  "><br><br><br>

<?php
$s1=$_POST["t1"];
$ch=$_POST["r1"];
switch($ch)
{
     case 1:
count_vowel($s1);
      break;

     case 2:
Occurance($s1);
    break;

       case 3:
palindrom_Or_not($s1);
         break;
}

function count_vowel($s1)
{
$cnt=0;
for($i=0;$i<strlen($s1);$i++)
{
if($s1[$i]=='a'|| $s1[$i]=='A'|| $s1[$i]=='e'|| $s1[$i]=='E'|| $s1[$i]=='i'|| $s1[$i]=='I'|| $s1[$i]=='O'|| $s1[$i]=='o'|| $s1[$i]=='u'||$s1[$i]=='U')
$cnt++;
}
echo("<br> Vowel Count : ".$cnt);
}

function Occurance($s1)
{
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
for($i=0;$i<strlen($s1);$i++)
{
if($s1[$i]=='a' || $s1[$i]=='A' )
{
$a++;
}
if($s1[$i]=='u' || $s1[$i]=='U' )
{
$b++;
}
if($s1[$i]=='e' || $s1[$i]=='E' )
{
$c++;
}
if($s1[$i]=='i' || $s1[$i]=='I' )
{
$d++;
}
if($s1[$i]=='o' || $s1[$i]=='O' )
{
$e++;
}
}
echo("<br>A count   :  ".$a);
echo("<br>U count   :  ".$b);
echo("<br>E count   :  ".$c);
echo("<br>I count    :  ".$d);
echo("<br>O count  :  ".$e);
}

function palindrom_Or_not($s1)
{
$rev=strrev("$s1");
if($rev==$s1)
echo("<br>Palindrom String ");
else
echo("<br>Not Palindrom String ");
}
?>
