<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content=""/>
<meta name="copyright" content="baguawu.com"/>
<meta name="og:description" content=""/>
<meta name="og:image" content=""/>
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">  
	<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>


<!-- 配置文件 -->
<script type="text/javascript" src="/english/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/english/ueditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript"> 
	var ue = UE.getEditor('container');
</script>

<div class="box_out">

<form method="post" action="" enctype="multipart/form-data">

<table style="margin:100px auto;">
	<tr>
		<td>封面图片</td>
		<td><input  name="files" type="file" />  </td>
	</tr>
	<tr>
		<td>中文标题</td>
		<td><input  name="title" />  </td>
	</tr>
	<tr>
		<td>英文标题</td>
		<td><input  name="title_en" />  </td>
	</tr>
	<tr>
		<td>中文副标题</td>
		<td><input  name="min_title" />  </td>
	</tr>
	<tr>
		<td>英文副标题</td>
		<td><input  name="min_title_en" />  </td>
	</tr>
	<tr>
		<td>中文内容</td>
		<td>
			<!-- 加载编辑器的容器 -->
			<script id="container" name="content" type="text/plain">
			    中文内容
			</script>
		</td>
	</tr>
	<tr>
		<td>英文内容</td>
		<td><!-- 加载编辑器的容器 -->
			<script id="container" name="content" type="text/plain">
			    英文内容
			</script>
		</td>
	</tr>
	<tr>
		<td closapn="2"><input type="submit" value="提交"/></td>
	</tr>
</table>

</div>

</form>

</body>
</html>