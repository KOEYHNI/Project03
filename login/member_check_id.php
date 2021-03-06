<!DOCTYPE html>
<html lang="ko">
<head>
<style type="text/css">
	h3{padding-left: 5px; border-left: solid 5px #52c3f1;}
	#close{margin: 20px 0 0 80px; cursor: pointer;}
	.close_btn{background:#52c3f1; color:#ffffff; font-weight:bold; width:50px; text-align: center; border-radius:8px; padding: 5px 20px;}
	.close_btn:hover{background:#1196cc;}
</style>
<script>
    function setParentText(){
        opener.document.getElementById("pInput").value = document.getElementById("cInput").value;
        opener.document.getElementById("idck").readOnly = true;
    }
</script>
</head>
<body>
	<h3>아이디 중복체크</h3>
	<p>
	<input type="hidden" id="cInput" value="yes" />			
	<?php
		include "../include/define.php";


		$id = $_GET["id"];

		if(!$id) 
		{
			echo("<li>아이디를 입력해 주세요!</li>");
		}
		else
		{
			$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);


			$sql = "select * from members where id='$id'";
			$result = mysqli_query($con, $sql);

			$num_record = mysqli_num_rows($result);

			if ($num_record)
			{
				echo "<li>".$id." 아이디는 중복됩니다.</li>";
				echo "<li>다른 아이디를 사용해 주세요!</li>";
			}
			else
			{
				echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
				echo "<script>setParentText();</script>";
			}

			mysqli_close($con);
		}
	?>
	</p>
	<div id="close">
		<p class="close_btn" onclick="javascript:self.close()"/>닫기</p>
	</div>
</body>
</html>