@extends('layout.admins')

@section('title','用户列表页')

@section('content')


    <div class="am-u-sm-12 am-u-md-12 am-u-lg-14">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">用户列表页</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body  widget-body-lg am-fr">
                <form action="{{url('admin/user')}}" method='get'>
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3" style="margin:0px 0px 20px 560px;">
                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                            <input class="am-form-field " type="text" name='search' value="{{$request->search}}">
                            <span class="am-input-group-btn">
                                <button  id="cx" class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search"></button>
                            </span>
                        </div>
                    </div>
                </form>
                <table class="am-table am-table-compact am-table-bordered tpl-table-black " id="example-r" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>头像</th>
                        <th>邮箱</th>
                        <th>手机号</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($res as $k=>$v)
                        <tr class="gradeX">
                            <td>{{$v->user_id}}</td>
                            <td>{{$v->user_name}}</td>
                            <td><img src="{{$v->user_pic}}" alt="" style="width:100%;height:50px"></td>
                            <td>{{$v->user_email}}</td>
                            <td>{{$v->user_tel}}</td>
                            <td>
                                <div class="tpl-table-black-operation">
                                    <a href="{{url('admin/user/auth/'.$v->user_id)}}">
                                        <i class="am-icon-pencil"></i> 授权
                                    </a>
                                    <a href="{{url('admin/user/'.$v->user_id.'/edit')}}">
                                        <i class="am-icon-pencil"></i> 修改
                                    </a>
                                    <a href="javascript:void(0)" onclick="delUser({{$v->user_id}})" class="tpl-table-black-operation-del">
                                        <i class="am-icon-trash"></i> 删除
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <style>
                    #abc ul li{
                        border-radius: 0;
                        display: block;
                        line-height: 1.2;
                        margin-bottom: 5px;
                        margin-right: 1px;
                        padding: 0.5em 1em;
                        position: relative;
                        text-decoration: none;

                        display: inline-block;

                    }

                    #abc ul li span{


                        background: #3f4649 none repeat scroll 0 0;
                        border: medium none;
                        color: #fff;
                        padding: 6px 12px;

                    }

                    #abc .active span{
                        background: #167fa1 none repeat scroll 0 0;
                        border: 1px solid #167fa1;
                        color: #fff;
                        padding: 6px 12px;
                    }

                    #abc li a{
                        background: #3f4649 none repeat scroll 0 0;
                        border: medium none;
                        color: #fff;
                        padding: 6px 12px;
                    }

                    #id{
                        width:100%;

                    }

                    *, *::after, *::before {
                        box-sizing: border-box;
                    }

                </style>
                <script src="/layer/layer.js"></script>
                <script>


                   function delUser(id){
//                        alert(1111);
                        layer.confirm('确认删除吗？', {
                            btn: ['确定','取消'] //按钮
                        },function(){
                            $.post("{{url('admin/user')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
                                console.log(data);
//                                if(data.status == 0){
//                                    location.href = location.href;
//                                    layer.msg('删除成功', {icon: 1});
//                                }else{
//                                    location.href = location.href;
//                                    layer.msg('删除失败', {icon: 2});
//                                }

                            });

                        }, function(){

                        });
                    }

                </script>
                <div class="am-u-lg-12 am-cf">

                    <div class="am-fr">
                        <div id="abc">
                            {!! $res->appends($request->all())->render() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection