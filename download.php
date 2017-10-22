<?php
require( dirname(__FILE__) . '/wp-load.php' );
$id=$_GET['id'];
$title = get_post($id)->post_title;
$lylaresdown_name=get_post_meta($id, 'lylaresdown_name', true);
$lylaresdown_size=get_post_meta($id, 'lylaresdown_size', true);
$lylaresdown_date=get_post_meta($id, 'lylaresdown_date', true);
$lylaresdown_type=get_post_meta($id, 'lylaresdown_type', true);
$lylaresdown_version=get_post_meta($id, 'lylaresdown_version', true);
$lylaresdown_info=get_post_meta($id, 'lylaresdown_info', true);
$lylaresdown_author=get_post_meta($id, 'lylaresdown_author', true);
$lylaresdown_downurl1=get_post_meta($id, 'lylaresdown_downurl1', true);
$lylaresdown_downurl2=get_post_meta($id, 'lylaresdown_downurl2', true);
$lylaresdown_downurl3=get_post_meta($id, 'lylaresdown_downurl3', true);
$lylaresdown_downurl4=get_post_meta($id, 'lylaresdown_downurl4', true);
$lylaresdown_downurl5=get_post_meta($id, 'lylaresdown_downurl5', true);
$lylaresdown_downurl6=get_post_meta($id, 'lylaresdown_downurl6', true);
$lylaresdown_downurl7=get_post_meta($id, 'lylaresdown_downurl7', true);
$lylaresdown_baidumima=get_post_meta($id, 'lylaresdown_baidumima', true);
$lylaresdown_360mima=get_post_meta($id, 'lylaresdown_360mima', true);
$lylaresdown_gfmima=get_post_meta($id, 'lylaresdown_gfmima', true);
 ?>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo $title;?>" />
    <meta name="description" content="<?php echo $title;?>下载" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?>下载页</title>
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
   <link rel="icon" type="image/png" href="https://static.lylares.com/favicon/favicon.ico">
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="https://static.lylares.com/favicon/favicon.ico">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="https://static.lylares.com/favicon/favicon.ico">
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="https://static.lylares.com/favicon/favicon.ico"> 
    <meta name="msapplication-TileColor" content="#0e90d2">
    <link rel="stylesheet" href="https://static.lylares.com/public/amaze/css/amazeui.min.css">
    <link rel="stylesheet" href="https://static.lylares.com/public/amaze/css/app.css">
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="https://static.lylares.com/public/amaze/js/jquery.min.js"></script>
    <!--<![endif]-->
    <!--[if lte IE 8 ]>
    <script src="https://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="https://lab.lylares.com/vip/js/amazeui.ie8polyfill.min.js"></script>
    <![endif]--> 
    <script type="text/javascript">
        // 百度统计代码
  
    </script>
</head>
<body>

<header class="am-topbar">
    <div class="am-container">
	 <h1 class="am-topbar-brand hover-bounce">
        <a class="web-name">
            <span class="am-icon-film am-icon-md"></span> 
          资源下载           
        </a>
    </h1>
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}">
        <span class="am-sr-only">导航切换</span> 
        <span class="am-icon-bars"></span>
    </button>
 
  <!-- <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
        <li><a href="https://lab.lylares.com/" target="_blank">实验室</a></li>
        <li><a href="http://5kvideo.cc" target="_blank">影院</a></li>
        <li><a href="https://music.lylares.com" target="_blank">音乐</a></li>
		<li><a href="https://lab.lylares.com/image" target="_blank" target="_blank">美图</a></li>
		<li><a href="https://www.lylares.com" target="_blank">博客</a></li>
    </ul>
  </div>  -->
  </div>
</header>
<style>
.btn-play-source {
    margin: 0 5px 5px 0;
}
</style>
<div class="am-container">
<p><a href="<?php echo dirname('https://'.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"]); ?>/?p=<?php echo $id;?>">来源文章：<?php echo $title;?></a></p>

<div class="am-panel am-panel-default">
  <div class="am-panel-hd">
    <h3 class="am-panel-title">文件信息</h3>
  </div>
  <ul class="am-list am-list-static">
    <li>文件名称：<?php echo $lylaresdown_name;?></li>
    <li>文件大小：<?php echo $lylaresdown_size;?></li>
    <li>文件类型：<?php echo $lylaresdown_type;?></li>
	<li>附件说明：<?php echo $lylaresdown_info;?></li>
    <li>当前版本：<?php echo $lylaresdown_version;?></li>
    <li>更新日期：<?php echo $lylaresdown_date;?></li>
    <li>作者信息：<?php echo $lylaresdown_author;?></li>
    <li>密码信息：<?php if($lylaresdown_baidumima){?>百度网盘密码：<?php echo $lylaresdown_baidumima;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php } if($lylaresdown_gfmima){?>解压密码：<?php echo $lylaresdown_gfmima;?><?php }?></li>
    <li>下载列表：<?php if($lylaresdown_downurl5){?><a href="<?php echo $lylaresdown_downurl5;?>" target="_blank">官方网盘<font color="red">(推荐)</font></a><?php }if($lylaresdown_downurl1){?><a href="<?php echo $lylaresdown_downurl1;?>" target="_blank">百度网盘</a><?php }if($lylaresdown_downurl6){?><a href="<?php echo $lylaresdown_downurl6;?>" target="_blank">其他网盘</a><?php }if($lylaresdown_downurl3){?><a href="<?php echo $lylaresdown_downurl3;?>" target="_blank"><font color="red">普通下载</font></a><?php }?></li>
  </ul>
</div>
	
<div class="am-panel am-panel-primary">
	<div class="am-panel-hd">下载说明</div>
  <div class="am-panel-bd">
  <ol><li>下载后文件若为压缩包格式，请安装RAR或者好压软件进行解压。</li>
		<li>文件比较大的时候，建议使用下载工具进行下载，浏览器下载有时候会自动中断，导致下载错误</li>
		<li>资源可能会由于内容问题被和谐，导致下载链接不可用，遇到此问题，请到文章页面进行反馈，我们会及时进行更新的。</li>
        <li>其他下载问题请自行搜索教程，这里不一一讲解</li></ol>
  </div>
</div>
<div class="am-panel am-panel-warning">
	<div class="am-panel-hd">声明</div>
  <div class="am-panel-bd">
对于本站提供的部分下载资源可能收集于网络，只做学习和交流使用，版权归原作者所有，若为付费资源，请在下载后24小时之内自觉删除，若作商业用途，请到原网站购买，由于未及时购买和付费发生的侵权行为，与本站无关。本站发布的内容若侵犯到您的权益，请联系本站删除，我们将及时处理！
  </div>
</div>
</div>  
<!-- 容器 -->

    <div data-am-widget="gotop" class="am-gotop am-gotop-fixed" >
        <a href="#top" title="">
            <i class="am-gotop-icon am-icon-hand-o-up"></i>
        </a>
    </div>

    <footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
        <div class="am-footer-miscs">
            <p>© 1993-2017 <a href="https://lab.lylares.com" target="_blank">LYLARES'S LAB</a>. ALL RIGHTS RESERVED.</p>
        </div>
    </footer> 
    <!-- layer弹窗插件 -->
    <!-- 滚动加载插件 -->
<script src="https://static.lylares.com/public/amaze/js/jquery.lazyload.min.js?v1.0"></script>
<script src="https://static.lylares.com/public/amaze/js/amazeui.min.js"></script>
</body>
</html>



