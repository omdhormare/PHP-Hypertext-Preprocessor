<html>
<body>
<form method="POST" action="delete row.php">
Enter Roll No:
<input type="text" name="t1"><br><br>
<input type="submit" value="  Delete  "><br>
</html>
</body>
</form>

<?php
$con=mysql_connect("localhost","root","");
if($con==false)
{
die("<h3> Not Connect Error On connectivity.......");
}
$rno=$_POST["t1"];
mysql_query("use om");
mysql_query("delete from student where rno=$rno");
$s=mysql_affected_rows();
if($s>0)
echo("<h3>No Of Record  .....".$s);
else{
echo("<h3>Record Not Found.....");
}
?>
