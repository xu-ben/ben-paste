<?php require_once("../db_connect.php");?>
<!doctype html>
<html>
	<head>
<?php
	$idstr;
	$id;
	function myjudge() {
		global $id;
		global $idstr;
		if(!isset($_GET['textid'])) {
			return false;
		}
		$idstr = $_GET['textid'];
		if(empty($idstr)) {
			return false;
		}
		if(strlen($idstr) != 6) {
			return false;
		}
		sscanf($idstr,"%d", $id);
		if($id <= 0 || $id > 999999) {
			return false;
		}
		return true;
	}
?>
<?php
	if(!myjudge()) {
?>
		<script type="text/javascript">
			var ids = prompt("请输入要查看的内容编号(6位纯数字，包含前导0)：");
			var url = "show.php?textid=" + ids;
			window.location = url;
		</script>
<?php
	}
?>
<?php
	$sql = "select poster,posttime,syntax,content from paste_tab where id = " . $id;
	$result = mysql_query($sql);
	if(empty($result)) {
		die ("no such page!");
		return ;
	}
	if ($row = mysql_fetch_array($result)) {
		$poster = $row['poster'];
		$posttime = $row['posttime'];
		$syntax = $row['syntax'];
		$content = $row['content'];
	} else {
		die ("no such page!");
		return;
	}
?>
		<title>Web粘贴板(ben-paste)</title>
		<meta content="粘贴板" name="keywords"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<script type="text/javascript" src="../removead.js"></script>
	</head>
	<body style="margin:0px auto;width:750px;">
		<div>
 			<h1 id="title">Web粘贴板(ben-paste)</h1>
 			<h3>粘贴者：<?php echo ($poster);?> 粘贴时间：<?php echo ($posttime);?></h3>
 			<br>
 			<div id = "content" style="background-color: #eee">
 				<pre>
 				<?php echo ($content);?>
 				</pre>
 			</div>	
		</div>
	<?php include_once 'footer.php';?>
	</body>
</html>
