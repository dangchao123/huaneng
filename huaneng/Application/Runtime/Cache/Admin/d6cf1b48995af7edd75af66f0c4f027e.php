<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/huaneng/Public/after/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/huaneng/Public/after/css/main.css"/>
    <script type="text/javascript" src="/huaneng/Public/after/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="">管理员</a></li>
                <li><a href="">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="allAdministrator.html"><i class="icon-font">&#xe014;</i>管理员管理</a>
                    <ul class="sub-menu">
                        <li><a href="allAdministrator.html"><i class="icon-font">&#xe003;</i>所有管理员</a></li>
                        <li><a href="addAdministrator.html"><i class="icon-font">&#xe026;</i>添加管理员</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe005;</i>产品管理</a>
                    <ul class="sub-menu">
                        <li><a href="allProducts.html"><i class="icon-font">&#xe005;</i>所有产品</a></li>
                        <li><a href="addProduct.html"><i class="icon-font">&#xe026;</i>添加产品</a></li>
                        <li><a href="consult.html"><i class="icon-font">&#xe012;</i>产品咨询</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe034;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="allCompanynews.html"><i class="icon-font">&#xe048;</i>所有公司新闻<li><a href="addCompanynews.html"><i class="icon-font">&#xe026;</i>添加公司新闻</a></li>
                        <li><a href="allMediannews.html"><i class="icon-font">&#xe048;</i>所有媒体新闻</a></li>
                        <li><a href="addMediannews.html"><i class="icon-font">&#xe026;</i>添加媒体新闻</a></li>
                        
                        <li><a href="allActive.html"><i class="icon-font">&#xe048;</i>所有展会活动</a></li>
                        <li><a href="addActive.html"><i class="icon-font">&#xe026;</i>添加展会活动</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe005;</i>解决方案</a>
                    <ul class="sub-menu">
                        <li><a href="allProjects.html"><i class="icon-font">&#xe005;</i>所有方案</a></li>
                        <li><a href="addProject.html"><i class="icon-font">&#xe026;</i>添加方案</a></li>
                    </ul>
                </li>
               <li>
                <a href="#"><i class="icon-font">&#xe043;</i>公司公告</a>
                <ul class="sub-menu">
                    <li><a href="allNotice.html"><i class="icon-font">&#xe043;</i>所有公告</a></li>
                    <li><a href="addNotice.html"><i class="icon-font">&#xe026;</i>添加公告</a></li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allRooms.html">产品管理</a><span class="crumb-step">&gt;</span><span>新增产品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/jscss/admin/design/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="colId" id="catid" class="required">
                                    <option value="">请选择</option>
                                    <option value="19">光伏逆变器</option>
                                    <option value="20">风能逆变器</option>
                                    <option value="19">储能系统</option>
                                    <option value="20">新能源汽车系统</option>
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>型号：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td><input name="smallimg" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>参数：</th>
                                <td>
                                	<h4>输入：</h4>
                                		<i>最大输入电压：
                                    		<input class="common-text required" id="title" name="title" size="4" value="" type="text">V
                                		</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>启动电压：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">V
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>最低工作电压：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">V
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>MMP电压范围：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">~
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">V
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>MPPT数量：&nbsp;&nbsp;&nbsp;&nbsp;
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">路
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>最大输入电流：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">A
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                <h4>输出：</h4>
	                                	<i>额定输出功率：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">kW
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<i>最大输出功率：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">kW
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>最大输出电流：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">A
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>额定电网电压：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">V
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>电网电压范围：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">~
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">V（可设置）
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<i>额定电网频率：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">Hz/
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">Hz
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>电网频率范围：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">~
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">Hz/
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">~
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">Hz（可设置）
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>总电流波形畸变率：<
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">%（额定功率时）
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>直流分量：<
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">%额定输出电流
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<i>功率因数（额定功率下）：
	                                    	><input class="common-text required" id="title" name="title" size="4" value="" type="text">
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>功率因数可调范围：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">（超前）~
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">（滞后）
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>馈电相数/输出端相数：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">/
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">
	                                	</i>
	                                <h4>效率：</h4>
	                                	<i>最大效率：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">%
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>欧洲效率：
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">%
	                                	</i>
	                                <h4>保护：</h4>
	                                	<i>直流过压保护：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>直流反接保护：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>直流短路保护：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>电网监测：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>接地故障监测：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>绝缘监测：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>过热保护：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                <h4>其他功能</h4>
	                                	<i>PID防护与修复：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>SVG功能：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>夜间休眠功能：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>交流侧直接并联：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>软开、关机：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                	<i>内、外供电自动切换：
	                                    	<select>
											  <option value="选配">选配</option>
											  <option value="具备">具备</option>
											</select>
	                                	</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                                <h4>通用参数：</h4>
	                                	<i>尺寸（宽x高x深）：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">x
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">x
	                                    	<input class="common-text required" id="title" name="title" size="4" value="" type="text">mm
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>重量：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">kg
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>防护等级：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">g
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>夜间自耗电：<
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">W
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>辅助电源：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">~
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">V/
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">A
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>冷却方式：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">
	                                	</i>
	                                	<br />
	                                	<i>工作温度范围：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">~
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">℃
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>工作湿度范围：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">~
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">%,无冷凝
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>最高工作海拔：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">m
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>通讯接口：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>通讯协议：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">
	                                	</i>&nbsp;&nbsp;&nbsp;
	                                	<br />
	                                	<i>符合标准：
	                                		<input class="common-text required" id="title" name="title" size="4" value="" type="text">
	                                	</i>&nbsp;&nbsp;&nbsp;
                                </td>
                            </tr>
                            <!--<tr>
                                <th>备注：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>-->
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>