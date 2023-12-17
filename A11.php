<!DOCTYPE html>
<html>
<head>
    <title>Student Information and Mark Sheet</title>
</head>
<body>
    <?php
    // Variables to store student information and marks
    $name = $class = $address = $phy = $bio = $chem = $maths = $marathi = $english = "";
    $total = $percentage = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect student information
        $name = $_POST["name"];
        $class = $_POST["class"];
        $address = $_POST["address"];

        // Collect marks and calculate total and percentage
        $phy = (isset($_POST["phy"])) ? $_POST["phy"] : 0;
        $bio = (isset($_POST["bio"])) ? $_POST["bio"] : 0;
        $chem = (isset($_POST["chem"])) ? $_POST["chem"] : 0;
        $maths = (isset($_POST["maths"])) ? $_POST["maths"] : 0;
        $marathi = (isset($_POST["marathi"])) ? $_POST["marathi"] : 0;
        $english = (isset($_POST["english"])) ? $_POST["english"] : 0;

        $total = $phy + $bio + $chem + $maths + $marathi + $english;
        $percentage = ($total / 600) * 100; // Assuming total marks are 600 for 6 subjects
    }
    ?>

    <h1>Student Information and Mark Sheet</h1>
    
    <h2>Student Information</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        Class: <input type="text" name="class" value="<?php echo $class; ?>"><br><br>
        Address: <input type="text" name="address" value="<?php echo $address; ?>"><br><br>
        <input type="submit" name="submit_info" value="Submit Student Information">
    </form>

    <h2>Enter Marks</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Physics: <input type="number" name="phy" value="<?php echo $phy; ?>"><br><br>
        Biology: <input type="number" name="bio" value="<?php echo $bio; ?>"><br><br>
        Chemistry: <input type="number" name="chem" value="<?php echo $chem; ?>"><br><br>
        Maths: <input type="number" name="maths" value="<?php echo $maths; ?>"><br><br>
        Marathi: <input type="number" name="marathi" value="<?php echo $marathi; ?>"><br><br>
        English: <input type="number" name="english" value="<?php echo $english; ?>"><br><br>
        <input type="submit" name="submit_marks" value="Generate Mark Sheet">
    </form>

    <?php
    // Display mark sheet if submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_marks"])) {
        echo "<h2>Mark Sheet</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Class: $class</p>";
        echo "<p>Address: $address</p>";
        echo "<h2>Marks</h2>";
        echo "<p>Physics: $phy</p>";
        echo "<p>Biology: $bio</p>";
        echo "<p>Chemistry: $chem</p>";
        echo "<p>Maths: $maths</p>";
        echo "<p>Marathi: $marathi</p>";
        echo "<p>English: $english</p>";
        echo "<h2>Result</h2>";
        echo "<p>Total Marks: $total</p>";
        echo "<p>Percentage: $percentage%</p>";
    }
    ?>
</body>
</html>
