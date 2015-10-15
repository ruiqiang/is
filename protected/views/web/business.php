
<script type="text/javascript">
	$(document).ready(function(){
		var currentProduct = null;
		var currentProductInfo = null;
		var oTop,oLeft,oParentDiv;
		$(".productUnit").mouseenter(function(){
			$(this).find(".redDiv").show();
			$(this).find(".disc").slideDown();
		});
		$(".productUnit").mouseleave(function(){
			//$(this).parent().hide();
			//$(this).find(".disc").slideUp();
			$(this).find(".disc").slideUp("fast",function(){
				$(this).parent().hide();
			});
		});
		$(".productContent").click(function(){
			if(targetId != $(this).attr("targetId")){
				$("#"+targetId).hide();
				var targetId = $(this).attr("targetId");
			}
			$(this).find(".redDiv").hide()
			$(this).find(".disc").hide();
			oParentDiv = this.parentNode;
			$(this).find(".productImg").animate({height:"192px",top:"9px",left:"16px"},"fast");
			$(this).animate({width:"485px",left:"5px",height:"225px",top:"2px"},"fast",function(){
				oTop = getTop(this);
				oLeft = this.parentNode.offsetLeft;
				$(this).css("top",oTop);
				$(this).css("left",oLeft);
				$(this).appendTo("#outPanel");
				$(this).animate({width:"860px",left:"70px",height:"380px",top:"80px"},"fast",function(){
					$(this).hide();
					$("#hideDiv").show();
					$("#"+targetId).show();
					$(".blackDiv").show();
					currentProductInfo = $("#"+targetId);
				});
				$(this).find(".productImg").animate({height:"335px",top:"38px",left:"38px"},"fast");
				currentProduct = this;
			});
			
		});
		
		$("#closeBigDiv").click(function(){
			currentProductInfo.hide();
			$("#hideDiv").hide();
			$(".blackDiv").hide();
			$(currentProduct).show();
			$(currentProduct).find(".productImg").animate({height:"192px",top:"9px",left:"16px"},"fast");
			$(currentProduct).animate({width:"485px",left:oLeft,height:"225px",top:oTop},"fast", function(){
				$(this).appendTo(oParentDiv);
				$(this).css("top","2px");
				$(this).css("left","5px");
				$(this).animate({width:"495px",height:"233px",top:"-2px",left:"-2px"},"fast");
				$(this).find(".productImg").animate({height:"200px",top:"12px",left:"11px"},"fast");
			});
		});
});
</script>

<div id="outPanel" class="outPanel" style="color:white;">
    	<!-- 隐藏浮动层 -->
   		<div id="hideDiv" class="productBigDiv hide">
        	<div class="productBigDivTop"></div>
            <div class="productBigDivBottom"></div>
            <div class="productBigDivCenter">
            <div id="closeBigDiv" class="closeBigDiv r-33" src="images/close-1.png"></div>
                <div id="store" class="productBigDivContent hide">
                    <div>
                        <img class="productBigImg" src="/resources/images/product1_Big.jpg">
                        <a href="http://www.aizai.com/wap/pc/group/index" target="_blank"><img class="productBtnImg1" src="/resources/images/btn1.png"></a>
                    </div>
                    <p class="productWords1">爱在新街口网上商城</p>
                    <p class="productWords2">网址:www.aizai.com</p>
                    <p class="productWords3">【网上商城】是网上新街口的系列应用之一！ 商圈网电子商务有限公司为生活、学习、工作在南京的朋友们量身打造的网上购物天地，您还可以下载我们的APP-爱在新街口，享优惠，兑大奖。 爱逛街，爱分享，爱在新街口！</p>
                </div>
                <div id="move" class="productBigDivContent hide">
                    <div>
                        <img class="productBigImg" src="/resources/images/product2_Big.jpg">
                        <a href="http://app.aizai.com/" target="_blank"><img class="productBtnImg2" src="/resources/images/btn2.png"></a>
                    </div>
                    <p class="productWords1">爱在新街口移动交互系统</p>
                    <p class="productWords2">关键词：爱在新街口APP 微信 无线WIFI</p>
                    <p class="productWords3">【APP】面向新街口主流人群的手机消费应用。爱在立足于南京新街口商圈，汇聚餐饮、休闲娱乐等生活服务，超人气精品商品，全网底价，为您提供便捷的掌上购物体验！ 让您“爱在新街口”！</p>
                </div>
                <div id="core" class="productBigDivContent hide">
                    <div>
                        <img class="productBigImg" src="/resources/images/product3_Big.jpg">   
                    </div>
                    <p class="productWords1">微信产品</p>
                    <p class="productWords3">爱在新街口：是商圈网打造的南京新街口第一微信公号，带您发现南京新街口好吃的、好玩的，碰触新街口时尚脉搏，掌握新街口优惠资讯。商户信息、互动游戏、免费礼品啥都有！2014年强势推出“抢神马”让你每天定时尖叫！爱在新街口，欢乐跟我走。
供应链：农产品供应链与互联网结合，为南京商圈中小餐饮商家提供一站式、全品类且更低价食材采购，让餐饮从业者专注于提高服务品质。改变农产品供应链的落后现状，做好流通环节的最后一公里！ Together：省去了在海量的消费信息中进行对比、选择的时间，直接了当地告诉消费者“买这些就好”。可以随时掌握南京城中精英消费的最新动向，以最低价格购买他们的限量套餐、私人订制活动入场券，享受最优质的消费体验。</p>
                </div>
                <div id="manage" class="productBigDivContent hide">
                    <div>
                        <img class="productBigImg" src="/resources/images/product4_Big.jpg">
                        <a href="http://e.aizai.com/" target="_blank"><img class="productBtnImg4" src="/resources/images/btn2.png"></a>
                    </div>
                    	<p class="productWords1">商户后台</p>
                    	<p class="productWords3">【商户后台】爱在商户端 是“爱在•新街口”的系列应用之一。能方便合作商家随时随地高效办公，帮助商家验证消费券、回应用户评价、便捷管理线上门店、查看经营与财务记录。真正做到随时随地服务商家，帮助商家获得更大收益。</p>
                </div>
            </div>
        </div>
    </div>

    <div id="productMain" class="productMain">
        <div class="productTitle">
            <img src="/resources/images/sy1-7.png">业务服务
        </div>

        <div class="productRow">
            <div class="productUnit fl" style="height:150px;">
                <div class="productContent1" targetid="core">
                    <div>
                        <p>职场</p>
                        <br />
                        <ul>
                            <li>◇职业生涯规划</li>
                            <li>◇就业辅导/推荐</li>
                            <li>◇HR专业人才培养</li>
                            <li>◇MBA精英俱乐部</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="productUnit fr" style="height:150px;">
                <div class="productContent1" targetid="manage">
                    <div>
                        <p>在校学生</p>
                        <br />
                        <ul>
                            <li>◇实践模拟</li>
                            <li>◇就业辅导/推荐</li>
                            <li>◇兼职平台</li>
                            <li>◇在线课堂</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cb"></div>
        </div>

        <div class="productRow">
        	<div class="productUnit1 fl" style="width:1000px;">
            	<div class="productContent1" targetid="store">
                    <div>
                        <p>企业客户</p>
                        <div class="fl">
                            <br />
                            <ul style="font-size:15px;">
                                <li>咨询服务</li>
                                <li>◇数据和经验相结合</li>
                                <li>◇短期见效，长期持续</li>
                                <li>◇互动式作业</li>
                                <li>◇依托丰富的MBA资源</li>
                                <li>◇内生原则</li>
                            </ul>
                        </div>
                        <div class="fl" style="margin-left:30px;">
                            <br />
                            <ul style="font-size:15px;">
                                <li>培训服务</li>
                                <li>◇传统培训+基于微信平台的微课</li>
                            </ul>
                        </div>
                        <div class="fl" style="margin-left:30px;width:270px;">
                            <br />
                            <ul style="font-size:15px;">
                                <li>人力资源服务</li>
                                <li>◇专注于为中小企业、创业企业服务，提供全流程、高性价比的一站式服务，
                                    企业方无需承担任何信息化建设费用，就可以享用基于微信平台的人事服务，
                                    所有业务快速生成、易于查询、流程清晰、安全保密。
                                </li>
                        </div>
                        <div class="fl" style="margin-left:30px;">
                            <br />
                            <ul style="font-size:15px;">
                                <li>猎头服务</li>
                                <li>◇聚焦互联网专业技术人才+MBA人才</li>
                            </ul>
                        </div>
                        <div class="cb"></div>
                    </div>
                </div>
            </div>            
            <div class="cb"></div>
        </div>
	</div>
