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
<?php if(I('cid',$cid) == 1): ?><a class="logo_word" href="">洋葱英语</a><?php endif; ?>
<!-- <a class="login_url" href="javascript:void(0);">Login</a> -->
<div class="responsive-sub-menu clearfix">
   <?php if(is_array($cateData)): $i = 0; $__LIST__ = $cateData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/english/?cid=<?php echo ($vo["id"]); ?>" <?php if(++$key == I('cid',1,'intval')): ?>class="a_cur"<?php endif; ?> ><?php echo ($vo["cate_name_en"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<!-- 图片列表 -->
<div class="photo_list_out"> 
	<ul class="photo_list">

	<?php if(is_array($imgArr)): $i = 0; $__LIST__ = $imgArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
			<a style="width:100%" href="<?php echo U('index/detail',array('cid'=>$vo['cid'],'aid'=>$vo['id']));?>"><img style="width:100%" src="<?php echo ($vo["img_path"]); ?>" /></a>
			<p><?php echo ($vo["title"]); ?><br/><span style="font-size:15px;"><?php echo ($vo["title_en"]); ?></span></p>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>

	</ul>
</div>	

<a href="" class="more">更多英语杂志，尽在口袋英语！</a>

</body>
</html>