<html>
<body>
<form method="POST" action="sleep no 1.php"><br><br>
Enter String: 
<input type="text" name="t1"><br><br>
<input type="radio" name="r1" value="1">Count Total Vowel<br><br>
<input type="radio" name="r1" value="2">Count Occurrences of vowel<br><br>
<input type="radio" name="r1" value="3">String Palindrome Or Not<br><br>
<input type="submit" value="Check">
</form>
</html>
</body>

<?php
if(isset($_POST["t1"]) && isset($_POST["r1"])) {
    $s1 = $_POST["t1"];
    $ch = $_POST["r1"];

    if($ch == "1") {
        count_vowel($s1);
    }
}

function count_vowel($str) {
    $cnt = 0;
    $n = strlen($str);
    for($i = 0; $i < $n; $i++) {
        if($str[$i] == 'a' || $str[$i] == 'A' || $str[$i] == 'e' || $str[$i] == 'E' || $str[$i] == 'i' || $str[$i] == 'I' || $str[$i] == 'o' || $str[$i] == 'O' || $str[$i] == 'u' || $str[$i] == 'U') {
            $cnt++;
        }
    }
    echo "Vowel count: " . $cnt;
}
?>
