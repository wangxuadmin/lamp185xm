<?php

namespace App\Http\Controllers\Admins;

use App\Http\Model\Article;
use App\Http\Model\Cate;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     *      文章 的 图片上传
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {

        $file = Input::file('file_upload');

        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            //保存在服务器上的新文件名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            //将文件从临时目录移动到制定目录
            $path = $file->move(public_path().'/uploads',$newName);

            $filepath = 'uploads/'.$newName;

            return  $filepath;
        }
    }
    /**
     *      文章 的修改 图片上传
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploads()
    {

        $file = Input::file('file_upload');

        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            //保存在服务器上的新文件名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            //将文件从临时目录移动到制定目录
            $path = $file->move(public_path().'/uploads',$newName);

            $filepath = 'uploads/'.$newName;

            return  $filepath;
        }
    }
    /**
     *      文章 列表 页
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //1.获取到全部文章
        $arts = Article::where('art_title','like','%'.$request['keywords'].'%')->OrderBy('art_id','desc')->paginate(5);
        //2.获取关键字,传送到页面
        $keyword = $request->input('keywords');
        //3.返回文章列表页面
        return view('admins.article.list',compact('arts','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return 文章添加页
     */
    public function create()
    {
        $cates = (new cate())->trees();
        return view('admins.article.add',compact('cates'));
    }

    /**
     *     文章添加的代码逻辑
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //1.获取表单提交过来看数据
        $input = $request->except('_token','file_upload');
        $input['art_time'] = time();
        //2.验证表单
        $rule = [
            'art_title'=>'required',
            'art_editor'=>'required',
            'art_thumb'=>'required',
            'art_description'=>'required',
            'art_content'=>'required',
        ];
        $mess = [
            'art_title.required'=>'文章标题不能为空',
            'art_editor.required'=>'文章编辑不能为空',
            'art_thumb.required'=>'缩略图不能为空',
            'art_description.required'=>'描述不能为空',
            'art_content.required'=>'内容不能为空',
        ];
        $validator =  Validator::make($input, $rule, $mess);
        //如果表单验证失败
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        //3.插入数据库
        $re = Article::create($input);
        //4.判断是否成功
        if($re){
            return  redirect('admin/article');
        }else{
            return  back()->with('msg','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return   文章修改页面
     */
    public function edit(Request $request,$id)
    {
        //1.获取这条数据
        $art =  Article::find($id);
        //2.获取到分类信息
        $cates = (new Cate())->tree($request);
        //3.返回修改页面
        return view('admins.article.edit',compact('art','cates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //1.获取到表单提交的数据
        $input = $request->except('_token','_method','file_upload');
        //2.获取到这条数据
        $art =  Article::find($id);
        //3.更新数据库
        $re = $art->update($input);
        //4.判断是否更新成功
        if($re){
            return  redirect('admin/article');
        }else{
            return  back()->with('msg','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $re =  Article::where('art_id',$id)->delete();
        if($re){
            $data =[
                'status'=>0,
                'msg'=>'删除成功',
            ];
        }else{
            $data =[
                'status'=>0,
                'msg'=>'删除成功',
            ];
        }
        return $data;
    }
}
