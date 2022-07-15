<html>
<body>

<?php

$dbname = 'id18380782_ardfin';
$dbuser = 'id18380782_adrfin';  
$dbpass = 'Evsen@2022tint'; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$MQ2 = $_GET["MQ2"];
$MQ7 = $_GET["MQ7"];
$MQ135 = $_GET["MQ135"];
$NO2 = $_GET["NO2"];
$C2H5OH = $_GET["C2H5OH"];
$VOC = $_GET["VOC"];
$CO = $_GET["CO"];
$HMD = $_GET["HMD"];
$TMP = $_GET["TMP"];
$HI = $_GET["HI"];
$RAWPM = $_GET["RAWPM"];
$DD = $_GET["DD"];
$LAT = $_GET["LAT"];
$LON = $_GET["LON"];
//$humidity = $_GET["humidity"]; 


$query = "INSERT INTO gas (MQ2,MQ7,MQ135,NO2,C2H5OH,VOC,CO,HMD,TMP,HI,RAWPM,DD,LAT,LON) VALUES ('$MQ2','$MQ7','$MQ135','$NO2','$C2H5OH','$VOC','$CO','$HMD','$TMP','$HI','$RAWPM','$DD','$LAT','$LON')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>