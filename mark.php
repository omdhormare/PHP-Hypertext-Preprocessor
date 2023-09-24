<!DOCTYPE html>
<html>
<head>
    <title>Student Mark</title>
</head>
<body align="center">
    <form method="POST" action="marksheet.php">
        <hr>
        <h1>Student Subject Mark</h1>
        <hr>
        <h3>Enter Phy Mark:<br>
        <input type="text" name="t4"><br>
        Enter Bio Mark:<br>
        <input type="text" name="t5"><br>
        Enter chem Mark:<br>
        <input type="text" name="t6"><br>
        Enter Maths Mark:<br>
        <input type="text" name="t7"><br>
        Enter Marathi Mark:<br>
        <input type="text" name="t8"><br>
        Enter English Mark:<br>
        <input type="text" name="t9"><br>
        <hr>
        <input type="reset" value="  Back  ">
        <input type="submit" value="  Next  ">

        <input type="hidden" name="t1" value="<?php echo $_POST['t1']; ?>">
        <input type="hidden" name="t2" value="<?php echo $_POST['t2']; ?>">
        <input type="hidden" name="t3" value="<?php echo $_POST['t3']; ?>">
    </form>
</body>
</html>
