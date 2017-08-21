<?php

namespace App\Http\Controllers\Admins;
use App\Http\Model\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Crypt;


class IndexController extends Controller
{
    public function index()
    {

//        App\Http\Controllers\Admins\IndexController@index
//        echo \Route::current()->getActionName();
//        die;

       return view('admins.index');
    }


    //退出登录
    public function logout()
    {
        session(['user'=>null]);
        session('user');
        return redirect('admin/login');
    }

    //修改密码
    public function pass()
    {
        return view('admins.pass');
    }

    //修改密码验证
    public function dopass()
    {
        //获取到提交过来的数据
        $input = Input::except('_token');
//        dd($input);

        //写验证规则
        $role = [
            'user_pass'=>'required|regex:/^\d{6,18}$/',
            'password_a'=>'required|regex:/^\d{6,18}$/',
            'password_b'=>'same:password_a'
        ];

        $mess = [
            'user_pass.required'=>'原密码不能为空',
            'user_pass.regex'=>'原密码格式不正确',
            'password_a.required'=>'新密码不能为空',
            'password_a.regex'=>'新密码格式不正确',
            'password_b.same'=>'两次密码不一致'
        ];

        $validator = Validator::make($input,$role,$mess);
        //如果验证失败返回错误信息
        if($validator->fails()){
            return back()
                ->withErrors($validator)
                ->withInput();
        }
//
//1 判断原密码是否正确
        $user = User::find(session('user')->user_id);
//dd($user);
        if( $input['user_pass'] !=  Crypt::decrypt($user->user_pass) ){
            return back()->withErrors('原密码输入错误');
        }



//        2 判断新密码是否与确认密码一致
//        3 修改密码
        $user->user_pass = Crypt::encrypt($input['password_a']);
        $re = $user->save();

//        如果修改成功
        if($re){
            return back()->withErrors('密码修改成功');
        }else{
            return back()->withErrors('密码修改失败');
        }


    }



}
