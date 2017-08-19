@extends('layout.admins')

@section('title','文章添加页')

@section('content')
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">文章添加</div>
                <div class="widget-function am-fr">
                    <a class="am-icon-cog" href="javascript:;"></a>
                </div>
            </div>

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

            <div class="widget-body am-fr">

                <form action="{{url('admin/upload')}}" method="post" id="art_form" enctype="multipart/form-data" class="am-form tpl-form-line-form" >

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-phone">父类</label>
                        <div class="am-u-sm-9">
                            <select name="cate_pid" style="display: none;" data-am-selected="{searchBox: 1}">

                                <option value="0">==顶级分类==</option>
                                @foreach($cates as $k=>$v)
                                    <option value="{{$v->cate_id}}">{{$v->cate_names}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-name">文章标题：</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="文章标题" id="user-name" name="art_title" class="tpl-form-input">

                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-name">文章编辑：</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="文章编辑" id="user-name" name="art_editor" class="tpl-form-input">

                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-name">缩略图：</label>
                        <div class="am-u-sm-9">
                            <input type="text" size="50" name="art_thumb" placeholder="缩略图" id="art_thumb">
                            <input id="file_upload" name="file_upload" type="file" multiple="true">
                            <p><img id="img1" alt="上传后显示图片"  style="max-width:350px;max-height:100px;" /></p>

                            <script type="text/javascript">
                                $(function () {
                                    $("#file_upload").change(function () {
                                        uploadImage();
                                    });
                                });

                                function uploadImage() {
//                            判断是否有选择上传文件
                                    var imgPath = $("#file_upload").val();

                                    if (imgPath == "") {
                                        alert("请选择上传图片！");
                                        return;
                                    }
                                    //判断上传文件的后缀名
                                    var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
                                    if (strExtension != 'jpg' && strExtension != 'gif'
                                        && strExtension != 'png' && strExtension != 'bmp') {
                                        alert("请选择图片文件");
                                        return;
                                    }
//                            var myform = document.getElementById('art_from');
                                    var formData = new FormData($('#art_form')[0]);
                                    formData.append('_token', '{{csrf_token()}}');
//                                                                console.log(formData);
                                    $.ajax({
                                        type: "POST",
                                        url: "/admin/upload",
                                        data: formData,
                                        async: true,
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        success: function(data) {
//                                    console.log(data);
//                                    alert("上传成功");
//                                        七牛云
//                                        $('#img1').attr('src','http://ouawuxiun.bkt.clouddn.com/'+data);
//                                        OSS
// $('#img1').attr('src','http://project185.oss-cn-shanghai.aliyuncs.com/'+data);
//                                        本地服务器
                                            $('#img1').attr('src','/'+data);

                                            $('#art_thumb').val(data);

                                        },
                                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                                            alert("上传失败，请检查网络后重试");
                                        }
                                    });
                                }

                            </script>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-name">文章标签：</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="文章标签" id="user-name" name="art_editor" class="tpl-form-input">

                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-intro">描述：</label>
                        <div class="am-u-sm-9">
                            <textarea placeholder="描述" id="user-intro" rows="10" class="" style="height: 136px;"></textarea>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label" for="user-intro">内容：</label>
                        <div class="am-u-sm-9">
                            <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.config.js')}}"></script>
                            <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.all.min.js')}}"> </script>
                            <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/lang/zh-cn/zh-cn.js')}}"></script>

                            <script id="editor" name="art_content" type="text/plain" style="width:850px;height:300px;"></script>

                            <script type="text/javascript">

                                //实例化编辑器
                                //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                                var ue = UE.getEditor('editor');

                            </script>
                            <style>
                                .edui-default{line-height: 28px;}
                                div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                                {overflow: hidden; height:20px;}
                                div.edui-box{overflow: hidden; height:22px;}
                            </style>
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

    <style>
        #vs{
            border-width: 0 0 1px;
            background-color: #2E2D3C;
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