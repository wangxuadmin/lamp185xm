@extends('layout.admins')

@section('title','分类列表页')

@section('content')
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-14">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">分类列表</div>
                <div class="widget-function am-fr">
                    <a class="am-icon-cog" href="javascript:;"></a>
                </div>
            </div>
            <div class="widget-body  widget-body-lg am-fr">

                <form action="{{url('admin/cate')}}" method="get"">

                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3" style="margin:0px 0px 20px 770px;">
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
                        <th >排序</th>
                        <th class="tc">ID</th>
                        <th>分类名称</th>
                        <th>标题</th>
                        <th>查看次数</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cates as $k=>$v)
                    <tr class="even gradeC">
                        <td >
                            <input type="text" name="ord[]" style="color:blue;width:30px;" value="{{$v->cate_order}}" onchange="changeOrder(this,{{$v->cate_id}})">
                        </td>
                        <td class="tc">{{$v->cate_id}}</td>
                        <td>
                            <a href="#">{{$v->cate_names}}</a>
                        </td>
                        <td>
                            <a href="#">{{$v->cate_title}}</a>
                        </td>
                        <td>
                            <a href="#">{{$v->cate_view}}</a>
                        </td>
                        <td>
                            <div class="tpl-table-black-operation">
                                <a href="javascript:void(0)" onclick="showArt({{$v->cate_id}})">
                                    查看文章
                                </a>
                                <a href="{{url('admin/cate/'.$v->cate_id.'/edit')}}">
                                    <i class="am-icon-pencil"></i> 编辑
                                </a>
                                <a class="tpl-table-black-operation-del" href="javascript:;" onclick="delCate({{$v->cate_id}})">
                                    <i class="am-icon-trash"></i> 删除
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <!-- more data -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>

        //显示当前分类下的文章
        function showArt(cate_id){
            alert('111');
            $.post('/admin/cate/showart',{'_token':'{{csrf_token()}}','cate_id':cate_id},function(data){
                console.log(data);
//                layer.open({
//                    type: 1,
//                    skin: 'layui-layer-rim', //加上边框
//                    area: ['620px', '340px'], //宽高
//                    content: data
//                });
            });
        }

        //排序
        function changeOrder(obj,cate_id){
            //获取文本框的排序值
            var cate_order =  $(obj).val();
            $.post('/admin/cate/changeorder',{'_token':'{{csrf_token()}}','cate_id':cate_id,'cate_order':cate_order},function(data){
                if(data.status == 0){
                    location.href = location.href;
                    layer.msg('修改成功', {icon: 1});
                }else{
                    location.href = location.href;
                    layer.msg('修改失败', {icon: 2});
                }
            })
        }

        // 删除
        function delCate(id){
            layer.confirm('确认删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("{{url('admin/cate/')}}/"+id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
                    if(data.status == 0){
                        location.href = location.href;
                        layer.msg(data.msg, {icon: 1});
                    }else if(data.status == 2){
                        layer.msg(data.msg, {icon: 2});
                    }else{
                        location.href = location.href;
                        layer.msg(data.msg, {icon: 1});
                    }
                });
            }, function(){
            });
        }




    </script>
@endsection