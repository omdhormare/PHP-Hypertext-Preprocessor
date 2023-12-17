<html>
    <body>
        <form method="POST" Action="w.php">
Enter No:
<input type="text" name="t1"><br>
Enter No 2:
<input type="text" name="t2"><br>
<input type="submit" value="Button"><br>
Ans:
            <input type="text" name="t3" value="<?php echo isset($c) ? $c : ''; ?>">

<body>
    <form>
        <html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$c=$a+$b;
echo ("Adttion :" .$c);
 