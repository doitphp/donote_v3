<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?> | DoitPHP 3.0</title>
<meta name="Keywords" content="DoitPHP应用" />
<meta name="description" content="DoitPHP V3.0演示实例, DoitPHP编写的留言本" />
<meta name="Copyright" content="Copyright(c) 2015 www.doitphp.com" />
<meta name="generator" content="DoitPHP 3.0" />
<link href="<?php echo $assetUrl; ?>/css/screen.css" rel="stylesheet" type="text/css">
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo $assetUrl; ?>/css/ie.css" type="text/css"><![endif]-->

<!-- 加载doitphp所集成的jquery,及其form插件  -->
<script type="text/javascript" src="<?php echo $assetUrl; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $assetUrl; ?>/js/jquery.form.min.js"></script>
<!-- 加载JS函数库文件  -->
<script type="text/javascript" src="<?php echo $assetUrl; ?>/js/mainlibs.js?version=3.0"></script>
</head>

<body>
<div class="container" style="margin-top:20px; padding:30px; background:#FFFFFF; width:900px;">
	<!-- top -->
	<div class="header">
		<div><a href="<?php echo $this->getBaseUrl(); ?>/"><img src="<?php echo $assetUrl; ?>/images/logo.jpg" height="70" border="0" title="doitphp tools logo"></a></div>
		<div class="text-align-right" style="padding-right:15px;"><?php $this->widget('loginStatus'); ?></div>
		<!-- main menu-->
		<?php $this->widget('mainMenu'); ?>
		<!-- /main menu-->
	</div>
	<hr class="space clear"/>
	<!-- /top -->

	<!-- content -->
	<?php echo $viewContent; ?>
	<!-- /content -->

	<!-- footer-->
	<div class="footer">CopyRight <a href="http://www.doitphp.com" target="_blank">www.doitphp.com</a> 2010 - 2015</div>
	<!-- /footer-->
</div>
</body>
</html>