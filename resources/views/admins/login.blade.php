<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台登录页</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/admins/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/admins/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/admins/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/admins/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/admins/assets/css/app.css">
    <script src="/admins/assets/js/jquery.min.js"></script>
</head>
<body data-type="login">
    <script src="/admins/assets/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">

                </div>
                <div id="mws-login-form">
                    @if(session('error'))
                        <p class="mws-form-message error" style='color:red;font-size:17px;height:10px'>{{session('error')}}</p>
                    @endif
                </div>

                <form class="am-form tpl-form-line-form" action="{{url('admin/login')}}" method="post">
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" name="user_name" placeholder="请输入账号">

                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" name="user_pass" placeholder="请输入密码">

                    </div>
                    <div class="am-form-group tpl-login-remember-me">
                        <label for="remember-me">
                            <div id="mws-login-remember" class="mws-form-row mws-inset">
                                <ul class="mws-form-list inline">
                                    <li>
                                        <a onclick="javascript:re_captcha();">
                                            <img src="{{ URL('/code/captcha/1') }}" id="127ddf0de5a04167a9e427d883690ff6" style="width:105px;height:38px;">
                                        </a>
                                        <input name="code" type="text" placeholder="验证码">
                                    </li>
                                </ul>
                            </div>

                         </label>

                    </div>
                    {{csrf_field()}}
                    <div class="am-form-group">
                        <input type="submit" value="登录" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/admins/assets/js/amazeui.min.js"></script>
    <script src="/admins/assets/js/app.js"></script>
    <script type="text/javascript">
        function re_captcha() {
            $url = "{{ URL('/code/captcha') }}";
            $url = $url + "/" + Math.random();
            document.getElementById('127ddf0de5a04167a9e427d883690ff6').src = $url;
        }
    </script>
    <script  type="text/javascript">
        setTimeout(function(){
            $('p').hide();
        },3000)
    </script>


</body>

</html>