
<script type="text/javascript">
	var readyBannerId = "home_content2";
	var intervalId= null;
	$(document).ready(function(){
		if(window.innerHeight-86 > 697)
			$("#home_content1, #home_content2").css("margin-top",window.innerHeight-86-697);
		$("#forLeftArrow").click(function(){
			clearInterval(intervalId);
			$("#home_content2").hide();
			$("#forLeftArrow").hide();
			$("#homeBanner1").css("left",-document.body.clientWidth);
			$("#homeBg1").css("left",-document.body.clientWidth);
			$("#home_content1").show();
			$("#homeBg1").animate({left:"0px"},"slow")
			$("#homeBanner1").animate({left:"285px"},1200,function(){
					$("#forRightArrow").show();
					$("#dot1 li")[1].className = "oDot1";
					$("#dot1 li")[0].className = "currentDot1";
					intervalId = setInterval("changeBanner();", 8000);
			});
			$("#aizaiImg").css("left","1000px");
			$("#homewords").hide();
			$("#hand").css("bottom","-628px");
			$("#thumb").css("bottom","-361px");
			readyBannerId = "home_content2";
		});
		
		$("#forRightArrow").click(function(){
			clearInterval(intervalId);
			$("#forRightArrow").hide();
			$("#home_content1").hide();
			$("#home_content2").show();
			$("#aizaiImg").animate({left:"135px"},"");
			$("#thumb").animate({bottom:"257px"},900);
			$("#hand").animate({bottom:"-10px"},900,function(){
			$("#homewords").fadeIn("slow");
				$("#forLeftArrow").show();
				$("#dot1 li")[1].className = "currentDot1";
				$("#dot1 li")[0].className = "oDot1";
				intervalId = setInterval("changeBanner();", 8000);
			});
			readyBannerId = "home_content1";
		});
		
		intervalId = setInterval("changeBanner();", 8000);
		
		$(".forLeftArrow").hover(function(){
				$("#leftArrow").show();
			}, function(){
				$("#leftArrow").hide();
			}
		);
		
		$(".forRightArrow").hover(function(){
				$("#rightArrow").show();
			}, function(){
				$("#rightArrow").hide();
			}
		);
});
</script>
    
    <!-- 首页 -->
    <div class="homeContent">
        <div id="forContent">
            <div id="home_content1" class="home_content1" style="margin-top: 32px; display: none;">
                <img id="homeBanner1" class="homeBanner1" src="/resources/images/image005.png" style="left: 285px;">
                <img id="homeBg1" class="homeBg1" src="/resources/images/sy1-2.png" style="left: 0px;">
            </div>
            
            <div id="home_content2" class="home_content2 hide" style="margin-top: 32px; display: block;">
                <div id="homewords" class="homewords" style="display: block;">
                    <!-- <div class="homePanel1">
                        <div class="forIcon"><img src="/resources/images/icon3.png"></div>
                        <p>网上商城 是网上新街口的系列应用之一！ 商圈网电子商务有限公司为生活、学习、工作在南京的朋友们量身打造的网上购物天地，您还可以下载我们的APP-爱在新街口，享优惠，兑大奖。 爱逛街，爱分享，爱在新街口！</p>
                    </div>
                    <div class="homePanel2">
                        <div class="forIcon"><img src="/resources/images/icon4.png"></div>
                        <p>面向新街口主流人群的手机消费应用。爱在立足于南京新街口商圈，汇聚餐饮、休闲娱乐等生活服务，超人气精品商品，全网底价，为您提供便捷的掌上购物体验！ 让您“爱在新街口”！</p>
                    </div>
                    <div class="homePanel3">
                        <div class="forIcon"><img src="/resources/images/icon1.png"></div>
                        <p>爱在新街口：是商圈网打造的南京新街口第一微信公号，带您发现南京新街口好吃的、好玩的，碰触新街口时尚脉搏，掌握新街口优惠资讯。商户信息、互动游戏、免费礼品啥都有！2014年强势推出“抢神马”让你每天定时尖叫！爱在新街口，欢乐跟我走。
供应链：农产品供应链与互联网结合，为南京商圈中小餐饮商家提供一站式、全品类且更低价食材采购，让餐饮从业者专注于提高服务品质。
 Together：随时掌握南京城中精英消费的最新动向，以最低价格购买他们的限量套餐、私人订制活动入场券，享受最优质的消费体验。</p>
                    </div>
                    <div class="homePanel4">
                        <div class="forIcon"><img src="/resources/images/icon2.png"></div>
                        <p>爱在商户端 是“爱在•新街口”的系列应用之一。能方便合作商家随时随地高效办公，帮助商家验证消费券、回应用户评价、便捷管理线上门店、查看经营与财务记录。真正做到随时随地服务商家，帮助商家获得更大收益。</p>
                    </div> -->
                </div>
                <img id="hand" class="hand" src="/resources/images/image003.png" style="top:10px;left:0px;">
                <!-- <img id="thumb" class="thumb" src="/resources/images/thumb.png" style="bottom: 257px;">      
                <img id="aizaiImg" class="aizai" src="/resources/images/aizaiImg.png" style="left: 135px;">   -->         
            </div>    
            <div id="dot1" class="dot1">
                <ul>
                    <li class="oDot1"></li>
                    <li class="currentDot1"></li>
                </ul>
            </div>         
        </div>
        
    </div>
    <div id="forLeftArrow" class="forLeftArrow hide" style="display: block;">
    	<div id="leftArrow" class="leftArrow hide" style="display: none;"></div>
    </div>
    <div id="forRightArrow" class="forRightArrow" style="display: none;">
    	<div id="rightArrow" class="rightArrow hide"></div>
    </div>