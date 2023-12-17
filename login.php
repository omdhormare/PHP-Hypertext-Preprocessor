<?php
session_start();
include("connect.php");

$mno = $_POST["t1"];
$password = $_POST["t2"];
$role=$_POST['role'];
mysql_select_db("omdada", $con);
$query = "SELECT * FROM user WHERE phone_no='$mno' AND password='$password' AND role='$role'";
$result = mysql_query($query, $con);

if (mysql_num_rows($result)>0) 
{
    $userdata = mysql_fetch_array($result);
    $groups= mysql_query("SELECT * FROM user WHERE role=2");
    $groupsdata=mysql_fetch_all($groups,mysql_fetch_array);

    $_SESSION['userdata'] = $userdata;
    $_SESSION['groupsdata'] = $groupsdata;
}




mysql_close($con);
?>
