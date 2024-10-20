<?php
	// CONNECTION INFORMATION START 
$connectionInfo = array("UID" => "demosql", "pwd" => "Parolka-1234", "Database" => "dbsql", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:gdaze.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	// CONNECTION INFORMATION END
?>
