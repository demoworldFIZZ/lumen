<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"  />
<title>test</title>
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"> -->

<link href="http://laravel.cn/laravel/public/css/style.css"  rel="stylesheet"/>
<!-- <script src="{{ asset('/js/jquery.min.js') }}" ></script>
<script src="{{ asset('/js/nav.js') }}" ></script> -->
<script language="JavaScript" src="http://laravel.cn/laravel/public/js/nav.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

<style type="text/css">
        .headroom {position: fixed;top: 0;left: 0;right: 0;transition: all .2s ease-in-out;}
        .headroom--unpinned {top:0;left: 60%;}
        .headroom--pinned {top: 0;}
    </style>
</head>
<body>

<div id="top_bg">
	<div class="top">
		<a class="logo_l" href="/" title="返回首页"></a>
		<!--导航开始-->
		<div class="nav_z navbar-fixed-top">
			<ul id="navul" class="cl">
				<li class="search">
					<input type=“text” placeholder=“Search here.。.” required>
				</li>
				
				<li>
					<a href="#">视频</a>
					<ul>
						<li><a href="#">企业文化</a></li>
						<li><a href="#">企业资质</a></li>
						<li><a href="#">服务团队</a></li>
					</ul>
				</li>
				<li>
					<a href="#">音乐</a>
					<ul>
						<li><a href="#">企业文化</a></li>
						<li><a href="#">企业资质</a></li>
						<li><a href="#">服务团队</a></li>
					</ul>
				</li>
				<li>
					<a href="#">图片</a>
					<ul>
						<li><a href="#">企业文化</a></li>
						<li><a href="#">企业资质</a></li>
						<li><a href="#">服务团队</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#">社区</a>
					<ul>
						<li><a href="#">企业文化</a></li>
						<li><a href="#">企业资质</a></li>
						<li><a href="#">服务团队</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#">游戏</a>
					<ul>
						<li><a href="#">企业文化</a></li>
						<li><a href="#">企业资质</a></li>
						<li><a href="#">服务团队</a></li>
					</ul>
				</li>
				<li>
					<a href="#">更多</a>
					<ul>
						<li><a href="#">企业文化</a></li>
						<li><a href="#">企业资质</a></li>
						<li><a href="#">服务团队</a></li>
					</ul>
				</li>
				<!--可在此处直接添加导航-->
			</ul>
		</div><!--导航结束-->
		<script  type="text/javascript"> 
		$(".navbg").capacityFixed();
		</script>

	</div>

</div>
 <script  type="text/javascript"  src="https://rawgithub.com/WickyNilliams/headroom.js/master/dist/headroom.js"></script>
 
 <script  type="text/javascript"  src="https://rawgithub.com/WickyNilliams/headroom.js/master/src/jQuery.headroom.js"></script>
 
 <script type="text/javascript">
 
            $(".navbar-fixed-top").headroom();
 
 </script>
</body>
</html>
