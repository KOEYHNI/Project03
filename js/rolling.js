jQuery(document).ready(function(){
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
	notice.hover(
		function(){
			clearInterval(rollinter);
		},
		function(){
			rolling();
		}  
	);		
});