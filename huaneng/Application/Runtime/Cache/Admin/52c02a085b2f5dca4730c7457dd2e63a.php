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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allRooms.html">方案管理</a><span class="crumb-step">&gt;</span><span>新增方案</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/jscss/admin/design/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
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
                                <th width="120"><i class="require-red">*</i>方案种类：</th>
                                <td>
                                    <select name="colId" id="catid" class="required">
                                        <option value="">请选择</option>
                                        <option value="19">大型地面光伏解决方案</option>
                                        <option value="20">分布式光伏解决方案</option>
                                        <option value="19">家庭光伏解决方案</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>方案图片：</th>
                                <td>
                                    <input class="common-text required" id="title" name="photo" size="50" value="" type="file">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>方案名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>方案介绍：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>概述：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>特色优势：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th>系统结构图：</th>
                                <td>
                                    <input class="common-text required" id="title" name="photo" size="50" value="" type="file">
                                </td>
                            </tr>
                            <tr>
                                <th>备注：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
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