<?php
	function alert($str) {
		echo "<script>alert('$str');</script>";
	}

	function move_page($location) {
		echo "<script>document.location.href='$location'</script>";
	}

?>