<html>
<body>
<?php
$con=mysqli_connect("localhost","caesar","mesocricetus auratus","fiqus");
if(mysqli_connect_errno($con)){echo "connection phail: ".mysqli_connect_error();}
$dout=mysqli_query($con,"SELECT medlemmar.fnamn, medlemmar.enamn FROM medlemmar LEFT JOIN fiqualista ON fiqualista.qid=medlemmar.qid ORDER BY fiqualista.antalfiqua ASC LIMIT 2");
$p1=mysqli_fetch_array($dout);
$p2=mysqli_fetch_array($dout);
echo "Nästa vecka har ".$p1['fnamn']." ".$p1['enamn']." och ".$p2['fnamn']." ".$p2['enamn']." fika.<br/>";
mysqli_close($con);
?>
</body>
</html>