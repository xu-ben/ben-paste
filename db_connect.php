<?php
	$dbhost = "localhost";
	$dbuser = "zjwdb_322389";
	$dbpw = "MySql123";
	$dbname = "paste_tab";
	$con = @mysql_connect($dbhost, $dbuser, $dbpw);
	if(!$con) {
		die ("无法连接数据库, 请核查后重试!");
	}
	mysql_select_db($dbname, $con);
?>
