<?

// подключение к БД

$server = "localhost";
$login = "root";
$pass = "";
$db = "berloga";

$connect  = mysqli_connect($server,$login,$pass,$db);

if (mysqli_connect_errno()){
	die("Connect failed: ". mysqli_connect_error());
}