
@extends('layout.admins')

@section('title','角色修改页')

@section('content')

<div class="row">

    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">修改角色</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body am-fr">
                <form action="{{url('admin/role/'.$role->id)}}" method="post" class="am-form tpl-form-border-form">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">角色名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-12">
                            <input type="text" class="tpl-form-input am-margin-top-xs"  value="{{$role->name}}" name="name">
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