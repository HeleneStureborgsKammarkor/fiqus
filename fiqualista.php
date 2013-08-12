<html>
<body>
<?php
$con=mysqli_connect("localhost","fiqus","euchoreutes naso","fiqus");
if(mysqli_connect_errno($con)){echo "connection phail: ".mysqli_connect_error();}
if($_POST['update']=="Uppdatera"){
	$ids=mysqli_query($con,"SELECT qid FROM medlemmar");
	while($row=mysqli_fetch_array($ids)){
		if(!empty($_POST["i".$row['qid']])){
			mysqli_query($con,"UPDATE fiqualista SET antalfiqua=antalfiqua+1, senastfiqua=NOW() WHERE qid=".$row['qid']);
			}
		if(!empty($_POST["r".$row['qid']])){
			mysqli_query($con,"UPDATE fiqualista SET antalfiqua=antalfiqua-1 WHERE qid=".$row['qid']);
			}
		}
	}
$dout=mysqli_query($con,"SELECT 
medlemmar.qid, medlemmar.fnamn, medlemmar.enamn, fiqualista.antalfiqua, fiqualista.senastfiqua
FROM medlemmar LEFT JOIN fiqualista ON fiqualista.qid=medlemmar.qid");
echo "<form action=\"fiqualista.php\" method=\"post\">";
echo "<table border='2'>";
echo "<tr>";
echo "<th>ID</th><th>fnamn</th><th>enamn</th><th>antalfiqua</th><th>senastfiqua</th><th>öka</th><th>minska</th>";
echo "</tr>";
while($row=mysqli_fetch_array($dout)){
echo "<tr>";
echo "<td>".$row['qid']."</td>";
echo "<td>".$row['fnamn']."</td>";
echo "<td>".$row['enamn']."</td>";
echo "<td>".$row['antalfiqua']."</td>";
echo "<td>".$row['senastfiqua']."</td>";
echo "<td><input type=\"checkbox\" name=\"i".$row['qid']."\"></td>";
echo "<td><input type=\"checkbox\" name=\"r".$row['qid']."\"></td>";
echo "</tr>";
}
echo "</table>";
echo "<br/><input type=\"submit\" name=\"update\" value=\"Uppdatera\"/>";
echo "</form>";
mysqli_close($con);
?>
<br>
<a href="adduser.html">Lägg till fler användare</a></br>
eller <a href="showusers.php">Se alla användare</a>
</body>
</html>