@extends('layout.admins')

@section('title','添加页面')

@section('content')
<div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form"action="{{url('admin/links')}}" method="post"enctype='multipart/form-data'>
                                {{csrf_field()}}
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label" for="user-name">名称 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="请输入标题文字" id="user-name" class="tpl-form-input"name="link_name">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>

                                    
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label" for="user-name">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="" id="user-name" class="tpl-form-input"name="link_title">
                                            
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label" for="user-name">链接 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="" id="user-name" class="tpl-form-input"name="link_url">
                                            
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label" for="user-name">排序 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="" id="user-name" class="tpl-form-input"name="link_order">
                                            
                                        </div>
                                    </div>
                                   
                                   <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success " >提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
@endsection                            