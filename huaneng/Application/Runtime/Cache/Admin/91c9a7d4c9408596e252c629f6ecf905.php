<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/huaneng/Public/after/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/huaneng/Public/after/css/main.css"/>
    <script type="text/javascript" src="/huaneng/Public/after/js/libs/modernizr.min.js"></script>
    <style type="text/css">
    .sidebar-list input[type=checkbox] {
      /* hide native checkbox */
      position: absolute;
      opacity: 0;
    }
    .sidebar-list label, .sidebar-list a {
      position: relative;
      display: block;
    }   
    .sidebar-list ul {
      display: none;
    }
 
    .sidebar-list input[type=checkbox]:checked + label + ul,
    .sidebar-list input[type=checkbox]:checked + label:nth-of-type(n) + ul {
      display: block;
    }    


    </style>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="/huaneng/index.php/Admin/Index/index.html" class="navbar-brand">后台管理</a></h1>
            
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href=""><?php echo ($_SESSION['name']); ?></a></li>
                <li><a href="<?php echo U(Admin/Admin/logout);?>">退出</a></li>
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
                <li class="menu">
                    <input type="checkbox" name ="group-1" id="group-1">
                    <label for="group-1"><a><i class="icon-font">&#xe014;</i>管理员管理</a></label>
                    <ul class="sub-menu">
                        <li><a href="/huaneng/index.php/Admin/Administrator/allAdministrator.html"><i class="icon-font">&#xe003;</i>所有管理员</a></li>
                        <li><a href="/huaneng/index.php/Admin/Administrator/addAdministrator.html"><i class="icon-font">&#xe026;</i>添加管理员</a></li>
                    </ul>
                </li>

                <li class="menu">
                    <input type="checkbox" name ="group-2" id="group-2">
                    <label for="group-2"><a><i class="icon-font">&#xe005;</i>产品管理</a></label>
                    <ul class="sub-menu">
                        <li><a href="/huaneng/index.php/Admin/Product/allProducts.html"><i class="icon-font">&#xe005;</i>所有产品</a></li>
                        <li><a href="/huaneng/index.php/Admin/Product/addProduct.html"><i class="icon-font">&#xe026;</i>添加产品</a></li>
                        <li><a href="/huaneng/index.php/Admin/Product/consult.html"><i class="icon-font">&#xe012;</i>产品咨询</a></li>
                    </ul>
                </li>
                <li class="menu">
                    <input type="checkbox" name ="group-3" id="group-3">
                    <label for="group-3"><a><i class="icon-font">&#xe048;</i>新闻管理</a></label>
                    <ul class="sub-menu">
                        <li><a href="/huaneng/index.php/Admin/News/allCompanynews.html"><i class="icon-font">&#xe048;</i>所有公司新闻<li><a href="/huaneng/index.php/Admin/News/addCompanynews.html"><i class="icon-font">&#xe026;</i>添加公司新闻</a></li>
                        <li><a href="/huaneng/index.php/Admin/News1/allMediannews.html"><i class="icon-font">&#xe048;</i>所有媒体新闻</a></li>
                        <li><a href="/huaneng/index.php/Admin/News1/addMediannews.html"><i class="icon-font">&#xe026;</i>添加媒体新闻</a></li>
                        
                        <li><a href="/huaneng/index.php/Admin/Active/allActive.html"><i class="icon-font">&#xe048;</i>所有展会活动</a></li>
                        <li><a href="/huaneng/index.php/Admin/Active/addActive.html"><i class="icon-font">&#xe026;</i>添加展会活动</a></li>
                    </ul>
                </li>
                <li class="menu">
                    <input type="checkbox" name ="group-4" id="group-4">
                    <label for="group-4"><a><i class="icon-font">&#xe005;</i>解决方案</a></label>
                    <ul class="sub-menu">
                        <li><a href="/huaneng/index.php/Admin/Project/allProjects.html"><i class="icon-font">&#xe005;</i>所有方案</a></li>
                        <li><a href="/huaneng/index.php/Admin/Project/addProject.html"><i class="icon-font">&#xe026;</i>添加方案</a></li>
                    </ul>
                </li>
               <li class="menu">
                <input type="checkbox" name ="group-5" id="group-5">
                    <label for="group-5"><a><i class="icon-font">&#xe043;</i>公司公告</a></label>
                <ul class="sub-menu">
                    <li><a href="/huaneng/index.php/Admin/Notice/allNotice.html"><i class="icon-font">&#xe043;</i>所有公告</a></li>
                    <li><a href="/huaneng/index.php/Admin/Notice/addNotice.html"><i class="icon-font">&#xe026;</i>添加公告</a></li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        
  <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/huaneng/index.php/Admin/Index/index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/huaneng/index.php/Admin/Product/allProducts.html">产品管理</a><span class="crumb-step">&gt;</span><span>新增产品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form role="form" action="/huaneng/index.php/Admin/Product/productadd" method="post" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>产品种类：</th>
                                <td>
                                    <input class="common-text required" id="title" name="产品种类" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>型号：</th>
                                <td>
                                    <input class="common-text required" id="title" name="型号" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td><input name="略缩图" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th>产品简介：</th>
                                <td><textarea name="summary" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>产品介绍：</th>
                                <td><input name="产品介绍" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>操作手册：</th>
                                <td><input name="操作手册" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>安装手册：</th>
                                <td><input name="安装手册" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>参数：</th>
                                <td>
                                    <h4>输入：</h4>
                                        <i>最大输入电压：
                                            <input class="common-text required" id="title" name="最大输入电压" size="4" value="" type="text">V
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>启动电压：
                                            <input class="common-text required" id="title" name="启动电压" size="4" value="" type="text">V
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>最低工作电压：
                                            <input class="common-text required" id="title" name="最低工作电压" size="4" value="" type="text">V
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>MMP电压范围：
                                            <input class="common-text required" id="title" name="最小mmp电压范围" size="4" value="" type="text">~
                                            <input class="common-text required" id="title" name="最大mmp电压范围" size="4" value="" type="text">V
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>MPPT数量：&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input class="common-text required" id="title" name="mppt" size="4" value="" type="text">路
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>最大输入电流：
                                            <input class="common-text required" id="title" name="最大输入电流" size="4" value="" type="text">A
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                    <h4>输出：</h4>
                                        <i>额定输出功率：
                                            <input class="common-text required" id="title" name="额定输出功率" size="4" value="" type="text">kW
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <i>最大输出功率：
                                            <input class="common-text required" id="title" name="最大输出功率" size="4" value="" type="text">kW
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>最大输出电流：
                                            <input class="common-text required" id="title" name="最大输出电流" size="4" value="" type="text">A
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>额定电网电压：
                                            <input class="common-text required" id="title" name="额定电网电压" size="4" value="" type="text">V
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>电网电压范围：
                                            <input class="common-text required" id="title" name="最小电网电压范围" size="4" value="" type="text">~
                                            <input class="common-text required" id="title" name="最大电网电压范围" size="4" value="" type="text">V（可设置）
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <i>额定电网频率：
                                            <input class="common-text required" id="title" name="额定电网频率" size="4" value="" type="text">Hz
                                           
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>电网频率范围：
                                            <input class="common-text required" id="title" name="最小电网频率范围" size="4" value="" type="text">~
                                            <input class="common-text required" id="title" name="最大电网频率范围" size="4" value="" type="text">Hz
                                           
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>总电流波形畸变率：
                                            <input class="common-text required" id="title" name="总电流波形畸变率" size="4" value="" type="text">%（额定功率时）
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>直流分量：
                                            <input class="common-text required" id="title" name="直流分量" size="4" value="" type="text">%额定输出电流
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <i>功率因数（额定功率下）：
                                            ><input class="common-text required" id="title" name="功率因数" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>功率因数可调范围：
                                            <input class="common-text required" id="title" name="功率因数可调范围（超前）" size="4" value="" type="text">（超前）~
                                            <input class="common-text required" id="title" name="功率因数可调范围（滞后）" size="4" value="" type="text">（滞后）
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>馈电相数/输出端相数：
                                            <input class="common-text required" id="title" name="馈电相数" size="4" value="" type="text">/
                                            <input class="common-text required" id="title" name="输出端相数" size="4" value="" type="text">
                                        </i>
                                    <h4>效率：</h4>
                                        <i>最大效率：
                                            <input class="common-text required" id="title" name="最大效率" size="4" value="" type="text">%
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>欧洲效率：
                                            <input class="common-text required" id="title" name="欧洲效率" size="4" value="" type="text">%
                                        </i>
                                    <h4>保护：</h4>
                                        <i>直流过压保护：
                                            <input class="common-text required" id="title" name="直流过压保护" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>直流反接保护：
                                            <input class="common-text required" id="title" name="直流反接保护" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>直流短路保护：
                                            <input class="common-text required" id="title" name="直流短路保护" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>电网监测：
                                            <input class="common-text required" id="title" name="电网监测" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>接地故障监测：
                                            <input class="common-text required" id="title" name="接地故障监测" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>绝缘监测：
                                            <input class="common-text required" id="title" name="绝缘监测" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>过热保护：
                                            <input class="common-text required" id="title" name="过热保护" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <h4>其他功能</h4>
                                        <i>PID防护与修复：
                                            <input class="common-text required" id="title" name="pid防护与修复" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>SVG功能：
                                            <input class="common-text required" id="title" name="svg功能" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>夜间休眠功能：
                                            <input class="common-text required" id="title" name="夜间休眠功能" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>交流侧直接并联：
                                            <input class="common-text required" id="title" name="交流侧直接并联" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>软开、关机：
                                            <input class="common-text required" id="title" name="软开、关机" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i>内、外供电自动切换：
                                           <input class="common-text required" id="title" name="内、外供电自动切换" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <h4>通用参数：</h4>
                                        <i>尺寸（宽x高x深）：
                                            <input class="common-text required" id="title" name="尺寸（宽）" size="4" value="" type="text">x
                                            <input class="common-text required" id="title" name="尺寸（高）" size="4" value="" type="text">x
                                            <input class="common-text required" id="title" name="尺寸（深）" size="4" value="" type="text">mm
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>重量：
                                            <input class="common-text required" id="title" name="重量" size="4" value="" type="text">kg
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>防护等级：
                                            <input class="common-text required" id="title" name="防护等级" size="4" value="" type="text">g
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>夜间自耗电：<
                                            <input class="common-text required" id="title" name="夜间自耗电" size="4" value="" type="text">W
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>辅助电源：
                                            <input class="common-text required" id="title" name="辅助电源最小电压" size="4" value="" type="text">~
                                            <input class="common-text required" id="title" name="辅助电源最大电压" size="4" value="" type="text">V/
                                            <input class="common-text required" id="title" name="辅助能源电流" size="4" value="" type="text">A
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>冷却方式：
                                            <input class="common-text required" id="title" name="冷却方式" size="4" value="" type="text">
                                        </i>
                                        <br />
                                        <i>工作温度范围：
                                            <input class="common-text required" id="title" name="最小工作温度" size="4" value="" type="text">~
                                            <input class="common-text required" id="title" name="最大工作温度" size="4" value="" type="text">℃
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>工作湿度范围：
                                            <input class="common-text required" id="title" name="最小工作湿度" size="4" value="" type="text">~
                                            <input class="common-text required" id="title" name="最大工作湿度" size="4" value="" type="text">%,无冷凝
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>最高工作海拔：
                                            <input class="common-text required" id="title" name="最高工作海拔" size="4" value="" type="text">m
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>通讯接口：
                                            <input class="common-text required" id="title" name="通讯接口" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>通讯协议：
                                            <input class="common-text required" id="title" name="通讯协议" size="4" value="" type="text">
                                        </i>&nbsp;&nbsp;&nbsp;
                                        <br />
                                        <i>符合标准：
                                            <input class="common-text required" id="title" name="符合标准" size="4" value="" type="text">
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