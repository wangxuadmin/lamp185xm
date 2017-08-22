@extends('layout.homes')

@section('title','博客首页')

@section('content')

                <!-- 当前页面内容 --> 
                <link rel="stylesheet" type="text/css" href="/homes/css/jquery.slideBox.css" /> 
                <link rel="stylesheet" type="text/css" href="/homes/css/index.css?v2" /> 
                <div class="pb-main pb-mt10"> 
                    <div id="bSlideBox" class="pb-main slideBox"> 
                        <ul class="items"> 
                            <li><a target="_blank" onclick="Sys.commStat(46);" href="http://www.sharesmile.cn/essay-9"><img src="/homes/images/banner_10001_3f4dac09bb.jpg" alt="开学季 开学梦想 开学展望 开学励志 九月开学 青春梦想" /></a></li> 
                            <li><a target="_blank" onclick="Sys.commStat(47);" href="http://www.sharesmile.cn/qing"><img src="/homes/images/banner_10001_300a22a90b.jpg" alt="倾听世界,世界这么大,我想去走走" /></a></li> 
                        </ul> 
                    </div> 
                </div> 
                <script>
                    $(document).ready(function() {
                        $('#bSlideBox').slideBox({
                            duration: 0.7,
                            //direction : 'top',
                            easing: 'linear',
                            delay: 5,
                            hideClickBar: true,
                            clickBarRadius: 10
                        });
                    });
                </script> 
                <div style="clear:both;"></div> 
                <div class="pb-main pb-mt20"> 
                    <h3 class="idx-t1"> <a href="news.html" class="pb-clr1">关于我</a> </h3> 
                    <div class="idx-line1"> 
                    </div> 
                    <div class="idx-ycwz-1 pb-mt20 pb-after-clear"> 
                        <a href="news_detail.html?-10" class="pb-iblock pb-fl"> <img src="/homes/images/essay_10001_f6d8065f91.jpg" class="pb-block" alt="本期征文比赛,你如何看待高中生恋爱" /> </a> 
                        <div class="pb-iblock pb-fl d1"> 
                            <h6><a href="news_detail.html?-10" class="pb-clr1 pb-size-big">本期征文比赛 | <span>你如何看待高中生恋爱</span></a></h6> 
                            <div class="pb-line2 pb-mt5" style="border:0;"> 
                            </div> 
                            <ul> 
                                <li class="pb-mt20"> <a href="news_detail.html?-10-72"><img src="/homes/images/essay_10001_8dd1e515f2.jpg" class="pb-fl" alt="本期征文比赛文章,一种不成熟的爱" /></a> <a href="news_detail.html?-10-72" class="pb-fl rt">一种不成熟的爱 / 木目心</a> <p class="pb-iblock">高中，对于很多人来说，是一段带着自己的大学梦储备能量的征途吧，为的只是在最后一场战—</p> </li> 
                                <li class="pb-mt20"> <a href="news_detail.html?-10-73"><img src="/homes/images/essay_10001_bf886ee0c8.jpg" class="pb-fl" alt="本期征文比赛文章,高中.成长" /></a> <a href="news_detail.html?-10-73" class="pb-fl rt">高中.成长 / 小小一轮弯</a> <p class="pb-iblock">高中时期学业繁重，前途迷茫，空虚与不被理解成了早恋原因。当我们无法从长辈那得到理解与</p> </li> 
                                <li class="pb-mt20"> <a href="news_detail.html?-10-74"><img src="/homes/images/essay_10001_6e99eb35e6.jpg" class="pb-fl" alt="本期征文比赛文章,多感激，那是你" /></a> <a href="news_detail.html?-10-74" class="pb-fl rt">多感激，那是你 / Someone.</a> <p class="pb-iblock">“看着今天的朝阳又是金碧辉煌一大片，我突然很想吃姥姥家的炸鸡排，外焦里嫩，老大一个，</p> </li> 
                            </ul> 
                        </div> 
                        <!--右侧我要投稿公共部分--> 
                        <div class="pb-iblock pb-fr pb-after-clear pb-main-side"> 
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
                    </div> 
                    <div class="idx-ycwz-1 pb-mt50 pb-after-clear"> 
                        <div class="idx-last-board pb-fl"> 
                            <a href="news_detail.html?-9"><img src="/homes/images/essay_10001_2c1098e1a2.jpg" class="pb-block" alt="上期征文比赛,上期有奖征文, 开学与青春或梦想" /></a> 
                            <span class="pb-size-normal pb-block pb-mt15">上期专题</span> 
                            <a class="pb-size-normal pb-mt5 pb-block" href="news_detail.html?-9">开学与青春或梦想</a> 
                        </div> 
                        <div class="pb-iblock pb-fl d1"> 
                            <h6><a href="news_detail.html?-9" class="pb-clr1 pb-size-big">上期获奖作品 | <span>完整榜单</span></a></h6> 
                            <div class="pb-line2 pb-mt5"> 
                            </div> 
                            <ul class="pb-mt15 rank"> 
                                <li class="pb-iblock pb-mt8"> <span class="pb-fl pb-mt10 no">1</span> <a href="/user-10348"> 
                                        <dl class="pb-fl"> 
                                            <dt>
                                                <img src="/homes/images/head_10348_57fbdd4d36.jpg" class="pb-block" alt="参加征文比赛作者,小红楼" />
                                            </dt> 
                                            <dd>
                                                小红楼
                                            </dd> 
                                        </dl> </a> <a href="news_detail.html?-9-58" class="pb-fl pb-block pb-size-normal title">开学，路过了我整个青春</a> <span class="pb-fr dollar">$30</span> </li> 
                                <li class="pb-iblock pb-mt8"> <span class="pb-fl pb-mt10 no">2</span> <a href="/user-10393"> 
                                        <dl class="pb-fl"> 
                                            <dt>
                                                <img src="/homes/images/default.gif" class="pb-block" alt="参加征文比赛作者,橙子" />
                                            </dt> 
                                            <dd>
                                                橙子
                                            </dd> 
                                        </dl> </a> <a href="news_detail.html?-9-62" class="pb-fl pb-block pb-size-normal title">那一年的散伙饭 是我们无</a> <span class="pb-fr dollar">$20</span> </li> 
                                <li class="pb-iblock pb-mt8"> <span class="pb-fl pb-mt10 no">3</span> <a href="/user-10394"> 
                                        <dl class="pb-fl"> 
                                            <dt>
                                                <img src="/homes/images/head_10394_2448d2c4b3.jpg" class="pb-block" alt="参加征文比赛作者,马琳娜55" />
                                            </dt> 
                                            <dd>
                                                马琳娜55
                                            </dd> 
                                        </dl> </a> <a href="news_detail.html?-9-63" class="pb-fl pb-block pb-size-normal title">寻常过往，转瞬成殇</a> <span class="pb-fr dollar">$10</span> </li> 
                            </ul> 
                        </div> 
                        <div class="pb-main-side pb-iblock pb-after-clear pb-fr"> 
                            <h6 class="pb-clr1 pb-size-big">热点文章</h6> 
                            <div class="pb-line2 pb-mt5"> 
                            </div> 
                            <ul class="pb-mt10 previous-term pb-size-normal">
                            @foreach ($pics as $k=>$v)
                                <li> <span>.</span> <a href="{{ url('a/'.$v->art_id) }}">{{ $v->art_tag }}</a> 
                                    <div class="pb-line2"> 
                                    </div> </li> 
                            @endforeach                                                              
                            </ul> 
                        </div> 
                    </div> 
                    <h3 class="idx-t2 pb-mt50 pb-clr1">往期征文</h3> 
                    <div class="pb-line2 pb-mt5"> 
                    </div> 
                    <div class="idx-wqzt pb-mt15 pb-after-clear"> 
                        <ul class="idx-wqzt pb-mt10"> 
                            <li> 
                                <dl> 
                                    <dt> 
                                        <a href="news_detail.html?-8"><img alt="毕业季 校园时代 七月校园 离别气息" src="/homes/images/essay_10001_b959107f8b.jpg" /></a> 
                                    </dt> 
                                    <dd>
                                        <a href="news_detail.html?-8">游走在毕业的季节</a>
                                    </dd> 
                                </dl> </li> 
                            <li> 
                                <dl> 
                                    <dt> 
                                        <a href="news_detail.html?-7"><img alt="去旅行，装满爱，夏天旅行，夏天旅游" src="/homes/images/essay_10001_ed83e14b8a.png" /></a> 
                                    </dt> 
                                    <dd>
                                        <a href="news_detail.html?-7">装满爱，去旅行</a>
                                    </dd> 
                                </dl> </li> 
                            <li> 
                                <dl> 
                                    <dt> 
                                        <a href="news_detail.html?-6"><img alt="有奖征文，征文比赛，享笑网有奖征文比赛，第六期有奖征文，有奖征文之飘着淡淡粽香的父亲节，征文专题之飘着淡淡粽香的父亲节，端午节和父亲节感想，端午节感想，父亲节感想" src="/homes/images/essay_10001_183a4e95ad.jpg" /></a> 
                                    </dt> 
                                    <dd>
                                        <a href="news_detail.html?-6">飘着淡淡粽香的父亲节</a>
                                    </dd> 
                                </dl> </li> 
                            <li> 
                                <dl> 
                                    <dt> 
                                        <a href="news_detail.html?-5"><img alt="有奖征文，征文比赛，享笑网有奖征文比赛，第五期有奖征文，有奖征文之东方之星之痛，征文专题之东方之星之痛，东方之星沉船之痛，东方之星沉船" src="/homes/images/essay_10001_8d58c19a60.jpg" /></a> 
                                    </dt> 
                                    <dd>
                                        <a href="news_detail.html?-5">东方之星之痛</a>
                                    </dd> 
                                </dl> </li> 
                            <li style="margin-right:0;"> 
                                <dl> 
                                    <dt> 
                                        <a href="news_detail.html?-4"><img alt="有奖征文，征文比赛，享笑网有奖征文比赛，第四期有奖征文，有奖征文之你和你的城，征文专题之你和你的城" src="/homes/images/essay_10001_0ba5781188.jpg" /></a> 
                                    </dt> 
                                    <dd>
                                        <a href="news_detail.html?-4">你和你的城</a>
                                    </dd> 
                                </dl> </li> 
                        </ul> 
                    </div> 
                    <h3 class="idx-qtsj-t pb-mt50"> 
                        <div class="inx-qtsj-line pb-fr"></div> 
                        <div class="inx-qtsj-line pb-fl"></div> <a href="pic.html"> <span class="chn">新闻</span> <br /> <span class="eng">LISTEN TO THE WORLD</span> </a> </h3> 
                    <div class="idx-qtsj pb-mt20 pb-after-clear"> 
                        <ul> 
                            <li> <a href="pic_detail.html?1"> <img src="/homes/images/qing_10001_7b053ee001_310.jpg" class="pb-block" style="width:200px;" alt="美女,清纯唯美写真合集" /> </a> 
                                <table class="pb-opac70"> 
                                    <tbody>
                                        <tr> 
                                            <td class="tle">美女</td> 
                                            <td class="num">+35</td> 
                                        </tr> 
                                    </tbody>
                                </table> </li> 
                            <li> <a href="pic_detail.html?3"> <img src="/homes/images/qing_10001_2278c48f96_310.jpg" class="pb-block" style="width:200px;" alt="旅行,也许我就是一块老墨" /> </a> 
                                <table class="pb-opac70"> 
                                    <tbody>
                                        <tr> 
                                            <td class="tle">旅行</td> 
                                            <td class="num">+54</td> 
                                        </tr> 
                                    </tbody>
                                </table> </li> 
                            <li> <a href="pic_detail.html?4"> <img src="/homes/images/qing_9999_6963913fb8_310.jpg" class="pb-block" style="width:200px;" alt="搞笑,证件照" /> </a> 
                                <table class="pb-opac70"> 
                                    <tbody>
                                        <tr> 
                                            <td class="tle">搞笑</td> 
                                            <td class="num">+74</td> 
                                        </tr> 
                                    </tbody>
                                </table> </li> 
                            <li> <a href="pic_detail.html?6"> <img src="/homes/images/qing_10001_3f5af7636f_310.jpg" class="pb-block" style="width:200px;" alt="性感,享笑网2015-5-30#325806#" /> </a> 
                                <table class="pb-opac70"> 
                                    <tbody>
                                        <tr> 
                                            <td class="tle">性感</td> 
                                            <td class="num">+33</td> 
                                        </tr> 
                                    </tbody>
                                </table> </li> 
                            <li style="margin-right:0;"> <a href="pic_detail.html?7"> <img src="/homes/images/qing_10001_4f8ce7bfa4_310.jpg" class="pb-block" style="width:200px;" alt="情感,爱情就是一百多年的孤寂" /> </a> 
                                <table class="pb-opac70"> 
                                    <tbody>
                                        <tr> 
                                            <td class="tle">情感</td> 
                                            <td class="num">+36</td> 
                                        </tr> 
                                    </tbody>
                                </table> </li> 
                            <li> <a href="pic_detail.html?10"> <img src="/homes/images/qing_10001_bcf83a76ac_310.jpg" class="pb-block" style="width:200px;" alt="艺术,中国书法家【郝天明】书法新作(妙笔生辉" /> </a> 
                                <table class="pb-opac70"> 
                                    <tbody>
                                        <tr> 
                                            <td class="tle">艺术</td> 
                                            <td class="num">+25</td> 
                                        </tr> 
                                    </tbody>
                                </table> </li> 
                            <li> <a href="pic_detail.html?13"> <img src="/homes/images/qing_10001_8b07d372b1_310.jpg" class="pb-block" style="width:200px;" alt="漫画,享笑网2015-6-8#529409#" /> </a> 
                                <table class="pb-opac70"> 
                                    <tbody>
                                        <tr> 
                                            <td class="tle">漫画</td> 
                                            <td class="num">+26</td> 
                                        </tr> 
                                    </tbody>
                                </table> </li> 
                            <li> <a href="pic_detail.html?15"> <img src="/homes/images/qing_10001_7610be26ad_310.jpg" class="pb-block" style="width:200px;" alt="超萌,步调一致" /> </a> 
                                <table class="pb-opac70"> 
                                    <tbody>
                                        <tr> 
                                            <td class="tle">超萌</td> 
                                            <td class="num">+41</td> 
                                        </tr> 
                                    </tbody>
                                </table> </li> 
                            <li> <a href="pic_detail.html?22"> <img src="/homes/images/qing_9999_578544d87f_310.jpg" class="pb-block" style="width:200px;" alt="回忆,如果你喜欢的人不喜欢你,那么就算全世界的人都喜欢你 也还是会觉得很孤单吧。" /> </a> 
                                <table class="pb-opac70"> 
                                    <tbody>
                                        <tr> 
                                            <td class="tle">回忆</td> 
                                            <td class="num">+33</td> 
                                        </tr> 
                                    </tbody>
                                </table> </li> 
                            <li style="margin-right:0;"> <a href="pic_detail.html?24"> <img src="/homes/images/qing_10001_4f8ce7bfa4_310.jpg" class="pb-block" style="width:200px;" alt="清新,最大的遗憾" /> </a> 
                                <table class="pb-opac70"> 
                                    <tbody>
                                        <tr> 
                                            <td class="tle">清新</td> 
                                            <td class="num">+75</td> 
                                        </tr> 
                                    </tbody>
                                </table> </li> 
                        </ul> 
                    </div> 
                    <div style="clear:both;"></div> 
                    <h3 class="idx-t1 pb-mt50"> <a href="laugh.html" class="pb-clr1">每日一笑</a> </h3> 
                    <div class="idx-line1"> 
                    </div> 
                    <div class="idx-mryx pb-mt20 pb-after-clear"> 
                        <div class="d1 pb-fl"> 
                            <img src="/homes/images/b_smile_left.jpg" class="pb-fl" alt="最新搞笑段子,每日一笑" /> 
                            <a href="laugh.html" class="tle pb-fl pb-clr1">搞笑段子&nbsp;&nbsp;|&nbsp;&nbsp; <span class="pb-clr2">更多</span></a> 
                            <ul class="pb-mt15 pb-fl pb-size-normal"> 
                                <li> <span>.</span> <a href="/jokes-5-4758">家里的电要交电费</a> </li> 
                                <li> <span>.</span> <a href="/jokes-5-4757">要把学校当成自己家</a> </li> 
                                <li> <span>.</span> <a href="/jokes-5-4756">别耽误老娘我做生意</a> </li> 
                                <li> <span>.</span> <a href="/jokes-5-4755">那是我妈</a> </li> 
                                <li> <span>.</span> <a href="/jokes-5-4754">东邪西毒</a> </li> 
                                <li> <span>.</span> <a href="/jokes-5-4753">马上过年了</a> </li> 
                            </ul> 
                        </div> 
                        <div class="d1 pb-fl d1-2"> 
                            <img src="/homes/images/b_smile_left1.jpg" class="pb-fl" alt="本周搞笑段子排行榜,笑话排,每日一笑" /> 
                            <a href="/jokes?priority=pop" class="tle pb-fl pb-clr1">笑话排行&nbsp;&nbsp;|&nbsp;&nbsp; <span class="pb-clr2">更多</span></a> 
                            <ul class="pb-mt15 pb-fl pb-size-normal"> 
                                <li> <span>.</span> <a href="/jokes-5-4749">看朋友们晒从小到大的照片，</a> </li> 
                                <li> <span>.</span> <a href="/jokes-5-4754">东邪西毒</a> </li> 
                                <li> <span>.</span> <a href="/jokes-5-4750">昨天晚上</a> </li> 
                                <li> <span>.</span> <a href="/jokes-5-4751">什么是尴尬</a> </li> 
                                <li> <span>.</span> <a href="/jokes-5-4752">前几天我在火车站等车</a> </li> 
                                <li> <span>.</span> <a href="/jokes-5-4753">马上过年了</a> </li> 
                            </ul> 
                        </div> 
                        <div class="d2 pb-fr"> 
                            <img class="pb-block" src="/homes/images/b_smile_right.jpg" alt="少儿不宜搞笑段子,超级内涵搞笑段子，校园搞笑段子,生活中的搞笑段子" /> 
                            <table class="pb-mt10"> 
                                <tbody>
                                    <tr> 
                                        <td><a href="laugh.html">各种口味</a></td> 
                                        <td><a href="/jokes-2">少儿不宜</a></td> 
                                        <td><a href="/jokes-4">超级内涵</a></td> 
                                    </tr> 
                                    <tr> 
                                        <td><a href="/jokes-1">图片笑话</a></td> 
                                        <td><a href="/jokes-5">贴近生活</a></td> 
                                        <td><a href="/jokes-3">校园趣闻</a></td> 
                                    </tr> 
                                </tbody>
                            </table> 
                        </div> 
                    </div> 
                    <div style="clear:both;"></div> 
                    <h3 class="idx-t1 pb-mt50"> <a href="http://www.lanrenzhijia.com/" class="pb-clr1">叫醒耳朵</a> </h3> 
                    <div class="idx-line1"> 
                    </div> 
                    <div class="idx-jxed pb-mt20 pb-after-clear"> 
                        <div class="pb-fl d1"> 
                            <ul> 
                                <li> <img class="pb-fl" src="/homes/images/b_jxed_l1.jpg" alt="把耳朵叫醒,爱他们的时候我们像条狗,扣子" /> 
                                    <dl class="pb-fl"> 
                                        <dt>
                                            <a href="pic_detail.html?show/241">爱他们的时候我们像条狗</a>
                                        </dt> 
                                        <dd class="author">
                                            主播：扣子
                                        </dd> 
                                        <dd class="cnt">
                                            所有的女朋友里，我最喜欢老夏。因为她和我像，高贵冷艳俗气，俗到骨子里。我们总是在夏天刚开始的那几天去富民路和巨鹿路路口的酒吧。那有一棵著名大 ... 
                                        </dd> 
                                        <dd class="ap"> 
                                            <span class="auplayer" id="auplayer_241" f="L3B1YmxpYy9wbGF5ZXIvMjAxNTA1L2F0ZHNod214dGcubXAz&gt;" a="扣子" t="爱他们的时候我们像条狗"></span> 
                                        </dd> 
                                    </dl> </li> 
                                <li class="pb-mt40"> <img class="pb-fl" src="/homes/images/b_jxed_l2.jpg" alt="把耳朵叫醒,爱你的第九年,这是你不必详知的事情,NJ楚璇" /> 
                                    <dl class="pb-fl"> 
                                        <dt>
                                            <a href="pic_detail.html?show/240">爱你的第九年,这是你不必详知的事情</a>
                                        </dt> 
                                        <dd class="author">
                                            主播：NJ楚璇
                                        </dd> 
                                        <dd class="cnt">
                                            爱你的第九年,这是你不必详知的事情人生是一场旅行，你路过我，我路过你，若有缘可结伴一生；无缘，只能各自修行，各自向前，然后在错过的时光年轮里 ... 
                                        </dd> 
                                        <dd class="ap"> 
                                            <span class="auplayer" id="auplayer_240" f="L3B1YmxpYy9wbGF5ZXIvMjAxNTA1L2FpbmlkZWRpaml1bmlhbi5tcDM=&gt;" a="NJ楚璇" t="爱你的第九年,这是你不必详知的事情"></span> 
                                        </dd> 
                                    </dl> </li> 
                            </ul> 
                        </div> 
                        <div class="d2 pb-fr"> 
                            <dl> 
                                <dt> 
                                    <a href="/weekly-1-2"> <img src="/homes/images/post_10001_c1be1e419b.jpg" alt="征文比赛,有奖征文,第二期：回首这匆匆十年" /> </a> 
                                </dt> 
                                <dd class="term pb-size-big">
                                    第二期
                                </dd> 
                                <dd class="tle">
                                    <a href="/weekly-1-2">第二期：回首这匆匆十年</a>
                                </dd> 
                            </dl> 
                        </div> 
                    </div> 
                    <script>
                        $(document).ready(function() {
                            AudioPlayer.setup("js/player.swf", {
                                width: 300,
                                initialvolume: 100
                            });
                            $(".auplayer").each(function() {
                                AudioPlayer.embed($(this).attr('id'), {
                                    soundFile: $(this).attr('f'),
                                    titles: $(this).attr('t'),
                                    artists: $(this).attr('a'),
                                    autostart: "no",
                                    loop: "no"
                                });
                            });
                        });
                    </script> 
                </div> 
                <script type="text/javascript" src="/homes/js/jquery.slideBox.js"></script> 
                <script type="text/javascript" src="/homes/js/ap.js"></script> 
                <script>
                     $(document).ready(function() {
                         $(".idx-qtsj li").hover(function() {
                             $(this).find('table').stop().animate({'bottom': '-40px'}, 500);
                         }, function() {
                             $(this).find('table').stop().animate({'bottom': '0px'}, 500);
                         });
                     });
                </script> 
                <!-- 当前页面内容结束 --> 
            </div> 


@endsection()
