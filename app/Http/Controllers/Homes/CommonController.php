<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\Navs;
use App\Http\Model\Article;


class CommonController extends Controller
{
   public function __construct()
   {
        // 导航栏 7个 navs                        数量(有多少个)
        $navs=Navs::orderBy('nav_order','asc')->take(7)->get();

        // 最新文章 8篇 news
        $news=Article::orderBy('art_time','desc')->take(8)->get();

        // 热搜文章 5篇 hots
        $pics=Article::orderBy('art_view','desc')->take(8)->get();


        // 导航栏
        view()->share('navs',$navs);
        // 最新文章
        view()->share('news',$news);
        // 热搜文章
        view()->share('pics',$pics);
   }
}
