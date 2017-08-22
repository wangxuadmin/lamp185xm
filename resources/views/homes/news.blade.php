@extends('layout.homes')

@section('title','新闻列表页')

@section('content')
    
<!-- 公共头部 -->
<!-- 面包屑 -->
<div class="pb-main pb-breadcrumbs pb-mt40 pb-size-small">
    <a href="index.html">
        首页
    </a>
    &gt;&gt;
    <a href="news.html">
        征文比赛
    </a>
    &gt;&gt;
    <a>
        你如何看待高中生恋爱
    </a>
</div>
<!-- 面包屑结束 -->
<!-- 当前页面内容 -->
<link rel="stylesheet" type="text/css" href="/homes/css/topics.css" />
<div class="pb-main pb-mt20">
    <!--专题章展示-->
    <div class="topics-main pb-inner-main pb-mt10">
        <div class="head">
            <h1>
               
            </h1>
            <p class="pb-mt10">
                “别人是大手拉小手，咱们是左手拉右手”是大学里面的至理名言，有人说没有谈过恋爱的大学不是完美的大学。然而与之相差不太远的高中生恋爱却总是偷偷摸摸的。每一个生命之间发生的感情都是真切，高中生的恋爱又多少有些青涩。你高中的时候恋爱了吗？来谈谈你对高中生恋爱的看法吧！本期投稿结束时间：12月20日。
            </p>
        </div>
        <div class="pb-size-small pb-mt15 tool">
            <span class="">
                排序方式 :
            </span>
            <a href="news_detail.html?-10">
                时间
            </a>
            <a href="news_detail.html?-10?priority=score">
                评分
            </a>
        </div>
        <ul class="pb-mt30">
        @foreach($cate as $k=>$v)
            <li>
                
                <a href="news_detail.html?-10-65">
                    <img src="{{ $v->cate_image }}" class="pb-fl"  style="height:150px;width:150px;" alt="如果高中生谈恋爱，请善待它,征文比赛，有奖征文"
                    />
                </a>
                <dl>
                    <dt>
                        <a href="{{ $v->cate_url }}">
                            {{ $v->cate_title }}
                        </a>
                    </dt>
                    <dd class="pb-mt10">
                        <strong>
                            类别名
                        </strong>
                        ：
                        <a href="/user-10348">
                            {{ $v->cate_name }}
                        </a>
                    </dd>
                    <dd>
                        <strong>
                            浏览量
                        </strong>
                        ： {{ $v->cate_view }}
                    </dd>
                    <dd>
                        <strong>
                            投稿正文
                        </strong>
                        ： {{ $v->cate_description }}，&middot;&middot;&middot;
                    </dd>
                </dl>
                
            </li>
            @endforeach
        </ul>
    

    <div class="pb-mt50 pb-listpage"> 
       <div class="pageaa">
            {!! $cate->render() !!}
         </div> 
      </div>

    </div>
    

      <style type="text/css">
           .pageaa ul li{
                 color: #414141;
                cursor: pointer;
                display: block;
                padding: 0 12px;
                text-decoration: none;
                line-height: 35px;
                float:left;
                /*border:1px solid #cccccc;*/
           }

           .pageaa .active{
                background-color: #156770;
                padding: 0 12px;
                color: #fff;
                line-height: 35px;
                cursor: pointer;
                display: block;
           }
     </style>
        
   


    

    <!--专题章展示 end-->
    <!--右侧我要投稿公共部分-->
    <!--右侧我要投稿公共部分-->
    <div class="pb-iblock pb-fr pb-after-clear pb-main-side">
        <img src="/homes/images/icon_tougaoyouqian.jpg" class="pb-block" alt="征文比赛 有奖征文"
        />
        <h6 class="pb-mt15 pb-clr1 pb-size-big">
            下期专题
        </h6>
        <div class="pb-line2 pb-mt5">
        </div>
        <a class="tle pb-mt5" href="news_detail.html?/add">
            年味为什么越来越淡了
        </a>
        <div class="pb-line2 pb-mt5">
        </div>
        <h6 class="pb-mt15">
            <span class="pb-clr1 pb-size-normal">
                已投稿
                <i class="tougao">
                    2
                </i>
            </span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="javascript:Sys.showRuleDiv();" class="pb-clr1 pb-size-small pb-underline">
                获奖规则
            </a>
        </h6>
        <a class="but pb-clr1 pb-size-normal pb-mt15" href="news_detail.html?/add">
            有奖征文/homes/img/6.png
        </a>
    </div>

       
    <!--右侧我要投稿公共部分-->
    <div class="pb-main-side pb-iblock pb-after-clear pb-fr pb-mt40">
        <h6 class="pb-clr1 pb-size-big">
            征文排行
        </h6>
        <div class="pb-line2 pb-mt5">
        </div>
        <ul class="pb-mt10 previous-term pb-size-normal">
            <li>
                <span>
                    .
                </span>
                <a href="news_detail.html?-8-55">
                    有一种毕业，叫先走一步
                </a>
                <div class="pb-line2">
                </div>
            </li>
            <li>
                <span>
                    .
                </span>
                <a href="news_detail.html?-4-27">
                    用今生的修行 为你们的来生祈福
                </a>
                <div class="pb-line2">
                </div>
            </li>
            <li>
                <span>
                    .
                </span>
                <a href="news_detail.html?-3-16">
                    我的初恋
                </a>
                <div class="pb-line2">
                </div>
            </li>
            <li>
                <span>
                    .
                </span>
                <a href="news_detail.html?-6-45">
                    当你老了
                </a>
                <div class="pb-line2">
                </div>
            </li>
            <li>
                <span>
                    .
                </span>
                <a href="news_detail.html?-7-50">
                    我就在这里旅行，给你讲沿途的风景
                </a>
                <div class="pb-line2">
                </div>
            </li>
            <li>
                <span>
                    .
                </span>
                <a href="news_detail.html?-6-43">
                    有多少爱可以重来
                </a>
                <div class="pb-line2">
                </div>
            </li>
            <li>
                <span>
                    .
                </span>
                <a href="news_detail.html?-4-28">
                    我的“天空之城”
                </a>
                <div class="pb-line2">
                </div>
            </li>
        </ul>
    </div>
    <!--右侧我要投稿公共部分 end-->
</div>
<!-- 当前页面内容结束 -->
</div> 

@endsection()