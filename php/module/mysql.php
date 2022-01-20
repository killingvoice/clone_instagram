<?php
	$conn = mysqli_connect(
	 'localhost',
	 'root',
	 '1q2w3e4r!',
	 'instagram'
	);

	function mysql_select_once($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		return mysqli_fetch_array($result);
	}

	function mysql_select($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		return $result;
	}

	function mysql_insert($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		return $result;
	}
?>