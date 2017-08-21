<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
 
use App\Http\Model\Navs;

class IndexController extends Controller
{
   public function index()
   {
   		// 导航栏 7个 navs                        数量(有多少个)
   		$navs=Navs::orderBy('nav_order','asc')->take(7)->get();

   		// 图片文章 6个 pics
   		/*$pics=Article::orderBy('art_view','desc')->take(6)->get();

   		// 图文文章分页 5篇 arts
   		$arts=Article::orderBy('art_time','desc')->paginate(5);

   		// 最新文章 8篇 news
   		$news=Article::orderBy('art_time','desc')->take(8)->get();

   		// 热搜文章 5篇 hots
   		$pics=Article::orderBy('art_view','desc')->take(5)->get();

   		// 友情链接 3个 links
   		$links=Friend::all();*/

        return view('homes.index',compact('navs'));
   }



}
