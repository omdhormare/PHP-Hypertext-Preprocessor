<html>
<head>
    <title>PHP Database Connectivity</title>
</head>
<body style="text-align: center;">
    <form method="POST" action="connect.php">
        <hr>
        <h1>PHP Database Connectivity</h1>
        <hr>
        <h2>Enter Student Roll No:<br>
            <input type="text" name="t1"><br>
        </h2>
        <h2>Enter Student Name:<br>
            <input type="text" name="t2"><br>
        </h2>
        <h2>Enter Student Per:<br>
            <input type="text" name="t3"><br>
        </h2>
     <input type="reset" value="CLEAR">   &nbsp;&nbsp;<input type="submit" value="INSERT"><hr>
    </form>

<?php
$con=mysql_connect("localhost","root","");
if($con==false)
{
echo("<h2> Not Connected Database.....");
}
$sno=$_POST["t1"];
$name=$_POST["t2"];
$sper=$_POST["t3"];
mysql_query("use om");
$k=mysql_query("insert Into student values($sno,'$name',$sper)");

if($k==true)
echo("<h2>Insert Succefully..........");
else
echo("<h2>Insert NOT Succefully. INSERT.........");
?>


