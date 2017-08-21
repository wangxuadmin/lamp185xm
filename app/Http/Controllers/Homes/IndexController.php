<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Home\CommonController;
 
use App\Http\Model\Navs;
use App\Http\Model\Cate;
use App\Http\Model\Article;
use App\Http\Model\Links;
use App\Http\Model\Config;

                              // 引入后继承CommonController
class IndexController extends Controller
{
   public function index()
   {
   		
   		// 图片文章 6个 pics
   		//$pics=Article::orderBy('art_view','desc')->take(6)->get();

   		// 图文文章分页 5篇 arts
   		$arts=Article::orderBy('art_id','asc')->paginate(6);

        return view('homes.index',compact('arts'));
   }

   //前台列表页
   public function cate()
   {
      // 根据ID获取分类信息
       //$cateid=Cate::find($id);

        // 首页文章
        $arts = Article::orderBy('art_time','desc')->paginate(3);

      $cate=Cate::orderBy('cate_order','desc')->take(8)->paginate(3);

      //$cate=Cate::join('category','article.cate_id','=','category.cate_id')->where('article.cate_id',)->paginate(3);

      //$arts = Article::join('category','article.cate_id','=','category.cate_id')->where('article.cate_id',$id)->paginate(2);

      return view('homes.news',compact('cate','hots','arts'));

      //     根据ID获取分类信息
      //$cate =  Cate::find($id);

      //       图文文章带分页 5篇 arts
      //        $arts = Article::orderBy('art_time','desc')->get();
      //        join('链接表名', '当前表.链接字段', '=', '被链接的表.链接字段')
      //$arts = Article::join('category','article.cate_id','=','category.cate_id')->where('article.cate_id',$id)->paginate(2);

      //       当前类的二级分类  pid = $id
      //$subcate = Cate::where('cate_pid',$id)->take(4)->get();

      //        让当前分类的访问量+1
      //Cate::where('cate_id',$id)->increment('cate_view');
      //return view('home.list',compact('cate','arts','subcate'));
   }

      //    前台文章详情页对应方法
   public function article($id)
   {
      //       6 5 4 3 2 1
      //        1 当前文章所在的分类信息

      //        2  当前文章的相关信息
      $arts = Article::join('category','article.cate_id','=','category.cate_id')->where('article.art_id',$id)->first();

      //        3 上一篇文章  下一篇文章
      //$article['prev'] =  Article::orderBy('art_id','desc')->where('art_id','<',$id)->first();
      //$article['next'] =  Article::orderBy('art_id','asc')->where('art_id','>',$id)->first();

      //        4 相关文章 4篇文章，根据分类相关的算法
      //        $a = Article::find($id);
      //$rel = Article::where('cate_id',$art->cate_id)->first();

      //        文章访问量+1
      //Article::where('art_id',$id)->increment('art_view');,
      return view('homes.list',compact('arts'));
   }

}
