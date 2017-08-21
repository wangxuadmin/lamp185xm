@extends('layout.admins')

@section('title','分类修改页')

@section('content')
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">分类修改</div>
                <div class="widget-function am-fr">
                    <a class="am-icon-cog" href="javascript:;"></a>
                </div>
            </div>
            @if (count($errors) > 0)
                <div class="mark">
                    <ul>
                        @if(is_object($errors))
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @else
                            <li>{{ session('errors') }}</li>
                        @endif
                    </ul>
                </div>
            @endif
            <div class="widget-body am-fr">

                <form action="{{url('admin/cate/'.$cate->cate_id)}}" method="post" class="am-form tpl-form-line-form" >

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-phone">父类</label>
                        <div class="am-u-sm-9">
                            <select name="cate_pid" style="display: none;" data-am-selected="{searchBox: 1}">

                                @foreach($cates as $k=>$v)
                                    @if($v->cate_id == $cate->cate_pid)
                                        <option value="{{$v->cate_id}}" selected>{{$v->cate_names}}</option>
                                    @else
                                        <option value="{{$v->cate_id}}">{{$v->cate_names}}</option>
                                    @endif
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-name">子分类</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="子分类" id="user-name" name="cate_name" value="{{$cate->cate_name}}" class="tpl-form-input">
                            <small>必须填写。</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-name">分类标题</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="子分类" id="user-name" name="cate_title" value="{{$cate->cate_title}}" class="tpl-form-input">
                            <small>必须填写。</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-intro">关键字</label>
                        <div class="am-u-sm-9">
                            <textarea placeholder="请输入文章内容" id="user-intro" rows="10" class="" name="cate_keywords" style="height: 119px;">{{$cate->cate_keywords}}</textarea>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-intro">描述</label>
                        <div class="am-u-sm-9">
                            <textarea placeholder="请输入文章内容" name="cate_description" id="user-intro" rows="10" class="" style="height: 119px;">{{$cate->cate_description}}</textarea>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-name"  value="{{$cate->cate_order}}">排序</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="排序" id="user-name" name="cate_order" class="tpl-form-input">
                            <small>必须填写。</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success " >提交</button>
                        </div>
                    </div>
                    {{csrf_field()}}
                    {{method_field('put')}}
                </form>
            </div>
        </div>
    </div>

@endsection