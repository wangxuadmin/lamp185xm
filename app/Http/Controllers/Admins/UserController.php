<?php

namespace App\Http\Controllers\Admins;

use App\Http\Model\Role;
use App\Http\Model\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use  DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $res = User::where('user_name','like','%'.$request->input('search').'%')->paginate(3);
        return view('admins.user.index',['res'=>$res,'request'=>$request]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


//        echo \Route::current()->getActionName();
//       die;
        return view('admins.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $input = $request->except('_token','password_a');
//        dd($input);
        $rule = [
                'user_name' => 'required|regex:/^\w{6,12}$/|unique:user',
                'user_pass'=>'required|regex:/^\w{6,14}$/',
                'password_a'=>'same:user_pass',
                'user_email'=>'required|email',
                'user_tel'=>'required|regex:/^1[34578]\d{9}$/'

        ];


        $mess = [
            'user_name.required'=>'用户名不能为空',
            'user_name.regex'=>'用户名格式不正确',
            'user_name.unique'=>'用户名已存在',
            'user_pass.required'=>'密码不能为空',
            'user_pass.regex'=>'密码格式不正确',
            'password_a.same'=>'两次密码不一致',
            'user_email.required'=>'邮箱不能为空',
            'user_email.email'=>'邮箱格式不正确',
            'user_tel.required'=>'手机号不能为空',
            'user_tel.regex'=>'手机号格式不正确'
        ];
        $validator = Validator::make($input,$rule,$mess);
////        如果表单验证失败
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
//        echo 11;
//        添加用户
        $input['user_pass'] = Crypt::encrypt($input['user_pass']);
        $re = User::create($input);
//        dd($re);
//        如果添加成功 跳转到用户列表页
        if($re){
            return redirect('admin/user');
        }else{
            return back()->with('errors','用户添加失败');
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
        $user =  User::find($id);
        return view('admins.user.edit',compact('user'));
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

        $data = $request->except('_token','password_a','_method');
//        dd($data);
        //根据id获取要修改的用户
        $user = User::find($id);
        //获取到要修改的信息
        $input = $request->except('_token');
        //表单验证
        $rule = [
                'user_name' => 'required|regex:/^\w{6,12}$/|unique:user',
                'user_pass'=>'required|regex:/^\w{6,14}$/',
                'password_a'=>'same:user_pass',
                'user_email'=>'required|email',
                'user_tel'=>'required|regex:/^1[34578]\d{9}$/'

        ];


        $mess = [
            'user_name.required'=>'用户名不能为空',
            'user_name.regex'=>'用户名格式不正确',
            'user_name.unique'=>'用户名已存在',
            'user_pass.required'=>'密码不能为空',
            'user_pass.regex'=>'密码格式不正确',
            'password_a.same'=>'两次密码不一致',
            'user_email.required'=>'邮箱不能为空',
            'user_email.email'=>'邮箱格式不正确',
            'user_tel.required'=>'手机号不能为空',
            'user_tel.regex'=>'手机号格式不正确'
        ];
        $validator = Validator::make($input,$rule,$mess);
        //如果表单验证失败
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        //将密码加密
        $input['user_pass'] = Crypt::encrypt($input['user_pass']);

        $res = $user->update($data);

        if($res){
        //修改成功，返回用户列表页
            return redirect('admin/user');
        }else{
            return back()->with('errors','用户修改失败');
        }
    }


    public function destroy($id)
    {

        $res =  User::where('user_id',$id)->delete();
//      删除成功
        if($res){
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

    //给角色授权
    public function auth($id)
    {
        //获取当前用户
        $users = User::find($id);
        //获取所有角色
        $role = Role::get();
        $perown = DB::table('user_role')->where('user_id',$id)->lists('role_id');
        return view('admins.user.auth', compact('users', 'role','perown'));
    }

    //保存给用户添加的角色,blog_user_role表
    public function doauth(Request $request)
    {
//        dd($request->all());
        $input = $request->except('_token');
        //获取到当前用户
        $id = $input['user_id'];
        //删除当前用户所拥有的所有角色
        DB::table('user_role')->where('user_id',$id)->delete();
        //遍历所有被选中的角色
        foreach ($input['role_id'] as $k => $v) {
            DB::table('user_role')->insert(['user_id' => $id, 'role_id' => $v]);
        }
        return redirect('admin/user');
    }

}
