<?php

namespace App\Http\Middleware;

use App\Http\Model\User;
use Closure;
class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //获取当前路由对应的控制器方法
        $route = \Route::current()->getActionName();

        //获取当前用户对应的权限
        //获取当前用户
        $user = User::find(session('user')->user_id);
        //获取当前用户对应的角色
        $roles = $user->roles()->get();
        //dd($roles);

        //声明一个空数组,存放所有的权限
        $arr = [];
        //获取角色对应的权限
        foreach ($roles as $k => $role) {
        //每次遍历获取一个角色,然后获取这个角色对应的权限
            $pers = $role->permission()->get();
        //dd($per);
            foreach ($pers as $k => $per) {
                //将这个权限写入arr数组
                //获取当前权限模型的descript属性
                $arr[] = $per->description;
            }
        }
        //去掉arr中重复的权限
        $newarray =array_unique($arr);

        //判断当前路由对应的控制器方法是否在用户对应的权限中,如果在放行,若不在提示没有权限

        if(in_array($route,$newarray)){
            return $next($request);
        }else{
            return redirect('back');
        }
    }
}
