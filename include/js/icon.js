jQuery(document).ready(function(){

	var box1 = $('.promo_box1');
	var box2 = $('.promo_box2');
	var box3 = $('.promo_box3');
	var box4 = $('.promo_box4');
	
	box1.hover(
		function(){
			box1.stop().animate({'width':'1352px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'0', 'left':'1400px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box1.find('>.promo_box1_theme>h3.p_title').stop().animate({'height':'80px','font-size':'26px', 'line-height':'90px'},{duration: 300, queue:false, easeing: 'easeOutCubic'});
			box1.find('>.promo_box1_theme>.promo_box_bar').css('display', 'none');
			
		},
		function(){
			box1.stop().animate({'width':'322px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'322px', 'left':'345px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'322px', 'right':'322px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'322px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box1.find('>.promo_box1_theme>h3.p_title').stop().animate({'height':'38px','font-size':'18px', 'line-height':'38px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box1.find('>.promo_box1_theme>.promo_box_bar').css('display', 'block');
		}
	);
	box2.hover(
		function(){
			box1.stop().animate({'width':'0', 'left':'-20px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'1352px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.find('>.promo_box2_theme>h3.p_title').stop().animate({'height':'80px','font-size':'26px', 'line-height':'90px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box2.find('>.promo_box2_theme>.promo_box_bar').css('display', 'none');
		},
		function(){
			box1.stop().animate({'width':'322px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'322px', 'left':'345px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'322px', 'right':'322px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'322px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.find('>.promo_box2_theme>h3.p_title').stop().animate({'height':'38px','font-size':'18px', 'line-height':'38px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box2.find('>.promo_box2_theme>.promo_box_bar').css('display', 'block');
		}
	);
	box3.hover(
		function(){
			box1.stop().animate({'width':'0', 'left':'-10px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'0', 'left':'-5px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'1352px', 'right':'-22px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'0', 'right':'-30px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.find('>.promo_box3_theme>h3.p_title').stop().animate({'height':'80px','font-size':'26px', 'line-height':'90px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box3.find('>.promo_box3_theme>.promo_box_bar').css('display', 'none');
		},
		function(){
			box1.stop().animate({'width':'322px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'322px', 'left':'345px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'322px', 'right':'322px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'322px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.find('>.promo_box3_theme>h3.p_title').stop().animate({'height':'38px','font-size':'18px', 'line-height':'38px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box3.find('>.promo_box3_theme>.promo_box_bar').css('display', 'block');
		}
	);
	box4.hover(
		function(){
			box1.stop().animate({'width':'0', 'left':'-50px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'0', 'left':'-5px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'0', 'right':'-50px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'1352px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.find('>.promo_box4_theme>h3.p_title').stop().animate({'height':'88px','font-size':'26px', 'line-height':'90px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box4.find('.promo_box4_content1').stop().animate({'width':'395px','font-size':'18px', 'line-height':'38px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box4.find('.promo_box4_content2').stop().animate({'width':'637px','font-size':'18px', 'line-height':'38px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box4.find('>.promo_box4_theme>.promo_box_bar').css('display', 'none');
		},
		function(){
			box1.stop().animate({'width':'322px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'322px', 'left':'345px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'322px', 'right':'322px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'322px', 'right':'-23px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.find('>.promo_box4_theme>h3.p_title').stop().animate({'height':'38px','font-size':'18px', 'line-height':'38px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box4.find('>.promo_box4_theme>.promo_box_bar').css('display', 'block');
		}
	);
});