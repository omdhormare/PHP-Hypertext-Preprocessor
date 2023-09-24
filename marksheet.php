<html>
<head>
    <title>Mark Sheet</title>
</head>
<body align="center">
<?php
error_reporting(0);
echo("<hr>");
echo("<h1>Student MarkSheet</h1>");
echo("<hr>");
echo("<h2>Student Information</h2>");
echo("<hr>");
$sname = $_POST['t1'];
$class = $_POST['t2'];
$addr = $_POST['t3'];

echo("<h3>Student Name: " . $sname . "</h3>");
echo("<h3>Student Class: " . $class . "</h3>");
echo("<h3>Student Address: " . $addr . "</h3>");
echo("<hr>");

echo("<h2>Student Subject Mark</h2>");
echo("<hr>");
$phy = $_POST['t4'];
$bio = $_POST['t5'];
$chem = $_POST['t6'];
$math = $_POST['t7'];
$marati = $_POST['t8'];
$Eng = $_POST['t9'];

echo("<h3> Phy Mark: " .$phy . "</h3>");
echo("<h3> Bio Mark: " .$bio . "</h3>");
echo("<h3> Chem Mark: " .$chem . "</h3>");
echo("<h3> Math Mark: " .$math. "</h3>");
echo("<h3> Marathi Mark: " .$marati . "</h3>");
echo("<h3> English Mark: " .$Eng  . "</h3>");
echo("<hr>");
$total=$phy+$bio+$chem +$math+$marati+$Eng ;
echo("<h2> Total Subject Mark: " .$total. "</h2>");
$per=$total/6;
echo("<h2> Percentage Of Student: " .$per. "</h2>");
?>
</body>
</html>
