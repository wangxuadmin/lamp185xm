<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/admins/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="./admins/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    {{--<script src="/admins/assets/js/echarts.min.js"></script>--}}
    <link rel="stylesheet" href="/admins/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/admins/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/admins/assets/css/app.css">
    <script src="/admins/assets/js/jquery.min.js"></script>
</head>

<body data-type="index">
    <script src="/admins/assets/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="/admins/assets/img/logo.png" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">

                            <a href="javascript:;">欢迎你, <span>Amaze UI</span> </a>

                            {{--<a href="javascript:;">欢迎你, <span>{!! session('user')->user_name!!}</span> </a>--}}

                        </li>

                        <!-- 新邮件 -->
                        <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-envelope"></i>
                                <span class="am-badge am-badge-success am-round item-feed-badge">4</span>
                            </a>
                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/admins/assets/img/user04.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            3小时前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-success"></i>
                                                <span>夕风色</span>
                                            </div>
                                            <div class="am-text-truncate"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </div>
                                            <div class="menu-messages-content-time">2016-09-21 下午 16:40</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/admins/assets/img/user02.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            5天前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-warning"></i>
                                                <span>禁言小张</span>
                                            </div>
                                            <div class="am-text-truncate"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </div>
                                            <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <i class="am-icon-circle-o"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 新提示 -->
                        <li class="am-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-bell"></i>
                                <span class="am-badge am-badge-warning am-round item-feed-badge">5</span>
                            </a>

                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-line-chart"></i>
                                            <span> 有6笔新的销售订单</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            12分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-star"></i>
                                            <span> 有3个来自人事部的消息</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            30分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-folder-o"></i>
                                            <span> 上午开会记录存档</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            1天前
                                        </div>
                                    </a>
                                </li>


                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <i class="am-icon-bell"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="{{url('admin/logout')}}">
                                <span class="am-icon-sign-out" ></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>



        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
<<<<<<< HEAD
                        <img src="/admins/assets/img/user04.png" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
                          <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
                          禁言小张
                      </span>
                    <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
=======
                        {{--<img src="{!! session('user')->admin_pic !!}" alt="">--}}
                    </div>
                    <span class="user-panel-logged-in-text">
                          <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
                          {{--{!! session('user')->user_name!!}--}}
                      </span>
                    <a href="{{url('admin/pass')}}" class="tpl-user-panel-action-link">
                    <span class="am-icon-pencil"></span>修改密码</a>
>>>>>>> origin/zhaoxiaoting
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">

                <li class="sidebar-nav-link">
                    <a href="{{url('admin/index')}}" class="active">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                </li>


                {{--后台用户模块--}}
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 用户模块
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/user/create')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加用户
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/user')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 用户列表
                            </a>
                        </li>
                    </ul>
                </li>


                {{--角色模块--}}
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 角色模块
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/role/create')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加角色
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/role')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 角色列表

                            </a>
                        </li>
                    </ul>
                </li>


                {{--权限模块--}}
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i>权限模块
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/permission/create')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加权限
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/permission')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 权限列表
                            </a>
                        </li>
                    </ul>
                </li>


                {{--后台分类模块--}}
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 分类模块
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/cate/create')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加分类
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/cate')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 分类列表
                            </a>
                        </li>
                    </ul>
                </li>


                {{--后台文章模块--}}
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 文章模块
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/article/create')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加文章
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/article')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文章列表
                            </a>
                        </li>
                    </ul>
                </li>

                {{--网站配置--}}
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 网站配置模块
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/config/create')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加配置
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/config')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 配置列表
                            </a>
                        </li>
                    </ul>
                </li>


                {{--友情链接--}}
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 友情链接
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/links/create')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 添加
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="{{url('admin/links')}}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 列表
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
        @section('content')

        @show
        </div>
    </div>
    </div>
    <script src="/admins/assets/js/amazeui.min.js"></script>
    <script src="/admins/assets/js/amazeui.datatables.min.js"></script>
    <script src="/admins/assets/js/dataTables.responsive.min.js"></script>
    <script src="/admins/assets/js/app.js"></script>
    <script type="text/javascript" src="/layer/layer.js"></script>

</body>

</html>