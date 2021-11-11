<?php
    include "../include/define.php";

    $num   = $_GET["num"];
    $numm   = $_GET["numm"];

    $con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
    $sql = "delete from repley where num=$numm";
	mysqli_query($con, $sql);

	mysqli_close($con);


    echo "
        <script>
            location.href = 'board_view.php?num=$num&page=1';
        </script>
    ";
?>