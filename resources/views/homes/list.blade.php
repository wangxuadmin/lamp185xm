@extends('layout.homes')

@section('title','文章页')

@section('content')

    <!-- 面包屑 --> 
    <div class="pb-main pb-breadcrumbs pb-mt40 pb-size-small"> 
     <a href="index.html">首页</a> &gt;&gt; 
     <a href="news.html">征文比赛</a> &gt;&gt; 
     <a href="news_detail.html?-10">你如何看待高中生恋爱</a> &gt;&gt; 
     <a>如果高中生谈恋爱，请善待它</a> 
    </div> 
    <!-- 面包屑结束 --> 
    <!-- 当前页面内容 --> 
    <link rel="stylesheet" type="text/css" href="/homes/css/article.css?v3" /> 
    <div class="pb-main pb-mt20"> 
     <!--主文章展示--> 
     <div class="atl-main pb-inner-main"> 
      <div class="pb-after-clear"> 
       <h1 class="pb-fl">{!! $arts->art_title !!}</h1> 
       <h3 class="pb-fl"><a href="news_detail.html?-10" class="pb-block">老王你怎么看</a></h3> 
      </div> 
      <div class="pb-mt15 pb-size-tiny meta"> 
       <span class="dt">{{ date('Y年m月d日 H:i:s') }}</span> 
       <span class="at">作者：{!! $arts->art_editor !!}</span> &nbsp;&nbsp;|&nbsp;&nbsp; 
       <span class="vw"><i class="pb-icons"></i>浏览（{!! $arts->art_view !!}）</span> &nbsp;&nbsp;|&nbsp;&nbsp; 
       <span class="ct"><i class="pb-icons"></i>评论（0）</span> &nbsp;&nbsp;|&nbsp;&nbsp; 
       <span class="sc"><i class="pb-icons"></i>得分（1）</span> 
      </div> 
      <div class="pb-mt20 cnt">

       <p>&nbsp; &nbsp; &nbsp;{!! $arts->art_content !!}。</p> 
      
      </div> 
      <div class="pb-mt30 pb-after-clear"> 
       <a href="news_detail.html?-9-64" class="pb-fr">下一篇: 请允许我忧伤的想念</a> 
      </div> 
      <div class="pb-mt50 votebar"> 
       <div class="e-point pb-icons" score="1"> 
        <div class="m"></div> 
        <div class="l pb-icons">
         0 分
        </div> 
       </div> 
       <button class="t1" act="support"><i class="pb-icons"></i> +3分 [<span>1</span>]</button> 
       <button class="t2" act="oppose"><i class="pb-icons"></i> -2分 [<span>1</span>]</button> 
       <button class="t4" act="share"><i class="pb-icons"></i> +15分[<span>0</span>]</button> 
       <button class="t3" act="comment"><i class="pb-icons"></i> +5分</button> 
       <div class="bdsharebuttonbox pb-hide" style="line-height: 28px; position: absolute; top: 118px; right: 175px;"> 
        <span class="pb-fl">分享到合作网站并加15分：</span> 
        <a title="分享到QQ空间" href="http://www.lanrenzhijia.com/"" class="bds_qzone" data-cmd="qzone"></a>
        <a title="分享到新浪微博" href="http://www.lanrenzhijia.com/"" class="bds_tsina" data-cmd="tsina"></a> 
       </div> 
       <script>window._bd_share_config={"common":{"onBeforeClick":function(cmd, config){
				if( cmd == 'tsina'){
					config.bdText = '#' +config.bdText + '#这篇文章写得相当不错，有空的时候来看看。';
				}
				return config;
			},"onAfterClick": function(){
				W.confirm('我已经将此篇文章分享给好友了',function(){
					submitShare();
				});
			},"bdSnsKey":{},"bdText":"如果高中生谈恋爱，请善待它","bdDesc":"这篇文章写得相当不错，有空的时候来看看。","bdMini":"2","bdMiniList":false,"bdPic":"http://www.sharesmile.cn/public/essay/201510/11-1/essay_10001_e27ef3b65d.jpg","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script> 
      </div> 
      <div class=" pb-mt50"> 
       <h6 class="pb-clr1 pb-size-big">往期比赛</h6> 
       <ul class="wqzt pb-mt10"> 
        <li> 
         <dl> 
          <dt> 
           <a href="news_detail.html?-1"><img alt="回首这十年,征文比赛，有奖征文" src="images/essay_10001_210da91e58.jpg" /></a> 
          </dt> 
          <dd>
           <a href="news_detail.html?-1">回首这十年</a>
          </dd> 
         </dl> </li> 
        <li> 
         <dl> 
          <dt> 
           <a href="news_detail.html?-2"><img alt="重写当年的高考作文,征文比赛，有奖征文" src="images/essay_10001_74b3406cc4.jpg" /></a> 
          </dt> 
          <dd>
           <a href="news_detail.html?-2">重写当年的高考作文</a>
          </dd> 
         </dl> </li> 
        <li> 
         <dl> 
          <dt> 
           <a href="news_detail.html?-3"><img alt="初恋这种感觉,征文比赛，有奖征文" src="images/essay_10001_4e71d62e20.jpg" /></a> 
          </dt> 
          <dd>
           <a href="news_detail.html?-3">初恋这种感觉</a>
          </dd> 
         </dl> </li> 
        <li style="margin-right:0;"> 
         <dl> 
          <dt> 
           <a href="news_detail.html?-4"><img alt="你和你的城,征文比赛，有奖征文" src="images/essay_10001_0ba5781188.jpg" /></a> 
          </dt> 
          <dd>
           <a href="news_detail.html?-4">你和你的城</a>
          </dd> 
         </dl> </li> 
       </ul> 
      </div> 
      <div class="atl-cmtlist pb-mt50 pb-after-clear" id="pb-cmtlist-wp"> 
       <div class="head pb-clr1 pb-size-small pb-after-clear"> 
        <a class="pb-clr1 pb-size-small pb-underline pb-fr" href="javascript:Sys.showRuleDiv();">获奖规则</a> 
        <span class="pb-fl">全部评论（<i>0</i>）</span> 
       </div> 
       <div class="body pb-mt40 pb-after-clear"> 
        <ul> 
        </ul> 
       </div> 
       <div class="pb-mt50 pb-fl pb-listpage"> 
       </div> 
      </div> 
      <script>
		$('.yiiPagerA').die().live('click',function(){
			$.get( $(this).attr('link'),function( d){
				Sys.scrollTo('pb-cmtlist-wp',function(){
					$('#pb-cmtlist-wp').html( d);
					adjustCommentScoreLine();
				});
			});
		});
		</script> 
      <div class="atl-cmtbox pb-mt50 pb-after-clear"> 
       <input class="but pb-fr" type="button" value="评&nbsp;论" /> 
       <div contenteditable="true" class="pb-size-normal ta pb-fl" cpid="0" rcpid="0"></div> 
      </div> 
     </div> 
     <!--主文章展示 end--> 
     <!--右侧我要投稿公共部分--> 
     <div class="commside"> 
      <div class="pb-iblock pb-fr pb-main-side"> 
       <img style="width:100px;height:100px;" class="pb-fl" alt="小红楼" src="/homes/images/head_10348_57fbdd4d36_100.jpg" /> 
       <p class="atl-uinfo-p">作者昵称：小红楼<a href="/user-10348"><i class="pb-icons house"></i></a></p> 
       <p class="atl-uinfo-p">当前排名：6</p> 
       <p class="atl-uinfo-p">当前得分：1</p> 
      </div> 
      <!--右侧我要投稿公共部分--> 
      <div class="pb-iblock pb-fr pb-after-clear pb-main-side pb-mt30"> 
       <img src="/homes/images/icon_tougaoyouqian.jpg" class="pb-block" alt="征文比赛 有奖征文" /> 
       <h6 class="pb-mt15 pb-clr1 pb-size-big">下期专题</h6> 
       <div class="pb-line2 pb-mt5"> 
       </div> 
       <a class="tle pb-mt5" href="news_detail.html?/add">年味为什么越来越淡了</a> 
       <div class="pb-line2 pb-mt5"> 
       </div> 
       <h6 class="pb-mt15"> <span class="pb-clr1 pb-size-normal">已投稿 <i class="tougao">2</i></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:Sys.showRuleDiv();" class="pb-clr1 pb-size-small pb-underline">获奖规则</a> </h6> 
       <a class="but pb-clr1 pb-size-normal pb-mt15" href="news_detail.html?/add">有奖征文</a> 
      </div> 
      <!--右侧我要投稿公共部分--> 
      <div style="clear:both;"></div> 
      <div class="sidewrap  pb-mt40"> 
       <h6 class="pb-clr1 pb-size-big">倾听世界</h6> 
       <div class="pb-line2 pb-mt5"> 
       </div> 
       <div class="con pr" style="height:480px;overflow:hidden;"> 
        <div class="single" style="left:150px;height:150px;top:15px;"> 
         <a href="pic_detail.html?1" title="清纯唯美写真合集"><img style="width:145px;" src="/homes/images/qing_10001_7b053ee001_310.jpg" alt="清纯唯美写真合集" /></a> 
        </div> 
        <div class="single" style="left:0px;height:150px;top:15px;"> 
         <a href="pic_detail.html?3" title="也许我就是一块老墨"><img style="width:145px;" src="/homes/images/qing_10001_2278c48f96_310.jpg" alt="也许我就是一块老墨" /></a> 
        </div> 
        <div class="single" style="left:150px;height:150px;top:170px;"> 
         <a href="pic_detail.html?4" title="证件照"><img style="width:145px;" src="/homes/images/qing_9999_6963913fb8_310.jpg" alt="证件照" /></a> 
        </div> 
        <div class="single" style="left:0px;height:150px;top:170px;"> 
         <a href="pic_detail.html?6" title="享笑网2015-5-30#325806#"><img style="width:145px;" src="/homes/mages/qing_10001_3f5af7636f_310.jpg" alt="享笑网2015-5-30#325806#" /></a> 
        </div> 
        <div class="single" style="left:150px;height:150px;top:325px;"> 
         <a href="pic_detail.html?7" title="爱情就是一百多年的孤寂"><img style="width:145px;" src="/homes/images/qing_10001_5502d62ca8_310.jpg" alt="爱情就是一百多年的孤寂" /></a> 
        </div> 
        <div class="single" style="left:0px;height:150px;top:325px;"> 
         <a href="pic_detail.html?10" title="中国书法家【郝天明】书法新作(妙笔生辉"><img style="width:145px;" src="/homes/images/qing_10001_bcf83a76ac_310.jpg" alt="中国书法家【郝天明】书法新作(妙笔生辉" /></a> 
        </div> 
       </div> 
      </div> 
     </div> 
     <!--右侧我要投稿公共部分--> 
    </div> 
    <!-- 当前页面内容结束 --> 
    <script>
var gEssayId = '65';
var gEssayScore = '1';
var gHigestEssayId = '67';
var gHigestEssayScore = parseInt('27');
var gEssayUserid = '10348';
var gEssayStatus = parseInt('1');
var gEssayFeatureStatus = parseInt('2');
var gSubmitUrl = '/essay/commentadd';
var gVoteUrl = '/essay/Vote';
var gShareUrl = '/essay/Share';
var gEssayDelUrl = '/essay/AdminCommentdel';
var gVoteCommentUrl = '/essay/VoteComment';
var gHighestCommentId = '0';
var gHighestCommentScore = '0';
var gSingleCommentUrl = '/essay/SingleComment';

/**
* pid 文章ID
* cpid 父评论ID
* rcpid 真正回复的评论ID
* content 回复的内容
*/
function submitEssayComment( iptObj){
	if( gEssayStatus < 1){
		W.tips('文章审核后才可以开始点评，心急吃不了臭豆腐哦 :)');
		return false;
	}
	if( gEssayFeatureStatus < 2){
		W.tips('专题评比开始后才可以统一开始点评，不要心急哟 :)');
		return false;
	}
	var submitUrl = gSubmitUrl;
	var pid = gEssayId, cpid = iptObj.attr('cpid'), rcpid = iptObj.attr('rcpid');
	var content = Sys.removeHTMLTag(iptObj.html());
	var butObj = iptObj.prev('input');
	var butTxt = butObj.val();
	if( content){
		$.ajax({
			'url' : submitUrl,
			'type' : 'POST',
			'dataType' : 'JSON',
			'data' : 'EssayCommentUser[pid]='+ pid +'&EssayCommentUser[cpid]='+ cpid +'&EssayCommentUser[rcpid]='+ rcpid +'&EssayCommentUser[content]=' + encodeURIComponent(content),
			'beforeSend' : function(){
				butObj.unbind('click').val('提交中...');
			},
			'success' : function( ret){
				if( ret.ret == 0){
					iptObj.removeClass('active').html('');
					butObj.removeClass('active').unbind('click');
					adjustEssayScoreLine( 5);
					if( ret.comment.cpid && parseInt(ret.comment.cpid) > 0){//如果是子回复
						iptObj.parent().find('ul').append( tpl2html('tpl-essay-childcomment', ret.comment));
						adjustCommentScoreLine( cpid, 3);
					}else{
						$('.atl-cmtlist ul:first').append( tpl2html('tpl-essay-comment', ret.comment));
					}
					Sys.updateNumeric($('.atl-cmtlist .head span i'));
				}else if( ret.ret == 3){
					W.tips('亲,你说话的速度也太快了吧，赶紧休息会 :)');
					return false;
				}else{
					W.tips( ret.msg);
					butObj.bind('click',function(){
						submitEssayComment( iptObj);
					});	
				}
			},
			'complete' : function(){
				butObj.val( butTxt);
			}
		});
	}
}
function submitVoteComment( butObj){
	if( gEssayStatus < 1){
		W.tips('文章审核后才可以开始点评，心急吃不了臭豆腐哦 :)');
		return false;
	}
	if( gEssayFeatureStatus < 2){
		W.tips('专题评比开始后才可以统一开始点评，不要心急哟 :)');
		return false;
	}
	var submitUrl = gVoteCommentUrl;
	var id = butObj.attr('commentid');
	var act = butObj.attr('act');
	$.ajax({
		'url' : submitUrl,
		'type' : 'GET',
		'dataType' : 'JSON',
		'data' : 'id='+id + '&act=' + act,
		'beforeSend' : function(){
		},
		'success' : function( ret){
			if( ret.ret == 0){
				adjustCommentScoreLine( id, act == 'support' ? 2 : -1);
				Sys.updateNumeric( butObj.find('span'), 1);
			}else if( ret.ret == 34){
				W.tips( '亲，您已经点评过这个评论咯！');
			}else {
				W.tips( ret.msg);
			}
		},
		'complete' : function(){
		}
	});
}
function submitVote( act){
	var id = gEssayId;
	var submitUrl = gVoteUrl;
	$.ajax({
		'url' : submitUrl,
		'type' : 'GET',
		'dataType' : 'JSON',
		'data' : 'id='+id + '&act=' + act,
		'beforeSend' : function(){
		},
		'success' : function( ret){
			if( ret.ret == 0){
				adjustEssayScoreLine( act == 'support' ? 3 : -2);
				Sys.updateNumeric($('.votebar ' + (act == 'support' ? '.t1' : '.t2') +' span'));
			}else if( ret.ret == 34){
				W.tips( '亲，您已经点评过这个文章咯！');
			}else {
				W.tips( ret.msg);
			}
		},
		'complete' : function(){
		}
	});
}
function submitShare( ){
	var id = gEssayId;
	var submitUrl = gShareUrl;
	$.ajax({
		'url' : submitUrl,
		'type' : 'GET',
		'dataType' : 'JSON',
		'data' : 'id='+id ,
		'beforeSend' : function(){
		},
		'success' : function( ret){
			$('.bdsharebuttonbox').fadeOut();
			if( ret.ret == 0){
				adjustEssayScoreLine( 15);
				Sys.updateNumeric($('.votebar .t4 span'));
			}else if( ret.ret == 34){
				W.tips( '我们只给您的第一次分享加分:)');
			}else {
				W.tips( ret.msg);
			}
		},
		'complete' : function(){
		}
	});
}
//某一个评论的分数改变以后，调整所有的分数进度条
function adjustCommentScoreLine( scoreId, addScore){
	var hScore = parseInt( gHighestCommentScore);
	var hScoreId = parseInt( gHighestCommentId);
	if( scoreId && addScore){
		scoreId = parseInt(scoreId);
		addScore = parseInt(addScore);
		var targetObj = $('#point_'+ scoreId), targetScore, targetNewScore;
		if( parseInt( vars.userid) == parseInt( targetObj.attr('userId')) ){//如果是自己给自己点评，就不加分
			W.tips('允许评论自己，但不给加分哟 :)');
			return false;
		}
		if( gEssayFeatureStatus > 2 ){
			W.tips('允许评论已结束参赛文章，但不给加分哟 :)');
			return false;
		}
		if( scoreId == hScoreId){
			hScore += addScore;
			if( hScore < 0){
				hScore = 0;
			}
			gHighestCommentScore = targetNewScore = hScore;
		}else{
			targetScore = parseInt( targetObj.attr('score'));
			targetNewScore = targetScore + addScore;
			if( targetNewScore < 0){
				targetNewScore = 0;
			}
			if( targetNewScore > hScore){
				hScore = gHighestCommentScore = targetNewScore;
				gHighestCommentId = scoreId;
			}
		}
		targetObj.attr('score', targetNewScore).find('i').html( targetNewScore);
	}
	//处理所有进度条
	$('.point').each(function(){
		var score = parseInt( $(this).attr('score'));
		var percentage = hScore ? parseInt( score / hScore * 100) : 0;
		$(this).animate({'width' : percentage + '%'}, 2000);
	});
}

//文章分数发生变化后，调整文章的进度条
function adjustEssayScoreLine( addScore){
	addScore = (addScore ? parseInt(addScore) : 0);
	if( addScore){
		if( parseInt( vars.userid) == parseInt( gEssayUserid) ){
			W.tips('允许点评或分享自己的文章，但不给你加分哟 :)');
			return false;
		}
		if( gEssayFeatureStatus > 2 ){
			W.tips('允许点评或分享已结束参赛文章，但不给加分哟 :)');
			return false;
		}
	}
	var targetObj = $('.e-point');
	var oldScore = parseInt( targetObj.attr('score') );
	var newScore = oldScore + addScore;
	if( newScore < 0){
		newScore = 0;
	}
	targetObj.attr('score', newScore).find('.l').html( newScore + ' 分');
	if( newScore > gHigestEssayScore){
		gHigestEssayScore = newScore;
	}
	
	var full = 640;
	var r = full - (gHigestEssayScore != 0 ? parseInt( newScore / gHigestEssayScore * full) : 0 );
	targetObj.find('.m').animate({'width' : r + 'px'}, 2000);
}
function getSinleComment( id){
	$.ajax({
		'url' : gSingleCommentUrl,
		'type' : 'GET',
		'data' : 'id='+id,
		'beforeSend' : function(){
		},
		'success' : function( d){
			if( d){
				$('.atl-cmtlist ul:first').prepend( d);
				Sys.scrollTo($('#comment_li_' + id));	
			}
		},
		'complete' : function(){
		}
	});
}
function delEssayComment( id){
	W.confirm('确定删除该评论吗？',function(){
		$.ajax({
			'url' : gEssayDelUrl,
			'type' : 'GET',
			'dataType' : 'JSON',
			'data' : 'commentId='+id,
			'beforeSend' : function(){
			},
			'success' : function( ret){
				W.tips(ret.msg);
			},
			'complete' : function(){
			}
		});
	});
}

$(document).ready(function(){
		adjustCommentScoreLine();
	adjustEssayScoreLine();
	var param = Sys.getUrlParams();
	if( param['message']){
		var messageLi = $('#comment_li_' + param['message']);
		if( messageLi.length > 0){
			Sys.scrollTo(messageLi);	
		}else{
			getSinleComment( param['message']);
		}
	}
	
	//对评论分数小气球做处理
	$(".atl-cmtlist .pli").live('mouseenter', function(){
		$(this).find('.point i').css('opacity', 0).show().animate({
           opacity: "1"
       }, "slow");
	}).live('mouseleave', function(){
		$(this).find('.point i').animate({
           opacity: "hide"
       }, "fast");
	});
	//对各个点击回复按钮事件做处理
	$(".atl-cmtlist .ping,.atl-cmtlist .cping").live('click',function(){
		var cpid = $(this).attr('cpid');
		var rcpid = $(this).attr('rcpid');
		var userid = parseInt($(this).attr('userid'));
		if( parseInt( vars.userid) == userid){
			W.tips('亲，你想对自己说什么呢？');
			return false;
		}
		//获取父评论对象
		var cpidObj = $('#comment_li_'+cpid);
		//获取真正回复的对象
		var rcpidObj = $('#comment_li_'+rcpid);
		var nick = rcpidObj.attr('nick');
		var txt = $.browser.mozilla ? '<img alt="@'+ nick +'："/>' : '<button name="" onclick="return false;" tabindex="-1" contentEditable=false>@'+ nick +':</button>&nbsp;';
		var iptObj = cpidObj.find('.textarea');
		function needConfirmLogic(){//以下逻辑当在需要用户确认的时候需要判断后再执行
			iptObj.html('').append(txt);
			Sys.placeCaretAtEnd( iptObj[0]);
			iptObj.attr('rcpid', rcpid);
			iptObj.unbind('keyup').keyup(function(event){ 
				if( event.keyCode == 8){
					if( $(this).html() == '' || $(this).html() == '<br>'){
						//如果内容全部删掉的话，需要执行将内容置为父评论的级别
						iptObj.attr('rcpid', cpid);
					}
				}
			});
		}
		if( iptObj.html() != '' && iptObj.html() != '<br>'){
			W.confirm('确定放弃之间编辑的内容吗？',function(){
				needConfirmLogic();
			});
		}else{
			needConfirmLogic();
		}
	});
	//对编辑文本框添加焦点失去与捕获时间，处理相关状态的转换问题
	$('.atl-cmtlist .textarea,.atl-cmtbox div').live('focus',function(){
		Sys.checkUserLogin();
		var iptObj = $(this);
		iptObj.removeClass('active').addClass('active');
		//捕获焦点后，给焦点紧邻的button增加点击事件
		iptObj.prev('input').removeClass('active').addClass('active').unbind('click').bind('click',function(){
			submitEssayComment( iptObj);
		});
	}).live('blur',function(){
		var iptObj = $(this);
		var content = Sys.removeHTMLTag(iptObj.html());
		if( content == ''){//如果失去焦点的时候内容为空
			$(this).removeClass('active');
			$(this).prev('input').removeClass('active').unbind('click');
			$(this).attr('rcpid', $(this).attr('cpid'));
			iptObj.html('');
		}
	});
	//对点点击子评论按钮做处理
	$(".atl-cmtlist .jia,.atl-cmtlist .jian").live('click',function(){
		submitVoteComment( $(this));
	});
	//对点点击文章评论按钮做处理
	$(".votebar button").bind('click',function(){
		if( gEssayStatus < 1){
			W.tips('文章审核后才可以开始点评，心急吃不了臭豆腐哦 :)');
			return false;
		}
		if( gEssayFeatureStatus < 2){
			W.tips('专题评比开始后才可以统一开始点评，不要心急哟 :)');
			return false;
		}
		var act = $(this).attr('act')
		if( act == 'support' || act == 'oppose'){
			submitVote( act);
		}else if( act == 'comment'){
			var target = $('.atl-cmtbox:first');
			Sys.scrollTo( target,function(){
				target.find('div').focus();
			});
			
		}else if( act == 'share'){
			$('.bdsharebuttonbox').fadeIn();
		}
	});
	
		Sys.updateEntityClicknum('/stat/ClickNum','e', gEssayId);
});
</script> 
    <script id="tpl-essay-comment" type="text/x-jsmart-tmpl">
	<li class="pli" id="comment_li_{$id}" nick="{$nickname}">
		<a href="javascript:void(0);" class="avatars pb-fl">
			<img src="{$headimage}" style="width:60px;height:60px;" alt="{$nickname}">
		</a>
		<div class="rbox">
			<div class="nickbar">
				<div class="point" id="point_{$id}" style="width:0%;" score="{$score}" userId="{$userid}"><i class="pb-icons">{$score}</i></div>
				<a href="javascript:void(0);" class="p7">{$nickname}</a>
			</div>
			<div class="cnt">{$content}</div>
			<div class="btbar pb-size-small pb-after-clear">
				<span title="{$createdate}" class="date">{$createdate}</span>
				<a href="javascript:void(0);" class="jia" act="support" commentid="{$id}"><i class="pb-icons"></i>加分(<span>{$supportnum}</span>)</a>
				<a href="javascript:void(0);" class="jian" act="oppose" commentid="{$id}"><i class="pb-icons"></i>减分(<span>{$opposenum}</span>)</a>		
				<a href="javascript:void(0);" class="ping" cpid="{$id}" rcpid="{$id}" userid="{$userid}"><i class="pb-icons"></i>回复({$commentnum})</a>
			</div>
		</div>
		<div class="rdiv pb-after-clear">
			<ul></ul> 
		   <input class="pb-mt10" type="button" value="回复 +3"/>
		   <div contentEditable=true class="pb-size-normal pb-mt10 textarea" cpid="{$id}" rcpid="{$id}"></div>
	   </div>
   </li>
</script> 
    <script id="tpl-essay-childcomment" type="text/x-jsmart-tmpl">
	<li id="comment_li_{$id}" nick="{$nickname}">
		<a href="javascript:void(0);" class="avatars pb-fl">
			<img src="{$headimage}" style="width:60px;height:60px;" alt="{$nickname}">
		</a>
		<div class="rbox rrbox">
			<div class="nickbar rnickbar"><a href="javascript:void(0);">{$nickname}</a>{if $rnickname}@<a href="javascript:void(0);">{$rnickname}</a>{/if}</div>
			<div class="cnt">{$content}</div>
			<div class="btbar pb-size-small">
				<span title="{$createdate}">{$createdate}</span>	
				<a href="javascript:void(0);" class="ping cping" cpid="{$cpid}" rcpid="{$id}" userid="{$userid}"><i class="pb-icons"></i></a>	
			</div>
		</div>
	</li>
</script> 
   </div> 

@endsection