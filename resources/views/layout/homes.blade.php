<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta property="qc:admins" content="542536566763012535145636" /> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>@yield('title')</title> 
        <meta name="keywords" content="征文,有奖征文,征文比赛,征文比赛网,有奖征文网,征文大赛,小清新图片,每日一笑,把耳朵叫醒,享笑网" /> 
        <meta name="description" content="享笑网是紧贴生活的小清新网站，近期上线的有奖征文比赛更是受到了大家的热捧，给一些热爱写作的网友提供了一个很好的平台。享笑网的宗旨是分享笑，分享爱，让更多的人在欢声笑语下得到爱的滋润为其永恒不变的主题。网站提供时下每周一期的有奖征文，小清新图片、原创文章，搞笑段子。致力打造一片供人们心灵交流的绿洲。" /> 
        <meta name="viewport" content="width=1050" /> 
        <link rel="stylesheet" type="text/css" href="/homes/css/common.css?v7.2" /> 
        <link rel="stylesheet" type="text/css" href="/homes/css/public.css?v1" /> 
        <link href="/homes/images/favicon.ico?v=0.1" mce_href="http://www.sharesmile.cn/favicon.ico" rel="icon" type="image/x-icon" /> 
        <link href="/homes/images/favicon.ico?v=0.1" mce_href="http://www.sharesmile.cn/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
        <script type="text/javascript" src="/homes/js/jq.js?v4.1"></script> 
        <script type="text/javascript" src="/homes/js/ss.js?v4.8"></script> 
        <script type="text/javascript">
            function getBrowser()
            {
                var OsObject = "";
                if (navigator.userAgent.indexOf("MSIE") > 0) {
                    var browser = navigator.appName;
                    var b_version = navigator.appVersion;
                    var version = b_version.split(";");
                    var trim_Version = version[1].replace(/[ ]/g, "");
                    if (browser == "Microsoft Internet Explorer" && trim_Version == "MSIE6.0")
                    {
                        return("IE6");
                    }
                    else if (browser == "Microsoft Internet Explorer" && trim_Version == "MSIE7.0")
                    {
                        return("IE7");
                    }
                    else if (browser == "Microsoft Internet Explorer" && trim_Version == "MSIE8.0")
                    {
                        return("IE8");
                    }
                    else if (browser == "Microsoft Internet Explorer" && trim_Version == "MSIE9.0")
                    {
                        return("IE9");
                    }
                    else if (browser == "Microsoft Internet Explorer" && trim_Version == "MSIE10.0")
                    {
                        return("IE10");
                    }
                }
                if (navigator.userAgent.indexOf("Firefox") > 0) {
                    return "Firefox";
                }
                if (navigator.userAgent.indexOf("Chrome") > 0) {
                    return "Chrome";
                }
                if (navigator.userAgent.indexOf("Opera") > 0) {
                    return "Opera";
                }
                if (navigator.userAgent.indexOf("Safari") > 0) {
                    return "Safari";
                }
                return 'Others';
            }
            (function() {
                vars = {};
                vars.browser = getBrowser();
                vars.hello_ketty = "heimao";
                vars.jsUrl = "http://www.sharesmile.cn/js/";
                vars.homeUrl = 'http://www.sharesmile.cn/';
                vars.siteName = '享笑网 - www.ShareSmile.cn - 享你所想,享你所笑';
                vars.publicUrl = "/public/";
                vars.showgirlUrl = "/user#showgirl";
                vars.userid = '10460';
                vars.username = '416148489@qq.com';
                vars.nickname = '阿斗';
                vars.gender = 0;
                vars.PHPSESSID = "krach1sltrpu5pa9ldu9jen4k2";
                vars.ajaxSubmiting = false;
                vars.sysImageUrl = '/public/system/';
                vars.qingImageUrl = '/public/qing/';
                vars.headImageUrl = '/public/userhead/';
                vars.postImageUrl = '/public/post/';
                vars.essayImageUrl = '/public/essay/';
                vars.jokesImageUrl = '/public/jokes/';
                vars.showgirlImageUrl = '/public/showgirl/';
                vars.photoImageUrl = '/public/photo/';
                vars.commStatUrl = '/Stat/stat';
                vars.cookieUMessage = 'HASMESSAGE' + vars.userid;
                vars.voteBlankColor = new Array('#5DBBEF', '#95E62A', '#CC1CD9', '#FFCD10', '#F79395');
                var d = new Date();
                vars.todayTimeString = 20160122;
            })();
        </script> 
    </head> 
    <body> 
        <div class="pb-container"> 
            <div class="pb-container-main pb-after-clear"> 
                <!-- 公共头部 --> 
                <div class="pb-main pb-navwrap pb-after-clear"> 
                    <div class="pb-iblock pb-fl pb-logo"> 
                        <a href="index.html"><img src="/homes/images/logo.jpg" alt="享笑网LOGO 征文比赛 有奖征文" /></a> 
                    </div> 
                    <div class="pb-iblock pb-fl pb-nav"> 
                        
                        <ul> 
                            @foreach ($navs as $k=>$v)
                            <li class="pb-nav-li-last"><a href="{{ $v->nav_url }}">{{ $v->nav_name }}</a></li>
                            @endforeach                             
                        </ul> 
                        
                    </div> 
                    <div class="pb-iblock pb-fr pb-oths"> 
                        <a class="nmt" href="javascript:void(0);" onclick="Sys.commStat(2);
              commonLib.SetHome(this);">设为首页</a>  
                        <a class="nmt" href="suggest.html">投诉建议</a> &nbsp; 
                        <span class="nmt"> | </span> 
                        <a class="nmt" href="suggest.html">注册</a> &nbsp;
                        <div class="pb-ucenter pb-after-clear"> 
                            <div id="uMessageCenter"> 
                                <i class="pb-icons triangle"></i> 
                                <a href="/user" id="uSetEntry-head"><img src="/homes/images/default.gif" alt="阿斗" /></a> 
                                <i class="pb-icons notice pb-hide"></i> 
                            </div> 
                            <br /> 
                            <ul> 
                                <li><a href="/user" id="uSetEntry"><i class="pb-icons my"></i> 个人中心</a></li> 
                                <li><a href="/site/logout"><i class="pb-icons logout"></i> 退出登录</a></li> 
                            </ul> 
                        </div> 
                        <br /> 
                        <form action="" onsubmit="W.tips('暂未开放搜索功能，敬请期待!');
              Sys.commStat(6);
              return false;"> 
                            <input class="pb-search-btn" type="submit" value="" /> 
                            <input class="pb-search" type="text" /> 
                        </form> 
                    </div> 
                </div> 
                <!-- 公共头部 --> 

                @section('content')

                @show
                
            <!-- 公共尾部 --> 
            <div style="clear:both;"></div> 
            <div class="pb-footer"> 
                <div class="pb-footer-wp"> 
                    <div class="pb-main pb-footer-cnt pb-size-small"> 
                        <span class="pb-fl">&copy; 2012 - 2015 深圳市享笑网科技有限公司版权所有 粤 icp 备 13011067 号</span>
                        @foreach($links as $k=>$v)
                        <ul class="pb-fr"> 

                            <li><a href="{{ $v->link_url }}" target="_blank">{{ $v->link_name }}</a></li> 
                           
                        </ul>
                        @endforeach
                    </div> 
                </div> 
            </div> 
            <!-- 公共尾部 --> 
            <div class="ssretotop" id="goTopButton"> 
                <div class="SG-sidecont"> 
                    <a style="visibility: visible;" href="javascript:;" id="gotonext"></a> 
                    <a id="retotop" class="pb-icons" href="javascript:void(0)" style="visibility: visible;" title="点击我 坐飞机到顶部"></a> 
                    <a href="javascript:;" id="gotopre"></a> 
                </div> 
            </div> 
        </div> 
        <script id="tpl-pb-rule" type="text/x-jsmart-tmpl">
            <img src="/homes/images/rule.gif" alt="获奖规则"/>
            <a href="javascript:top.window.location.href='/user#go=cash';" style="position: absolute; cursor:pointer;height: 24px; width: 72px; left: 730px; top: 494px; display:inline-block;background:#fff;opacity:0; filter:alpha(opacity=0);"></a>
        </script> 
        <script language="javascript" type="text/javascript" src="/homes/js/15502332.js"></script> 
        <noscript>
            <a href="http://www.51.la/?15502332" target="_blank"><img alt="我要啦免费统计" src="/homes/images/15502332.asp" style="border:none" /></a>
        </noscript> 
        <script type="text/javascript" language="javascript">
               $(document).ready(function() {
                   $(".pb-ucenter").bind('mouseenter', function() {
                       $(this).find('ul').stop().slideDown('fast');
                       Sys.clearFlicker('uMessageCenter');
                   }).bind('mouseleave', function() {
                       $(this).find('ul').stop().slideUp('fast');
                   });

                   $("#goTopButton").click(function() {
                       Sys.scrollTo($('body'));
                       Sys.commStat(33);
                   });
                   if (vars.browser != 'IE6') {
                       var w_w = parseInt($("body").width());
                       var obj = $("#goTopButton");
                       $(window).scroll(function() {
                           if ($(this).scrollTop() > 500) {
                               if (!isNaN(w_w) && w_w > 0) {
                                   obj.css('left', (Math.ceil((w_w - 1050) / 2) + 1050 + 10) + "px");
                               }
                               obj.fadeIn();
                           } else {
                               obj.fadeOut();
                           }
                       });
                   }
                   Sys.hide51();
               });
        </script>  
    </body>
</html>