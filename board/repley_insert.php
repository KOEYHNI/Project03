<meta charset='utf-8'>
<?php
	include "../include/define.php";

	

	$name   = $_GET["name"];
	$id    = $_GET["id"];
	$id_num    = $_GET["id_num"];
	$content = $_POST['content'];
	$content = htmlspecialchars($content, ENT_QUOTES);
	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

	

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "insert into repley (id_num , name, id, content,  regist_day) ";
	$sql .= "values('$id_num', '$name', '$id', '$content', '$regist_day')";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행


	mysqli_close($con);  // DB 연결 끊기

	echo "
		<script>
		location.href = 'board_view.php?num=$id_num&page=1';
		</script>
	";
?>

