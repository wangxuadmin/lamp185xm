
@extends('layout.admins')

@section('title','角色授权页')

@section('content')

    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">授权</div>
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
                    <form action="{{url('admin/role/doauth')}}" method="post" class="am-form tpl-form-border-form">
                        {{csrf_field()}}


                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">角色名称 :<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                <input class="tpl-form-input" type="hidden" name="role_id" value="{{$role->id}}" style="width:200px">
                                <input class="tpl-form-input" type="text" value="{{$role->name}}" style="width:200px">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">所有权限名称 :<span class="tpl-form-line-small-title"></span></label>
                            <div class="am-u-sm-9">
                                @foreach($permission as $k=>$v)
                                    @if(in_array($v->id,$perown))
                                        <input class="tpl-form-input" type="checkbox" checked name="permission_id[]" value="{{$v->id}}">{{$v->name}}
                                    @else
                                        <input class="tpl-form-input" type="checkbox" name="permission_id[]" value="{{$v->id}}">{{$v->name}}
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection