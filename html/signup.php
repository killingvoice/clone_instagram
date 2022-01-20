<!DOCTYPE html>

<?php
	//include "/workspace/php/shop/php/clothes_detail.php";
?>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../stylesheet/main.css" />
		<link rel="stylesheet" href="../stylesheet/signup.css" />
	</head>
	<body>
		<div class="flex1 main-div flex-center flex-col">
			<div class="flex login-div flex-col">
				<h1 class="text-center" style="margin-bottom: 0px">Instagram_</h1>
				<h4 class="text-center" style="margin-bottom: 10px">친구들의 사진과 동영상을 보려면<br>가입하세요.</h4>
				<div class="flex flex-center">
					<button class="submit" type="submit">Facebook으로 로그인</button>
				</div>
				<div class="flex" style="margin: 10px 0px;">
					<div class="flex1 flex-center" style="padding: 0px 50px;">
						<div class="flex1 hr"></div>
						<a class="text-center" style="width: 60px;">또는</a>
						<div class="flex1 hr"></div>
					</div>
				</div>
				<form method="POST" action="../php/signup.php">
					<div class="flex flex-center">
						<input class="input" type="text" name="email" placeholder="이메일 주소">
					</div>
					<div class="flex flex-center">
						<input class="input" type="text" name="name" placeholder="성명">
					</div>
					<div class="flex flex-center">
						<input class="input" type="text" name="id" placeholder="사용자 이름">
					</div>
					<div class="flex flex-center">
						<input class="input" type="password" name="pw" placeholder="비밀번호">
					</div>
					<div class="flex flex-center">
						<input class="submit" type="submit" value="가입하기">
					</div>
				</form>
			</div>
			<div class="signup-div flex flex-center">
				<span>계정이 있으신가요?</span>&nbsp;<a href="login.php">로그인</a>
			</div>
			<div class="flex down-div flex-center">
				<strong>앱 다운로드</strong>
			</div>
		</div>
	</body>
</html>