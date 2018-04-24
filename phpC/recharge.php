
<?php


DEFINE ('DBUSER','2696117_toll');
DEFINE ('PASS','ichlibedish7');
DEFINE ('HOST','fdb21.awardspace.net');
DEFINE ('DBNAME','2696117_toll');
echo "**init**";
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
$result = mysqli_query($dbc, "UPDATE toll SET bal=bal+'$bal' WHERE num ='$num'");

echo $result;
echo "**end**";
exit;
?>
