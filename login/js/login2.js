$(function(){
	
	$('.guideText').each(function(){
		var guideText = this.defaultValue;
		var element = $(this);
		
		element.focus(function(){
		
				i=element.parent().find('img');
				src_off = i.attr('src');
				src_on = src_off.replace('.p','_on.p');
				i.attr('src',src_on);
		
		});
		element.blur(function(){
			
				i=element.parent().find('img');
				src_off = i.attr('src');
				src_on = src_off.replace('_on.p','.p');
				i.attr('src',src_on);
			
		});
		
	});







});


