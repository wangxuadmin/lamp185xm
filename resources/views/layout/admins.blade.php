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
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    {{--<script src="/admins/assets/js/echarts.min.js"></script>--}}
    <link rel="stylesheet" href="/admins/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/admins/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/admins/assets/css/app.css">
    <script src="/admins/assets/js/jquery.min.js"></script>
    <script src="/layer/layer.js"></script>

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
                            <a href="javascript:;">欢迎你, <span>{!! session('user')->user_name!!}</span> </a>
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

    </div>
    <script src="/admins/assets/js/amazeui.min.js"></script>
    <script src="/admins/assets/js/amazeui.datatables.min.js"></script>
    <script src="/admins/assets/js/dataTables.responsive.min.js"></script>
    <script src="/admins/assets/js/app.js"></script>
    <script type="text/javascript" src="/layer/layer.js"></script>


</body>

</html>