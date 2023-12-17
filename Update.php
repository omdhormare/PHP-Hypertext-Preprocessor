<html>
 <form method="POST" action="update.php">
Enter Student Roll No:<br>
<input type="text" name="t1"><br>
Enter Student Name UPDATE:<br>
<input type="text" name="t2"><br>
Enter Student Per UPDATE:<br>
<input type="text" name="t3"><br>
<input type="submit" value="   UPDATE  "><hr>
</form>

<?php
$con=mysql_connect("localhost","root","");
if($con==false)
{
die("<h2> Database Can't connect....");
}
$rno=$_POST["t1"];
$name=$_POST["t2"];
$per=$_POST["t3"];
mysql_query("use om");
mysql_query("update student set name='$name',per=$per WHERE rno=$rno ");
$u=mysql_affected_rows();
if($u>0)
echo("Record Update Succefully ");
else
echo("Record Update NOT Succefully ");
?>











