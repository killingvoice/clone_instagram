<!DOCTYPE html>

<?php
	//include "/workspace/php/shop/php/clothes_detail.php";
?>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../stylesheet/main.css" />
		<link rel="stylesheet" href="../stylesheet/login.css" />
	</head>
	<body>
		<div class="flex1 main-div flex-center flex-col">
			<div class="flex login-div flex-col">
				<h1 class="text-center">Instagram_</h1>
				<form method="POST" action="">
					<div class="flex1 flex-col" style="padding-top: 10px;">
						<div class="flex flex-center">
							<input class="input" type="text" name="id" placeholder="전화번호, 사용자 이름 또는 이메일">
						</div>
						<div class="flex flex-center">
							<input class="input" type="password" name="pw" placeholder="비밀번호">
						</div>
						<div class="flex flex-center">
							<input class="submit" type="submit" value="로그인">
						</div>
						<div class="flex" style="margin: 20px 0px 0px 0px;">
							<div class="flex1 flex-center" style="padding: 0px 50px;">
								<div class="flex1 hr"></div>
								<a class="text-center" style="width: 60px;">또는</a>
								<div class="flex1 hr"></div>
							</div>
						</div>
						<div class="flex flex-center">
							<a class="text-center" style="margin-top: 16px; font-size: 16px">FaceBook으로 로그인</a>
						</div>
						<a class="text-center" style="margin-top: 16px;">비밀번호를 잊으셨나요?</a>
					</div>
				</form>
			</div>
			<div class="signup-div flex flex-center">
				<span>계정이 없으신가요?</span>&nbsp;<a href="signup.php">가입하기</a>
			</div>
			<div class="flex down-div flex-center">
				<strong>앱 다운로드</strong>
			</div>
		</div>
	</body>
</html>