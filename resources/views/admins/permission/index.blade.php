@extends('layout.admins')

@section('title','权限列表页')

@section('content')


    <div class="am-u-sm-12 am-u-md-12 am-u-lg-14">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">角色列表页</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body  widget-body-lg am-fr">
                <table class="am-table am-table-compact am-table-bordered tpl-table-black " id="example-r" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>权限名</th>
                        <th>权限描述</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($res as $k=>$v)
                        <tr class="gradeX">
                            <td>{{$v->id}}</td>
                            <td>{{$v->name}}</td>
                            <td>{{$v->description}}</td>
                            <td>
                                <div class="tpl-table-black-operation">
                                    <a href="{{url('admin/permission/'.$v->id.'/edit')}}">
                                        <i class="am-icon-pencil"></i> 修改
                                    </a>
                                    <a href="javascript:void(0)" onclick="delUser({{$v->id}})" class="tpl-table-black-operation-del">
                                        <i class="am-icon-trash"></i> 删除
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <script>
                    function delUser(id){
                        layer.confirm('确认删除吗？', {
                            btn: ['确定','取消'] //按钮
                        },function(){
                            $.post("{{url('admin/permission')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
//                                console.log(data);
                                if(data.status == 0){
                                    location.href = location.href;
                                    layer.msg('删除成功', {icon: 1});
                                }else{
                                    location.href = location.href;
                                    layer.msg('删除失败', {icon: 2});
                                }

                            });

                        }, function(){

                        });
                    }


                </script>


            </div>
        </div>
    </div>

@endsection