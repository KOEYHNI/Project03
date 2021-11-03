<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>추천도서</title>
	<link rel="stylesheet" href="include/css/popup.css"/>
	<script>
		function setCookie( name, value, expiredays ) 
		{ 
		var todayDate = new Date(); 
		todayDate.setDate(todayDate.getDate() + expiredays); 
		document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";" 
		} 
		
		function closeWin() 
		{ 
		if ( document.forms[0].Notice.checked ) 
		setCookie( "Notice", "done" , 1); 
		self.close(); 
		} 
	</script>
	<style type="text/css">
		
	</style>
</head>
<body>
	<a href="../sub6/sub6.php" target="_blank"><img src="images/javscript_popup.jpg" alt="추천도서"/></a>
	<div class="pop_bottom">
		<form>
			<label><input type="checkbox" name="Notice" value="하루동안 닫기">하루 동안 안 볼래요</label>
			<input type="button" value="닫기" class="btn" onClick="closeWin()">
		</form>
	</div>
	
</body>
</html>