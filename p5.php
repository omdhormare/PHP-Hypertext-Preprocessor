<html>
<form method="post" action="p5.php">
    <h1>AIR Ticket Reservation</h1>
    Name:
    <input type="text" name="t1"><br>
    Address:
    <input type="text" name="t2"><br>
    Contact no:
    <input type="number" name="t3"><br>
    Source:
    <select name="t4">
        <option value="Nashik">Nashik</option>
        <option value="Shirdi">Shirdi</option>
    </select><br>
    Destination:
    <select name="t5">
        <option value="Pune">Pune</option>
        <option value="Nagar">Nagar</option>
    </select><br>
    Date of Journey:
    <input type="date" name="t6"><br>
    Gender of passenger:<br>
    <input type="radio" name="t7" value="male"> Male
    <input type="radio" name="t8" value="female"> Female<br>
    No of Persons:
    <input type="number" name="t9"><br>
    Price per Ticket:
    <input type="number" name="t10"><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["t1"];
    $address = $_POST["t2"];
    $contact = $_POST["t3"];
    $source = $_POST["t4"];
    $destination = $_POST["t5"];
    $journeyDate = $_POST["t6"];
    $gender = $_POST["t7"];
   $gender = $_POST["t8"];
    $numPersons = $_POST["t9"];
    $pricePerTicket = $_POST["t10"];
    $totalCost = $numPersons * $pricePerTicket;
    echo "<h2>Ticket Details:</h2>";
    echo "Name: $name<br>";
    echo "Address: $address<br>";
    echo "Contact No: $contact<br>";
    echo "Source: $source<br>";
    echo "Destination: $destination<br>";
    echo "Date of Journey: $journeyDate<br>";
    echo "Gender of passenger: $gender<br>";
    echo "No of Persons: $numPersons<br>";
    echo "Price per Ticket: $pricePerTicket<br>";
    echo "Total Cost: $totalCost<br>";
}
?>
</html>
