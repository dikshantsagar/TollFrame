
<?php


DEFINE ('DBUSER','2696117_toll');
DEFINE ('PASS','ichlibedish7');
DEFINE ('HOST','fdb21.awardspace.net');
DEFINE ('DBNAME','2696117_toll');
echo " chal raha hu be";
$dbc = mysqli_connect(HOST,DBUSER,PASS);
if(!$dbc)
{
	die("Database Connection failed : " .mysqli_error($dbc));
	exit();
}
	
$dbs = mysqli_select_db($dbc, DBNAME);
if(!$dbs)
{
	die("Database Connection failed : " .mysqli_error($dbc));
	exit();
}

$num=$_GET["num"];
$bal=$_GET["bal"];
$pass=$_GET["pass"];
$result = mysqli_query($dbc, "INSERT into toll values('$num','$bal','$pass')");

echo $result;
echo " kat gya balance";
exit;


?>
