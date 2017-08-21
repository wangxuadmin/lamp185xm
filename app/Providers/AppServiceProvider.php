<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Http\Model\Navs;
use App\Http\Model\Article;
use App\Http\Model\Links;
use App\Http\Model\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 导航栏 7个 navs                        数量(有多少个)
        $navs=Navs::orderBy('nav_order','asc')->take(7)->get();

        // 最新文章 8篇 news
        $news=Article::orderBy('art_time','desc')->take(8)->get();

        // 热搜文章 5篇 hots
        $pics=Article::orderBy('art_view','desc')->take(8)->get();

        // 友情链接 3个 links
        $links=Links::all();

         // 网站图片
        $conf=Config::all();

         //dd($conf);


        // 导航栏
        view()->share('navs',$navs);
        // 最新文章
        view()->share('news',$news);
        // 热搜文章
        view()->share('pics',$pics);
        // 友情链接
        view()->share('links',$links);
        // 网站图片
        view()->share('conf',$conf);

        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
