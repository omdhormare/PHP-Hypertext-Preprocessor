1. Write a PHP Script to calculate the total cost of AIR Ticket Reservation and display the details for Name, Address, Contact No, Source, 
     Destination, Date of journey, Gender of passenger, No of Persons, Price per Ticket, etc. 
 
<html>
<head>
    <title>Air Ticket Reservation</title>
</head>
<body>
<form method="post" action="p14.php">
    <h1>Air Ticket Reservation</h1>
    Name:
    <input type="text" name="t1"> <br>
    Address:
    <textarea name="address"></textarea> <br>
    Contact Number:
    <input type="number" name="contact"> <br>

    Source:
    <select name="source">
        <option value="pune">Pune</option>
        <option value="Shirdi">Shirdi</option>
        <option value="mumbai">Mumbai</option>
    </select> <br>
    Destination:
    <select name="destination">
        <option value="pune">Pune</option>
        <option value="Shirdi">Shirdi</option>
        <option value="mumbai">Mumbai</option>
    </select> <br>

    Date of Journey:
    <input type="date" name="journeyDate"> <br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female <br>

    Number of Person:
    <input type="number" name="numberOfPersons"> <br>

    Price Per Ticket:
    <input type="number" name="pricePerTicket"> <br>

    <input type="submit" value="Submit">
    <input type="reset">

</form>

<?php
 {
    $Sname = $_POST["t1"];
    $add = $_POST["address"];
    $contact = $_POST["contact"];
    $source = $_POST["source"];
    $destination = $_POST["destination"];
    $journeyDate = $_POST["journeyDate"];
    $gender = $_POST["gender"];
    $numberOfPersons = $_POST["numberOfPersons"];
    $pricePerTicket = $_POST["pricePerTicket"];

    $totalAmount = $numberOfPersons * $pricePerTicket;

    echo("<br> Name: $Sname");
    echo("<br> Address: $add");
    echo("<br> Contact Number: $contact");
    echo("<br> Source: $source");
    echo("<br> Destination: $destination");
    echo("<br> Date of Journey: $journeyDate");
    echo("<br> Gender: $gender");
    echo("<br> Number of Person: $numberOfPersons");
    echo("<br> Price Per Ticket: $pricePerTicket");
    echo("<br> Total Amount: $totalAmount");
}
?>
</body>
</html>


