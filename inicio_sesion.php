<link rel="stylesheet" type="text/css" href="styles.css">

<?
$host="bpwdwmscxjzz8rxuar2w-mysql.services.clever-cloud.com";
$user="uzqxexmtabajwvat";
$pwd="m7UoyZL7sStKv4XhNINW";
$bd="bpwdwmscxjzz8rxuar2w";



$con=mysqli_connect($host,$user,$pwd,$bd)
or die ("problemas con la conexión");

$email=['email'];
$nombre=['nombre'];
$contrasena=['contrasena'];

if ($_SERVER['REQUEST_METHOD']=='POST'){
  $contrasena=$_POST['contrasena'];

  if (validar($contrasena)){
    echo '<h2 id="centrar">INICIO EXITOSO</h2><a href="inicio.php" id="centrar2">CONTINUAR</a>';
  }else{
    echo '<h2 id="centrar">INICIO FALLIDO</h2><a href="index.php" id="centrar2">CONTINUAR</a>';
  }
}

function validar($contrasena){
  if ($contrasena=='contrasena'){
    return true;
  }else{
    return false;
  }
}


$con->close();
?>