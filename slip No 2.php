<html>
    <body>
        <hr>
        <form method="POST" action="slip No 2.php" onsubmit="clearForm()">
            Enter The large string :
            <input type="text" name="t1"><br><br>
            Enter The Small String :
            <input type="text" name="t2"><br><br>
            Enter The Replace string :
            <input type="text" name="t3"><br><br>
            <input type="radio" name="t4" value="1">Find First Occurances<br>
            <input type="radio" name="t4" value="2">Find last Occurances<br>
            <input type="radio" name="t4" value="3">Total No Occurances<br>
            <input type="radio" name="t4" value="4">Replace<br>
            <input type="submit">
<hr>
<?php
error_reporting(0);
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$s3=$_POST["t3"];
$ch=$_POST["t4"];
switch($ch)
{
    case '1':
            echo("<br>First Occurances : ".strpos($s1,$s2));
            break;
    case '2':
             echo("<br>Last Occurances :".strrpos($s1,$s2));
             break;
    case '3':
            echo("<br> Total No Occurances :".substr_count($s1,$s2));
            break;
    case '4':
             echo("<Br> string After Replace :".str_replace($s2,$s3,$s1));
             break;      
                                
}
?>