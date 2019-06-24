<?php
//contraseña
$passs="9136f63a41ffd4fdc19b8ef5c9836991bed764a3a16947ee81b7567400a50675";
//nombre de base de datos
$bd="dl5j629urk17";
//nombre de usuario
$user="orpklkwlswjzpi";
//nombre de la empresa
$empresa="Daws";

//Configuración general
$config = array(
	"titulo"=>"Daws?",
	"subtitulo"=>"Inicio",
	"url"=>"http://{$_SERVER['HTTP_HOST']}/panel/", //Con / al final
	//"url" => "http://localhost/daws2/",
	"charset"=>"utf-8",

	"friendlyurls"=>false,

	//Datos para la configuracion del envio de correo
	"emailadmin"=>"",
	"emailenvios"=>"",
	"nombreenvios"=>"Daws?",
	"servidor"=>"localhost",
	"basedatos"=>"$bd",
	"usuario"=>"$user",
	"pass"=>"$passs",

	"googleanalytics"=>false,//Codigo UA- usado en las analiticas de Google
	"googlesiteverification"=>false,
	"mssiteverification"=>false
	); ?>

<?php
	$dbhost="ec2-50-19-254-63.compute-1.amazonaws.com";
	$dbname="$bd";
	$dbuser="$user";
	$dbpass="$passs";
	$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

	$mysqli_conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname); //conexion a MySql
	if ($mysqli_conn->connect_error) {//Salida cualquier error de conexión
	    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
	}
?>
