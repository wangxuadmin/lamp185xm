<?php

namespace App\Http\Controllers\Admins;
use App\Http\Model\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Model\Login;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

class LoginController extends Controller
{

    public function login()
    {
//        echo \Route::current()->getActionName();
//        die;
        //显示用户登录页面

        return view('admins.login');
    }

    // 验证码生成
    public function captcha($tmp)
    {

        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(220, 210, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体

        $builder->build($width = 140,$height = 50, $font = null);
        // 获取验证码的内容
        $phrase = strtoupper($builder->getPhrase());

        // 把内容存入session
        \Session::flash('code', $phrase);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }


    //处理用户登录逻辑 信息验证
    public function dologin()
    {

//        获取提交过来的数据
        $input = Input::except('_token');
//       dd($input);
//        判断数据库中是否有此用户
        $user = User::where('user_name', $input['user_name'])->first();

        if (!$user) {
            return back()->with('error', '无此用户');
        }


//        验证密码
        if (Crypt::decrypt($user->user_pass) != trim($input['user_pass'])) {
            return back()->with('error', '密码有误');

        }

//        判断验证码
        if(strtoupper($input['code']) != session('code')){
            return back()->with('error','验证码错误');
        }


//    登录成功，保存用户登录状态，跳转到后台首页
        session(['user'=>$user]);

        return redirect('admin/index');

    }

}
