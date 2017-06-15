<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/huaneng/Public/after/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/huaneng/Public/after/css/main.css"/>
    <script type="text/javascript" src="/huaneng/Public/after/js/libs/modernizr.min.js"></script>
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
                    <a ><i class="icon-font">&#xe014;</i>管理员管理</a>
                    <ul class="sub-menu">
                        <li><a href="/huaneng/index.php/Admin/Administrator/allAdministrator.html"><i class="icon-font">&#xe003;</i>所有管理员</a></li>
                        <li><a href="/huaneng/index.php/Admin/Administrator/addAdministrator.html"><i class="icon-font">&#xe026;</i>添加管理员</a></li>
                    </ul>
                </li>
                <li>
                    <a ><i class="icon-font">&#xe005;</i>产品管理</a>
                    <ul class="sub-menu">
                        <li><a href="/huaneng/index.php/Admin/Product/allProducts.html"><i class="icon-font">&#xe005;</i>所有产品</a></li>
                        <li><a href="/huaneng/index.php/Admin/Product/addProduct.html"><i class="icon-font">&#xe026;</i>添加产品</a></li>
                        <li><a href="/huaneng/index.php/Admin/Product/consult.html"><i class="icon-font">&#xe012;</i>产品咨询</a></li>
                    </ul>
                </li>
                <li>
                    <a ><i class="icon-font">&#xe034;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="/huaneng/index.php/Admin/News/allCompanynews.html"><i class="icon-font">&#xe048;</i>所有公司新闻<li><a href="/huaneng/index.php/Admin/News/addCompanynews.html"><i class="icon-font">&#xe026;</i>添加公司新闻</a></li>
                        <li><a href="/huaneng/index.php/Admin/News1/allMediannews.html"><i class="icon-font">&#xe048;</i>所有媒体新闻</a></li>
                        <li><a href="/huaneng/index.php/Admin/News1/addMediannews.html"><i class="icon-font">&#xe026;</i>添加媒体新闻</a></li>
                        
                        <li><a href="/huaneng/index.php/Admin/Active/allActive.html"><i class="icon-font">&#xe048;</i>所有展会活动</a></li>
                        <li><a href="/huaneng/index.php/Admin/Active/addActive.html"><i class="icon-font">&#xe026;</i>添加展会活动</a></li>
                    </ul>
                </li>
                <li>
                    <a ><i class="icon-font">&#xe005;</i>解决方案</a>
                    <ul class="sub-menu">
                        <li><a href="/huaneng/index.php/Admin/Project/allProjects.html"><i class="icon-font">&#xe005;</i>所有方案</a></li>
                        <li><a href="/huaneng/index.php/Admin/Project/addProject.html"><i class="icon-font">&#xe026;</i>添加方案</a></li>
                    </ul>
                </li>
               <li>
                <a ><i class="icon-font">&#xe043;</i>公司公告</a>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/huaneng/index.php/Admin/Index/index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/huaneng/index.php/Admin/News/allCompanynews.html">新闻管理</a><span class="crumb-step">&gt;</span><span>新增新闻</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form role="form" action="/huaneng/index.php/Admin/News/doAdd1" method="post" enctype="multipart/form-data">
    
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>描述：</th>
                                <td><textarea name="summary" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="3"></textarea></td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th>上传：</th>
                                <td><form>
                                    <input type="file" name="img">
                                </form></td>
                            </tr>
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