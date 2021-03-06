
@extends('layout.admins')

@section('title','权限添加页')

@section('content')

    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">添加权限</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">
                    <div class="result_wrap">
                        <div class="result_title">
                            @if (count($errors) > 0)
                                <div class="mws-form-message error">
                                    <ul id="vs">
                                        @if(is_object($errors))
                                            @foreach ($errors->all() as $error)
                                                <li >{{ $error }}</li>
                                            @endforeach
                                        @else
                                            <li>{{ session('errors') }}</li>
                                        @endif
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <form action="{{url('admin/permission')}}" method="post" class="am-form tpl-form-border-form">
                        {{csrf_field()}}
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">权限名:<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-12">
                                <input type="text" class="tpl-form-input am-margin" name="name"  value="" placeholder="请输入权限名" style="width:400px">
                                <small></small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">权限描述:<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-12">
                                <input type="text" class="tpl-form-input am-margin" name="description"  value="" placeholder="请输入权限描述" style="width:400px">
                                <small></small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-12 am-u-sm-push-12">
                                <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection