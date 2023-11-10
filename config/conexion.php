<? 
$host="";
$user="";
$pwd="";
$bd="";
$con=mysqli_connect($host,$user,$pwd,$bd)
or die ("problemas con la conexión");

$con->close();
?>