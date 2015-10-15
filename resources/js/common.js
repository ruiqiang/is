// JavaScript Document
$(document).ready(function(){
		if($(".currentNav").parent().attr("id") == "left"){
			var index = $("#left li").index($(".currentNav"));
			$("#menuBg1").css("left",String(146*index)+"px");
			$("#leftNav, #rightNav").mouseleave(function(){
				$("#menuBg2").css("left",0).hide();
				$("#menuBg1").show().animate({left:String(146*index)+"px"},"fast");
				$(".navigation li").css("color","#333");
				$(".currentNav").css("color","#F00");
			});
		}else if($(".currentNav").parent().attr("id") == "right"){
			var index = $("#right li").index($(".currentNav"));
			$("#menuBg2").css("left",String(146*index)+"px");
			$("#leftNav, #rightNav").mouseleave(function(){
				$("#menuBg1").css("left",0).hide();
				$("#menuBg2").show().animate({left:String(146*index)+"px"},"fast");
				$(".navigation li").css("color","#333");
				$(".currentNav").css("color","#F00");
			});
		}
		
		$("#leftNav li").mouseenter(function(){
			$("#menuBg1").show();
			$("#menuBg2").hide();
			$("#leftNav li, #rightNav li").css("color", "#333");
			
			targetUrl = $(this).attr("address");
			$("#menuBg1").animate({left:this.offsetLeft});
			$(this).css("color", "#F00");
			$("#menuBg1 a").attr("href", targetUrl);
		});
		
		$("#rightNav li").mouseenter(function(){
			$("#menuBg2").show();
			$("#menuBg1").hide();
			$("#leftNav li, #rightNav li").css("color", "#333");

			$(this).css("color", "#F00");
			targetUrl = $(this).attr("address");
			$("#menuBg2").animate({left:this.offsetLeft});
			$("#menuBg2 a").attr("href", targetUrl);
		});
});

var scrollBar = {
	$id: function(id){
		return document.getElementById(id);
	},
	initialize: function(wordsDiv, scrollbar, scrollbaHandle){
		iniHeight = (wordsDiv.offsetHeight/wordsDiv.scrollHeight)*scrollbar.offsetHeight;
		if(iniHeight > 15){
			scrollbaHandle.style.height = iniHeight + "px";
		}else{
			scrollbaHandle.style.height = "15px";
		}
	},
	 bindMove: function(wordsDiv, scrollbarBg, scrollbaHandle){
		 $(scrollbaHandle).bind("mousedown", function(e){
			 e = window.event || arguments.callee.caller.arguments[0];
			 var relY = e.clientY - this.offsetTop;
			 var oY = e.offsetY;
			 $(document).bind("mousemove", function(e){
				 if(scrollbaHandle.offsetTop >= 0 && scrollbaHandle.offsetTop <= (scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight)){
				 	scrollbaHandle.style.top = e.clientY - relY + "px";
					
					if(scrollbaHandle.offsetTop < 0)
						scrollbaHandle.style.top = "0px";
					if(scrollbaHandle.offsetTop > (scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight))
						scrollbaHandle.style.top = scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight + "px";
				 }
				 wordsDiv.scrollTop = (e.clientY - relY)/(scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight)*(wordsDiv.scrollHeight - wordsDiv.offsetHeight);
				 stopPropagate(e);
			 });
			 stopPropagate(e);
		 });
		 $(document).bind("mouseup", function(){
			 $(document).unbind("mousemove");
		 });
	 },
	 bindClick: function(wordsDiv, scrollbarBg, scrollbaHandle){
		 var intervalId = null;
		 $(scrollbarBg).bind("mousedown", function(e){
			 e = window.event || arguments.callee.caller.arguments[0];
			 var mouseY = 0;
			 if(e.offsetY){
				 mouseY = e.offsetY;
			 }else{
				 mouseY = e.clientY - getTop(this);
			 }
			 if(mouseY > scrollbaHandle.offsetTop){
				 var i=0;
				 intervalId = setInterval(function(){
					 i++;
					 scrollbaHandle.style.top = scrollbaHandle.offsetTop + i + "px";
					 wordsDiv.scrollTop = scrollbaHandle.offsetTop/(scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight)*(wordsDiv.scrollHeight - wordsDiv.offsetHeight);
					 if(scrollbaHandle.offsetTop >= (scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight)){
						  scrollbaHandle.offsetTop = (scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight);
						  clearInterval(intervalId);
					 }
				 }, 10);
			 }
			 if(mouseY < scrollbaHandle.offsetTop){
				 var i=0;
				 intervalId = setInterval(function(){
					 i--;
					 scrollbaHandle.style.top = scrollbaHandle.offsetTop + i + "px";
					 wordsDiv.scrollTop = scrollbaHandle.offsetTop/(scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight)*(wordsDiv.scrollHeight - wordsDiv.offsetHeight);
					 if(scrollbaHandle.offsetTop <= 0){
						  scrollbaHandle.offsetTop = 0;
						  clearInterval(intervalId);
					 }
				 }, 10);
			 }
		 });
		 $(scrollbarBg).bind("mouseup", function(){
			 clearInterval(intervalId);
		 });
	 },
	 bindScroll: function(wordsDiv, scrollbarBg, scrollbaHandle, wordsDivOut){
		  $(wordsDivOut).bind("mousewheel", function(e){
			  e = window.event || arguments.callee.caller.arguments[0];
			  var eDir = e.wheelDelta/120;
			  dTop = 130/(wordsDiv.scrollHeight - wordsDiv.offsetHeight)*(scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight);
			  if(eDir > 0){
			  	  wordsDiv.scrollTop -= 100;			  
				  if(scrollbaHandle.offsetTop >= 0){
				  	  $(scrollbaHandle).css("top", scrollbaHandle.offsetTop - dTop+ "px");
				  }
				  if(scrollbaHandle.offsetTop < 0){
					  $(scrollbaHandle).css("top", "0px");
				  }
			  }
  			  else if(eDir < 0){
			  	  wordsDiv.scrollTop += 100;
				  if(scrollbaHandle.offsetTop < (scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight)){
				  	  $(scrollbaHandle).css("top", scrollbaHandle.offsetTop + dTop+ "px");
				  }
				  if(scrollbaHandle.offsetTop >= (scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight)){
					  $(scrollbaHandle).css("top", scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight);
				  }
			  }
			  stopDefault(e);
		  });
		  $(wordsDivOut).bind("DOMMouseScroll", function(){
			  e = window.event || arguments.callee.caller.arguments[0];
			  var eDir = -e.detail/3;
			  dTop = 100/(wordsDiv.scrollHeight - wordsDiv.offsetHeight)*(scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight);
			  if(eDir > 0){
			  	  wordsDiv.scrollTop -= 80;			  
				  if(scrollbaHandle.offsetTop >= 0){
				  	  $(scrollbaHandle).css("top", scrollbaHandle.offsetTop - dTop+ "px");
				  }
				  if(scrollbaHandle.offsetTop < 0){
					  $(scrollbaHandle).css("top", "0px");
				  }
			  }
  			  else if(eDir < 0){
			  	  wordsDiv.scrollTop += 80;
				  if(scrollbaHandle.offsetTop < (scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight)){
				  	  $(scrollbaHandle).css("top", scrollbaHandle.offsetTop + dTop+ "px");
				  }
				  if(scrollbaHandle.offsetTop >= (scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight)){
					  $(scrollbaHandle).css("top", scrollbarBg.offsetHeight - scrollbaHandle.offsetHeight);
				  }
			  }
			  stopDefault(e);
		  });
	 },
	 use: function(WordsDiv, scrollBarBg, scrollBarHandle,WordsOut){
		 if(WordsDiv.scrollHeight > (WordsDiv.offsetHeight+1)){		 
			 scrollBarBg.style.display = "block";
			 this.initialize(WordsDiv, scrollBarBg, scrollBarHandle);
			 this.bindMove(WordsDiv, scrollBarBg, scrollBarHandle);
			 this.bindClick(WordsDiv, scrollBarBg, scrollBarHandle, WordsOut);
			 this.bindScroll(WordsDiv, scrollBarBg, scrollBarHandle, WordsOut);
		 }else{
			 scrollBarBg.style.display = "none";
		 }
	 }
};


function changeBanner(){
	if(readyBannerId == "home_content1")
		$("#forLeftArrow").trigger("click");
	else if(readyBannerId == "home_content2"){
		$("#forRightArrow").trigger("click");
	}
}


//获取元素的纵坐标 
function getTop(e){ 
	var offset=e.offsetTop; 
	if(e.offsetParent!=null) offset+=getTop(e.offsetParent); 
	return offset; 
} 
//获取元素的横坐标 
function getLeft(e){ 
	var offset=e.offsetLeft; 
	if(e.offsetParent!=null) offset+=getLeft(e.offsetParent); 
	return offset; 
} 

//阻止冒泡
function stopPropagate(e) {
    if(e && e.stopPropagation) { e.stopPropagation(); } 
    else { window.event.cancelBubble = true; }
    return false;
}

//阻止浏览器默认行为
function stopDefault(e) {
	if(e && e.preventDefault) {
	　　e.preventDefault();
	} else {
	　　window.event.returnValue = false;
	}
	return false;
}



(
	function($){
		$.extend({
				"easypage":function(options){
					var currentpage = options.currentpage;//当前页	
					var contents = $("#"+options.contentId+" ."+options.contentclass);//要显示的内容
					var contentcount = contents.length;//得到内容的个数
					var pagecount = Math.ceil(contentcount/options.everycount);//计算出页数
					//拼接导航按钮
					var navigatehtml = "";
					for(var i = 1;i <= pagecount;i++){
							navigatehtml+='<a class="pagenavigate" href="javascript:void(0)">'+i+'</a>';
					}
					//加载导航按钮
					$("#"+options.navigateid).html(navigatehtml);	
					
					//得到所有按钮
					var navigates = $(".pagenavigate");
					//隐藏所有的导航按钮
					$.extend({
						"hidenavigates":function(){
							navigates.each(function(){
								$(this).hide();
							})	
						}	
					});
					
					//显示导航按钮
					$.extend({
						"shownavigate":function(currentnavigate, currentindex){
							$.hidenavigates();
							$("#ellipis").hide();
							if(navigates.length <= 1){
								return;
							}
							if(navigates.length > 5){
								if(currentindex < 2){
									for(var i = 0;i < 3;i++){
										$(navigates[i]).show();
									}
									$("#ellipis").show();
									$(navigates[navigates.length-1]).before($("#ellipis")).show();
									return;
								}
								if(currentindex > navigates.length-3){
									for(var i = navigates.length-3; i<navigates.length; i++){
										$(navigates[i]).show();
									}
									$("#ellipis").show();
									$(navigates[0]).after($("#ellipis")).show();
									return;
								}
							}
							var begin = currentnavigate>=options.navigatecount?currentnavigate-parseInt(options.navigatecount):0;
							if(begin>navigates.length-2*options.navigatecount){
								begin = navigates.length-2*options.navigatecount;
							}
							for(var i = begin;i < currentnavigate+parseInt(options.navigatecount);i++){
								$(navigates[i]).show();
							}
						}	
					});
					
					//高亮显示某个按钮
					$.extend({
						"lightnavigate":function(currentnavigate){
							currentnavigate.addClass("pagenavigateon");	
						}	
					});
					
					//移除所有高亮按钮
					$.extend({
						"removelight":function(){
							$(".pagenavigateon").each(
								function(){
									$(this).removeClass("pagenavigateon");	
								}
							)
						 }	
					});
					
					//显示某页的内容
					$.extend({
						"showPage":function(page){
							contents.each(
								function(contentindex){
									if(contentindex>=page*options.everycount && contentindex < (page+1)*options.everycount){
									$(this).show();	
									}else{
									$(this).hide();	
									}
								}
							);
						}
					});
					
					//隐藏前进后退按钮
					$.extend({
						"hidePreNext":function(page){
								if(page==pagecount-1){
									if(navigates.length <= 1){
										$("#pagepre").hide();
										$("#pagenext").hide();	
										return;
									}
									$("#pagenext").hide();	
									$("#pagepre").show();
								}else if(page==0){
									$("#pagepre").hide();
									$("#pagenext").show();	
								}else{
									$("#pagenext").show();
									$("#pagepre").show();	
								}
						}	
					});
					//显示指定的导航按钮
					$.shownavigate(0, 0);
					//隐藏所有的内容
					$.showPage(0);
					//开始时隐藏后退按钮
					$.hidePreNext(0);
					//高亮显示第一个按钮
					if(pagecount>0){
							$.lightnavigate($(navigates.get(0)));
					}
					//点击导航按钮
					$(".pagenavigate").each(
						function(myindex){
							$(this).click(
								function(){
									$.showPage(myindex);
									$.removelight();
									$.lightnavigate($(this));
									currentpage = myindex;
									$.hidePreNext(currentpage);
									var na = Math.floor((currentpage+1)/options.navigatecount)*options.navigatecount;
									$.shownavigate(na, myindex);	
								}
							);
						}
					);
					//点击后退按钮
					$("#pagepre").click(
						function(){
							--currentpage<=0 && (currentpage=0);
							$.showPage(currentpage);
							$.removelight();
							$.lightnavigate($(navigates.get(currentpage)));
							$.hidePreNext(currentpage);
							var na = Math.floor(currentpage/options.navigatecount)*options.navigatecount;
							$.shownavigate(na, currentpage);	
						}
					);
					//点击前进按钮
					$("#pagenext").click(
						function(){
							++currentpage>=pagecount-1 && (currentpage=pagecount-1);
							$.showPage(currentpage);	
							$.removelight();
							$.lightnavigate($(navigates.get(currentpage)));
							$.hidePreNext(currentpage);	
							var na = Math.floor((currentpage+1)/options.navigatecount)*options.navigatecount;
							$.shownavigate(na, currentpage);	
						}
					);
				}
		});
	}
)(jQuery)