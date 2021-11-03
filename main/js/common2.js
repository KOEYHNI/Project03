$(function(){
	$('.control_panel').css('top','505px');
	$('.sub_menu').css('top','142px');
	setTimeout(function() {
		$('.control_panel').animate({'top':'546px'},300);
		$('.sub_menu').animate({'top':'183px'},300);
		$('#top_event').slideDown();
	}, 3000);
	
	$('.social').each(function(){
		var a = $(this);
		var img = a.find('img');
		var src_off = img.attr('src');
		// src_off= imgages/menu01_off.png
		var src_on = src_off.replace('.p','_on.p');
		// src_on= imgages/menu01_on.png
		
		$('<img />').attr('src',src_on);
		
		a.bind('mouseenter focus',function(){
			img.attr('src',src_on);
		});
		a.bind('mouseleave blur',function(){
			img.attr('src',src_off);
		});
	});
	var balloon = $('<div class="balloon"></div>').appendTo('body');
	
	function updateBallonPosition(x,y){
		balloon.css({left:x+15,top:y+15});
	};
	
	function showBallon(){
		balloon.stop().css('opacity',0).show().animate({opacity:1},1000);
	};
	
	function hideBallon(){
		balloon.stop().animate({opacity:0},1000,function(){ballon.hide();});
	};
	$('.show_balloon').each(function(){
		var element = $(this);
		var text = element.attr('title');
		element.attr('title','');
		element.hover(
			function(event){
				balloon.text(text);
				updateBallonPosition(event.pageX,event.pageY);
				showBallon();
			},
			function(){
				hideBallon();
			}
		);
		element.mousemove(function(event){
			updateBallonPosition(event.pageX,event.pageY);
		});
	});
	
	 $(window).on('scroll', function(){	
		var sct = $(window).scrollTop();
		if (sct >= 200){
			$('.qm').trigger('click').removeClass('qm');
			return false;
		};
	});	 
	
	bb=true;
	$('.quick_toggle').click(function(){
		if(bb){
			$(this).addClass('quick_open').stop(true,true).animate({'margin-right':'-150px'},500);
			$('.quickmenu').stop(true,true).animate({'margin-right':'-150px'},500,function(){bb=false;$('.quickmenu').css('box-shadow','none');});
		}else{

			$(this).removeClass('quick_open').stop(true,true).animate({'margin-right':'0px'},500);
			$('.quickmenu').stop(true,true).animate({'margin-right':'0px'},500,function(){bb=true; $('.quickmenu').css('box-shadow','0 2px 10px #999999');});
		}
	});
	
	
	
	
	
	$('.one_depth').each(function(){
		var a = $(this);
		var depth2 = a.find('.sub_menu');
		
		
		a.bind('mouseenter focus',function(){
			$('.on').removeClass('onn');
			depth2.stop(true,true).fadeIn();
		});
		a.bind('mouseleave blur',function(){
			depth2.stop(false,false).css('display','none');
			$('.on').addClass('onn');
		});
	});
	
	var menu = $('.s_menu_list > li');
	/* menu 1뎁스 메뉴 */
	var wrap = $('.side_menu');
	/* wrap 1뎁스 + 1뎁스를 감싸고 있는 것 */
	
	// menuHeight = 1뎁스의 높이
	var pageURL = location.href;
	
	var activeMenu;
	// activeMenu 현재 페이지 주소와 일치하는 메뉴를 저장시킬 변수
	menu.on({
		mouseover:function(){
			var tg = $(this);
			menu.removeClass('active');
			tg.addClass('active');
		},
		mouseout:function(){
			var tg = $(this);
			tg.removeClass('active');
			onActive();
		}
	});
	menu.each(function(i){
		
		var tg = $(this);
		var sub = tg.find('> .s_menu_list  > li');
		var menuURL = tg.children('a').attr('href');
		var active = pageURL.indexOf(menuURL);
		if(active>-1){activeMenu = tg;};
		sub.each(function(j){
			var tg = $(this);
			var subURL = tg.children('a').attr('href');
			active = pageURL.indexOf(subURL);
			if(active>-1){activeMenu = tg;};
			
		}); // sub.each 끝
		sub.on({
			mouseover:function(){
				var tg = $(this);
				sub.removeClass('on');
				tg.addClass('on');
				
			},
			mouseout:function(){
				var tg = $(this);
				tg.removeClass('on');
			}
		}); // sub.on 끝
	}); // menu.each 끝
	onActive();
	function onActive(){
		if(activeMenu){activeMenu.trigger('mouseover');};
	};
	
	$('.t_close_btn').on('click',function(){
		$('#top_event').slideUp();
		$('.control_panel').css('top','505px');
		$('.sub_menu').css('top','142px');
	});
	
});