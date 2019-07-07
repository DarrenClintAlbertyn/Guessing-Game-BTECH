<?php
/**
	Darren Albertyn 
	Riyaad Cader
	This establishes a database connection
*/
function dbConnect($hostName = '127.0.0.1', $username = 'root',$password = 'Darren23',$dbName = 'GameDatabase')
{
	$connect = mysqli_connect($hostName, $username, $password ,$dbName);

if(!$connect) 
{
	die("Connection failed: " . $connect->connect_error);
}else
{
	
	return $connect;

}
}

?>