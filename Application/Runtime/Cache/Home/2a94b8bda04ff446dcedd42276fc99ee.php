<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content=""/>
<meta name="copyright" content="baguawu.com"/>
<meta name="og:description" content=""/>
<meta name="og:image" content=""/>
<link rel="stylesheet" type="text/css" href="/english/Public/css/style.css">
</head>
<body>

<div class="head_out">
<a class="logo_word" href="">洋葱英语</a>
<a class="login_url" href="javascript:void(0);">Login</a>
<div class="responsive-sub-menu clearfix">
    <a href="" class="a_cur">home</a>
    <a href="">Art</a>
    <a href="">碎片英语</a>
</div>
<!-- 图片列表 -->
<div class="photo_list_out"> 
	<ul class="photo_list">

	<?php if(is_array($imgArr)): $i = 0; $__LIST__ = $imgArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
			<a href="<?php echo U('index/detail',array('aid'=>$vo['id']));?>"><img src="/english/Public/images/1.jpg" /></a>
			<p>执着骑手的肆意人生《家之所在》执着骑手的肆意人生《家之所在》执着骑手的肆意人生《家之所在》</p>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>

	</ul>
</div>	

<a href="" class="more">更多英语杂志，尽在口袋英语！</a>

</body>
</html>