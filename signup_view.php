
        	<html>  
	<head>
	<style>
	div {
		width:300px;
		margin: auto;
		margin-top: 100px;
		border: 1px solid black;
		padding: 50px 30px 50px 80px;
	}
	</style>
	</head>
	<body>
	<div>
	<?php
	?>
	<form action="signup/data_submitted" method="post">
	First name: <input type="text" name="first_name"><br><br>
	Last name: <input type="text" name="last_name"><br><br>
	E-mail: <input type="text" name="email"><br><br>
	Password: <input type = "password" name = "password"><br><br>
	Password confir: <input type = "password" name = "password_con"><br><br>
	City: <select name="city">
    <option value="nablus">Nablus</option>
    <option value="jenin">Jenin</option>
    <option value="ramallah">Ramallah</option>
	</select>
	<br><br>
	<input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female<br>
    <br><br>
	<input type="submit" name = "submit"><br><br>
	</form>
	<br>
	<form action="task2.php" method="post">
	<input type = "submit" value = "Back">
	</form>
	<br>
	

	</div>

</body>
</html>
