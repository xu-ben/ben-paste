<?php 
	if(!isset($_POST['poster']) || !isset($_POST['content'])) {
		return;
	}
	if(!isset($_POST['syntax'])) {
		return;
	}
	$poster = $_POST['poster'];
	$content = $_POST['content'];
	$syntax = $_POST['syntax'];
	if(empty($poster) || empty($content) || empty($syntax)) {
		return;
	}
?>
<?php require_once("../db_connect.php");?>
<?php
	$sql = 'insert into paste_tab (poster, syntax, content) values ("';
	$sql = $sql . $poster . '","' . $syntax . '","' . $content . '")';
	$result = mysql_query($sql);
	if($result) {
		$newid = mysql_insert_id();
		$newidstr = sprintf("%05s", $newid);
		$url = 'show.php?id=' . $newidstr;
		Header('Location: ' . $url);
	}else {
		die ("error!");
	}
?>
