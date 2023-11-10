<link rel="stylesheet" type="text/css" href="styles.css">
<?
$host="bpwdwmscxjzz8rxuar2w-mysql.services.clever-cloud.com";
$user="uzqxexmtabajwvat";
$pwd="m7UoyZL7sStKv4XhNINW";
$bd="bpwdwmscxjzz8rxuar2w";

$con=mysqli_connect($host,$user,$pwd,$bd)
or die ("problemas con la conexión");




if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}
$email= $_POST['email'];
$nombre = $_POST["nombre"];
$contrasena = $_POST["contrasena"];


$sql = "INSERT INTO tbl_usuarios (email, nombre, contrasena, perfil, estado_cliente) VALUES ('$email','$nombre', '$contrasena', '1','0')";

if ($con->query($sql) === TRUE) {
    echo "<h2 id='centrar'>REGISTRO EXITOSO.</h2> <a id='centrar2' href='inicio.php'>CONTINUAR</a>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>