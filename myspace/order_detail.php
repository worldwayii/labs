<?php include("../common/doctype.html"); ?>
<head>
<meta charset="utf-8">
<title>我的订单-我的驴妈妈</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<?php include("../common/lv-meta.html"); ?>
<link href="../mbase/css/lv-bought.css" rel="stylesheet" />
</head>
<body>
<div id="wrap" class="ui-container lvmama-bg">
<?php include("../common/header.html"); ?>
    <div class="lv-nav wrap"><p><a href="">首页</a> > <a class="current" href="">我的驴妈妈</a></p></div>
    <div class="wrap ui-content lv-bd">
		<!-- <div class="lv-content"></div> -->
		
		<?php include("lv-order_detail.html"); ?>
	</div>
<?php include("../common/lv-footer.html"); ?>
