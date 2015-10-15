<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<link rel="stylesheet" href="/resources/css/style.css">
	<script type="text/javascript" src="/resources/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/resources/js/common.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#weixin").hover(function(){
				$("#weixinCode").fadeIn("fast");
			}, function(){
				$("#weixinCode").fadeOut("fast");
		});
		$("#contact").slideDown("slow");
		$("#close1").click(function(){
			$("#contact").slideUp("slow", function(){
				window.location.href = "index.html";
			});
		});
		$(".hasLink").hover(function(){
			$(this).find("p").css("text-decoration","underline").css("color","#e23a31");
		}, function(){
			$(this).find("p").css("text-decoration","none").css("color","#666");
		});

		var inviteWordsDiv = scrollBar.$id("pWords");
		var inviteWordsOut = scrollBar.$id("pWordsOut");
		var scrollBarDiv = scrollBar.$id("scrollBar");
		if($(inviteWordsDiv).attr("id") == "pWords") {
			scrollBar.use(inviteWordsDiv, scrollBarDiv, scrollBarHandle,inviteWordsOut);
		}
	});
	</script>
</head>
<body class="bodyBg1">
	<div>
    	<div class="navigationBg">
        	<div class="navigation">
                <div id="leftNav" class="leftNav">
                	<div id="menuBg1" class="menuBg hide" style="display: none; left: 0px;">
                		<a href=""><img src="/resources/images/title3.png"></a>
                	</div>
                    <ul id="left">
                        <li address="/web/index" style="color: rgb(51, 51, 51);">首页</li>
                        <li address="/web/about" style="color: rgb(51, 51, 51);">公司介绍</li>
                        <li address="/web/business" style="color: rgb(51, 51, 51);">业务服务</li>
                    </ul>
                </div>
                <div class="sqLogo"></div>
                <div id="rightNav" class="rightNav">
                	<div id="menuBg2" class="menuBg" style="left: 292px;">
                		<a href=""><img src="/resources/images/title3.png"></a>
                	</div>
                    <ul id="right">           
                    	<li address="/web/news" style="color: rgb(51, 51, 51);">iS学院</li>
                        <li address="/web/news" style="color: rgb(51, 51, 51);">iS频道</li>
                        <li address="/web/contact" style="color: rgb(51, 51, 51);">Join iS</li>
                    </ul>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
      	<div style="clear:both"></div>

		<div class="container" id="page">
			<?php echo $content; ?>
		
			<div class="foot xfoot">
		    	Copyright &copy; <?php echo date('Y'); ?> by Nanjing IS Enterprise Managerment Cousulting CO.,Ltd.<br/>
				All Rights Reserved.
		    </div>
		</div><!-- page -->
	</div>
</body>
</html>