
@extends('layout.admins')

@section('title','用户修改页')

@section('content')

<div class="row">

    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">修改用户</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body am-fr">
                <div class="result_title">
                    @if (count($errors) > 0)
                        <div class="mark">
                            <ul id="vs">
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
                </div>
                <form action="{{url('admin/user/'.$user->user_id)}}" method="post" class="am-form tpl-form-border-form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">用户名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-12">
                            <input type="text" class="tpl-form-input am-margin-top-xs"  value="{{$user->user_name}}" name="user_name" placeholder="请输入用户名">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">密码 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-12">
                            <input type="password" class="tpl-form-input am-margin-top-xs" name="user_pass"  placeholder="请输入密码">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">确认密码 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-12">
                            <input type="password" class="tpl-form-input am-margin-top-xs" name="password_a"  placeholder="请再次输入密码">
                            <small></small>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">头像:</label>
                        <div class="mws-form-item">
                            <input type="file" name='user_pic'>
                            <img src="{{$user->user_pic}}" style="width:100px;height:100px">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">邮箱<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-12">
                            <input type="email" class="tpl-form-input am-margin-top-xs" name="user_email" value="{{$user->user_email}}" placeholder="请输入邮箱账号">
                            <small></small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">手机号 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-12">
                            <input type="text" class="tpl-form-input am-margin-top-xs" name="user_tel"  value="{{$user->user_tel}}" placeholder="请输入手机号">
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
<style>
    #vs{
        border-width: 0 0 1px;
        background-color: #2E2D3C;
        background-image: url("/admins/assets/img/1.png");
        border-color: #eb979b;
        color: #d43f3a;
        background-position: 12px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 15px 8px 15px 45px;
        position: relative;
        border-radius:10px;
    }
</style>
<script  type="text/javascript">
    setTimeout(function(){
        $('#vs').hide();
    },3000)
</script>
@endsection