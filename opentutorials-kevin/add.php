<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	</head>
	<body>
		<fieldset>
			<legend>
				POST
			</legend>
			<form action="./example2.php" method="POST">
				<p>
					닉네임 :
					<input type="text" name="nickname" />
					<br />
				</p>
				<p>
					직업 :
					<select name="job">
						<option value="designer">디자이너</option>
						<option value="programmer">프로그래머</option>
						<option value="planner">기획자</option>
					</select>
				</p>
				<input type="submit" value="전송"/>
			</form>

		</fieldset>
	</body>
</html>