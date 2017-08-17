@extends('layout.admins')

@section('title','配置页')

@section('content')





<div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">配置添加</div>
                                <div class="widget-function am-fr">
                                    <a class="am-icon-cog" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" id="example-r" class="am-table am-table-compact tpl-table-black ">
                                    <thead>
                                        <tr>
                                      
                                            <th>ID</th>
                                            <th>标题</th>
                                            <th>排序</th>
                                            <th>说明</th>
                                            <th>描述</th>
                                            <th>版权信息</th>
                                            <th>网站负责人</th>

                                            <th>图片</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($config as $k=>$v)  
                                      
                                        <tr class="gradeX">
                                           <td>
                                           
                                            <a href="#">{{$v->conf_id}}</a>
                                                </td>
                                            <td>
                                            <a href="#">{{$v->conf_title}}</a>
                                                </td>
                                            <td>
                                            <a href="#">{{$v->conf_order}}</a>
                                                </td>
                                                <td>
                                            <a href="#">{{$v->conf_name}}</a>
                                                </td>
                                                <td>
                                            <a href="#">{{$v->conf_content}}</a>
                                                </td>
                                                <td>
                                            <a href="#">{{$v->conf_tips}}</a>
                                                </td>
                                                <td>
                                            <a href="#">{{$v->conf_person}}</a>
                                                </td>
                                              
                                                 <td>
                                                 <img src="{{$v->conf_image}}" alt="">
                                            
                                                </td>

                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="{{url('admin/config/'.$v->conf_id.'/edit')}}">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="javascript:void(0)" onclick="delUser({{$v->conf_id}})">删除</a>
                                                </div>
                                            </td>
                                        </tr>
                                      @endforeach
                                      
                                      
                                        <!-- more data -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                         <script>

        function delUser(id){
//            参数1 要请求的服务器路由
//            参数2 请求要携带的参数数据  _method：delete  _token
//              参数3 回调函数,回调函数的参数data表示服务器返回的数据
//            $.post(URL,data,callback);
//询问框
            layer.confirm('确认删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
//            layer.msg('删除成功', {icon: 1});
                $.post("{{url('admin/config/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
//                console.log(data);
                    if(data.status == 0){
                        location.href = location.href;
                        layer.msg('删除成功', {icon: 6});
                    }else{
                        location.href = location.href;
                        layer.msg('删除失败', {icon: 5});
                    }

                });

            }, function(){

            });

        }


    </script>

@endsection                        