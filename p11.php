<!DOCTYPE html>
<html>
<head>
    <title>Student Information and Mark Sheet</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["submit_student_info"])) {
        // Process the first form (Student Information form)
        $name = $_POST["name"];
        $class = $_POST["class"];
        $address = $_POST["address"];
    } elseif (isset($_POST["submit_marks"])) {
        // Process the second form (Marks form)
        $phy = (int)$_POST["phy"];
        $bio = (int)$_POST["bio"];
        $chem = (int)$_POST["chem"];
        $maths = (int)$_POST["maths"];
        $marathi = (int)$_POST["marathi"];
        $english = (int)$_POST["english"];

        // Calculate total marks and percentage
        $total_marks = $phy + $bio + $chem + $maths + $marathi + $english;
        $percentage = ($total_marks / 600) * 100;
    }
}
?>

<!-- First Form: Student Information -->
<?php if (!isset($_POST["submit_student_info"]) && !isset($_POST["submit_marks"])) : ?>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>

        <input type="submit" name="submit_student_info" value="Submit Student Information">
    </form>

<!-- Second Form: Marks Information -->
<?php elseif (isset($_POST["submit_student_info"]) && !isset($_POST["submit_marks"])) : ?>
    <form method="post" action="">
        <h2>Student Information:</h2>
        <p>Name: <?php echo $name; ?></p>
        <p>Class: <?php echo $class; ?></p>
        <p>Address: <?php echo $address; ?></p>

        <h2>Marks Information:</h2>
        <label for="phy">Physics:</label>
        <input type="number" id="phy" name="phy" min="0" max="100" required><br>

        <label for="bio">Biology:</label>
        <input type="number" id="bio" name="bio" min="0" max="100" required><br>

        <label for="chem">Chemistry:</label>
        <input type="number" id="chem" name="chem" min="0" max="100" required><br>

        <label for="maths">Mathematics:</label>
        <input type="number" id="maths" name="maths" min="0" max="100" required><br>

        <label for="marathi">Marathi:</label>
        <input type="number" id="marathi" name="marathi" min="0" max="100" required><br>

        <label for="english">English:</label>
        <input type="number" id="english" name="english" min="0" max="100" required><br>

        <input type="submit" name="submit_marks" value="Submit Marks">
    </form>

<!-- Mark Sheet -->
<?php elseif (isset($_POST["submit_student_info"]) && isset($_POST["submit_marks"])) : ?>
    <h2>Mark Sheet:</h2>
    <p>Name: <?php echo $name; ?></p>
    <p>Class: <?php echo $class; ?></p>

    <h3>Subject-wise Marks:</h3>
    <p>Physics: <?php echo $phy; ?></p>
    <p>Biology: <?php echo $bio; ?></p>
    <p>Chemistry: <?php echo $chem; ?></p>
    <p>Mathematics: <?php echo $maths; ?></p>
    <p>Marathi: <?php echo $marathi; ?></p>
    <p>English: <?php echo $english; ?></p>

    <p>Total Marks: <?php echo $total_marks; ?></p>
    <p>Percentage: <?php echo number_format($percentage, 2); ?>%</p>
<?php endif; ?>

</body>
</html>
