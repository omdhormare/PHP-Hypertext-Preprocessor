<html>
    <form method="POST" action="print table.php">
        Enter No:
        <input type="text" name="n1"><br>
        <input type="submit" value="print"><br>
</form>
</html>
<?php
$n=$_POST["n1"];
    for($i=1;$i<=10;$i++)
    {
       echo("<br>".$n*$i);
    }

?>