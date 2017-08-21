@extends('layout.admins')

@section('title','文章列表页')

@section('content')
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-14">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">文章列表</div>
                <div class="widget-function am-fr">
                    <a class="am-icon-cog" href="javascript:;"></a>
                </div>
            </div>
            <div class="widget-body  widget-body-lg am-fr">

                <form action="{{url('admin/article')}}" method="get"">

                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3" style="margin-bottom:20px;margin-left:75%">
                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                        <input type="text" class="am-form-field" name="keywords" value="{{isset($keyword)?$keyword:''}}" placeholder="关键字">
                        <span class="am-input-group-btn">
                            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search"></button>
                        </span>
                    </div>
                </div>

                </form>

                <table width="100%" id="example-r" class="am-table am-table-compact tpl-table-black ">
                    <thead>
                    <tr>
                        <th class="tc">ID</th>
                        <th>标题</th>
                        <th>点击量</th>
                        <th>编辑</th>
                        <th>发布时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($arts as $k=>$v)
                    <tr class="even gradeC">
                        <td >{{$v->art_id}}</td>
                        <td class="tc">{{$v->art_title}}</td>
                        <td>
                            <a href="#">{{$v->art_view}}</a>
                        </td>
                        <td>
                            <a href="#">{{$v->art_editor}}</a>
                        </td>
                        <td>
                            <a href="#">{{date('Y-m-d H:i:s',$v->art_time)}}</a>
                        </td>
                        <td>
                            <div class="tpl-table-black-operation">
                                <a href="{{url('admin/article/'.$v->art_id.'/edit')}}">
                                    <i class="am-icon-pencil"></i> 编辑
                                </a>
                                <a class="tpl-table-black-operation-del" href="javascript:;" onclick="delArticle({{$v->art_id}})">
                                    <i class="am-icon-trash"></i> 删除
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <!-- more data -->
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
                <div class="am-u-lg-12 am-cf">

                    <div class="am-fr">
                        <div id="abc">
                            {!! $arts->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        // 删除
        function delArticle(id){
            layer.confirm('确认删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("{{url('admin/article/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){

                    if(data.status == 0){
                        location.href = location.href;
                        layer.msg(data.msg, {icon: 1});
                    }else{
                        location.href = location.href;
                        layer.msg(data.msg, {icon: 2});
                    }
                });
            }, function(){
            });
        }




    </script>
@endsection