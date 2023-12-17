<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<form method="POST" action="slip No 17.php">
    <label for="t1">Enter Name:</label>
    <input type="text" name="t1" id="t1" required><br><br>
    
    <label for="t2">Course To Be Admitted:</label>
    <input type="text" name="t2" id="t2" required><br><br>
    
    <label for="t3">Enter Mobile Number:</label>
    <input type="text" name="t3" id="t3" required><br><br>
    
    <input type="submit" value="Register">
</form>

<?php
    if (isset($_POST['t1']) && isset($_POST['t2']) && isset($_POST['t3'])) 
{
        $name = $_POST['t1'];
        $course = $_POST['t2'];
        $mno = $_POST['t3'];

        if (preg_match("/^[A-Za-z ]+$/", $name) && 
        preg_match('/^[0-9]{10}$/', $mno)) 
{
            $rno = uniqid('RES');
            echo("Register Succefully....");
            echo("<br> Name: " . $name );
            echo("<br> Course: " . $course);
            echo("<br>Phone No: " . $mno);
            echo("<br> Feedback of Register No: " . $rno );
}
        else 
         {
            if (!preg_match("/^[A-Za-z ]+$/", $name))
                echo("<p>Invalid Name. Please enter a name with letters only.</p>");

            if (!preg_match("/^[0-9]{10}$/", $mno)) 
                echo("<p>Phone No Must Be 10 Digits.</p>");
       }
}
?>
</body>
</html>
