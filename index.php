<!doctype html>
<html>
	<head>
		<title>Web粘贴板(ben-paste)</title>
		<meta content="粘贴板" name="keywords"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<script type="text/javascript" src="../removead.js"></script>
	</head>
	<body style="margin:0px auto;width:750px;">
		<div class="inside">
 			<h1 id="title">Web粘贴板(ben-paste)</h1>
			<form action="submit.php" method="POST" id="pasteform" name="pasteform">
				<table>
					<tr>
						<th><label for="id_poster">粘 贴 者：</label></th>
						<td><input id="id_poster" type="text" name="poster" maxlength="30" /><span class="helptext">（用于标识内容归属者，30个字符以内。）</span></td>
					</tr>
					<tr>
						<th><label for="id_syntax">内容类型：</label></th>
						<td>
							<select name="syntax" id="id_syntax">
								<option value="text">纯文本</option>
								<option value="c">C语言代码</option>
								<option value="cpp">C++代码</option>
								<option value="java">Java代码</option>
							</select>
						</td>
					</tr>
					<tr>
						<th><label for="id_content">粘贴内容：</label></th>
						<td><textarea id="id_content" rows="20" cols="80" name="content"></textarea></td>
					</tr>
					<tr> 
						<th>&nbsp;</th> 
						<td><input type="submit" value="提交" /></td>
					</tr>
				</table>
			</form>
		</div>
	<?php include_once 'footer.php';?>
	</body>
</html>
