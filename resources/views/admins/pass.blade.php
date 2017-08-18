@extends('layout.admins')

@section('title','密码修改页')

@section('content')

    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">修改密码</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body am-fr">
                <div class="result_wrap">
                    <div class="result_title" id="p">

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
                </div>
                <form action="{{url('admin/pass')}}" method="post" class="am-form tpl-form-border-form tpl-form-border-br" >
                    {{csrf_field()}}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">原密码 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input class="tpl-form-input" id="user-name" placeholder="请输入原密码" type="text" name="user_pass">
                            <small>6~18位之间</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">新密码<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input class="tpl-form-input" placeholder="请输入新密码" type="text" name="password_a">
                            <small>6~18位之间</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">确认密码 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input class="tpl-form-input"  placeholder="请再次输入密码" type="text" name="password_b">
                            <small>6~18位之间</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success" value="提交">
                        </div>
                    </div>
                </form>
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