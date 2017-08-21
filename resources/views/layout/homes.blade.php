<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
    <meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="/homes/css/bootstrap.min.css">
   
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="/homes/css/font-awesome/css/font-awesome.min.css">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="/homes/css/style.css" id="theme-styles">

    <!--[if lt IE 9]>      
        <script src="js/respond.js"></script>
    <![endif]-->

    <script src="/homes/js/jquery.min.js"></script>
    <script src="/homes/js/bootstrap.min.js"></script>
    <script src="/homes/js/modernizr.js"></script>

    <style>
        #miaodian {position:fixed;right:0px;bottom:0px;width:80px;height:80px;
                    display:block;background-color:#3BB4FF;border-radius:50%;           
                }
        .wz{position:relative;top:14px;right:-20px;font-weight:bold;font-family:'微软雅黑';font-size:17px;
                }       
    </style>
    
</head>
<body>
    <a name='maodian'></a>
    <header>
        <div class="widewrapper masthead">
            <div class="container">
                <!-- <a href="index.html" id="logo"> </a> -->
                
                <div id="logo" >
                    @foreach($conf as $k=>$v)
                    <img src="{{ $v->conf_image }}" alt="clean Blog" style="width:100px;height:70px;">
                    @endforeach
                </div>
        
                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                 
                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse" >
                        <ul class="nav nav-pills navbar-nav">
                            @foreach ($navs as $k => $v) 
                                                          
                                <li>
                                    <a href="{{$v->nav_url}}">{{$v->nav_name}}</a>
                                </li>

                            @endforeach 
                            <!-- <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li> -->                        
                        </ul>
                    </div>
                </nav>     
                
            </div>
        </div>


    @section('content')

    @show
    
    <footer>
        <div class="widewrapper footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-user"></i>关于</h3>

                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi laboriosam nostrum consequatur fugiat at, labore praesentium modi, quasi dolorum debitis reiciendis facilis, dolor saepe sint nemo, earum molestias quas.</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, error aspernatur assumenda quae eveniet.</p>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-pencil"></i>最近帖子</h3>
                        <ul class="clean-list">
                            <li><a href="https://www.baidu.com">你瞅啥</a></li>
                            <li><a href="https://www.baidu.com">放学别走!!!</a></li>
                            <li><a href="https://www.baidu.com">再瞅一个试试</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-envelope"></i>联系我</h3>

                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil fugiat, cupiditate veritatis excepturi tempore explicabo.</p>
                         <div class="footer-widget-icon">
                            <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google"></i>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="widewrapper copyright">
                <p>{!!config('conf.conf_title')!!} &nbsp;|&nbsp; {!!config('conf.conf_name')!!}</p>              
                版权所有©2017.博客公司所有权利
        </div>
    </footer>     
    <a href='#maodian'><div id='miaodian'><div class='wz'>返&nbsp;回<br/>顶&nbsp;部</div></div></a>
</body>
</html>