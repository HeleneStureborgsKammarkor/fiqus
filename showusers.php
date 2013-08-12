<html>
<body>
<?php
$con=mysqli_connect("localhost","caesar","mesocricetus auratus","fiqus");
if(mysqli_connect_errno($con)){echo "connection phail: ".mysqli_connect_error();}
$dout=mysqli_query($con,"SELECT * FROM medlemmar");
echo "<table border='2'>";
echo "<tr>";
echo "<th>ID</th><th>fnamn</th><th>enamn</th><th>hemtfn</th><th>mobil</th><th>email</th><th>staemma</th><th>facebook</th>";
echo "</tr>";
while($row=mysqli_fetch_array($dout)){
echo "<tr>";
echo "<td>".$row['qid']."</td>";
echo "<td>".$row['fnamn']."</td>";
echo "<td>".$row['enamn']."</td>";
echo "<td>".$row['hemtfn']."</td>";
echo "<td>".$row['mobiltfn']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['staemma']."</td>";
echo "<td>".$row['facebook']."</td>";
echo "</tr>\n";
}
echo "</table>";
mysqli_close($con);
?>

<br>
<a href="adduser.html">Lägg till fler användare</a> 
<br/><a href="fiqualista.php">Uppdatera fiqualistan</a> 
<br/> eller <a href="showusers.php">Se alla användare</a>
</body>
</html>