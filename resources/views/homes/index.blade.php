@extends('layout.homes')

@section('title','博客首页')

@section('content')


        <div class="widewrapper subheader">
           <div class="container">
               <div class="clean-breadcrumb">
                   <a href="#">博客</a>
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
                    <div class="row">
                        @foreach($arts as $k=>$v)
                        <div class="col-md-6 col-sm-6">
                            <article class=" blog-teaser">
                                <header>
                                    <img src="/{{ $v->art_thumb }}" alt="">
                                    <h3><a href="{{ url('a/'.$v->art_id) }}">{{ $v->art_title }}</a></h3>
                                    <span class="meta">{{ date('Y年m月d日',$v->art_time) }}, {{ $v->art_editor }}</span>
                                    <hr>
                                <span>已浏览{{ $v->art_view }}次</span>
                                </header>                               
                            </article>

                        </div>
                        
                        @endforeach


                    </div>                  
                    
                    <div class='page'>
                        {!! $arts->render() !!}

                    </div>

                    <div class="paging">
                        <a href="#" class="older">浏览过的帖子</i></a>
                    </div>
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

@endsection
