<html>
<body>
    <form method="POST" action="slip No 14.php">
        Enter the Email Id :
        <input type="text" name="t1" size="50" placeholder="Email-Id"><br>
        <input type="submit">

<?php
$e = $_POST["t1"];
$p = "/^[a-zA-Z0-9_]+@[a-z]+\.[a-z]{2,3}$/";
if (preg_match($p, $e)) 
    echo("<br> Valid Email...");
else 
    echo("<br> Invalid Email....");
?>
</body>
</html>         