<html>
<title>Word</title>
<form method="POST" action="p6.php">
Entre No:
<input type="text" name="t1"><br>
<input type="submit" value="Check">
</form>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n = $_POST["t1"];
    $s = 0;

    while ((int)$n > 0) {
        $d = $n % 10;
        $s = $s * 10 + $d;
        $n = (int)($n / 10);
    }

    while ($s > 0) {
        $d = $s % 10;
        $s = (int)($s / 10);

        switch ($d) {
            case 1:
                echo "One";
                break;
            case 2:
                echo "Two";
                break;
            case 3:
                echo "Three";
                break;
            case 4:
                echo "Four";
                break;
            case 5:
                echo "Five";
                break;
            case 6:
                echo "Six";
                break;
            case 7:
                echo "Seven";
                break;
            case 8:
                echo "Eight";
                break;
            case 9:
                echo "Nine";
                break;
            case 0:
                echo "Zero";
                break;
        }
    }
}
?>
