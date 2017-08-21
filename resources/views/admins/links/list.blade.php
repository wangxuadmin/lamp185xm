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
 
                            <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                            <form action="{{ url('admin/links') }}" method="get">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                   
                                        <input type="text" class="am-form-field " name="keywords" value="{{ $keyword or '' }}">
                                        <span class="am-input-group-btn">
            <button  class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search"></button>
          </span>
                            
                                    </div>
                                     </form>
                                </div>

                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" id="example-r" class="am-table am-table-compact tpl-table-black ">
                                    <thead>
                                        <tr>
                                      
                                            <th>ID</th>
                                            <th>名称</th>
                                            <th>标题</th>
                                            <th>链接</th>
                                            <th>排序</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($friend as $k=>$v)  
                                      
                                        <tr class="gradeX">
                                           <td>
                                           
                                            <a href="#">{{$v->link_id}}</a>
                                                </td>
                                            <td>
                                            <a href="#">{{$v->link_name}}</a>
                                                </td>
                                            <td>
                                            <a href="#">{{$v->link_title}}</a>
                                                </td>
                                                <td>
                                            <a href="#">{{$v->link_url}}</a>
                                                </td>
                                                <td>
                                            <a href="#">{{$v->link_order}}</a>
                                                </td>
                                                <td>
                                               
                                                    <a href="{{url('admin/links/'.$v->link_id.'/edit')}}">
                                                        <i class="am-icon-pencil"></i> 修改
                                                    </a>
                                                    <a href="javascript:void(0)" onclick="delUser({{$v->link_id}})">删除</a>
                                             
                                                  </td> 

                                      @endforeach

                                        </tr>
        
                                      <!-- more data -->
                                    </tbody>
                                </table>
<div class="am-u-lg-12 am-cf">

                                    <div id="page">
        {!! $friend->appends(['keywords'=>$keyword])->render() !!} 
  </div>
                                </div>



<style type="text/css">

                    #page li {
    list-style: none outside none;
    margin: 0;
    padding: 0;
display: inline-block;
}
 #page li {
    background: none repeat scroll 0 0 #167fa1;
    border: 1px solid #167fa1;
    color: #fff;
    padding: 6px 12px;

}
#page li{
    background: none repeat scroll 0 0 #3f4649;
    border: medium none;
    color: #fff;
    padding: 6px 12px;
}

        </style>
                
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
                $.post("{{url('admin/links/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
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