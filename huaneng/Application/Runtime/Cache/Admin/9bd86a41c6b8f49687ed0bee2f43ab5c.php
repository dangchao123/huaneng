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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">所有活动</span>
                <form action="" method="get" style="float:right;">
                   <input type="text"  value="" name="search">&nbsp;&nbsp;<span><button type="submit">搜索</button></span> &nbsp;&nbsp;&nbsp;&nbsp;                 
                </form> 
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/huaneng/index.php/Admin/Active/addActive.html"><i class="icon-font"></i>新增活动</a>
                        
                       
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>标题</th>
                            <th>简介</th>
                            <th>展会时间</th>
                            <th>展会地点</th>
                            <th>发布时间</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        
                        </tr>
                        <?php if(is_array($actives)): $i = 0; $__LIST__ = $actives;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$active): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="59" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="0" type="text">
                            </td>
                            <td><?php echo ($active["id"]); ?></td>
                            <td><?php echo ($active["title"]); ?></td>
                            <td><?php echo ($active["summary"]); ?></td>
                            <td><?php echo ($active["time"]); ?></td>
                            <td><?php echo ($active["address"]); ?></td>
                            <td><?php echo ($active["addtime"]); ?></td>
                            <td><?php echo ($active["updatetime"]); ?></td>
                            <td>
                                 <a class="link-update" href="/huaneng/index.php/Admin/Active/edit3/id/<?php echo ($active["id"]); ?>">修改</a>
                                
                                <a class="link-del" href="/huaneng/index.php/Admin/Active/actdel/id/<?php echo ($active["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"> <?php echo ($page); ?></div>
                </div>
            </form>
        </div>


    </div>
    <!--/main-->
</div>
</body>
</html>