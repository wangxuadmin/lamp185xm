<?php

namespace App\Http\Controllers\Admins;


use App\Http\Model\Article;

use App\Http\Model\Cate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Validator;


class CateController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return  查看文章
     */
    public function showArt(Request $request)
    {

        $input = $request->except('_token');
//        1 根据传过来的id获取当前分类下的所有文章
        $arts =  Article::where('cate_id',$input['cate_id'])->get();

//       2 遍历所有文章，拼装成一个字符串格式的表格返回给前端

//        存放所有文章
        $str = '';


        $str = '<table class="am-table am-table-compact am-table-bordered tpl-table-black" id="example-r" style="color:black;"><tr><th class="tc">ID</th><th>文章标题</th><th>作者</th></tr>';


        foreach($arts as $k=>$v){
            $str.= "<tr><td >".$v->art_id."</td><td>".$v->art_title."</td><td>".$v->art_editor."</td></tr>";
        }
        $str.= "</table>";

        return $str;
    }


    /**
     * Display the specified resource.
     *
     * @return 分类排序
     */
    public function changeOrder()
    {
//        获取提交过来的cate_id cate_order
        $input = Input::except('_token');
//        根据id找到分类记录
        $cate  =   Cate::find($input['cate_id']);
//        将这条记录的order改成用户传过来的值
        $cate->cate_order = $input['cate_order'];
        $re = $cate->save();


//        返回修改状态
        if($re){
            $data = [
                'status'=>0,
                'msg'=>'修改成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'修改失败'
            ];
        }
        return $data;
    }


    /**
     * Display the specified resource.
     *
     * @return 分类列表页
     */
    public function index(Request $request)
    {
        //1.获取全部分类
        $cates = (new Cate)->tree($request);
        //2.获取关键字,传送到页面
        $keyword = $request->input('keywords');
        //3.返回页面
        return view('admins.cate.list',compact('cates','keyword'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return 分类添加页
     */
    public function create()
    {
//        1.获取到父类的ID
        $cate_one = Cate::where('cate_pid',0)->get();
//        2.将数据带到页面
             return view('admins.cate.add',compact('cate_one'));
    }

    /**
     * Store a newly created resource in storage.
     *  分类的添加处理
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //1.获取数据
        $input = $request->except('_token');

        //2.验证表单
        $rule = [
            'cate_name'=>'required',
        ];
        $mess = [
            'cate_name.required'=>'分类名不能为空',
        ];
        $validator =  Validator::make($input, $rule, $mess);
        //如果表单验证失败
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        //3.插入灵数据

        $re  = Cate::create($input);
        if($re){
            return redirect('admin/cate');
        }else {
            return back()->with('msg', '添加失败');
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
     * @return 返回分类修改页
     */
    public function edit(Request $request, $id)
    {
//        return 11;
//       要修改的分类
        $cate =  Cate::find($id);
//       所有的分类
        $cates = (new Cate)->trees();
        return view('admins.cate.edit',compact('cate','cates'));

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
        //1.获取到数据
        $input = Input::except('_token','_method');
        //2.找到
        $cate = Cate::find($id);
        $re =  $cate->update($input);
        if($re){
            return redirect('admin/cate');
        }else {
            return back()->with('msg', '修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * 删除分类
     */
    public function destroy($id)
    {
        //1.获取到这条数据
        $cate = Cate::find($id);
        //2.这条数据下是否有二级类, pid==这条数据的id
        $count =  Cate::where('cate_pid',$id)->count();
        //3.判断pid=0并且$count大于1,判断是有子类, 不允许删除
        if($cate->cate_pid == 0 && $count){

            $data = [
                'status'=>2,
                'msg'=>'此分类有子类,不允许删除'
            ];
            return $data;
        }
        //4.删除
        $re = $cate->delete();
        //5.返回修改状态
        if($re){
            $data = [
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除失败'
            ];
        }
        return $data;

    }
}
