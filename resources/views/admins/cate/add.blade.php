@extends('layout.admins')

@section('title','分类添加页')

@section('content')
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">分类添加</div>
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

                <form action="{{url('admin/cate')}}" method="post" class="am-form tpl-form-line-form" >

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-phone">父类</label>
                        <div class="am-u-sm-9">
                            <select name="cate_pid" style="display: none;" data-am-selected="{searchBox: 1}">

                                <option value="0">==顶级分类==</option>
                                @foreach($cate_one as $k=>$v)
                                    <option value="{{$v->cate_id}}">{{$v->cate_name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-name">添加子分类</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="子分类" id="user-name" name="cate_name" class="tpl-form-input">
                            <small>必须填写。</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success " >提交</button>
                        </div>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>

@endsection