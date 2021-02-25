<html>
<body>

<?php

$dbname = 'nodemcu';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";
if(isset({
  $temperature = $_GET["temperature"];
  $BPM = $_GET["BPM"];
}
))

$query = "INSERT INTO iot_samples (temperature, BPM) VALUES ('$temperature', '$BPM')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>
