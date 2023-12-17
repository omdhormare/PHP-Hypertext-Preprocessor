<body>
    <form method="POST" action="odd.php">
        Enter no:
        <input type="text" name="t1"><br>
        <input type="submit" value="Calculate"><br>
    </form>

    <?php
        $n = $_POST["t1"];
        $sum = 0;

        while ($n > 0)
 {
            $sum = $sum + $n;
            
        }

        if ($n % $i != 1)
 {
            echo "Sum of odd: " . $sum;
        }
    ?>
</body>
