<?php
	include "module/mysql.php";
	include "module/util.php";

	$id = $_POST["id"];
	$pw = $_POST["pw"];

	$query = "
		select id, name, email, image
		  from user
		 where (id = '$id' or email = '$id')
		   and password = password('$pw')
	";

	$result = mysql_select_once($query);

	if(empty($result)) {
		alert("아이디 및 비밀번호를 확인하세요.");
		move_page("../html/login.php");
	} else {
		session_start();
		$_SESSION['id'   ] = $result["id"   ];
		$_SESSION['name' ] = $result["name" ];
		$_SESSION['email'] = $result["email"];
		$_SESSION['image'] = $result["image"];
		alert($result["name"]."님 환영합니다.");
		move_page("../html/login.php");
	}
?>