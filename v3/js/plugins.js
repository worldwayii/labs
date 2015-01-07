// plugins

// placeholder 功能扩展
window.onload = function(){
	var doc = document,
    inputs = doc.getElementsByTagName('input'),
    supportPlaceholder = 'placeholder' in doc.createElement('input'),
    placeholder = function(input){
        var text = input.getAttribute('placeholder'),
            defaultValue = input.defaultValue;
		if(input.value=="" || input.value==text){
			input.value=text;
			input.style.color = 'gray';
		}
		
        input.onfocus = function(){
            if(input.value === text){
                this.value = '';
				this.style.color = '';
            }
        }
        input.onblur = function(){
            if(input.value === ''){
				input.style.color = 'gray';
                this.value = text;
            }
        }
		input.onkeydown = function(){
			this.style.color = '';
		}
    };
	if(!supportPlaceholder){
		for(var i = 0, len = inputs.length; i < len; i++){
			var input = inputs[i], text = input.getAttribute('placeholder');
			if(input.type === 'text' && text){
				placeholder(input);
			}
		}    
	}
}

// hover显示，需包含关系
$.fn.menu = function(menu_drop){
	var prev = null;
	$(this).mouseenter(function(){
		if(prev!=this && prev!=null){
			clearTimeout(prev.timeId);
			$(this).find(menu_drop).show();
		}else{
			var e = this;
			e.timeId = setTimeout(function(){
				$(e).find(menu_drop).show(200);
			},300);
		}
		prev = this;
	}).mouseleave(function(){
		var e = this;
		setTimeout(function(){
			$(e).find(menu_drop).hide();
		},10);
		clearTimeout(this.timeId);
	}).parent().mouseleave(function(){
		prev = null;
	});;
}

// 焦点图
$.fn.focusImg = function(option){
	var opt = {
		content : "ul.slide-content li",
		speed : 500,
		lazyTime : 3500
	}
	var nav = this;
	opt = $.extend(option,opt);
	var sc = $(opt.content.split(" ")[0]);
	sc.css("position","relative");
	var length = sc.find("li").length;
	sc.find("li").each(function(i){
		$(this).css({
			zIndex : 0,
			position : "absolute"
		});
		if(i!=0){
			$(this).hide();
		}
	});
	var prev = null;

	$(nav).bind("myselect",function(){
		if(prev==this){
			return;
		}
		var li = $(opt.content);
		var length = li.length;
		var obj = li.eq($(this).index());
		li.filter(":visible").fadeOut(opt.speed);
		obj.fadeIn(opt.speed);
		$(this).addClass("active").siblings(".active").removeClass("active");
		prev = this;
	}).mouseover(function(){
		var _this = this;
		_this.timeId = setTimeout(function(){
			if(prev ==_this){
				return;
			}
			var li = $(opt.content);
			var length = li.length;
			var obj = li.eq($(_this).index());
			li.filter(":visible").fadeOut(opt.speed);
			obj.fadeIn(opt.speed);
			$(_this).addClass("active").siblings(".active").removeClass("active");
			prev = _this;
			
		},200);
		clearTimeout(timeId);
		
	}).mouseout(function(){
		loop($(nav),$(this).index()+1);
		clearTimeout(this.timeId);
	});
	var timeId = null;
	var loop = function(list,index){
		timeId = setTimeout(function(){
			list.eq(index).trigger("myselect");
			index++;
			if(index>=list.length){
				index = 0;
			}
			loop(list,index);
		},opt.lazyTime);
	}
	loop($(nav),1);
};


(function($){$.fn.slides=function(option){option=$.extend({},$.fn.slides.option,option);return this.each(function(){$('.'+option.container,$(this)).children().wrapAll('<div class="slides_control"/>');var elem=$(this),control=$('.slides_control',elem),total=control.children().size(),width=control.children().outerWidth(),height=control.children().outerHeight(),start=option.start-1,effect=option.effect.indexOf(',')<0?option.effect:option.effect.replace(' ','').split(',')[0],paginationEffect=option.effect.indexOf(',')<0?effect:option.effect.replace(' ','').split(',')[1],next=0,prev=0,number=0,current=0,loaded,active,clicked,position,direction,imageParent,pauseTimeout,playInterval;if(total<2){$('.'+option.container,$(this)).fadeIn(option.fadeSpeed,option.fadeEasing,function(){loaded=true;option.slidesLoaded();});$('.'+option.next+', .'+option.prev).fadeOut(0);return false;}
function animate(direction,effect,clicked){if(!active&&loaded){active=true;option.animationStart(current+1);switch(direction){case'next':prev=current;next=current+1;next=total===next?0:next;position=width*2;direction=-width*2;current=next;break;case'prev':prev=current;next=current-1;next=next===-1?total-1:next;position=0;direction=0;current=next;break;case'pagination':next=parseInt(clicked,10);prev=$('.'+option.paginationClass+' li.'+option.currentClass+' a',elem).attr('href').match('[^#/]+$');if(next>prev){position=width*2;direction=-width*2;}else{position=0;direction=0;}
current=next;break;}
if(effect==='fade'){if(option.crossfade){control.children(':eq('+next+')',elem).css({zIndex:10}).fadeIn(option.fadeSpeed,option.fadeEasing,function(){if(option.autoHeight){control.animate({height:control.children(':eq('+next+')',elem).outerHeight()},option.autoHeightSpeed,function(){control.children(':eq('+prev+')',elem).css({display:'none',zIndex:0});control.children(':eq('+next+')',elem).css({zIndex:0});option.animationComplete(next+1);active=false;});}else{control.children(':eq('+prev+')',elem).css({display:'none',zIndex:0});control.children(':eq('+next+')',elem).css({zIndex:0});option.animationComplete(next+1);active=false;}});}else{control.children(':eq('+prev+')',elem).fadeOut(option.fadeSpeed,option.fadeEasing,function(){if(option.autoHeight){control.animate({height:control.children(':eq('+next+')',elem).outerHeight()},option.autoHeightSpeed,function(){control.children(':eq('+next+')',elem).fadeIn(option.fadeSpeed,option.fadeEasing);});}else{control.children(':eq('+next+')',elem).fadeIn(option.fadeSpeed,option.fadeEasing,function(){});}
option.animationComplete(next+1);active=false;});}}else{control.children(':eq('+next+')').css({left:position,display:'block'});if(option.autoHeight){control.animate({left:direction,height:control.children(':eq('+next+')').outerHeight()},option.slideSpeed,option.slideEasing,function(){control.css({left:-width});control.children(':eq('+next+')').css({left:width,zIndex:5});control.children(':eq('+prev+')').css({left:width,display:'none',zIndex:0});option.animationComplete(next+1);active=false;});}else{control.animate({left:direction},option.slideSpeed,option.slideEasing,function(){control.css({left:-width});control.children(':eq('+next+')').css({left:width,zIndex:5});control.children(':eq('+prev+')').css({left:width,display:'none',zIndex:0});option.animationComplete(next+1);active=false;});}}
if(option.pagination){$('.'+option.paginationClass+' li.'+option.currentClass,elem).removeClass(option.currentClass);$('.'+option.paginationClass+' li:eq('+next+')',elem).addClass(option.currentClass);}}}
function stop(){clearInterval(elem.data('interval'));}
function pause(){if(option.pause){clearTimeout(elem.data('pause'));clearInterval(elem.data('interval'));pauseTimeout=setTimeout(function(){clearTimeout(elem.data('pause'));playInterval=setInterval(function(){animate("next",effect);},option.play);elem.data('interval',playInterval);},option.pause);elem.data('pause',pauseTimeout);}else{stop();}}
if(total<2){return;}
if(start<0){start=0;}
if(start>total){start=total-1;}
if(option.start){current=start;}
if(option.randomize){control.randomize();}
$('.'+option.container,elem).css({overflow:'hidden',position:'relative'});control.children().css({position:'absolute',top:0,left:control.children().outerWidth(),zIndex:0,display:'none'});control.css({position:'relative',width:(width*3),height:height,left:-width});$('.'+option.container,elem).css({display:'block'});if(option.autoHeight){control.children().css({height:'auto'});control.animate({height:control.children(':eq('+start+')').outerHeight()},option.autoHeightSpeed);}
if(option.preload&&control.find('img:eq('+start+')').length){$('.'+option.container,elem).css({background:'url('+option.preloadImage+') no-repeat 50% 50%'});var img=control.find('img:eq('+start+')').attr('src')+'?'+(new Date()).getTime();if($('img',elem).parent().attr('class')!='slides_control'){imageParent=control.children(':eq(0)')[0].tagName.toLowerCase();}else{imageParent=control.find('img:eq('+start+')');}
control.find('img:eq('+start+')').attr('src',img).load(function(){control.find(imageParent+':eq('+start+')').fadeIn(option.fadeSpeed,option.fadeEasing,function(){$(this).css({zIndex:5});$('.'+option.container,elem).css({background:''});loaded=true;option.slidesLoaded();});});}else{control.children(':eq('+start+')').fadeIn(option.fadeSpeed,option.fadeEasing,function(){loaded=true;option.slidesLoaded();});}
if(option.bigTarget){control.children().css({cursor:'pointer'});control.children().on('click',function(){animate('next',effect);return false;});}
if(option.hoverPause&&option.play){control.bind('mouseover',function(){stop();});control.bind('mouseleave',function(){pause();});}
if(option.generateNextPrev){$('.'+option.container,elem).after('<a href="#" class="'+option.prev+'" hidefocus="focus">Prev</a>');$('.'+option.prev,elem).after('<a href="#" class="'+option.next+'" hidefocus="focus">Next</a>');}
$('.'+option.next,elem).on('click',function(e){e.preventDefault();if(option.play){pause();}
animate('next',effect);});$('.'+option.prev,elem).on('click',function(e){e.preventDefault();if(option.play){pause();}
animate('prev',effect);});if(option.generatePagination){if(option.prependPagination){elem.prepend('<ul class='+option.paginationClass+'></ul>');}else{elem.append('<ul class='+option.paginationClass+'></ul>');}
control.children().each(function(){$('.'+option.paginationClass,elem).append('<li><a href="#'+number+'" hidefocus="focus">'+(number+1)+'</a></li>');number++;});}else{$('.'+option.paginationClass+' li a',elem).each(function(){$(this).attr('href','#'+number);number++;});}
$('.'+option.paginationClass+' li:eq('+start+')',elem).addClass(option.currentClass);$('.'+option.paginationClass+' li a',elem).on(option.trigger,function(){if(option.play){pause();}
clicked=$(this).attr('href').match('[^#/]+$');if(current!=clicked){animate('pagination',paginationEffect,clicked);}
return false;}).on("mouseleave",function(){});$('a.link',elem).on('click',function(){if(option.play){pause();}
clicked=$(this).attr('href').match('[^#/]+$')-1;if(current!=clicked){animate('pagination',paginationEffect,clicked);}
return false;});if(option.play){playInterval=setInterval(function(){animate('next',effect);},option.play);elem.data('interval',playInterval);}});};$.fn.slides.option={preload:false,preloadImage:'/img/loading.gif',container:'slides_container',generateNextPrev:false,next:'next',prev:'prev',pagination:true,generatePagination:true,prependPagination:false,trigger:'click',paginationClass:'pagination',currentClass:'current',fadeSpeed:350,fadeEasing:'',slideSpeed:350,slideEasing:'',start:1,effect:'slide',crossfade:false,randomize:false,play:0,pause:0,hoverPause:false,autoHeight:false,autoHeightSpeed:350,bigTarget:false,animationStart:function(){},animationComplete:function(){},slidesLoaded:function(){}};$.fn.randomize=function(callback){function randomizeOrder(){return(Math.round(Math.random())-0.5);}
return($(this).each(function(){var $this=$(this);var $children=$this.children();var childCount=$children.length;if(childCount>1){$children.hide();var indices=[];for(i=0;i<childCount;i++){indices[indices.length]=i;}
indices=indices.sort(randomizeOrder);$.each(indices,function(j,k){var $child=$children.eq(k);var $clone=$child.clone(true);$clone.show().appendTo($this);if(callback!==undefined){callback($child,$clone);}
$child.remove();});}}));};})(jQuery);
