<?php
	function dbconnect() {
		$connection_string = 'DRIVER={SQL Server};SERVER=db-mssql2012\okada;DATABASE=GlobeBS2_12172018';
		$user = 'okada';
		$pass = 'P@ssw0rd';
		$connection = odbc_connect($connection_string,$user,$pass);
		if(!$connection) {
			die('Could not connect: ' . odbc_errormsg());
		}
		return $connection;
	}
	dbconnect();
?>