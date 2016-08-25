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

<p class="top_img"><img src="/english/Public/images/1.jpg"/></p>
<h2 class="title"><?php echo ($info["title"]); ?><br/><?php echo ($info["title_en"]); ?> </h2>
<div class="art-intro" style="margin-bottom:18px;line-height:1.5">
	<span><?php echo ($info["min_title"]); ?><br/><?php echo ($info["min_title_en"]); ?></span>
</div>

<div class="content_out">
	<p>
		<span class="p_span span_left">
			<?php echo ($info["content"]); ?>
		</span>
		<span class="p_span span_right">
			<?php echo ($info["content_en"]); ?>
		</span>
	</p>
	<p></p>

</div>

<!-- 相关推荐 -->
<h2 class="itemz_title" style="margin-bottom:10px;margin-top:20px;">相关推荐</h2>


</body>
</html>