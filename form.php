<?php

 
$mysqli = new mysqli("94.46.240.241:3307", "db_admin", "Honeybee2017", "Bokningar")or die("did not connect!");
if($mysqli){
	//echo "connect";
}
$Name = $_POST['name'];
$Cname = $_POST['cname'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Date = $_POST['Date'];


 echo  "<br />\n";
 


$sql = "INSERT INTO aplication (`Name`, `Cname`, `Phone`, `Email`, `Date`) 
VALUES ('$Name', '$Cname', '$Phone', '$Email', '$Date')";
 
if(!mysqli_query($mysqli,$sql))
{
	
	echo "Not created" . $conn->error;
}
else{
	echo 'Created';
}

 echo  "<br />\n";

 
 $date = Date::createFromFormat('d/m/y', $mysqli['date']);
 echo $date->format('m/d/y');

?>
