<html>
<body>
<?php
$con=mysqli_connect("localhost","caesar","mesocricetus auratus","fiqus");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO medlemmar
VALUES
($_POST[qid],'$_POST[fnamn]','$_POST[enamn]','$_POST[hemtfn]','$_POST[mobiltfn]','$_POST[email]','$_POST[staemma]','$_POST[facebook]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>
<a href="adduser.html">Lägg till fler användare</a></br><a href="showusers.php">Se lista över alla användare</a>
</body>
</html>