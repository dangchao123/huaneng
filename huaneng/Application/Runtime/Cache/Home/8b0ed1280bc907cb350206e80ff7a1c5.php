<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>产品内容</title>    
<link href="/huaneng/Public/before/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />     
<link href="/huaneng/Public/before/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="/huaneng/Public/before/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/huaneng/Public/before/css/slider.css" rel="stylesheet" type="text/css" media="all" />
<link href="/huaneng/Public/before/css/product.css" rel="stylesheet" type="text/css" media="all" />
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
						<a class="active"href="/huaneng/index.php/Home/Product/productlist1.html">产品中心<span class="caret"></span></a>
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
	<?php if(is_array($pt)): $i = 0; $__LIST__ = $pt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="agile-prod">
		<div class="container">
			<div class="breadcrumb1">				
				<ol class="breadcrumb">
					<li><a href="/huaneng/index.php/Home/Index/index.html">首页</a></li>
					<li><a><?php echo ($vo["产品种类"]); ?></a></li>
					<li class="active"><?php echo ($vo["型号"]); ?></li>
				</ol>
			</div>
		</div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <!-- 面包屑+小导航结束 -->
    <div class="agile-prod">
    	<div class="container">
    		<?php if(is_array($pt)): $i = 0; $__LIST__ = $pt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pt): $mod = ($i % 2 );++$i;?><div class="agile-prod1">
			<div class="name"><?php echo ($pt["型号"]); ?></div>
			<div class="col-md-5 agile-img">
				<img src="/huaneng/Public/<?php echo ($pt["略缩图"]); ?>" alt="image">
			</div>
			<div class="col-md-7 text">
				<p style="font-size:18px;margin-top:4em;line-height:25px;"><?php echo ($pt["summary"]); ?></p>
			</div>
			
			<div class="clearfix"> </div>
		</div>
		<div class="agile-prod1 part-one">
			<div class="col-md-2 cprz">
				<p>产品认证</p>
			</div>
			<div class="col-md-2 pic">
				<img src="/huaneng/Public/before/images/gb.png" />
				<h5>国标</h5>
			</div>
			<div class="col-md-2 pic">
				<img src="/huaneng/Public/before/images/jty.png" />
				<h5>金太阳认证</h5>
			</div>
			<div class="col-md-2 pic">
				<img src="/huaneng/Public/before/images/bdew.png" />
				<h5>德国BDEW认证</h5>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="agile-prod1 part-two">
			
			<div class="col-md-2 jscs">
				<p>技术参数</p>
				<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Nullam tristique faucibus pharetra.</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Pellentesque auctor</a></li>
				</ul>-->
			</div>
			<div class="col-md-10 ">
				<p>&nbsp;</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="agile-prod1 part-two">
			<div class="col-md-2 text">
				<p>输入</p>
			</div>
			<div class="col-md-4 ">
				<p> 最大输入电压	：	<?php echo ($pt["最大输入电压"]); ?>V</p><br />
				<p>最低工作电压	：	<?php echo ($pt["最低工作电压"]); ?>V</p><br />
				<p>MPPT 数量	：	<?php echo ($pt["mppt"]); ?>路</p>
			</div>
			<div class="col-md-4">
				<p>启动电压：<?php echo ($pt["启动电压"]); ?>V</p><br />
				<p>MPP电压范围：<?php echo ($pt["最小mmp电压范围"]); ?>~<?php echo ($pt["最大mmp电压范围"]); ?>V</p><br />
				<p>最大输入电流：<?php echo ($pt["最大输入电流"]); ?>A</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<hr />
		<div class="agile-prod1 part-two">
			<div class="col-md-2 text">
				<p>输出</p>
			</div>
			<div class="col-md-4 ">
				<p> 额定输出功率	：	<?php echo ($pt["额定输出功率"]); ?>kW</p><br />
				<p>最大输出功率	：	<?php echo ($pt["最大输出功率"]); ?>kVA</p><br />
				<p>额定电网电压	：	<?php echo ($pt["额定电网电压"]); ?>V</p><br />
				<p>额定电网频率	：	<?php echo ($pt["额定电网频率"]); ?>Hz</p><br />
				<p>总电流波形畸变率	：	<<?php echo ($pt["总电流波形畸变率"]); ?>%（额定功率时）</p><br />
				<p>功率因数（额定功率下）	：	><?php echo ($pt["功率因数"]); ?></p><br />
				<p>馈电相数 / 输出端相数	：	<?php echo ($pt["馈电相数"]); ?>/<?php echo ($pt["输出端相数"]); ?></p>
			</div>
			<div class="col-md-4">
				<p>最大输出功率	：	<?php echo ($pt["最大输出功率"]); ?>kW</p><br />
				<p>最大输出电流	：	<?php echo ($pt["最大输出电流"]); ?>A</p><br />
				<p>电网电压范围	：	<?php echo ($pt["最小电网电压范围"]); ?>~<?php echo ($pt["最大电网电压范围"]); ?>V （可设置）</p><br />
				<p>电网频率范围	：	<?php echo ($pt["最小电网频率范围"]); ?>~<?php echo ($pt["最大电网频率范围"]); ?>Hz ）</p><br />
				<p>直流分量	：	<<?php echo ($pt["直流分量"]); ?>% 额定输出电流</p><br />
				<p>功率因数可调范围	：	<?php echo ($pt["功率因数可调范围超前"]); ?>（超前）~<?php echo ($pt["功率因数可调范围滞后"]); ?>（滞后）</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<hr />
		<div class="agile-prod1 part-two">
			<div class="col-md-2 text">
				<p>效率</p>
			</div>
			<div class="col-md-4 ">
				<p> 最大效率	：	<?php echo ($pt["最大效率"]); ?>%</p>
			</div>
			<div class="col-md-4">
				<p>欧洲效率	：	<?php echo ($pt["欧洲效率"]); ?>%</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<hr />
		<div class="agile-prod1 part-two">
			<div class="col-md-2 text">
				<p>保护</p>
			</div>
			<div class="col-md-4 ">
				<p> 直流过压保护	：	<?php echo ($pt["直流过压保护"]); ?></p><br />
				<p>直流短路保护	：	<?php echo ($pt["直流短路保护"]); ?></p><br />
				<p>接地故障监测	：	<?php echo ($pt["接地故障监测"]); ?></p><br />
				<p>过热保护	：	<?php echo ($pt["过热保护"]); ?></p>
			</div>
			<div class="col-md-4">
				<p>直流反接保护	：	<?php echo ($pt["直流反接保护"]); ?></p><br />
				<p>电网监测	：	<?php echo ($pt["电网监测"]); ?></p><br />
				<p>绝缘监测	：	<?php echo ($pt["绝缘监测"]); ?></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<hr />
		<div class="agile-prod1 part-two">
			<div class="col-md-2 text">
				<p>其他功能</p>
			</div>
			<div class="col-md-4 ">
				<p>PID防护与修复	：	<?php echo ($pt["pid防护与修复"]); ?></p><br />
				<p>夜间休眠模式	：	<?php echo ($pt["夜间休眠模式"]); ?></p><br />
				<p>软开、关机	：	<?php echo ($pt["软开、关机"]); ?></p>
			</div>
			<div class="col-md-4">
				<p>SVG功能	：	<?php echo ($pt["svg功能"]); ?></p><br />
				<p>交流侧直接并联	：	<?php echo ($pt["交流侧直接并联"]); ?></p><br />
				<p>内、外供电自动切换	：	<?php echo ($pt["内、外供电自动切换"]); ?></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<hr />
		<div class="agile-prod1 part-two">
			<div class="col-md-2 text">
				<p>通用参数</p>
			</div>
			<div class="col-md-4 ">
				<p> 尺寸 (宽×高×深)	：	<?php echo ($pt["尺寸(宽)"]); ?>×<?php echo ($pt["尺寸(高)"]); ?>×<?php echo ($pt["尺寸(深)"]); ?>mm</p><br />
				<p>防护等级	：	<?php echo ($pt["防护等级"]); ?></p><br />
				<p>辅助电源	：	<?php echo ($pt["辅助电源最小电压"]); ?>~<?php echo ($pt["辅助电源最大电压"]); ?>V / <?php echo ($pt["辅助能源电流"]); ?></p><br />
				<p>工作温度范围	：	<?php echo ($pt["最大工作温度"]); ?>~<?php echo ($pt["最小工作温度"]); ?>℃</p><br />
				<p>最高工作海拔	：	<?php echo ($pt["最高工作海拔"]); ?>m</p><br />
				<p>通讯协议	：	<?php echo ($pt["通讯协议"]); ?></p>
			</div>
			<div class="col-md-6">
				<p>重量	：	<?php echo ($pt["重量"]); ?>kg</p><br />
				<p>夜间自耗电	：	<<?php echo ($pt["夜间自耗电"]); ?>w</p><br />
				<p>冷却方式	：	<?php echo ($pt["冷却方式"]); ?></p><br />
				<p>工作湿度范围	：	<?php echo ($pt["最大工作湿度"]); ?>~<?php echo ($pt["最小工作湿度"]); ?>%</p><br />
				<p>通讯接口	：	<?php echo ($pt["通讯接口"]); ?></p><br />
				<p>符合标准	：	<?php echo ($pt["符合标准"]); ?></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<hr />
		<div class="zhushi">
			<p>注：产品不断创新，性能继续提升，本技术参数仅供参考</p>
		</div>
		<div class="wendang">
				<div class="wdxz">
					<p>&nbsp;</p>
					<p>文档下载</p>
				</div>
			<div class="agile-prod1 part-three">
				<div class="col-md-4 pic xz">
					<a href="/huaneng/Public/before/操作手册.docx"style="color:#000;"><img src="/huaneng/Public/before/images/wendang.png" /><?php echo ($pt["型号"]); ?>操作手册</a>
				</div>
				<div class="col-md-4 pic xz">
					<a href="/huaneng/Public/before/安装手册.docx"style="color:#000;"><img src="/huaneng/Public/before/images/wendang.png" /><?php echo ($pt["型号"]); ?>安装手册</a>
				</div>
				<div class="col-md-4 pic xz">
					<a href="/huaneng/Public/before/产品介绍.docx"style="color:#000;"><img src="/huaneng/Public/before/images/wendang.png" /><?php echo ($pt["型号"]); ?>产品介绍</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="part-four">
			<div>
				<p class="cpzx">产品咨询</p>
			</div>
			<div class="zxzx">
				<form role="form" action="<?php echo U('Product/liuyan');?>" method="post" enctype="multipart/form-data">
				<p style="font-size:20px;">在线咨询</p>
				
					<div class="exchange ">
						<div class="col-md-4 jx">
							<p>机型：<input type="text" name="cate" placeholder="例如SG500MX"></p>
						</div>
						<div class="col-md-4 gs">
							<p>公司：<input type="text" name="company"placeholder="公司"></p>
						</div>
						<div class="col-md-4 dz">
							<p>地址：<input type="text" name="address"placeholder="地址"></p>
						</div>
					</div>
					<div class="exchange ">
						<div class="col-md-4 xm">
							<p>姓名：<input type="text" name="username"placeholder="姓名"></p>
						</div>
						<div class="col-md-4 dh">
							<p>电话：<input type="text" name="phone"placeholder="电话"></p>
						</div>
						<div class="col-md-4 yx">
							<p>邮箱：<input type="email"name="email" placeholder="邮箱"></p>
						</div>
					</div>
					<div class="exchange">
						<div class=" ly">
							<p>留言：<textarea name="content" placeholder="输入留言内容"style="width:800px;height:150px;"></textarea>
						</div>
					</div>
					<input class="submit"type="submit" name="Submit" value="提交" /> 
				</form>
			</div>
		
			<div class="phone-talk">
				<p class="dhzx">电话咨询</p>
				<p style="margin-top:1em;font-size:20px;">总机</p>
				<p style="margin-top:0.6em;font-size:18px;">0551 - 6532 7878       0551 - 6532 7877  </p>
				<p style="margin-top:1em;font-size:20px;">国内光伏销售:</p>
				<p style="margin-top:0.6em;font-size:18px;">0551 - 6532 7827        0551 - 6532 7828  
					0551 - 6532 7821        sales@sungrowpower.com （销售）
					pv-system@sungrowpower.com（解决方案） 
					tech@sungrowpower.com （工程技术）  </p>
			</div>
		</div>
    	</div>

    </div>
<!-- footer -->
	<div class="footer-top">
		<div class="container">
			<div class="col-md-4 wthree-footer-top">
				<h3><a href="/huaneng/index.php/Home/Index/inedx.html">华能<span>电源</span></a></h3>
					<ul>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">mail@example.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+080 264 995</li>
					</ul>
			</div>
			<div class="col-md-3 w3ls-footer-top">
				<h3>快速<span>链接</span></h3>
						<ul>
							<li><a href="/huaneng/index.php/Home/Index/inedx.html">首页</a></li>
			              <li><a href="/huaneng/index.php/Home/Product/productlist1.html">产品</a></li>
			              <li><a href="/huaneng/index.php/Home/Project/projectlist1.html">解决方案</a></li>
			              
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