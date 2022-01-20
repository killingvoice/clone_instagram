<?php
	include "module/mysql.php";
	include "module/util.php";

	$email = $_POST['email'];
	$name  = $_POST['name' ];
	$id    = $_POST['id'   ];
	$pw    = $_POST['pw'   ];

	$query = "
		insert into
		  user (email, name, id, password, sn_date)
		values ('$email', '$name', '$id', password('$pw'), now())
	";

	if(mysql_insert($query)) {
		alert("signup success");
		move_page("../html/login.php");
	} else {
		alert("signup fail");
		move_page("../html/signup.php");
	}
?>