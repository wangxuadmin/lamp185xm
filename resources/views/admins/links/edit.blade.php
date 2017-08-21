@extends('layout.admins')

@section('title','添加页面')

@section('content')
<div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form"action="{{url('admin/links/'.$links->link_id)}}" method="post" enctype='multipart/form-data'>
                                {{csrf_field()}}
                                {{ method_field('PUT') }}
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label" for="user-name">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="请输入标题文字" id="user-name" class="tpl-form-input"name="link_name"value="{{$links->link_name}}">
                                           
                                     </div>
                                    </div>

                                    
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label" for="user-name">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="" id="user-name" class="tpl-form-input"name="link_title"value="{{$links->link_title}}">
                                            
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label" for="user-name">链接 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="" id="user-name" class="tpl-form-input"name="link_url"value="{{$links->link_url}}">
                                            
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label" for="user-name">排序 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="" id="user-name" class="tpl-form-input"name="link_order"value="{{$links->link_order}}">
                                            
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
