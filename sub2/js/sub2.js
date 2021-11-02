$(function(){
	var class_closed = 'closed';
	$('.accordion').each(function(){
		var t = $(this);
		var allTt = t.find('.label');
		var allCon = $('.content_wrap');
		/* allDd.hide();
		allDd.eq(0).show();
		allDt.css('cursor','pointer');
		allDt.eq(0).css('cursor','default'); */
		
		closeAll(); //호이스팅
		
		function closeAll(){
			allCon.addClass(class_closed);
		}; 
		function open(tt,con){
			tt.removeClass(class_closed);
			con.removeClass(class_closed);
		};
		allTt.click(function(){
			var tt = $(this);
			var con = tt.parent().parent().find('.content_wrap');
			closeAll();
			open(tt,con);
		});
	});
	var board = $('#qna_board');
	$.ajax({
		url:'data2.xml',
		datType:'xml',
		success:function(xml){
			var QnA = $(xml);
			QnA.find('content').each(function(){
				var content = $(this);
				var text_no = content.find('no').text();
				var text_title = content.find('title').text();
				var text_date = content.find('date').text();
				var text_name = content.find('name').text();
				var text_view = content.find('view').text();
				var text_con = content.find('con').text();
				/* 	tag = $(text_con); */
				var bd = $('<div class="accordion"></div>');
				var title = $('<div class="qna_title"></div>')
				var cw = $('<div class="content_wrap"></div>');
				
				var no = $('<div>').html(text_no);
				var label = $('<div class="label cf"></div>').html(text_title);
				/* var con = $('<div class="explanation">').html(text_con); */
				/* var con = $('<div class="explanation" />'); */
				var con = $('<div class="explanation"></div>').append(text_con);
				var date = $('<div></div>').html(text_date);
				var name = $('<div></div>').html(text_name);
				var view = $('<div></div>').html(text_view);
				bd.append(no);
				/* con.append(tag); */
				title.append(label);
				bd.append(title);
				bd.append(date);
				bd.append(name);
				bd.append(view);
				board.append(bd);
				cw.append(con);
				bd.append(cw);
				var class_closed = 'closed';
				$('.accordion').each(function(){
					var t = $(this);
					var allTt = t.find('.label');
					var allCon = $('.content_wrap');
					
					closeAll(); //호이스팅
					
					function closeAll(){
						allCon.addClass(class_closed);
					}; 
					function open(tt,con){
						tt.removeClass(class_closed);
						con.removeClass(class_closed);
					};
					allTt.click(function(){
						var tt = $(this);
						var con = tt.parent().parent().find('.content_wrap');
						closeAll();
						open(tt,con);
					});
				});
			});
		}
	});	
});