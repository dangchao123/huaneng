<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>展会活动</title>    
<link href="/huaneng/Public/before/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />     
<link href="/huaneng/Public/before/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="/huaneng/Public/before/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/huaneng/Public/before/css/slider.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript">
    addEventListener("load", function() {
         setTimeout(hideURLbar, 0);
     }, false);
     function hideURLbar(){ 
          window.scrollTo(0,1);
     } 
 </script>
<script type="text/javascript" src="/huaneng/Public/before/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/huaneng/Public/before/js/nav.js"></script>
<script type="text/javascript" src="/huaneng/Public/before/js/slider.js"></script>
<script src="/huaneng/Public/before/js/bootstrap.js"></script>
</head>
<body>
<!-- header -->
	<!-- header -->
	<header>
        <div class="top">
            <div class="container">
                <div class="logo">
                    <h1><a href="/huaneng/index.php/Home/Index/index.html">华能<span>电源 </span></a></h1>
                </div>
                <div class="agileits-contact-info text-right">
                    <ul>
                        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">mail@example.com</a></li>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+080 264 995</li>
                    </ul>
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
        
            <nav class="navbar navbar-default">
              <div class="container">
                <!-- 手机导航栏 -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button> 
                </div>

                <!-- 导航栏 -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a  href="/huaneng/index.php/Home/Index/index.html">首 页</a></li>
                    <li class="dropdown">
                        <a href="/huaneng/index.php/Home/Product/productlist1.html">产品中心<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="/huaneng/index.php/Home/Product/productlist1.html">光伏逆变器</a></li>
                          <li><a href="/huaneng/index.php/Home/Product/productlist2.html">风能变流器</a></li>
                          <li><a href="/huaneng/index.php/Home/Product/productlist3.html">储能系统</a></li>
                          <li><a href="/huaneng/index.php/Home/Product/productlist4.html">新能源汽车驱动系统</a></li>
                        
                      </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/huaneng/index.php/Home/Project/Projectlist1.html">解决方案<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="/huaneng/index.php/Home/Project/Projectlist1.html">光伏逆变器</a></li>
                          <li><a href="/huaneng/index.php/Home/Project/Projectlist2.html">电站系统</a></li>
                          <li><a href="/huaneng/index.php/Home/Project/Projectlist3.html">储能系统</a></li>
                          <li><a href="/huaneng/index.php/Home/Project/Projectlist4.html">新能源汽车驱动系统</a></li>
                          
                      </ul>
                    </li>
            
                    
                    <li><a href="/huaneng/index.php/Home/About/services.html">服务与支持</a></li>

                    <li><a href="/huaneng/index.php/Home/About/contact.html">联系我们</a></li>
                  </ul>
                </div>
              </div>
            </nav>
    </header>
	<!-- //header -->
	<!-- banner -->
	<div class="agile-banner">
	</div>
	<!-- //banner -->	
	<!-- 面包屑+小导航 -->
	<div class="agile-prod">
		<div class="container">
			<div class="breadcrumb1">				
				<ol class="breadcrumb">
					<li><a href="/huaneng/index.php/Home/Index/index.html">首页</a></li>
					<li class="active">展会活动</li>
				</ol>
			</div>
		</div>
    </div>
    <!-- 面包屑+小导航结束 -->
	
<div class="overview w3-2">
	   <div class="container">
			
		   <div class="overview-grids">
            <?php if(is_array($active)): $i = 0; $__LIST__ = $active;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$active): $mod = ($i % 2 );++$i;?><div class="col-md-4 list-grid2"style="margin-top:3em;">
                <div class="list-img">
                    <a><img  src="/huaneng/Public/<?php echo ($active["img"]); ?>"class="img-responsive" alt=" "style="width:283px;height:159px;"></a>
            
                </div>

                <h4 style="font-size:20px;font-weight: 300;"><?php echo ($active["title"]); ?></h4>
                <span style="color:#777;">时间：<?php echo ($active["time"]); ?></span></br>
                <span style="color:#777;">地点：<?php echo ($active["address"]); ?></span>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

            
        </div>
        
		</div>
</div>


	 <div class="overview w3-2">
        <div class="container">
            <div>
                <h2>往期活动</h2>
            </div>
            <br>
            <div class="overview-grids">
             <?php if(is_array($activeago)): $i = 0; $__LIST__ = $activeago;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$activeago): $mod = ($i % 2 );++$i;?><div class="col-md-6 list-grid3">
                    <div class="col-md-4">
                        <a >   <img src="/huaneng/Public/<?php echo ($activeago["img"]); ?>" class="img-responsive" alt=" "style="width:130px;height:80px;"></a>
                   
                    </div>

                    <div class=" act col-md-8 ">
                      <h4 style="font-size:20px;font-weight: 300;"><?php echo ($activeago["title"]); ?></h4>
                        <div class="teaser">
                        <span>时间：<?php echo ($activeago["time"]); ?></span></br>
                        <span>地点：<?php echo ($activeago["address"]); ?></span>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>

                
                
                

            </div>
        </div>
         
    </div>



	
<!-- footer -->
	<div class="footer-top">
		<div class="container">
			<div class="col-md-4 wthree-footer-top">
				<h3><a href="/huaneng/index.php/Home/Index/index.html">华能<span>电源</span></a></h3>
					<ul>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">mail@example.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+080 264 995</li>
					</ul>
			</div>
			<div class="col-md-3 w3ls-footer-top">
				<h3>快速<span>链接</span></h3>
						<ul>
							<li><a href="/huaneng/index.php/Home/Index/index.html">首页</a></li>
							<li><a href="/huaneng/index.php/Home/Product/product1.html">产品</a></li>
							<li><a href="/huaneng/index.php/Home/Project/project1.html">解决方案</a></li>
							
							<li><a href="/huaneng/index.php/Home/About/services.html">服务支持</a></li>
							<li><a href="/huaneng/index.php/Home/About/contact.html">联系我们</a></li>
						</ul>

			</div>
			
			<div class="col-md-5 w3l-footer-top">
				<div class="footer-img">
					<img src="/huaneng/Public/before/images/001.png">
				</div>
				<div class="footer-letter">
					<p>©Huaneng2017. 备案号：皖ICP备05001号-1</p>
				</div>
				
				<br><br><br><br>
			</div>
				<div class="clearfix"></div>

		</div>
			
		</div>
	</div>

</body>
</html>