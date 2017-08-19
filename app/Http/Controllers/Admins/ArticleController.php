<?php

namespace App\Http\Controllers\Admins;

use App\Http\Model\Cate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    /**
     *      文件上传
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
//        return 111;

        $file = Input::file('file_upload');
//        dd($file);

        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            //保存在服务器上的新文件名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
//            将文件从临时目录移动到制定目录
            $path = $file->move(public_path().'/uploads',$newName);

//            将上传文件保存到七牛云上
//            $disk = \Storage::disk('qiniu');
//            \Storage::disk('qiniu')->writeStream('uploads/'.$newName, fopen($file->getRealPath(), 'r'));

//            OSS上传
            $filepath = 'uploads/'.$newName;
//            OSS::upload($filepath,$file->getRealPath());

            return  $filepath;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
