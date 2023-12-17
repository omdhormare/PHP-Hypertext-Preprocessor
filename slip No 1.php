<html>
    <body>
        <form method="POST" action="slip No 1.php">
            Enter The String :
            <input type="text" name="t1"><br>
            <input type="radio" name="t2" value="1">Total No Of Vowel<br>
            <input type="radio" name="t2" value="2">Occurances of each Vowel<br>
            <input type="radio" name="t2" value="3">Palindrom Or Not<br>
            <input type="submit">
</html>
</form>
<?php
error_reporting(0);
$s1=$_POST["t1"];
$ch=$_POST["t2"];
switch($ch)
{
    case '1':total_vowel($s1);
    break;
    case '2':total_occu($s1);
    break;
    case '3':palindrom($s1);
    break;
}
function total_vowel($s1)
{
    $cnt=0;
    for($i=0;$i<strlen($s1);$i++)
    {
        if($s1[$i]=='a'||$s1[$i]=='A'||$s1[$i]=='E'||
        $s1[$i]=='e'||$s1[$i]=='I'||
        $s1[$i]=='i'||$s1[$i]=='o'||$s1[$i]=='O'||$s1[$i]=='U'||
        $s1[$i]=='u')
        {
            $cnt++;
        }
    }
    echo("<br>Total Vowel Count :".$cnt);
}
function total_occu($s1)
{
    $a1=0;
    $e2=0;
    $i3=0;
    $o4=0;
    $u5=0;
    for($i=0;$i<strlen($s1);$i++)
    {
        if($s1[$i]=='A'||$s1[$i]=='a')
        {
            $a1++;
        }
        if($s1[$i]=='e'||$s1[$i]=='E')
        {
            $e2++;
        }
        if($s1[$i]=='i'||$s1[$i]=='I')
        {
            $i3++;
        }
        if($s1[$i]=='o'||$s1[$i]=='O')
        {
            $o4++;
        }
        if($s1[$i]=='U'||$s1[$i]=='u')
        {
            $u5++;
        }
    }
    echo("<br> Total A Count : ".$a1);
    echo("<br> Total E Count : ".$e2);
    echo("<br> Total i Count : ".$i3);
    echo("<br> Total O Count : ".$o4);
    echo("<br> Total U Count : ".$u5);
}
function palindrom($s1)
{
   $rev=strrev($s1);
   if($rev==$s1)
   echo("Palindrom...<br>");
  else
   echo("<br> Not Palindrom..");
}
?>            