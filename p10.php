<body>
  <form method="POST" action="p10.php">
    <br>
    Enter Email Id:
    <input type="text" name="t1" placeholder="Enter Email Id"><br><br><br>
    <input type="Submit" value="Check">
    <input type="reset"><br>
  </form>

  <?php
    $s = $_POST["t1"];
    $s1 = "/^[a-zA-Z0-9_]+@[a-z]+\.[a-z]{2,3}$/";
    if (preg_match($s1, $s))
    {
      echo("Valid....");
    } 
else
   {
      echo("Invalid....");
    }
  ?>
</body>
