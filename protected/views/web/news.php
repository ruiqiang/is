<script type="text/javascript">
var currentNews = null;
var oTop,oLeft,oParentDiv;
$(document).ready(function(){
		var currentList = $(".newsList ul")[0];
		var newsArr = new Array();
		$(".newsUnit").each(function(index, element) {
            newsArr.push(element);
        });
		
		$(".newsUnit .newsContent").bind("click",function(){
			showBigNews(this);
		});
		
		$("#closeBigDiv").click(function(){
			$("#hideDiv").hide();
			$(".blackDiv").hide();
			
			$(currentNews).show();
			$(currentNews).find(".forNews").animate({width:"150px",top:"19px",left:"19px"},"fast");
			$(currentNews).animate({width:"187px",left:oLeft,height:"260px",top:oTop},"fast", function(){
				$(this).appendTo(oParentDiv);
				$(this).css("top","3px");
				$(this).css("left","3px");
				$(this).animate({width:"206px",height:"282px",top:"-7px",left:"-7px"},"fast");
				$(this).find(".forNews").animate({width:"176px",top:"15px",left:"15px"},"fast");
				$(this).find(".newsImg").css("height","120px");
			});
		});
		
		$("#newsTitleList li").bind("click",function(){
			var year = $(this).attr("newsYear");
			$(".newsUnit").remove();
			for(i=0;i<newsArr.length;i++){
				if(newsArr[i].getAttribute("year") == year){
					$(newsArr[i]).clone().appendTo("#newsList");
				}
			}
			$(".newsUnit .newsContent").bind("click",function(){
				showBigNews(this);
			});
			$.easypage({'contentId':'newsList','contentclass':'newsUnit','navigateid':'navigation','everycount':8,'navigatecount':5,"currentpage":0});
		});
		
		$.easypage({'contentId':'newsList','contentclass':'newsUnit','navigateid':'navigation','everycount':8,'navigatecount':5,"currentpage":0});
			
});

function showBigNews(obj){
	oParentDiv = obj.parentNode;
	$(obj).find(".newsImg").css("height","auto");
	$(obj).find(".forNews").animate({width:"150px",top:"19px",left:"19px"},"fast");
	$(obj).animate({width:"187px",left:"2px",height:"260px",top:"3px"},"fast",function(){
		oTop = getTop(obj);
		oLeft = obj.parentNode.offsetLeft;
		$(obj).css("top",oTop);
		$(obj).css("left",oLeft);
		$(obj).appendTo("#outPanel");
		$(obj).animate({width:"520px",left:"280px",height:"490px",top:"75px"},"fast",function(){
			$(this).hide();
			var preferentialSrc = $(obj).find(".newsImg").attr("preferentialSrc");
			if(preferentialSrc)
				currentImgSrc = $(obj).find(".newsImg").attr("preferentialSrc");
			else
				currentImgSrc = $(obj).find(".newsImg").attr("src");
			$("#hideDiv").show();
			$(".blackDiv").show();
			$("#newsBigImg").attr("src",currentImgSrc);
			$(".newsBigDivContent .words1").text($(obj).find(".words1").text());
			$(".newsBigDivContent .words2").text($(obj).find(".words2").text());
			$(".newsBigDivContent .words3").html($(obj).find(".words3").html());
			var wordsDiv = scrollBar.$id("newsBigDivContent");
			var scrollBarDiv = scrollBar.$id("scrollBar");
			var scrollBarHandleDiv = scrollBar.$id("scrollBarHandle");
			var outWordsDiv = scrollBar.$id("forNewsBigContent");
			$("#newsBigImg").load(function(){
				scrollBar.use(wordsDiv, scrollBarDiv, scrollBarHandleDiv, outWordsDiv);
			});
		});
		$(obj).find(".forNews").animate({width:"460px",top:"28px",left:"30px"},"fast",function(){
			currentNews = obj;
		});
		
	});
}
</script>
	<div id="outPanel" class="outPanel">
    	<!-- 隐藏浮动层 -->
   		<div id="hideDiv" class="newsBigDiv hide">
        	<div class="newsBigDivTop"></div>
            <div class="newsBigDivBottom"></div>
            <div class="newsBigDivCenter">
            	<div id="closeBigDiv" class="closeBigDiv"></div>
                <div id="forNewsBigContent" class="forNewsBigContent">
                    <div id="newsBigDivContent" class="newsBigDivContent">
                        <img id="newsBigImg" class="bigImg" src="">
                        <div class="words1"></div>
                        <p class="words2"></p>
                        <p id="words3" class="words3"></p>
                    </div>
                    <div id="scrollBar" class="scrollBar" style="width:7px">
                        <div id="scrollBarHandle" class="scrollBarHandle" style="width:7px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cb"></div>
    <div id="newsMain" class="newsMain">
        <div class="forNewsTitleList">
        	<div class="AllNews">
            	<img src="/resources/images/icon5.png">
                <p>iS训练营</p>
       			<!--<div class="newsCount">23</div>-->
            </div>
            <div id="newsTitleList" class="newsTitleList">
            	<ul>
                	<li newsyear="2013"><div class="colorTag1 colorTagFirst"></div>报名活动</li>
                    <li newsyear="2014"><div class="colorTag2"></div>人才测评</li>
                    <li newsyear="2015"><div class="colorTag3 colorTagLast"></div>微招聘&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>
        </div>
        
        <div class="newsList">
        	<ul id="newsList">    
            	<li class="newsUnit" title="I-sporting之“我们约跑吧”商圈网春季玄武湖拉练" year="2015" style="display: list-item;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/02.jpg">
                            <div class="newsWords">
                                <div class="words1">I-sporting之“我们约跑吧”商圈网春季玄武湖拉练</div>
                                <p class="words2">发布时间：2015-04-22</p>      
                                <p class="words3">4月19日商圈网I-sporting之“我们约跑吧”春季拉练活动在玄武湖拉开帷幕，小伙伴们在拉练的过程中尽情展现了“向上、自省、平衡、厚道、讲理 、明目”的三胞企业文化<br><br>
                                    <img src="/resources/images/shangquan1.jpg">即使途中困难重重，遇到体力不支的情况，也不能阻止大家前进的步伐，因为不断“向上”是我们不变的信念<br><br>
                                    <img src="/resources/images/shangquan2.jpg">小伙伴们的“向上”精神盖上肯定的印章，每个人都是最棒的！<br><br>
                                    <img src="/resources/images/shangquan4.jpg">每一个人都有获胜的欲望，但“厚道”是我们的基本，小伙伴们的相亲相爱离不开这个原则。<br><br>
                                    <img src="/resources/images/shangquan5.jpg">撕名牌大战即将开始，小伙伴们善于观察，暗自部署计划，不正是”明目“的最好体现吗？<br><br>
									<img src="/resources/images/shangquan6.jpg">撕名牌大战激烈异常，对战当中难免锋芒相对，但”讲理“是我们的基本素养，比赛可以输，但精神不能输！<br><br>
                                    <img src="/resources/images/shangquan7.jpg">在这场拉练赛中，每一个商圈网的小伙伴都展示了自己的特长，但更重要的是学习了别人的长处，”平衡“让我们变得更加优秀。<br><br>
									<img src="/resources/images/shangquan8.jpg">团结、友爱，我们的心一直在一起！<br><br>
									<img src="/resources/images/shangquan9.jpg">”向上、自省、平衡、厚道、讲理 、明目“我们在活动中获得快乐，我们在企业文化中完善自我，商圈网I-sporting之“我们约跑吧”拉练活动圆满结束！    
                                </p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	
            	<li class="newsUnit" title="新加坡经济发展局一行莅临商圈网" year="2015" style="display: list-item;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/01.jpg">
                            <div class="newsWords">
                                <div class="words1">新加坡经济发展局一行莅临商圈网</div>
                                <p class="words2">发布时间：2015-3-25</p>      
                                <p class="words3">2015年3月24日，新加坡经济发展局署长梅雪丽、主任刘晋荣专程莅临南京对三胞集团下属企业商圈网进行拜访。商圈网执行总经理刘冰，副总经理何伟及市场营销副总监陈敏等接待了来访嘉宾。
<br><br>会谈中，刘总介绍了三胞集团袁亚非董事长的“金、木、水、火、土”五大产业协同战略布局和5年内实现5000亿市值的集团目标，并详细针对商圈网2014年贯彻袁董“天下是O2O的”战略布局及2015年主体O2O业务思路进行了深入说明，未来商圈网将在餐饮商户供应链服务及10万商家wifi增值服务上不断创新，从而为几千万江苏人民提供更好的O2O服务，商圈网致力于成为“江苏省最大的本地生活服务平台”的理念和wifi创新的运营模式得到了新加坡来宾的支持和肯定，并介绍了新加坡创新企业的模式和探索，希望促成新加坡企业在产业基金和资本并购等角度和三胞集团及商圈网达成合作。
最后，秉着三胞集团开放的态度，刘冰表达了商圈网乃至三胞集团与新加坡经济发展局合作的美好愿景，希望双方为中、新两国经济繁荣和交流共同努力！</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            
            	<li class="newsUnit" title="广西省南宁市代表团一行莅临商圈网" year="2014" style="display: list-item;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/1103.jpg">
                            <div class="newsWords">
                                <div class="words1">广西省南宁市代表团一行莅临商圈网</div>
                                <p class="words2">发布时间：2014-11-3</p>      
                                <p class="words3">2014年11月3日，广西省南宁兴宁区常委、统战部长俞彩霞，区政协政协副主席蒋海生、刘玉姣等一行十余人在南京市雨花区政协副主席孙晓燕、区统战部副部长吴文根等的陪同下莅临商圈网进行考察调研。商圈网执行副总裁朱伟、战略总监陈军、副总监澎湃、公关行政高级经理周青接待了代表团一行，并陪同参观了三胞之家展厅。朱伟向来宾介绍了三胞集团及商圈网的发展历程。在三胞集团全球总部国际会议厅详细解读了商圈网的互联网O2O经营理念和模式，和利用“一张大网、一个平台、一套工具”帮助新街口实体商户开展即时精准营销工作的实际案例，和建设智慧商圈的构想。南宁市代表团对商圈网给予了高度肯定，并表达希望将商圈网的O2O成功经验在引入南宁和广西的主要商圈，帮助当地实体企业和商圈在电子商务时代繁荣成长。执行副总裁朱伟表示，感谢南宁市代表团一行的肯定和建议，商圈网会继续努力，为建设智慧商圈样板、搭建有效O2O平台、推动中国实体商业的持续繁荣和健康发展持续努力。</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            
            
            	<li class="newsUnit" title="三胞集团、商圈网与江苏电信 签署WI-FI战略合作协议  携手深耕O2O " year="2014" style="display: list-item;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/1029.jpg">
                            <div class="newsWords">
                                <div class="words1">三胞集团、商圈网与江苏电信 签署WI-FI战略合作协议  携手深耕O2O</div>
                                <p class="words2">发布时间：2014-10-29</p>      
                                <p class="words3">继宣布收购拉手网之后，三胞集团在深耕O2O领域上又有新动作。10月29日，三胞集团、商圈网与中国电信江苏分公司签署了Wi-Fi项目战略合作协议，在城市无线WIFI开发和运营方面展开深度合作，这意味着双方将在O2O领域实现优势互补、合作共赢。江苏电信副总经理边延风、号码百事通总经理丁晓燕和三胞集团高级副总裁陈斌、商圈网总裁王晔、执行副总裁朱伟等出席了合作签约仪式。<br><br>
三胞集团早在2012年就开始正式启动O2O发展战略。两年来，在产业协同的指导思路下，三胞集团发起并完成了成立商圈网，收购麦考林、收购拉手网等一系列令业内瞩目的资本大动作，打出线上线下资源对接融合的组合拳，确立了O2O战略布局的基础架构。其中，作为O2O战略的重要入口，三胞集团、商圈网携手中国电信，整合双方在Wi-Fi基础网络建设管理、线上流量平台运营和线下商业运营等资源，快速和规模化推进商业Wi-Fi网络覆盖及其后向运营，强势切入并抢占硬件互联网入口，进一步完善O2O战略框架。目前来看，双方此前合作所发挥的协同目标和实际效应也非常明显：一方面，三胞集团旗下众多实体零售店就处在这些商圈之中，三胞集团控股宏图高科（600122.SH）、南京新百（600682.SH）两家商贸零售主业的A股上市公司，下属中国最大的专业IT连锁宏图三胞、中国最大的专业通讯连锁乐语通讯，以及今年收购的英国老牌百货连锁House of Fraser、美国最大的专业新奇特产品连锁Brookstone，在海内外拥有3000多家零售门店，“Wi-Fi智慧商圈”的搭建为这些实体店提供了更好的服务环境和高效的精准营销工具；另一方面，旗下的电商平台，包括拉手网、麦考林、商圈网、慧买网等，利用Wi-Fi大网为引流工具，让消费者在实体商圈通过三胞的线上渠道为入口，提升线下服务的整体水平。同时，三胞的产业布局未来可以从线上、线下进行消费者的全轨迹数据收集，最终为服务客户建立有效的数据决策支撑。截至2013年底，以该合作模式通过旗下商圈网团队搭建的“iXinJieKou”Wi-Fi网络已经覆盖南京新百、东方、德基、水游城等5大商场和超过3000家中小商户。<br><br>
与此同时，作为2014年的一项重点战略，Wi-Fi网络被中国电信列为继移动、宽带、固话之后着力打造的“第四张大网”。在江苏，江苏电信于2014年4月成立aWiFi团队，快速推进全省13地市的免费无线网络的覆盖。目前，aWiFi网络已经覆盖大型公共热点7000余个，中小商户2万余户，并且仍以惊人的速度在省内继续扩张。经过约半年的建设运营，aWiFi已经成为江苏网民喜闻乐见的免费Wi-Fi热点群和商业客户乐于参与的智能Wi-Fi广告系统。<br><br>
作为在原合作基础上的升级，此次三胞集团、商圈网与江苏电信的进一步战略性合作，将进一步加快双方在Wi-Fi方面的资源整合，以快速和规模化覆盖为切入点，强势抢占O2O重要入口。现阶段，双方将以南京泛新街口商圈为重点合作区域，江苏电信发挥电信网络建设、流量入口、运营平台建设的优势，并承担为合作区域内的Wi-Fi热点设备提供平台接入，热点控制和内容推送的职责；三胞集团、商圈网将全面发挥在零售端的门店优势和服务客户经验，以客户视角为核心、以商户应用为目的，构建起一个有效的O2O平台和智慧商圈，深耕O2O业务。以此为契机，双方还将进一步推进各项资源的全面整合，通过强势合作，充分发挥双方各自的资源优势，快速推进双方企业的转型提速和发展。在区域范围上，未来双方的合作还将推广到更多城市，覆盖全国各大城市的核心商圈。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈群英  逐鹿三胞" year="2014" style="display: list-item;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/A7684.jpg" preferentialsrc="images/IMG_840.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈群英&nbsp;&nbsp;逐鹿三胞</div>
                                <p class="words2">发布时间：2014-10-19</p>      
                                <p class="words3">三胞群英，逐鹿金陵！三胞集团第四届职工运动会于2014年10月18日隆重召开。商圈网小伙伴们团结一致、奋勇拼搏，在本届运动会上留下了一道道亮丽的风景线。运动会上，商圈网小伙伴青春亮丽、热情洋溢的啦啦操最终摘得“最佳表演奖”。同时，在“无敌毛毛虫”、“穿越时空”等项目游戏中更是超常水平发挥团队协作的无敌精神，均荣获第二名的好成绩。整整一天的团结拼搏，不仅让我们看到了商圈伙伴们刚强的体质，也让我们见证了商圈伙伴们并肩作战、默契协作的团队精神。另外值得一提的是，本届运动会由商圈网团队全程支持：万人的电子火炬传递、微信签到抽奖、移动互联新闻传播、运动会全程主持等。商圈伙伴极致专业与多才多艺并驾齐驱，给自己、给集团交了一份满意的答卷，期待在下一届的运动会中商圈群英们依旧能够演绎精彩、展现风采！</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网获邀参加第六届江苏互联网年会同获大奖" year="2014" style="display: list-item;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/IMG_7808.jpg" preferentialsrc="images/IMG_big.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网获邀参加第六届江苏互联网年会同获大奖</div>
                                <p class="words2">发布时间：2014-09-23</p>      
                                <p class="words3">秋高气爽，丹桂飘香。2014年9月22日，第六届江苏互联网年会暨秦淮区电子商务产业园招商推介会在南京盛大开幕。会议群贤云集，南京市商务局、南京市电子商务协会、秦淮区政府、互联网行业各企业领导、高管悉数到场，共襄盛会。商圈网获邀参加此届年会，并在会上荣获“2014江苏最具成长力移动互联网企业”称号。同时，商圈网执行副总裁朱伟也作为年会的特邀演讲嘉宾，发表了题为“智慧商圈•网罗粉丝”的演讲。演讲中，朱伟与现场嘉宾谈笑风生、积极互动，带来了一场幽默风趣的主题演讲。从阿里上市谈到现如今互联网行业存在的巨大的风险与挑战，同时解读了商圈网两年来在智慧商圈、O2O方面的探索与成果。会后，朱伟和与会领导、嘉宾们也进行了深入的沟通与交流，并代表企业领奖。</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网参展第十届软博会" year="2014" style="display: list-item;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/09_16.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网参展第十届软博会</div>
                                <p class="words2">发布时间：2014-09-16</p>      
                                <p class="words3">2014年9月12—15日，第十届中国国际软件产品和信息服务交易博览会（简称：软博会）在南京国际博览中心隆重举行，本届软博会以“软件与信息消费”为主题，吸引了众多国家和和地区的行业主管部门及相关软件企业参展参会。商圈网受邀参加此次软博会，展会上，商圈网全面展示了其经营模式和相关产品，吸引了许多在场观众。同时，商圈网也与业界人士进行了深入交流、技术研讨，“爱在新街口”商圈模式得到了很多业界人士的青睐和赞许，并期待其日渐成熟、逐步复制。未来，商圈网会一如既往，不断为推动我国软件产品和信息服务发展做出重大贡献。</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="南京市企业联合会领导、专家一行莅临商圈网" year="2014" style="display: list-item;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/0827.jpg">
                            <div class="newsWords">
                                <div class="words1">南京市企业联合会领导、专家一行莅临商圈网</div>
                                <p class="words2">发布时间：2014-08-27</p>      
                                <p class="words3">8月26日上午，南京市企业联合会副秘书长余永捷、东南大学经济管理学院教授马新建、南京农业大学工学院教授周应堂、南京化学工业有限公司企业管理处处长林俊仁等领导、专家一行莅临商圈网进行第21届企业管理现代化创新成果的鉴定和考察。商圈网执行副总裁朱伟、战略规划中心总监陈军等接待了来访嘉宾，并陪同鉴定委员团参观了三胞之家。鉴定会上，朱伟向领导专家们认真汇报了商圈网创新的商业模式和突出的经营理念，并且全面展示了商圈网自成立以来的成长轨迹和发展成果，同时也明确指出了公司运行过程中存在中面临的困难和机会。鉴定委员团专家、领导们对商圈网“智慧商圈”的理念和价值给予了高度赞扬和一致认可，针对问题也提出了中肯的建议和客观的指导。最后，商圈网执行副总裁朱伟表示，十分感谢鉴定委员团领导们的莅临指导，未来商圈网会一如既往，广泛借力、不断创新，积极打造智慧商圈，乃至为中国智慧城市发展作出贡献。                                
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="包头市政府领导一行莅临商圈网" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/0814.jpg">
                            <div class="newsWords">
                                <div class="words1">包头市政府领导一行莅临商圈网</div>
                                <p class="words2">发布时间：2014-08-13</p>      
                                <p class="words3">2014年8月12日下午，中共包头市昆都仑区委员会副书记兼昆都仑区人民政府区长张玉伦、包头市昆都仑区商务局局长王强、中国国际电子商务中心副总经理刘渊等一行莅临商圈网进行考察交流。商圈网执行副总裁朱伟、战略规划中心副总监彭湃接待了来宾，并陪同参观了三胞之家文化厅。朱伟向领导们全面介绍了三胞集团当下的发展面貌和厚重的企业文化。同时，交流会上，朱伟也深入浅出地解读了商圈网“一张大网、一个平台、一套工具”的经营模式和理念。包头市政府领导们对商圈网卓有成效的经营模式给予了一致好评，并表现出强烈的合作意愿。执行副总裁朱伟也对包头市政府领导们的赞许和肯定表示感谢，未来，商圈网在把“智慧商圈”向全国推广复制的道路上会继续努力，越走越远！                                
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="中国品牌走出去 —互联网时代全球化品牌保护论坛" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/0808.jpg">
                            <div class="newsWords">
                                <div class="words1">中国品牌走出去 —互联网时代全球化品牌保护论坛</div>
                                <p class="words2">发布时间：2014-08-08</p>      
                                <p class="words3">2014年8月7日下午，“中国品牌走出去——互联网时代全球化品牌保护论坛”•江苏站在南京隆重召开。中央编办事业发展中心、中华商标协会、江苏省工商局领导们以及知名企业代表、专家齐聚一堂，共同探讨互联网时代下品牌保护的重要议题。<br><br>
商圈网执行副总裁朱伟代表三胞集团出席本次论坛。论坛上，朱伟慷慨激昂地发表了题为《五次转型成就国际三胞》的精彩演讲。“从20年前珠江路上的一个电脑柜台起家到如今对世界有影响的中国企业，历经五次转身，三胞集团基本形成了金融投资、商贸流通、信息服务、健康医疗、地产开发五大板块的综合型企业；同时，三胞集团大胆探索、勇于创新，在国际化道路上昂首阔步，连续并购美国、英国、以色列等国外知名企业”。朱伟还指出，未来三胞集团会一直肩负企业品牌的社会责任感，维护企业良好的品牌形象。                                
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
                <li class="newsUnit" title="商圈网受邀参加商务部智慧商圈发展交流会" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/0725.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网受邀参加商务部智慧商圈发展交流会</div>
                                <p class="words2">发布时间：2014-07-26</p>      
                                <p class="words3">2014年7月24—25日，国家商务部培训中心主办的“第十二期中国电子商务布局暨智慧商圈发展交流会” 在哈尔滨举行。此次交流会针对的行业城市综合体、特色商业街区的发展与提升，会议汇聚了来自多个省、市政府领导、商务主管部门以及众多企业负责人达百余人。商圈网执行副总裁朱伟受邀作为商务部培训中心特聘专家参加这期交流会。交流会上，朱伟发表了题为“智慧商圈•网罗粉丝”的精彩演讲。演讲中，朱伟从“商圈”到“智慧商圈”，以及将商圈网如何打造“智慧商圈”娓娓道来，并指出线上线下融合发展才是未来实体商圈的发展方向。同时，交流会上，朱伟还同与会嘉宾们进行了深入的沟通与切磋，对现如今电子商务行业的发展提出了自己独到的见解，并表达了未来商圈网愿意广泛借力、合作共赢，共同促进互联网行业持续繁荣发展的美好愿景。第十二期智慧商圈发展交流会群英荟萃，参会者就风云变化的商业及互联网行业雄辩韬略、交流分享，为中国商业的持续繁荣做出了重大贡献。                            
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="秦淮区副区长裴清海一行莅临商圈网调研视察" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/0709.jpg">
                            <div class="newsWords">
                                <div class="words1">秦淮区副区长裴清海一行莅临商圈网调研视察</div>
                                <p class="words2">发布时间：2014-07-09</p>      
                                <p class="words3">7月7日，秦淮区副区长裴清海、白下高新技术产业园区书记张仲金,商务局局长井晓芳、副局长史话，投促局局长李蓓、副局长张璟一行莅临商圈网进行考察调研。商圈网执行副总裁朱伟、三胞集团对外合作管理中心总监丁宏、新百集团副总裁金之颖等向裴区长一行介绍了商圈网成立一年多以来的发展过程,和在新街口商圈利用o2o带动实体商业发展的成果，如南京新百与商圈网合作，使得业绩连续两年逆市提升。朱伟还重点介绍商圈网通过建设wifi，搭建开放性电商平台，发展商圈物流等手段使整个新街口商圈升级为智慧商圈的实际效用，也提出了公司运营过程中需要政府部门扶持之处。裴清海副区长一行在认真了解商圈网各方面情况的前提下，对商圈网创新的经营理念表示高度赞赏，并表示大力落实商圈网所提出需要政府支持的相关工作。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网获邀参加中国消费新势力发展年会" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/xnfzh.png">
                            <div class="newsWords">
                                <div class="words1">商圈网获邀参加中国消费新势力发展年会</div>
                                <p class="words2">发布时间：2014-07-04</p>      
                                <p class="words3">7月2日，由每日经济新闻报社主办的“2014中国消费新势力发展年会”在上海隆重举行。商圈网获邀参加此次年会，执行副总裁朱伟代表参会。此次会议上，消费环境的剧变和大数据的应用成为与会专家学者、企业代表关注的重点议题。
在大会《谁将左右消费—2014中国消费新势力》圆桌论坛上，朱伟与包括百胜集团、神州租车、聚美优品、快的打车等知名企业的高管嘉宾，共同讨论移动互联网和大数据对消费行业带来的巨大变化。朱伟指出中国实体零售业正在快速通过移动互联产品和手段满足消费者的需求，提升竞争力。商圈网正是利用互联、移动互联、LBS等技术和产品搭建一个服务城市实体商圈的O2O即时营销平台。“商圈网现在利用包括WIFI、移动互联等多个产品，结合实体商业的有效手段，全面收集客户线下和线上全轨迹数据，并通过有效的分析，将商户需求和消费者需求精准、即时的联系起来，起到多方共赢的效果”。朱伟也在此次圆桌论坛上指出“全轨迹数据是最有价值数据”，得到与会嘉宾的高度认同。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网获邀参加世界零售大会•中国峰会" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/lsfh.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网获邀参加世界零售大会•中国峰会</div>
                                <p class="words2">发布时间：2014-07-03</p>      
                                <p class="words3">2014年7月2-3日，世界零售大会•中国峰会在上海隆重召开。会上，超过500位的国内外零售群雄、政府官员、各产业的先锋们共聚一堂，探讨和预测零售业未来的发展动向。
   商圈网CEO王晔、执行副总裁朱伟受邀参加此次峰会。CEO王晔参加《传统零售革新：如何赢得线上线下消费者》论坛，就“什么是全渠道零售及全渠道零售的关键是什么”等相关问题与其他三位嘉宾展开了深入讨论。论坛上，王晔分享了商圈网在全渠道零售方面的种种举措，和在新街口商圈帮助实体商户线上引流的有效手段。并且指出，当今全渠道零售的关键是满足消费者不断变化了的需求，只有充分了解消费者才能服务好。
  会后，王晔、朱伟和来自全球多个国家的零售界精英们进行了深入的交流和互动，商圈网创新的O2O经营模式也得到了大家的褒奖和青睐。同时，商圈网已经在6月份代表中国入围2014世界零售大奖的评选。</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="致公党代表团一行莅临商圈网" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/0625.jpg">
                            <div class="newsWords">
                                <div class="words1">致公党代表团一行莅临商圈网</div>
                                <p class="words2">发布时间：2014-06-25</p>      
                                <p class="words3">2014年6月25日上午，致公党南京市委会副主委刘嘉英，天津市委副秘书长陈振哲等一行莅临商圈网进行考察调研。商圈网执行副总裁朱伟、宏图三胞副总裁花贵侃接待了代表团一行，并陪同参观了三胞之家文化厅。朱伟向来宾介绍了三胞集团及商圈网的发展历程。并详细解读了商圈网的互联网O2O经营理念和模式，和利用“一张大网、一个平台、一套工具”帮助实体商户开展即时精准营销工作的实际案例。致公党领导们对商圈网给予了高度肯定，并表达愿意协助将商圈网的O2O成功经验在全国推广复制，帮助中国千万家实体企业在电子商务时代繁荣成长。执行副总裁朱伟也表示，感谢致公党代表团一行的肯定和建议，商圈网会继续努力，为推动中国实体商业的持续繁荣和健康发展增添华彩。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网赴O2O共促产业联盟杭州体验之旅" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/1.png">
                            <div class="newsWords">
                                <div class="words1">商圈网赴O2O共促产业联盟杭州体验之旅</div>
                                <p class="words2">发布时间：2014-06-11</p>      
                                <p class="words3">6月6日-7日，由中国CIO发展中心主办的“O2O共促产业联盟杭州体验之旅”在杭州隆重召开。这次活动以应邀企业的自身O2O实践分享为主，共邀请全国范围内80余名知名企业的精英人士与会交流。<br>
商圈网执行副总裁朱伟也受邀参加此次活动，并且发表了题为“数据&nbsp;逻辑&nbsp;想象力”的精彩演讲，演讲中，朱伟以商圈网实际案例为切入点，并且结合新的时代背景和市场环境，详细介绍了商圈网的运营模式和利用“一张大网、一个平台、一套工具”在南京新街口商圈打造区域开放性O2O平台，有效地进行客户数据收集、分析，结合着客户思维逻辑和商业逻辑进行合理应用，帮助实体商户有效触网，实现精准营销并最终促使越来越多的消费人群回流到实体店面，促进有效销售的大幅提升。<br>
商圈网自身的O2O实践经验得到了活动现场业界人士的广泛认可和高度赞扬。同时，朱伟副总裁还与现场参会嘉宾、专家进行了多方面的互动讨论与深入交流，表达了商圈网未来会通过更加完善的商业模式、技术应用以及运营经验逐步向全国复制，并努力打造成为商圈电子商务服务标准提供商的美好的企业愿景。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网荣获“南京市电子商务示范企业”" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/new2.png" preferentialsrc="images/new22.png">
                            <div class="newsWords">
                                <div class="words1">商圈网荣获“南京市电子商务示范企业”</div>
                                <p class="words2">发布时间：2014-05-30</p>      
                                <p class="words3">
                             2014年5月27日，商圈网受邀参加在南京市商务局和秦淮区政府召开的电子商务专项工作会议，并荣获“南京市电子商务示范企业”称号。商圈网战略总监陈军代表企业出席并领奖。<br>
成立两年来，商圈网打造的区域开放性O2O电商平台在被誉为中华第一商圈的“南京新街口”不仅为消费者客户提供了全面、优质、即时的服务，同时也利用电子商务手段帮助实体企业实现了即时精准营销。目前已经拥有超过500000用户，3000家合作商户，并推动新街口商圈网超过100000000元的电商消费。<br>
商圈网未来会通过商业模式及技术应用、运营经验及规范逐步向全国复制，并努力打造成为商圈电子商务服务标准提供商。

</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="保护大自然•老了还来玩——商圈网皖南环保行圆满结束" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/new1.png" preferentialsrc="images/new11.png">
                            <div class="newsWords">
                                <div class="words1">保护大自然•老了还来玩——商圈网皖南环保行圆满结束</div>
                                <p class="words2">发布时间：2014-05-20</p>      
                                <p class="words3">
                             2014年5月16日、17日，商圈网举办了主题为“保护大自然•老了还来玩”皖南环保行的员工旅游活动，大家共同经历了一场“旷野闲林屏市声，明湖小榭晚风轻”的绿野环保之旅。<br><br>
<b>彰显凝聚力•相亲相爱</b>
在短短两天的时间里，伙伴们始终不离不弃，手牵手登上山顶、相互搀扶着游玩怪潭漂流，对不小心中暑的同事也照顾地无微不至。第一天晚上，公司领导也与员工共聚一堂，特意为5月生日的伙伴送上神秘的生日大礼，为他们举办了温馨甜蜜的生日宴会，欢声笑语中彰显了相亲相爱一家人的团队凝聚力。<br><br>
<b>传递正能量•放飞心情</b>
参观了山林蓊郁、花香袅袅的牯牛降景区，游玩了流水潺潺、恍如仙境的天然氧吧，进入了景象万千、千姿百态的蓬莱仙洞，伙伴们放飞心情、笑靥如花，纷纷拍照留念，天然美景让人流连忘返。<br><br>
<b>保护大自然•从我做起</b>
“保护大自然 老了还来玩”是我们这次员工旅游的主题，在旅途中，伙伴们自带垃圾袋，认真践行保护环境、从我做起的美好品德。
在为期两天的旅程中，不仅放松了心情，而且使得“欣赏大自然•保护大自然”的环保主题深入人心，提高了伙伴们的自身素能。整个活动意义深远，趣味盎然。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
           		<li class="newsUnit" title="5月7日商务部特派员一行莅临商圈网" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/591.png" preferentialsrc="images/1212.png">
                            <div class="newsWords">
                                <div class="words1">5月7日商务部特派员一行莅临商圈网</div>
                                <p class="words2">发布时间：2014-05-09</p>      
                                <p class="words3">
                             5月7日，商务部驻南京特派员周若军，驻南京办事处副处长郑伟、陈源，南京电子商务协会杨杰秘书长莅临商圈网进行参观访问。商圈网CTO&amp;COO周彬，商圈网执行副总裁朱伟、三胞集团执行副总裁高欢陪同参观，并详细阐述了在信息化市场的大潮中，商圈网帮助传统实体商户实现持续繁荣和发展的企业目标及业务规划，同时汇报了为实现这一目标，商圈网采用“一张大网、一个平台、一套工具”的策略及步骤。同时商圈网“为商户带来更多客户，为客户带来更好服务”的理念和做法，并在过去一年中在南京新街口商圈为实体零售企业带来客流和销售的增长，为促进零售市场的繁荣和地区商业的发展起到积极促进作用。
 周特派员一行对商圈网商业模式和市场落地工作表示肯定，并提出建设性的意见，同时还就新型的互联网企业在发展过程中面对的困难和对政府的诉求进行了亲切的询问，并表示商务部一直以来了解了解企业实际困难，并通过各种途径和方法帮助企业发展。

</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网受邀参加中国零售聚焦峰会" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/DSC0789.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网受邀参加中国零售聚焦峰会</div>
                                <p class="words2">发布时间：2014-04-25</p>      
                                <p class="words3">
                              4月24-25日，中国零售业聚焦峰会在上海举行。本次大会以“拥抱全渠道零售时代”为主题，并邀请国内外200多名业界决策精英与会交流，着重针对零售行业热点及发展趋势等议题展开广泛深入的探讨和交流。上海百货商业行业协会以及上海第一八佰伴、阿里巴巴、银泰商业等知名企业参加会议并围绕零售业的发展趋势做主题演讲。<br>
                              商圈网CEO王晔女士也受邀参加此次论坛峰会。25日上午王晔于峰会主论坛发表了“用O2O模式联通商户和消费者的真实需求”的主题演讲。演讲中，王晔指出，传统零售业在互联网时代，最亟需也正是最欠缺就是“数据”和“渠道”。实体商户采用的传统粗放营销方式很难精准地连通真实客户。应势而生，商圈网秉承在互联网时代促进传统零售业持续繁荣发展的企业愿景，采用先进的电子商务技术和“一张大网、一个平台、一套工具”的策略，构建商圈网即时精准的O2O营销平台，帮助实体商户精准投放广告，引流到店，促进有效销售的大幅提升。<br>
                               同时，王晔女士还与与会嘉宾进行多方面沟通和深入交流，对零售业的发展提出切实可行的意见和建议，并表达了广泛开展合作，实现互利共赢，促进零售业持续繁荣发展的愿望，吸引众多业内伙伴的关注，同时也形成了大量的合作机遇和契机。</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="广西省商务厅副厅长汤洪涛一行来访商圈网" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/416.jpg">
                            <div class="newsWords">
                                <div class="words1">广西省商务厅副厅长汤洪涛一行来访商圈网</div>
                                <p class="words2">发布时间：2014-04-17</p>      
                                <p class="words3">
                               4月16日，广西省商务厅副厅长汤洪涛、市场建设处处长张澄清波等一行10人莅临三胞集团和商圈网参观访问。汤洪涛副厅长在三胞集团高级副总裁朱良保、商圈网执行副总裁朱伟的陪同下参观了三胞集团新总部大楼及商圈网。朱良保总介绍了三胞集团的发展规划，以及和广西省一些项目合作情况。商圈网朱伟向汤副厅长一行专题介绍了商圈网在 “中华第一商圈”南京新街口，创新开展O2O商业模式，并利用 “一张大网、一个平台、一套工具”等电子商务技术和手段，帮助实体企业实现精准营销和客流增长，并带动实体商圈的持续繁荣。汤副厅长等领导听取介绍之后，高度评价了三胞集团作为中国民营企业500强，实现多元化经营、国际化发展所取得的可喜成就。同时表示三胞集团成员企业--商圈网的新型商业理念和模式也给他们很多的启发。希望三胞集团能与广西方面加强沟通交流和项目合作。也希望商圈网模式也进驻南宁、柳州等广西主要城市的核心商圈，助力广西商业的进一步发展。最后，朱良保总对汤副厅长的莅临表示感谢，并希望与广西政府能够加强合作，实现共赢。</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>

            	<li class="newsUnit" title="商圈网受邀参加中国零售业发展高峰论坛" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/415.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网受邀参加中国零售业发展高峰论坛</div>
                                <p class="words2">发布时间：2014-04-14</p>      
                                <p class="words3">
                               4月10-12日，2014年度联商网大会暨2014中国零售业发展高峰论坛在武汉召开。商圈网执行副总裁朱伟代表商圈网参加此次会议，并在12日“实体零售商全渠道发展之路“论坛上发表了题为《用O2O模式连通商户和消费者的真实需求》的精彩演讲。<br><br>
演讲中，朱伟用一个简单的比喻引入了深刻的发问。“在信息技术高度发展的今天，为什么传统商圈的基础优势都难以发挥？实体商圈到底缺什么？人都去哪了？”并通过“逻辑+数据”的方式，联系实际地层层深入，分析了该问题的核心症结所在。接着朱伟详述了商圈网如何利用“一张大网、一个平台、一套工具”的策略帮助实体企业开展“精准营销、有效销售和引流到店”，并全渠道连通线上线上，真正匹配商户和消费者最迫切的真实需求。最后用商圈网３月份获得“中国十大O2O优秀案例”的实际营销案例说明了商圈网模式的全渠道营销的显著效果。<br><br>
朱伟热情演讲详尽的阐述了商圈网实现O2O全渠道营销帮助实体商户持续繁荣发展的定位和举措。在当今时代下，店商和电商要持续繁荣发展，必须相互取长补短、融合各自优势。两者实现融合的焦点集中在新型营销方面。这一观点赢得了在场嘉宾高度评价，并吸引众多参会企业代表前来商洽，有不少零售企业表达与商圈网不同方式的合作意向及建议。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网召开第一届第三次董事会议" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/ys326.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网召开第一届第三次董事会议</div>
                                <p class="words2">发布时间：2014-03-26</p>      
                                <p class="words3">
                               3月21日，商圈网电子商务有限公司在三胞集团总部大楼召开了第一届第三次董事会议。商圈网总裁王晔主持了会议，三胞集团董事长袁亚非、副总裁陈斌，德基集团董事长吴铁军，雨润集团和金鹰集团代表等出席了会议。<br>
会上，总裁王晔作了商圈网发展情况工作报告，集团副总裁陈斌、执行副总裁王扬对商圈网的业务模式和投资并购作了规划。<br>
袁亚非董事长表示，商圈网能发展到今天离不开各位董事的大力支持，下一步商圈网一方面将积极完善O2O业务模式，另一方面大力开展投资并购，争取在业务模式和资本运作方面实现双丰收。也希望德基集团、雨润集团、金鹰集团与三胞进一步加强合作，把商圈网打造成O2O电子商务领域的标杆企业。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网荣获“中国十大优秀O2O案例”" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/1231.jpg" preferentialsrc="images/123.png">
                            <div class="newsWords">
                                <div class="words1">商圈网荣获“中国十大优秀O2O案例”</div>
                                <p class="words2">发布时间：2014-03-25</p>      
                                <p class="words3">
                               3月19-21日，商圈网受邀参加在南京召开的“中国连锁业O2O大会暨第十一届中国零售业信息化&amp;电商峰会”。本届会议由中国连锁经营协会主办，以 “店商与电商，相克到共生”为主题，重点探讨互联网时代零售变革的新热点和实体店转型的新策略等问题。<br>
商圈网在此次峰会上荣获“2014中国连锁业十大优秀O2O案例” 奖项，这是继 “2013中国零售创新大奖”之后又一殊荣。20日颁奖晚宴上，商圈网CEO王晔女士登台领奖。21日上午在“客户与店面数字化”论坛上，执行副总裁朱伟与互帮国际、拍档电子、通程集团等公司高管们一起探讨“传统零售业的数字化之道”，深入剖析在新的时代背景和市场环境下，传统零售业如何利用互联网等创新技术，推进数字化进程，摆脱困境，寻找新出路。当日下午，在“精准高效互联网营销”论坛上,朱伟又发表了题为“商圈网：用O2O模式连通商户和消费者的真实需求”的精彩演讲。以商圈网实际案例为切入点，详细介绍了商圈网的运营模式和利用“一张大网、一个平台、一套工具”在南京新街口商圈打造区域开放性O2O平台，帮助实体商户有效触网并实现精准营销，促使消费人群回流到实体店面的商业价值，以及推进实体商圈持续繁荣的企业愿景。<br>
此次峰会中，商圈网得到了中国连锁业精英的高度认可。中国连锁经营协会郭戈平会长更是充分肯定了商圈网在O2O之路上的战略眼光以及实施策略与步骤，对商圈网模式在新时期促进传统零售业持续繁荣的战略定位寄予厚望，并提出了建设性意见。期望商圈网加快产品开发和市场拓展，早日成为中国电子商务平台技术与服务标准供应商，帮助千万实体商户带来更多客户， 帮助亿万客户带来更好服务。

</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="五星电器到访商圈网深入沟通合作事宜" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/5stars.jpg">
                            <div class="newsWords">
                                <div class="words1">五星电器到访商圈网深入沟通合作事宜</div>
                                <p class="words2">发布时间：2014-03-08</p>      
                                <p class="words3">
                                3月7日下午，百思买五星电器副总裁景星、信息中心副总监林燕豪、南京分部总经理郭维等一行6人来到商圈网参观考察，并表达了与商圈网进行业务合作的强烈愿望。商圈网CEO王晔、执行副总裁朱伟、CTO&amp;COO周彬进行接待，并就合作模式具体细节进行深入沟通。
商圈网三位领导分别就公司帮助实体商圈持续繁荣、健康发展的商业价值以及即时精准的O2O运营模式向五星电器领导做了介绍。五星电器领导也表达了自身在目前商业大环境下进行转型升级时对线上资源的实际发展需求。经过深入交谈，双方达成了前期五星电器以借助商圈网的营销通进行合作为起点，以深入合作、全面借力商圈网O2O平台及配套工具，实现共赢为目标的合作意愿。
商圈网的市场价值不断提升，同时为进一步加快发展步伐，加大发展规模，加强与各大品牌商户的密切合作在不断进行产品优化和营销模式升级。商圈网在新的商业环境中不断求变、创新，为促进传统商圈零售市场持续、健康、快速的发展起到重要作用。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="南京电商协会会长一行莅临商圈网调研" year="2014" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/20140116.jpg">
                            <div class="newsWords">
                                <div class="words1">南京电商协会会长一行莅临商圈网调研</div>
                                <p class="words2">发布时间：2014-01-14</p>      
                                <p class="words3">
                                2014年1月14日上午南京市电子商务协会何俊廷会长、秦淮区商务局戴萍主任一行来到新街口南京中心56楼的商圈网，就商圈网的商业模式及近期的工作进展进行考察、调研。<br>
何会长等领导在商圈网CEO王晔、执行副总裁朱伟的陪同下兴致勃勃地参观了公司，并听取了王总、朱总关于公司的详细介绍。商圈网应对中国电子商务市场及消费者消费行为的变化，深入调查和分析，发现实体商圈和线上购物各自的优势和劣势，得出片面发展最终将被市场禁足的结论。只有搭建融合线上线下的O2O开放平台才是零售业的出路。商圈网经过一年的探索实践，在“中华第一商圈”新街口成功组建了区域开放性O2O电商平台。分别从商户和消费者两端的迫切需求出发，开拓数据通道，打造营销工具，帮助实体商户降低营销成本，提高营销转换率。同时，帮助不同的消费群体提供即时、精准的针对性服务。<br>
公司领导还向何会长汇报了商圈网O2O电商模式已经得到政府和商户、消费者的广泛认可，被国家商务部列为传统商业转型升级全国示范项目；被国家工信部列入“全国电子商务集成创新试点重点工程项目”；并在2013年“中国零售领袖峰会”上获得“2013中国零售创新大奖”殊荣。<br> 
何会长在详细了解了公司发展的情况后，非常认可商圈网的商业模式和发展前景，对商圈网敏锐的商业洞察力和优质的运营能力给予高度评价。何会长还表示，协会方面将配合相关各级政府，为商圈网的发展提供更丰富的资源和品牌推广平台。最后，协会领导还有意在随后的南京电子商务协会秦淮区办事处筹建过程中，力邀商圈网作为办事处主要企业代表。也希望商圈网能持续创新、为广大商户和消费者提供更优质的服务，并快速拓展业务，推广模式，成为商圈电子商务平台及服务标准的提供商，带头促进新街口及所涉商圈持续繁荣发展。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网2013年荣誉汇总" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/1212.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网2013年荣誉汇总</div>
                                <p class="words2">发布时间：2013-12-06</p>      
                                <p class="words3">
                                商圈网2013年现已获得以下荣誉、奖项：<br>
                                <b>1.	中国创新零售大奖</b><br>
                                2013年11月13日，由商务部指导、中国连锁经营协会主办的“2013中国零售领袖峰会暨第十五届中国连锁业会议”在成都举办。商圈网凭借创新的商业模式──“网上新街口：服务大商圈的及时、精准数字营销平台”荣获“2013年中国零售创新大奖”。此奖项是2013年中国零售业份量最重的奖项。<br><br>
                                <b>2.	入选国家工信部2013年度电子商务集成创新试点工程项目</b><br>
                                商圈网的创新商业模式──“网上新街口：服务大商圈的及时、精准数字营销平台”获得高度的关注，并于2013年11月入选国家工信部的创新试点工程。<br><br>
                                <b>3. 商务部电子商务重点关注项目</b><br><br>
                                <b>4. 2013年度南京市电子商务示范企业</b><br>
                                2013年12月获取，由南京市商务局评选。

</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>

            	 <li class="newsUnit" title="秦淮区政府领导一行莅临商圈网调研" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/1206_1.png" preferentialsrc="images/1206_2.jpg">
                            <div class="newsWords">
                                <div class="words1">秦淮区政府领导一行莅临商圈网调研</div>
                                <p class="words2">发布时间：2013-12-06</p>      
                                <p class="words3">
                                2013年12月4日，秦淮区副区长裴清海、区发改局局长薛磊、区发改局服务业处科长张斌、区发改局经信科科长王炫炫、新街口管理办公室主任陈明等一行领导再次关切地来到商圈网进行工作考察。商圈网CEO王晔、执行副总裁朱伟等详细介绍了中国电子商务市场的变化和一年以来商圈网的发展情况。
商圈网经过一年的探索实践，在“中华第一商圈”新街口成功组建了区域开放性O2O电商平台。一方面搜集和分析商圈内消费数据，为大小商户量身打造了即时精准O2O营销平台，大大提高营销转换率。另一方面，商圈网也针对不同的消费群体提供了更具针对性、更贴心的互联网、移动互联网和配套增值服务产品，为消费者提供了全面、及时的服务。商圈网就地化、即时、精准营销的O2O电商模式已经得到政府和商户、消费者的广泛认可，被国家商务部列为传统商业转型升级全国示范项目，被国家工信部列入“全国电子商务集成创新试点重点工程项目”。2013年11月，商圈网在“中国零售领袖峰会”上获得“2013中国零售创新大奖”殊荣。 
裴区长等领导在详细了解了公司业务发展的情况后，表示政府部门将支持商圈网的实际工作。并希望商圈网的全体同仁能持续创新、将产品更好落地，为广大商户和消费者提供更优质的服务，为促进新街口商圈持续繁荣发展起到非常积极的作用。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            
            
            	<li class="newsUnit" title="商圈网受邀参加第八届中国网上零售年会" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/1202.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网受邀参加第八届中国网上零售年会</div>
                                <p class="words2">发布时间：2013-12-02</p>      
                                <p class="words3">2013年11月28-29日，由南京市政府、亿邦动力主办的“第八届中国网上零售年会”在南京万达希尔顿酒店举行，中国５００强企业――三胞集团及成员企业商圈网、宏图三胞受邀参加。商圈网CEO王晔、执行副总裁朱伟代表商圈网参与本次大会。29日下午大会分论坛“传统品牌企业电商深度分享论坛”由刚获得“中国零售创新大奖”的商圈网CEO王晔主持，壳壳果电商总经理程建、好想你枣业电商总经理刘朝阳、歌歌宝贝总经理李星、周黑鸭电商总经理尹合龙和中酒网渠道总经理李佳明五位嘉宾共同参与。商圈网CEO王晔和五位著名电商圈内人士就“传统品牌新贵如何玩转电商”这一话题进行了深入的讨论，内容包括企业在电商时代的应对方法和发展规划，以及在网络营销下对于新兴人才的培养等等。同时，各位嘉宾也分享了各自在网络销售方面的销售心得。论坛现场气氛非常活跃，观众反响热烈。
   
   在随后各大媒体的专访中，商圈网CEO王晔介绍了商圈网在这个变革的时代下如何诞生，实体店铺与电商如何平衡，以及商圈网未来如何在传统商圈利用网络留住客源等问题上做出了精彩解答。<br><br>

<b>专题采访《创新面对面：爱在新街口--访商圈网CEO王晔》</b><br>
链接地址：http://js.qq.com/finance/cxmdm/wangye.htm
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            
            	<li class="newsUnit" title="商圈网荣获2013中国零售最高奖—“中国零售创新大奖”" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/jyxh.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网荣获2013中国零售最高奖—“中国零售创新大奖”</div>
                                <p class="words2">发布时间：2013-11-13</p>      
                                <p class="words3">2013年11月13日，四川成都。中国连锁经营协会举办的“2013中国零售领袖峰会”上，2012年成立于南京的商圈网电子商务有限公司凭借创新的商业模式理念，利用LBS技术、互联网产品、移动互联网产品、配套增值服务等手段打造了一个开放的区域性O2O电商平台，并在南京新街口试点运营，取得了卓越的效果，荣获了由中国连锁经营协会颁发的2013中国零售最高奖--“中国零售创新大奖”。商圈网首席执行官王晔、执行副总裁朱伟、首席运营官马健出席本次大会，首席执行官王晔代表商圈网领奖并在创新论坛上进行主题为“实体商圈的精准营销”的演讲。商圈网此次得到中国零售业精英的高度认可，并与多个知名品牌、商家达成合作意向。<br><img src="/resources/images/ggg.jpg"><br><img src="/resources/images/kkk.jpg"></p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li> 
            
            
            	<li class="newsUnit" title="商圈网受邀参加联商网O2O电商大会" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/fyh1.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网受邀参加联商网O2O电商大会</div>
                                <p class="words2">发布时间：2013-10-29</p>
                                <p class="words3">2013年10月25-26日， 商圈网受邀参加由联商网（中国零售业专业网站）在杭州主办的“2013联商风云会——电商论剑” ，执行副总裁朱伟代表商圈网参加本次大会。本届大会主要议题重点探讨实体零售商如何发展电商，如何发力O2O的问题。会上，大润发董事长兼飞牛网执行董事黄明端、原淘宝商城总经理、当当网COO黄若、步步高商业董事长王填、上海徐家汇商城副总经理兼电商公司 CEO郭志鹏、广百股份副总经理严盛华、甲骨文公司零售全球事业部亚太区总经理Bill Kearney、IBM大中华区零售解决方案总监林守常、联商网董事长庞小伟等资深电商高管、零售企业高管均将出席，一同分享实操经验和优秀案例。<br><br><img src="/resources/images/fyh2.jpg"><br>
朱伟在高管沙龙上重点分析了新时代商品、商户、商圈的新变化，并从客户角度剖析了消费市场中O2O电商的市场前景。商圈网正是以实体商圈为基础，以消费需求和消费习惯的转变为出发点，利用LBS技术、互联网/移动互联网产品，配套增值服务打造一个开放的区域性O2O电商平台，形成从线上到线下的完整消费闭环，实现商户即时精准营销。商圈网不仅为消费者客户提供了更全面优质的消费服务，更为商家客户提供了高效的就地化引流和营销转换率工具。
商圈网成立一年以来已经在被誉为“中华第一商圈”的南京新街口商圈获得超过３０万消费者用户和近２０００家合作商户，并进一步推动了当地传统零售、服务业商户的发展和新街口商圈的持续繁荣。朱伟的分享获得大家热烈回应，纷纷表示非常认可商圈网在O2O电商市场潮流中表现出的创新精神和极具市场影响力的商业模式。

</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li> 
            
            
            	<li class="newsUnit" title="商圈网小伙伴热情参与集团运动会" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/005.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网小伙伴热情参与集团运动会</div>
                                <p class="words2">发布时间：2013-10-19</p>
                                <p class="words3">金秋十月，丹桂飘香，10月19日中国500强企业---三胞集团在紫金山“南京体育学院”举办主题为“七剑出鞘 决战紫金”的2013职工运动会。这是三胞集团连续第三年举办职工运动会，也是商圈网2012年成立以来，首次参与。
通过积极准备，商圈网小伙伴们在此次运动会上充分展现了积极向上、奋勇争先的员工精神风貌、团队动能；同时小伙伴们顽强拼搏、团结协作，取得了令人瞩目的佳绩；商圈网全体同仁更有效利用运动会平台，推广建设“商圈网”市场品牌，更将商圈网众多产品进行了一次有效的推广，并吸引了公司内外超过400名用户。集团各领导对商圈网在运动会上表现高度赞许，并进行通报表彰。<br><br><img src="/resources/images/001.jpg"><br>赛场上，商圈网的精兵强将踌躇满志，表现出卓越的团队合作素养和勇攀高峰的战斗激情，通力合作，共克难关，最终在“叱诧武林破三关”、“抱团打天下”等环节夺得桂冠，勇士们也收囊丰盛礼品，满载而归。<br><br><img src="/resources/images/002.jpg"><br>赛场外，拉拉队员们高呼“爱在商圈，星光无限；竞心竞力，全新全意”的参赛口号，为同伴们呐喊助威，可谓热闹非凡，精彩纷呈。<br><br><img src="/resources/images/003.jpg"><br>同时，公司借助此次集团运动会平台，为公司产品（惠买微信和微觅）做了一次宣传，全面的宣传形式覆盖运动会现场。此次运动会，对于商圈网来讲意义很大。不仅是一项素质拓展活动，还是一场团队建设项目，更是一场产品宣传会。<br><br><img src="/resources/images/004.jpg"><br>此次运动会深刻的主题和全新的形式都给大家留下了深刻的印象，不仅把运动会的个体竞技升级为团体素质拓展，而且展现出三胞人向上、自省、平衡的文化理念和商圈网激情、学习、创新的行事风格。正如袁董拨冗关怀员工，特意赶到会场为大家加油、打气，希望每个员工都能如剑出鞘，披荆斩棘，以饱满的热情开创未来，实现梦想。同时，各个平台之间要广泛借力，充分合作，把每根筷子紧紧握在一起，而充分发挥“一把筷子”更强大的力量。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li> 
            
				<li class="newsUnit" title="中国连锁经营协会专家莅临商圈网调研" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/918.jpg">
                            <div class="newsWords">
                                <div class="words1">中国连锁经营协会专家莅临商圈网调研</div>
                                <p class="words2">发布时间：2013-09-17</p>
                                <p class="words3">商圈网成功入围2013年度中国连锁经营协会年度“创新大奖”候选企业名单。9月16日中午，中国连锁业经营协会专家、中国人民大学商学院副院长刘向东教授及中国连锁经营协会教育与培训部副主任孙工贺等专家领导莅临商圈网进行专项考察调研。公司首席执行官王晔、执行副总裁朱伟、首席运营官马健、战略总监陈军等重要领导接待专家团一行。
会晤中，协会专家与公司领导就中国传统零售业的转型升级、商圈网新型商业模式的创新特点及社会意义进行了深入的会谈和讨论。此次会晤中，我公司的创新型运营实例和经营数据为协会专家对中国商业转型趋势的前端研究提供了丰富数据。同时，协会专家也为公司积极应对激烈的商业环境、把握电子商务发展浪潮中的机遇、以及公司的经营模式和战略规划等方面提供了科学的、切实可行的建议，帮助商圈网凭借自身创新优势，跻身现代商业领域的前列。
此次调研，证实了商圈网的创新特点和创新能力。而且，学术研究与企业实践的“碰面”，或将为电子商务在现代商业领域中的创新发展起到非常积极的意义。
</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>            
            
            	<li class="newsUnit" title="工信部专家领导再次莅临商圈网考察调研" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/905_1.png" preferentialsrc="images/905_2.png">
                            <div class="newsWords">
                                <div class="words1">工信部专家领导再次莅临商圈网考察调研</div>
                                <p class="words2">发布时间：2013年9月7日</p>
                                <p class="words3">9月5日上午，工业和信息化部软件与集成电路促进中心邱善勤主任、云计算研究中心杨东日主任、总工程师王建平博士等领导、专家在南京市秦淮区夏东宁副区长的陪同下，再一次莅临商圈网，实地考察调研并指导工作。公司首席执行官王晔和执行副总裁朱伟热情接待了邱主任一行。
王总向来访领导介绍了公司业务继上次专家领导考察之后的进一步开展情况，着重就公司依靠运用云计算等信息化创新数字技术进行即时精准营销的商业模式和各平台渠道搭建工作进展情况详细汇报。各位领导对公司紧跟市场需求，细分消费群体的思路和小产品、大平台的理念，及产品条线的落地和推进工作给予很高评价，并就公司业务快速发展和政府机构大力支持等具体事项进行了详细探讨。商圈网模式作为一种创新型商业模式，在南京新街口地区起步，在模式成熟之后将在全国范围内大力推广。这将对新商业时代中国传统零售行业的持续繁荣和发展起到非常积极的作用。
公司领导和工信部的专家领导对公司业务模式进行梳理，以及具体工作的开展计划进行了详细探讨。政府的持续关注给公司很大的鼓励，公司领导也非常有信心带领商圈网团队在在激烈的市场竞争中开拓出极具市场影响力的互联网与传统商业结合的商业模式。</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	
            	<li class="newsUnit" title="马鞍山花山区领导一行赴商圈网调研考察" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/01.png" preferentialsrc="images/02.png">
                            <div class="newsWords">
                                <div class="words1">马鞍山花山区领导一行赴商圈网调研考察</div>
                                <p class="words2">发布时间：2013年9月4日</p>
                                <p class="words3">9月3日上午，马鞍山市花山区区委书记方文、花山区副区长程雪涛等领导一行在南京市秦淮区区长胡洪、副区长薛凤冠的陪同下前来我公司调研考察。公司首席执行官王晔、执行副总裁朱伟接待了考察团一行，并向考察团介绍了商圈网的经营理念、商业模式和近期运营情况。
花山区代表团一行对商圈网积极借助现代化创新科技，利用互联网和移动互联网手段，通过O2O方式和大数据的分析挖掘，助推传统商户转型升级、传统商圈迸发新活力的商业模式给予高度评价。并充分肯定了商圈网在新商业时代促进传统零售行业持续繁荣发展的伟大使命。考察团还现场观摩了商圈网的APP产品，并认为这些产品应用有非常广阔市场前景，同时还从消费者的角度提出一些意见。在参观公司企业文化墙的时候，代表团一行对商圈网企业文化建设成果表示充分肯定，同时对商圈网年轻、专业有活力的团队赞不绝口。
最后，方书记表达了花山区希望与商圈网在互联网产业上深入合作的强烈意愿，并邀请商圈网领导赴马鞍山考察交流，互相了解，进一步加强合作基础。</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            
            
				<li class="newsUnit" title="淮安商务局来商圈网考察，望达成合作" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/222.png">
                            <div class="newsWords">
                                <div class="words1">淮安商务局来商圈网考察，望达成合作</div>
                                <p class="words2">发布时间：2013-08-20</p>
                                <p class="words3">8月20日上午10:00，秦淮区领导携淮安市商务局领导来我公司调研考察，公司领导接待了考察团一行。CEO王总向考察团介绍了我公司运营理念、运营模式和愿景规划，同时还解答了考察团领导所咨询的关于电商行业的前期投入配比、盈利模式等问题。淮安市商务局领导对商圈网的商业模式表示出极大兴趣，并就与当地商业发展可能达成的合作契机与我公司领导进行探讨，并邀请公司领导能前往淮安实地考察，期望进一步合作。</p>
                           </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="商圈网召开2013年半年度工作总结会议" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/txxl.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网召开2013年半年度工作总结会议</div>
                                <p class="words2">发布时间：2013-08-02</p>
                                <p class="words3">2013年8月1日、2日，公司分别召开了商圈网电子商务有限公司2013年半年度工作总结中副级以上会议及公司全员会议。此次会议由人力资源行政中心筹备召开。
8月1日下午14:00，公司所有中副级以上人员在新百1211会议室参加会议。各核心驱动业务条线的负责人分别就上半年的项目业绩做了总结，并对下半年的工作进行详细计划；各职能中心领导也汇报了上半年的工作成果，并商讨制定了下半年工作规划。公司CEO做总结性发言，对公司的内外部环境、公司业务模式的关键逻辑和核心思路进行了详尽阐述，并要求公司上下统一思想，同心协力，达成目标。8月2日下午，在人力资源行政中心的组织下，公司在天丰大酒店召开了2013年半年度全体成员会议。会上， CEO王总等公司领导向各位同事汇报了今年上半年的工作成果，并就下半年工作规划进行宣讲，动员全体成员一起努力，实现公司目标。同时，人力资源行政中心还特地准备了生动有趣的素质拓展活动，寓教于乐，在游戏中锻炼同事们的团队合作和目标达成的素能。整场活动在欢乐、向上的气氛中取得了非常好的效果。</p>
                            </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
            	<li class="newsUnit" title="爱在•新街口’冠名的世界旅游小姐晋级赛完美落幕" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/0716.png">
                            <div class="newsWords">
                                <div class="words1">爱在•新街口’冠名的世界旅游小姐晋级赛完美落幕</div>
                                <p class="words2">发布时间：2013-07-16</p>
                                <p class="words3">7月14日世界旅游小姐大赛南京晋级赛在虹悦城负一楼中心广场盛大举行。作为此次大赛的冠名商——商圈网爱在•新街口特别在现场准备了一场声势浩大的活动，引发了一轮又一轮的互动热潮。
此次活动面向了所有现场的观众以及粉丝们，官方特别准备了海量德基电影票、Ipad mini惊喜奖品，许多观众参与到爱在•新街口的微信互动活动中来，现场派发的小熊扇子受到了大家的喜爱，可谓人手一只。截至整场比赛结束，爱在•新街口微信粉丝增长了1232人，现场送出50多张电影票及IPAD mini一台，为此次比赛频添浓墨一笔，且活动获得了圆满的成功！</p>
                            </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li> 
            	<li class="newsUnit" title="秦淮区云计算应用与服务实践及理论研究专家团莅临商圈网" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/0715.png">
                            <div class="newsWords">
                                <div class="words1">秦淮区云计算应用与服务实践及理论研究专家团莅临商圈网</div>
                                <p class="words2">发布时间：2013-07-15</p>
                                <p class="words3">2013年7月14日下午，"秦淮区云计算应用与服务实践及理论研究"专家团莅临商圈网指导工作。
专家团领导包括中国科学院计算技术研究所研究员、中国中文信息学会理事长、中国工程院院士倪光南，中国科学院研究生院计算与通信工程学院教授赵亚伟，工业和信息化部软件与集成电路促进中心（CSIP）总工程师、博士、研究员王建平等。座谈会上，专家团在听取了商圈网首席执行官王晔对于商圈网的业务模式和服务理念的介绍后表示：商圈网的创新应用模式有着很好的推广价值和出色的运营方式，并对此表现出了很大的兴趣和关注度。会上专家团还对商圈网的发展模式提出了宝贵的意见和建议。
此次考察中，商圈网运营实践中所掌握的数据对秦淮区“云计算”相关课题的开展具有较高的价值，同时专家的指导，也为商圈网以后的发展提供了更好的支持，具有长远意义。
</p>
                            </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li> 
            	<li class="newsUnit" title="建湖考察团观摩商圈网•新型商业模式赢得大赞誉" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/JHKCT.png">
                            <div class="newsWords">
                                <div class="words1">建湖考察团观摩商圈网•新型商业模式赢得大赞誉</div>
                                <p class="words2">发布时间：2013-07-04</p>
                                <p class="words3">2013年7月3日15:30，在秦淮区裴区的陪同下，盐城市建湖县夏书记一行40人莅临我公司参观学习。公司人力行政中心总监印总携行政部人员进行接待，并向参观团介绍了公司的企业文化和商业模式等内容。夏书记对我公司新型运营模式表示出极大的兴趣，并对我公司产品紧跟市场前沿的特点和同时服务商户和消费者的双向服务理念大加赞誉。</p>
                            </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li> 
           		<li class="newsUnit" title="李晋奇司长一行莅临指导•传统百货业共商模式转型升级" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/0111.png">
                            <div class="newsWords">
                                <div class="words1">李晋奇司长一行莅临指导•传统百货业共商模式转型升级</div>
                                <p class="words2">发布时间: 2013-06-28</p>
                                <p class="words3">2013年6月27日上午9:30，在李晋奇司长的领导下，国家电子商务司一行领导莅临我公司，召开了“商圈网专题座谈会”。参加此次会议的还有德基、新百、金鹰、万事得、江苏银商等我公司合作企业的领导。会议主要就传统百货业如何利用电子商务平台进行模式转型变革的议题展开深入讨论，并展望了电子商务的前景。</p>
                            </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li> 
            	<li class="newsUnit" title="520网络情人节•购物娱乐新链接" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/520活动.jpg">
                            <div class="newsWords">
                                <div class="words1">520网络情人节•购物娱乐新链接</div>
                                <p class="words2">发布时间: 2013-05-21</p>
                                <p class="words3">5月18日—5月20日，商圈网携手新百商场举办了“520网络情人节”线下大型互动活动，获得了圆满成功！此次活动不仅为诸多消费者送去浪漫的节日礼物，同时商圈网通过微信将商场详尽信息进行数据化管理，消费者通过“爱在•新街口”微信可获得更为精准的有效信息推送，这一全新功能也得到了广大用户认可及热捧！</p>
                            </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
                <li class="newsUnit" title="商圈网总裁接受央视采访，讨论商业模式的新转变" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/ys1news.png">
                            <div class="newsWords">
                                <div class="words1">商圈网总裁接受央视采访，讨论商业模式的新转变</div>
                                <p class="words2">发布时间: 2013-05-02</p>
                                <p class="words3">5月2日，商圈网接受中央电视台“新闻联播”栏目专访。总裁王晔女士通过镜头向广大消费者介绍了在互联网技术不断升级的今天所发生的商业模式转变，和商圈网正在深入探索的新型消费模式。</p>
                            </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
                <li class="newsUnit" title="商圈网构筑网购平台•购物节再添全新亮点" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/gwj.jpg">
                            <div class="newsWords">
                                <div class="words1">商圈网构筑网购平台•购物节再添全新亮点</div>
                                <p class="words2">发布时间: 2013-04-30</p>
                                <p class="words3">在连续成功举办三届的基础上，第四届南京购物节将从4月28日启幕，一直持续到6月12日。本次购物节由市政府主办，南京市商务局、南京市旅游委员会、南京日报社和西祠胡同共同承办，以“惠享消费新生活”为主题，分五大板块，涵盖商贸、餐饮、电子商务、景点、汽车销售等多个行业领域，真正实现衣食住行乐全覆盖。此次购物节，商圈网也将建设匹配的网络购物平台，为南京各大商场精选品牌，免费搭建网络销售平台。</p>
                            </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>
                <li class="newsUnit" title="爱在新街口•爱就要兑现" year="2013" style="display: none;">
                    <div class="newsContent">
                        <img class="bg4" src="/resources/images/bg4.png">
                        <div class="forNews">
                            <img class="newsImg" src="/resources/images/ajydx.jpg">
                            <div class="newsWords">
                                <div class="words1">爱在新街口•爱就要兑现</div>
                                <p class="words2">发布时间: 2013-04-22</p>
                                <p class="words3">4月20日—4月21日，商圈网主办的“爱在新街口，3000份好礼邀你兑现”主题活动，在新百商场开启。此次活动不仅有多个人偶熊现场助兴，更有时尚模特鼎力加盟。商圈网在活动现场准备了大型毛绒玩具、星巴克券、德基电影券、拍立得相片、时尚手机便签本等丰厚的奖品，只需下载“爱在•新街口”手机APP即有机会获奖。
下载“爱在•新街口”APP，手机用户不仅能随时随地了解新街口各种优惠、新品信息，同时“爱发现”、“星街口”等功能也推出多个惊喜大礼：上传自拍照，邀请好友来赞，500元现金大奖天天送；发现新街口精彩店铺，拍店上传分享，赢取积分同时更有机会获得iPad大奖。4月20日—4月21日，商圈网主办的“爱在新街口，3000份好礼邀你兑现”主题活动，在新百商场开启。此次活动不仅有多个人偶熊现场助兴，更有时尚模特鼎力加盟。商圈网在活动现场准备了大型毛绒玩具、星巴克券、德基电影券、拍立得相片、时尚手机便签本等丰厚的奖品，只需下载“爱在•新街口”手机APP即有机会获奖。
下载“爱在•新街口”APP，手机用户不仅能随时随地了解新街口各种优惠、新品信息，同时“爱发现”、“星街口”等功能也推出多个惊喜大礼：上传自拍照，邀请好友来赞，500元现金大奖天天送；发现新街口精彩店铺，拍店上传分享，赢取积分同时更有机会获得iPad大奖。</p>
                            </div>
                           <div class="newsMore"><img src="/resources/images/more.png"></div>
                        </div>
                    </div>
                </li>         
            </ul>
            <div style="clear:both"></div>
            <div class="newsPages">
                <span id="pagepre" style="display: none;"><a href="http://www.cnshangquan.com/news.html#">上一页</a></span>
                <span id="navigation"><a class="pagenavigate pagenavigateon" href="javascript:void(0)" style="display: inline-block;">1</a><a class="pagenavigate" href="javascript:void(0)" style="display: inline-block;">2</a><a class="pagenavigate" href="javascript:void(0)" style="display: inline-block;">3</a><a class="pagenavigate" href="javascript:void(0)" style="display: none;">4</a><a class="pagenavigate" href="javascript:void(0)" style="display: none;">5</a><span id="ellipis" style="display: inline;">...</span><a class="pagenavigate" href="javascript:void(0)" style="display: inline-block;">6</a></span>
                <span id="pagenext"><a href="http://www.cnshangquan.com/news.html#">下一页</a></span>
            </div>
            
            <ul id="hideNews" style="display:none"></ul>
            
        </div>