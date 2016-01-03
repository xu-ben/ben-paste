<?php
	$dbhost = "localhost";
	$dbuser = "zjwdb_450750";
	$dbpw = "MySql2016";
	$dbname = "paste_tab";
	$con = @mysql_connect($dbhost, $dbuser, $dbpw);
	if(!$con) {
		die ("无法连接数据库, 请核查后重试!");
	}
	mysql_select_db($dbname, $con);
?>
