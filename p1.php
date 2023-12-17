<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <h1>String Operations</h1>
    <form action="p1.php" method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <br>
        <label>Choose an operation:</label>
        <br>
        <input type="radio" id="countVowels" name="operation" value="countVowels" required>
        <label for="countVowels">Count Vowels</label>
        <br>
        <input type="radio" id="vowelOccurrences" name="operation" value="vowelOccurrences">
        <label for="vowelOccurrences">Vowel Occurrences</label>
        <br>
        <input type="radio" id="checkPalindrome" name="operation" value="checkPalindrome">
        <label for="checkPalindrome">Check Palindrome</label>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
function countVowels($str)
{
    return preg_match_all('/[aeiou]/i', $str);
}

function countVowelOccurrences($str)
{
    $vowelOccurrences = array('a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0);
    $strLower = strtolower($str);

    for ($i = 0; $i < strlen($strLower); $i++)
 {
        $char = $strLower[$i];
        if (array_key_exists($char, $vowelOccurrences)) 
{
            $vowelOccurrences[$char]++;
        }
    }

    return $vowelOccurrences;
}

function isPalindrome($str)
{
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str));
    $reverseStr = strrev($str);

    return $str === $reverseStr;
}
?>











