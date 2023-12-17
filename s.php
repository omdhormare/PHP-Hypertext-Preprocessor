<!DOCTYPE html>
<html>

<head>
    <title>Mark Sheet</title>
</head>

<body>
    <?php
    session_start();

    // Function to set session timeout
    function setSessionTimeout($timeoutMinutes)
    {
        $_SESSION['timeout'] = time() + ($timeoutMinutes * 60);
    }

    // Function to check if the session has expired
    function isSessionExpired()
    {
        return isset($_SESSION['timeout']) && $_SESSION['timeout'] < time();
    }

    // Logout the user and destroy the session
    function logout()
    {
        session_unset();
        session_destroy();
    }

    // Check if the student information form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST" && !isset($_SESSION['name'])) {
        // Validate and sanitize student information inputs
        $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
        $class = isset($_POST["class"]) ? trim($_POST["class"]) : "";
        $address = isset($_POST["address"]) ? trim($_POST["address"]) : "";

        // Check if all student information inputs are provided
        if (!empty($name) && !empty($class) && !empty($address)) {
            // Store student information in session
            $_SESSION['name'] = $name;
            $_SESSION['class'] = $class;
            $_SESSION['address'] = $address;

            // Set session timeout to 5 minutes (300 seconds)
            setSessionTimeout(5);

            // Redirect to the marks form
            header("Location: " . $_SERVER["PHP_SELF"]);
            exit;
        }
    }

    // Check if the marks form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION['name'])) {
        // Validate and sanitize marks inputs
        $phy = isset($_POST["phy"]) ? (int) $_POST["phy"] : 0;
        $bio = isset($_POST["bio"]) ? (int) $_POST["bio"] : 0;
        $chem = isset($_POST["chem"]) ? (int) $_POST["chem"] : 0;
        $maths = isset($_POST["maths"]) ? (int) $_POST["maths"] : 0;
        $marathi = isset($_POST["marathi"]) ? (int) $_POST["marathi"] : 0;
        $english = isset($_POST["english"]) ? (int) $_POST["english"] : 0;

        // Calculate total marks and percentage
        $totalMarks = $phy + $bio + $chem + $maths + $marathi + $english;
        $percentage = ($totalMarks / 600) * 100;

        // Display the mark sheet
        echo "<h2>Mark Sheet</h2>";
        echo "<table>";
        echo "<tr><td>Name:</td><td>{$_SESSION['name']}</td></tr>";
        echo "<tr><td>Class:</td><td>{$_SESSION['class']}</td></tr>";
        echo "<tr><td>Address:</td><td>{$_SESSION['address']}</td></tr>";
        echo "<tr><td>Physics:</td><td>$phy</td></tr>";
        echo "<tr><td>Biology:</td><td>$bio</td></tr>";
        echo "<tr><td>Chemistry:</td><td>$chem</td></tr>";
        echo "<tr><td>Mathematics:</td><td>$maths</td></tr>";
        echo "<tr><td>Marathi:</td><td>$marathi</td></tr>";
        echo "<tr><td>English:</td><td>$english</td></tr>";
        echo "<tr><td>Total Marks:</td><td>$totalMarks</td></tr>";
        echo "<tr><td>Percentage:</td><td>$percentage%</td></tr>";
        echo "</table>";

        // Destroy the session after displaying the mark sheet
        logout();
    }
    ?>

    <?php if (!isset($_SESSION['name'])) : ?>
        <!-- Student Information Form -->
        <h2>Student Information</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Name:</label>
            <input type="text" name="name" required><br>

            <label>Class:</label>
            <input type="text" name="class" required><br>

            <label>Address:</label>
            <input type="text" name="address" required><br>

            <br>
            <input type="submit" value="Next (Enter Marks)">
        </form>
    <?php endif; ?>

    <?php if (isset($_SESSION['name']) && !isSessionExpired()) : ?>
        <!-- Marks Form -->
        <h2>Marks Entry</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Physics:</label>
            <input type="number" name="phy" required><br>

            <label>Biology:</label>
            <input type="number" name="bio" required><br>

            <label>Chemistry:</label>
            <input type="number" name="chem" required><br>

            <label>Mathematics:</label>
            <input type="number" name="maths" required><br>

            <label>Marathi:</label>
            <input type="number" name="marathi" required><br>

            <label>English:</label>
            <input type="number" name="english" required><br>

            <br>
            <input type="submit" value="Submit">
        </form>
    <?php endif; ?>

    <?php if (isSessionExpired()) : ?>
        <!-- Session Timeout Warning -->
        <p>Your session has expired due to inactivity.</p>
    <?php endif; ?>
</body>

</html>
