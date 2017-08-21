@extends('layout.homes')

@section('title','文章列表页')

@section('content')

        <div class="widewrapper subheader">
            <div class="container">
                <div class="clean-breadcrumb">
                    <a href="#">相关文章</a>
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
        <div class="container about">
            <div class="col-md-8 blog-main">
          <img class="avatar" alt="A Smart Guy" src="/homes/img/sc.png" style="border-radius: 100px;width:200px;height:200px;">
            <h1>你好, 我是 <span class="about-bold">社会王</span></h1>
            <p style="font-size:30px;">{!! $arts->art_content !!}.</p>

            <div class="about-button">
                <a class="btn btn-xlarge btn-clean-one" href="#">回复我</a>
            </div>
            <hr>
            
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

    

@endsection()