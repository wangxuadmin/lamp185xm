@extends('layout.homes')

@section('title','新闻列表页')

@section('content')

    <div class="widewrapper subheader">
            <div class="container">
                <div class="clean-breadcrumb">
                    <a href="#">新闻页</a>
                </div>

                <div class="clean-searchbox">
                    <form action="#" method="get" accept-charset="utf-8">
                        <input class="searchfield" id="searchbox" type="text" placeholder="搜索">
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
                    <article class="blog-post">
                    @foreach ($cate as $k => $v)
                        <header>
                           
                            <div class="lead-image">
                                <img src="{{ $v->cate_image }}" alt="" class="img-responsive" style="height:auto;width:100%;">
                                

                            </div>
                        </header>
                        <div class="body">
                            <h1>{{ $v->cate_title }}</h1>
                            <div class="meta">
                                <i class="fa fa-user"></i>{{ $v->cate_name }}<i class="fa fa-calendar"></i>{{ date('Y年m月d日 H小时i分钟s秒') }}<i class="fa fa-comments"></i><span class="data"><a href="#comments">{{ $v->cate_comment }}评论</a></span>
                            </div>
                            <p>{{ $v->cate_description }}.</p>                           

                        </div>
                    @endforeach
                    
                    </article>

                    <aside class="social-icons clearfix">
                        <h3>分享</h3> 
                        <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google"></i></a>
                    </aside>

                    <aside class="comments" id="comments">
                        <hr>

                        <h2><i class="fa fa-comments"></i>{{ $v->cate_comment }}评论</h2>
                    
                    
                        @foreach($arts as $k=>$v)
                        <article class="comment">
                            <header class="clearfix">
                                <img src="/homes/img/6.png" alt="A Smart Guy" class="avatar">
                                <div class="meta">
                                    <h3><a href="#">{{ $v->art_editor }}</a></h3>
                                    <span class="date">
                                        {{ date('Y年m月d日 H:i:s',$v->art_time) }}
                                    </span>
                                    <span class="separator">
                                        -
                                    </span>
                                    
                                    <a href="#create-comment" class="reply-link">回复</a>                
                                </div>
                            </header>
                             <div class="body">
                              你瞅啥.
                            </div>
                        </article>

                        <article class="comment reply">
                        
                            <header class="clearfix">
                                <img src="/homes/img/1.png" alt="A Smart Guy" class="avatar">
                                <div class="meta">
                                    <h3><a href="#">{{ $v->art_editor }}</a></h3>
                                    <span class="date">
                                        {{ date('Y年m月d日 H:i:s',$v->art_time) }}
                                    </span>
                                    <span class="separator">
                                        -
                                    </span>
                                    
                                    <a href="#create-comment" class="reply-link">回复</a>                
                                </div>
                            </header>
                             <div class="body">
                               再瞅一个试试.
                            </div>
                        </article>
    
                        @endforeach()        
                    </aside>
                    <div class="page">
                        {!! $cate->render() !!}
                    </div>

                    <aside class="create-comment" id="create-comment">
                        <hr>    

                        <h2><i class="fa fa-pencil"></i>添加评论</h2>

                        <form action="#" method="get" accept-charset="utf-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" id="comment-name" placeholder="姓名" class="form-control input-lg">    
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="comment-email" placeholder="邮箱" class="form-control input-lg">    
                                </div>
                            </div>

                            <input type="url" name="name" id="comment-url" placeholder="网址" class="form-control input-lg">

                            <textarea rows="10" name="message" id="comment-body" placeholder="输入要评论的内容" class="form-control input-lg"></textarea>

                            <div class="buttons clearfix">
                                <button type="submit" class="btn btn-xlarge btn-clean-one">确认</button>
                            </div>
                        </form>
                    </aside>
                </div>
               
           
                <aside class="col-md-4 blog-aside">
                    
                    <div class="aside-widget">
                        <header>
                            <h3>热点文章</h3>
                        </header>
                        <div class="body">
                            @foreach($pics as $k=>$v)
                            <ul class="clean-list">
                                <li><a href="{{ url('a/'.$v->art_id) }}">{{ $v->art_tag }}</a></li>
                                
                            </ul>
                            @endforeach
                        </div>
                    </div>
                
                    <div class="aside-widget">
                        <header>
                            <h3>最新文章</h3>
                        </header>
                        <div class="body">
                            @foreach($news as $k=>$v)
                            <ul class="clean-list">
                                <li><a href="{{ url('a/'.$v->art_id) }}">{{ $v->art_tag }}</a></li>
                            
                            </ul>
                            @endforeach
                        </div>
                    </div>

                    <div class="aside-widget">
                        <header>
                            <h3>友情链接</h3>
                        </header>
                        <div class="body clearfix">
                            @foreach($links as $k=>$v)
                            <ul class="tags">
                                  <li><a href="{{ $v->link_url }}">{{ $v->link_name }}</a></li>
                                                            
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

@endsection()