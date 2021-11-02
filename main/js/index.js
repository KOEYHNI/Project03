$(function(){
	
	$('.select_header> li > a').click(function(){
		var header = $(this);
		$('.select_header> li > a').removeClass('on');
		header.addClass('on');
	});
	
	var tab = $('.tab > li');
	var content = $('.tab_content > div');
	content.hide().eq(0).show();
	tab.click(function(e){
		e.preventDefault();
		var tg = $(this);
		var i = tg.index();
		tab.removeClass('active');
		tg.addClass('active');
		content.stop().fadeOut();
		content.eq(i).stop().fadeIn();
	});
	/* $(window).on('scroll', function(){	
		var sct = $(window).scrollTop();
		if (sct >= 200){
			$('.qm').trigger('click').removeClass('qm');
			bb=false;
		};
	});	 
	
	bb=true;
	$('.quick_toggle').click(function(){
		if(bb){
			$(this).addClass('quick_open').stop(true,true).animate({'margin-right':'-150px'},500);
			$('.quickmenu').stop(true,true).animate({'margin-right':'-150px'},500,function(){bb=true;$('.quickmenu').css('box-shadow','none');});
		}else{

			$(this).removeClass('quick_open').stop(true,true).animate({'margin-right':'0px'},500);
			$('.quickmenu').stop(true,true).animate({'margin-right':'0px'},500,function(){bb=true; $('.quickmenu').css('box-shadow','0 2px 10px #999999');});
		}
	}); */
	
	
	
		
	var slider_img = $('.slider_img');
	var control_btn = $('.control_button');
	var current = 0;
	
	var setInterval_id;
	
	control_btn.click(function(){
		var tg = $(this);
		i = tg.index();
		if(current == tg.index()){return};
		control_btn.removeClass('b_active');
		control_btn.removeClass('b_firston');
		control_btn.stop().animate({width:'15px'},{duration:400, ease:'easeOutCubic'});
		tg.addClass('b_active');
		tg.stop().animate({width:'40px'},{duration:400, ease:'easeOutCubic'});
		move_slide(i);
		$('.stop_button').trigger('click');
		$('.start_button').trigger('click');
		return true; // preventDefault();
	});
		
	function timer(){
		setInterval_id=setInterval(function(){
			var i = current+1;
			if(i == slider_img.size()){i=0;};
			control_btn.eq(i).trigger('click');
		},2500);
	};
	timer();
	
	function move_slide(i){
		var prev_img = slider_img.eq(current);
		var next_img = slider_img.eq(i);
		
		prev_img.css('left','0%').stop().animate({left:'-100%'},{duration:400, ease:'easeOutCubic'});
		next_img.css('left','100%').stop().animate({left:'0%'},{duration:400, ease:'easeOutCubic'});
		current = i;
	};
	$('.left').hover(
		function(){
			var a = $(this);
			var img = a.find('img');
			var src_off = img.attr('src');
			var src_on = src_off.replace('.p','_on.p');
			img.attr('src',src_on);
		},
		function(){
			var a = $(this);
			var img = a.find('img');
			var src_on = img.attr('src');
			var src_off = src_on.replace('_on.p','.p');
			img.attr('src',src_off);
		}
	);
	$('.right').hover(
		function(){
			var a = $(this);
			var img = a.find('img');
			var src_off = img.attr('src');
			var src_on = src_off.replace('.p','_on.p');
			img.attr('src',src_on);
		},
		function(){
			var a = $(this);
			var img = a.find('img');
			var src_on = img.attr('src');
			var src_off = src_on.replace('_on.p','.p');
			img.attr('src',src_off);
		}
	); 

	
	$('.left').click(function(){
		j=current;
		j--;
		if(j<0){j=$('.control_button').size()-1};
		$('.control_button').eq(j).trigger('click');
		$('.stop_button').trigger('click');
		$('.start_button').trigger('click');
		return true;
	});

	$('.right').click(function(){
		j=current;
		j++;
		if(j==$('.control_button').size()){j=0};
		$('.control_button').eq(j).trigger('click');
		$('.stop_button').trigger('click');
		$('.start_button').trigger('click');
		return true;
	});	
	/* $('.slider_img').hover(
		function(){
			$('.b_off').trigger('click');
		},
		function(){
			$('.b_on').trigger('click');
		}
	);	 */
	
	$(document).on('click', '.b_off', function(){
		
		clearInterval(setInterval_id);
		$('.b_off').addClass('b_on');
		$('.b_on').removeClass('b_off');
	});
	$(document).on('click', '.b_on', function(){
		timer();
		$('.b_on').addClass('b_off');
		$('.b_off').removeClass('b_on');
	});		
	
	
	$('.f_left').hover(
		function(){
			var a = $(this);
			var img = a.find('img');
			var src_off = img.attr('src');
			var src_on = src_off.replace('.p','_on.p');
			img.attr('src',src_on);
		},
		function(){
			var a = $(this);
			var img = a.find('img');
			var src_on = img.attr('src');
			var src_off = src_on.replace('_on.p','.p');
			img.attr('src',src_off);
		}
	);
	$('.f_right').hover(
		function(){
			var a = $(this);
			var img = a.find('img');
			var src_off = img.attr('src');
			var src_on = src_off.replace('.p','_on.p');
			img.attr('src',src_on);
		},
		function(){
			var a = $(this);
			var img = a.find('img');
			var src_on = img.attr('src');
			var src_off = src_on.replace('_on.p','.p');
			img.attr('src',src_off);
		}
	); 
	
	if($.cookie('libpop') != 'no'){$('.popup').show()}; 
	
	$('.popup').css('cursor','move').draggable(); 
	var popup = $('.popup');
	$('.close_btn').click(function(){
		popup.fadeOut();
		return false;
	});
	$('.close_btndy').on('click',function(){
		$.cookie('libpop','no',{expires:1});
		popup.fadeOut();
		return false;
	});
	
	var mySlider = $('#f_banner_box ul').bxSlider({
		mode:'horizontal',
		speed:500,
		pause: 2500,
		pager:true,
		moveSlides:1,
		slideWidth:210,
		minSlides:6,
		maxSlides:6,
		slideMargin:0,
		auto:true,
		autoHover:true,
		controls:true,
	});
	
	$('.f_left').on('click',function(){
		mySlider.goToPrevSlide();
		return false;
	});
	$('.f_right').on('click',function(){
		mySlider.goToNextSlide();
		return false;
	});

	
	
	
    var icons = $('.intro_icon>li');
	var icontimer;
	function move_icons(target){
		target.animate({'top':'0px'},500)
		target.animate({'top':'10px'},500)
	};
	
	var rbinterval = 2000;
	$('.slideshow').each(function(){
		var rbtimer;
		var container = $(this);
		
		function switchImg(){
			var anchors = container.find('a');
			var first = anchors.eq(0);
			var second = anchors.eq(1);
			first.fadeOut().appendTo(container);
			second.fadeIn();
		};
		function startTimer(){
			rbtimer=setInterval(switchImg,rbinterval);
		};
		function stopTimer(){
			clearInterval(rbtimer);
		};
		startTimer();
		container.find('a').hover(
			function(){
				stopTimer();
			},
			function(){
				startTimer();
			}
		);
	});
	
	icons.hover(
		function(){
			var icon  = $(this).find('span');
			icon.css('background-color','#e0e0e3');
			icon.css('border-radius','100px');
			move_icons(icon);
			icontimer=setInterval(function(){
				move_icons(icon);
			},1000);
		},
		function(){
			var icon  = $(this).find('span');
			icon.css('background-color','#ffffff');
			icon.css('border-radius','none');
			icon.stop(true,true).animate({'top':'10px'},200);
			clearInterval(icontimer);
		}
	);		
	
	
	$('.arrow').each(function(){
		var a = $(this);
		var img = a.find('img');
		var src_off = img.attr('src');
		// src_off= imgages/menu01_off.png
		var src_on = src_off.replace('.p','h.p');
		// src_on= imgages/menu01_on.png
		
		$('<img />').attr('src',src_on);
		
		a.bind('mouseenter focus',function(){
			img.attr('src',src_on);
		});
		a.bind('mouseleave blur',function(){
			img.attr('src',src_off);
		});
	});
	
	var ntcurrent = 0;
	var nbook = $('.rc_book > a');
	var rollinter;
	
	function rolling(){
		rollinter = setInterval(function(){
			var prev = nbook.eq(ntcurrent);
			moverb(prev, '0%','-100%');
			ntcurrent++;
			if(ntcurrent == nbook.size()){ntcurrent=0;}
			var next = nbook.eq(ntcurrent);
			moverb(next, '100%','0%');
		},1500);
	};
	rolling();
	
	function moverb(tg, start, end){
		tg.css('top',start).stop().animate({top:end},{duration:500,ease:'easeOutCubic'});
	};
	nbook.hover(
		function(){
			clearInterval(rollinter);
		},
		function(){
			rolling();
		}
	);
	
	

});