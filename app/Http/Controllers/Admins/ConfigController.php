<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\config;

class ConfigController extends Controller
{
    public function putFile()
    {
//        获取要被写入的内容
//        返回所需数据的数组
       $con =  Config::lists('conf_content','conf_name')->all();

//       将数组变成字符串格式
      $str= '<?php   return '.var_export($con,true).';';

      file_put_contents(base_path().'/config/web.php',$str);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $config = Config::orderBy('conf_order','asc')->get();
        
        return view('admins.config.list',compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admins.config.add');
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
        $input=$request->except('_token','conf_image');

         $img=$request->hasFile('conf_image');

        if($img){
            //修改名字
            $name=rand(111,999).time();
            //获取后缀
            $suffix=$request->file('conf_image')->getClientOriginalExtension();
            // 拼接图片路径
            $request->file('conf_image')->move('./upload',$name.'.'.$suffix);
        }
       // 存入到数据库当中
        $input['conf_image']='/upload/'.$name.'.'.$suffix;
        //$input = $request->except('_token');
        
        $re  = config::create($input);
         
        if($re){
            //$this->putFile();
            return redirect('admin/config');

        }else{

            return back()->with('msg','添加失败');
           
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $config = Config::find($id);
        
        return view('admins.config.edit',compact('config'));
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
        $input = $request->except('_token','_method');
        $config = Config::find($id);
        $re = $config->update($input);
        if($re){
            //$this->putFile();
            return redirect('admin/config');
        }else{
            return back()->with('msg','修改失败');
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
        $re = Config::where('conf_id',$id)->delete();
        if($re){
           // $this->putFile();
            $data = [
                'status'=>0,
                'msg'=>'删除成功',
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除失败',
            ];
        }
        return $data;
    }
    
}
