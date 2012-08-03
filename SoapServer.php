<?php 


function saveData($data){
	//connect to $db
	
	$dbConnection = connectToDB();
	
	//save your data here
	
}



function connectToDB(){
		$DBhostname = '';
		$DBusername = '';
		$DBpassword = '';
		
		$db = new PDO("mysql:host=$DBhostname;dbname=", $DBusername, $DBpassword);
		return $db;
}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("http://domain.com/myWSDL.wsdl");
$server->addFunction("saveData");
$server->handle();
?>
