<?php

namespace App\Http\Controllers\Admins;

use App\Http\Model\Permission;
use App\Http\Model\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class RoleController extends Controller
{


    public function index()
    {
        $res = Role::all();
        return view('admins.role.index', ['res' => $res]);
    }


    public function create()
    {
        return view('admins.role.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');

        $res = Role::create($input);
        //dd($re);
        //如果添加成功 跳转到角色列表页
        if ($res) {
            return redirect('admin/role');
        } else {
            return back()->with('用户添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return view('admins.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //根据id获取要修改的角色
        $role = Role::find($id);
        //获取到要修改的信息
        $input = $request->except('_token');
        //修改角色
        $res = $role->update($input);

        if ($res) {
            //修改成功，返回角色列表页
            return redirect('admin/role');
        } else {
            return back()->with('角色修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $res = Role::where('id', $id)->delete();
        //删除成功
        if ($res) {
            $data = [
                'status' => 0,
                'msg' => '删除成功',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '删除失败',
            ];
        }

        return $data;
    }

    //给角色授权
    public function auth($id)
    {
        //获取当前角色
        $role = Role::find($id);
        //获取所有权限
        $permission = Permission::get();
        $perown = DB::table('role_permission')->where('role_id',$id)->lists('permission_id');
        return view('admins.role.auth', compact('role', 'permission','perown'));
    }

    //保存给角色添加的权限,blog_role_permission表
    public function doauth(Request $request)
    {
        //dd($request->all());
            $input = $request->except('_token');
            $id = $input['role_id'];
            DB::table('role_permission')->where('role_id',$id)->delete();
        foreach ($input['permission_id'] as $k => $v) {
            DB::table('role_permission')->insert(['role_id' => $id, 'permission_id' => $v]);
        }
        return redirect('admin/role');
    }

}
