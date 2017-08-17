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
    
</head>
<body>
    <header>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="index.html" id="logo">
                    <img src="/homes/img/logo.png" alt="clean Blog">
                </a>
        
                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
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

        <div class="widewrapper subheader">
            <div class="container">
                <div class="clean-breadcrumb">
                    <a href="#">Blog</a>
                </div>

                <div class="clean-searchbox">
                    <form action="#" method="get" accept-charset="utf-8">
                        <input class="searchfield" id="searchbox" type="text" placeholder="Search">
                        <button class="searchbutton" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="widewrapper main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <article class=" blog-teaser">
                                <header>
                                    <img src="/homes/img/1.jpg" alt="">
                                    <h3><a href="single.html">How to Create Template</a></h3>
                                    <span class="meta">19 August 2017, John Doe</span>
                                    <hr>
                                </header>
                            
                            </article>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <article class="blog-teaser">
                                <header>
                                    <img src="/homes/img/2.jpg" alt="">
                                    <h3><a href="single.html">Clean Personal Blog Template</a></h3>
                                    <span class="meta">19 August 2017, John Doe</span>
                                    <hr>
                                </header>
                            
                            </article>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <article class="blog-teaser">
                                <header>
                                    <img src="/homes/img/4.jpg" alt="">
                                    <h3><a href="single.html">Blackor - Responsive HTML5 Theme</a></h3>
                                    <span class="meta">19 August 2017, John Doe</span>
                                    <hr>
                                </header>
                               
                            </article>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <article class=" blog-teaser">
                                <header>
                                    <img src="/homes/img/1.jpg" alt="">
                                    <h3><a href="single.html">How to Create Template</a></h3>
                                    <span class="meta">19 August 2017, John Doe</span>
                                    <hr>
                                </header>
                            
                            </article>
                        </div>

                    </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <article class="blog-teaser">
                                <header>
                                    <img src="/homes/img/3.jpg" alt="">
                                    <h3><a href="single.html">Blackor - Responsive HTML5 Theme</a></h3>
                                    <span class="meta">19 August 2017, John Doe</span>
                                    <hr>
                                </header>
                               
                            </article>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <article class=" blog-teaser">
                                <header>
                                    <img src="/homes/img/1.jpg" alt="">
                                    <h3><a href="single.html">How to Create Template</a></h3>
                                    <span class="meta">19 August 2017, John Doe</span>
                                    <hr>
                                </header>
                            
                            </article>
                        </div>

                    </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <article class="blog-teaser">
                                <header>
                                    <img src="/homes/img/3.jpg" alt="">
                                    <h3><a href="single.html">Blackor - Responsive HTML5 Theme</a></h3>
                                    <span class="meta">19 August 2017, John Doe</span>
                                    <hr>
                                </header>
                               
                            </article>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <article class=" blog-teaser">
                                <header>
                                    <img src="/homes/img/5.jpg" alt="">
                                    <h3><a href="single.html">How to Create Template</a></h3>
                                    <span class="meta">19 August 2017, John Doe</span>
                                    <hr>
                                </header>
                            
                            </article>
                        </div>

                    </div>

                    <div class="paging">
                        <a href="#" class="older">Older Post</i></a>
                    </div>
                </div>
                <aside class="col-md-4 blog-aside">
                    
                    <div class="aside-widget">
                        <header>
                            <h3>Featured Post</h3>
                        </header>
                        <div class="body">
                            <ul class="clean-list">
                                <li><a href="">Clean - Responsive HTML5 Template</a></li>
                                <li><a href="">Responsive Pricing Table</a></li>
                                <li><a href="">Yellow HTML5 Template</a></li>
                                <li><a href="">Blackor Responsive Theme</a></li>
                                <li><a href="">Portfolio Bootstrap Template</a></li>
                                <li><a href="">Clean Slider Template</a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="aside-widget">
                        <header>
                            <h3>Related Post</h3>
                        </header>
                        <div class="body">
                            <ul class="clean-list">
                                <li><a href="">Blackor Responsive Theme</a></li>
                                <li><a href="">Portfolio Bootstrap Template</a></li>
                                <li><a href="">Clean Slider Template</a></li>
                                <li><a href="">Clean - Responsive HTML5 Template</a></li>
                                <li><a href="">Responsive Pricing Table</a></li>
                                <li><a href="">Yellow HTML5 Template</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="aside-widget">
                        <header>
                            <h3>Tags</h3>
                        </header>
                        <div class="body clearfix">
                            <ul class="tags">
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">CSS3</a></li>
                                <li><a href="#">COMPONENTS</a></li>
                                <li><a href="#">TEMPLATE</a></li>
                                <li><a href="#">PLUGIN</a></li>
                                <li><a href="#">BOOTSTRAP</a></li>
                                <li><a href="#">TUTORIAL</a></li>
                                <li><a href="#">UI/UX</a></li>                            
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <footer>
        <div class="widewrapper footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-user"></i>About</h3>

                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi laboriosam nostrum consequatur fugiat at, labore praesentium modi, quasi dolorum debitis reiciendis facilis, dolor saepe sint nemo, earum molestias quas.</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, error aspernatur assumenda quae eveniet.</p>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-pencil"></i> Recent Post</h3>
                        <ul class="clean-list">
                            <li><a href="">Clean - Responsive HTML5 Template</a></li>
                            <li><a href="">Responsive Pricing Table</a></li>
                            <li><a href="">Yellow HTML5 Template</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-envelope"></i>Contact Me</h3>

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

</body>
</html>