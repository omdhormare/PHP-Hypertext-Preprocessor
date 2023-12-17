<html>
<body>
<form method="POST" action="slip No 16.php">
  Enter Customer Name:
  <input type="text" name="t1"><br><br>
  Enter Customer Number:
  <input type="text" name="t2"><br><br>
  Enter the Use of Electricity Units:
  <input type="text" name="t3"><br><br>
  <input type="submit">
</form>
<?php
if(isset($_POST["t1"])&&isset($_POST["t2"])&&isset($_POST["t3"]))
{
$name = $_POST["t1"];
$no = $_POST["t2"];
$unit = $_POST["t3"];
$total = 150;

if ($unit <= 50)
  $total = $total + $unit * 3.50;
else if ($unit > 50 && $unit <= 150)
{
  $total = $total + $unit * 4.00;
}
else if ($unit > 150 && $unit <= 250)
{
  $total = $total + $unit * 5.20;
}
else if ($unit > 250)
{
  $total = $total + $unit * 6.20;
}

echo ("<h3><br>Customer Name: " . $name);
echo ("<h3><br>Customer Number: " . $no);
echo ("<h3><brNo Of Unit: " . $unit);
echo ("<h3><br>Total Bill: " . $total);
}
?>
</body>
</html>
