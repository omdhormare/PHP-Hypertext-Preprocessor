<?php
$con=mysql_connect("localhost","root","");
if($con==false)
{
die("<h2> Database Can't connect....");
}

mysql_select_db("use om");
$res=mysql_query("select * from student");
while ($row = mysql_fetch_array($res))
{
echo("<h2><br><br>Student Roll No :".$row[0]);
echo("<h2><br>Student Name  :".$row[1]);
echo("<h2><br>Student Per :".$row[2]);
}
mysql_close($con);
?>


