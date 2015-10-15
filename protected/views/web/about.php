
<script type="text/javascript">
	$(document).ready(function(){
		var currentContentId = "summarize";
		var currentNav = $("#IntroNavigation li")[0];
		$("#IntroNavigation li").click(function(){
			if(currentNav!=this){
				$(this).attr("class","currentIntro");
				$(currentNav).attr("class","");
				currentNav = this;
				var targetId = $(this).attr("targetId");
				$("#"+currentContentId).hide();
				$("#"+targetId).show();
				currentContentId = targetId;
			}
		});
		$("#Introduction").slideDown("slow");
	});
</script>
        <div id="Introduction" class="hide" style="display: block;">
            <div class="forIntroNavigation">
                <div class="IntroNavigationBG"></div>
                <div id="IntroNavigation" class="IntroNavigation">
                    <div class="sjTag1"></div>
                    <ul>
                        <li class="currentIntro" targetid="summarize">公司概况</li>
                        <!-- <li targetid="grow">成长经历</li>
                        <li targetid="culture">企业文化</li> -->
                    </ul>
                </div>
            </div>
            <div class="forIntroContent">
                <div class="introContent">
                    <div id="summarize">
                    	<div id="pWordsOut" class="forSummarizeWords">
                            <div id="pWords" class="summarizeWords">
                                <p>Hello，我们是易事咨询！</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一家致力于将人力资源管理变得简单、落地、高效、有趣的公司。</p>
<p><h4>☆为何而生？</h4></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;随着企业的成立和发展，你不可避免的遇见很多人力资源问题。
    如何控制成本？我的组织架构该如何调整？绩效考核该如何实施？哦！我该上哪儿去招合适的人才？制度流程好重要，
    可是怎么做才能员工满意，老板开心？出现劳动法律纠纷了，好烦？除了钱，我还能用什么方法留住我的业务骨干，
    更好的培养他们？你以为只有上述这些问题？</p>
<p><h4>☆为谁而生？</h4></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;你的HR是否每天疲于和各业务部门打交道，兼任着各种繁杂的行政人事工作，
    忙！忙！忙！可是你总觉得还是少了那么一点？
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们既为HR而生，帮助他们提高工作效率，提升业绩；我们也为业务而生，
    一切服务都紧密结合业务需求；当然，我们更是为所有中小企业而生，我们比你更了解你的人力资源管理！</p>
<p><h4>☆我们是谁？</h4></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6名东南大学MBA毕业生，经历过500强企业、上市公司、民营企业、自主创业，
    现在我们依托丰富的MBA资源，成立了南京易事汇企业管理咨询有限公司（简称“易事咨询”）。</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;而如今我们只专注三件事:一是如何帮助企业从纷杂的人事事务里解脱出来，精简成本，
    开拓业务；二是在企业成立初期导入科学的人力资源管理，以人为本，使企业快速成长。三是成为HR们职业发展的助力伙伴。
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;现如今，我们的客户主要涉及有地产、互联网、医药、制造业、零售业等多个行业，
    客户好评率达100%。
</p>
                            </div>
                            <div id="scrollBar" class="scrollBar" style="display: block;">
                                <div id="scrollBarHandle" class="scrollBarHandle" style="height: 254.117647058824px;"></div>
                            </div> 
                        </div>
                        <img class="introImg" src="/resources/images/islogo.png">
                    </div>
                    <div id="grow" class="hide">
                        <div class="growList">
                            <ul>
                                <li>
                                    <img src="/resources/images/img4.png">
                                    <p>商圈网<br>电子商务有限公司<br>正式成立</p>
                                </li>
                                <li gpnum="2">
                                    <img src="/resources/images/img2.png">
                                    <p>商圈网总裁<br>接受央视采访，<br>讨论商业模式的新转变</p>
                                </li>
                                <li style="width:220px">
                                    <img src="/resources/images/img3.png">
                                    <p>三胞集团、商圈网<br>与江苏电信 签署WI-FI战略合作协议 携手深耕O2O</p> 
                                </li>
                                <li style="width:140px">
                                    <img src="/resources/images/img5.png">
                                    <p>新加坡经济发展局<br>"一行莅临商圈网，<br>探索合作发展</p>
                                    
                                </li>
                            </ul>
                        </div>
                        <div style="clear:both"></div>
                        <div class="growTimeLine">
                            <img src="/resources/images/timeline.png">
                            <div class="time1"><p class="grayword1">10.8</p><p class="grayword2">2012</p></div>
                            <div class="time2"><p class="greenword1">02.05</p><p class="greenword2">2013</p></div>
                            <div class="time3"><p class="grayword1">10.29</p><p class="grayword2">2014</p></div>
                            <div class="time4"><p class="greenword1">03.24</p><p class="greenword2">2015</p></div>
                        </div>
                    </div>
                    <div id="culture" class="hide">
                        <img class="mt25" src="/resources/images/culture.png">
                    </div>
                    <div id="close1" class="close1"></div>
                </div>
            </div>
        </div>