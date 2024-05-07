<?php
session_start();
    if (isset($_POST["submit"])) {
        $username = $_POST["first"];
        $password = $_POST["password"];

        if ($username == "admin" && $password == "admin") {
            $_SESSION["username"] = $username;
            header("location: admin.php");
        }
    }


?>
<!DOCTYPE html>
<html>

<head>
	<title>login</title>
	<link rel="stylesheet"
		href="style.css">
    <script src="https://kit.fontawesome.com/609f0d26cb.js" crossorigin="anonymous"></script>
    <style>
        /*style.css*/
body {
	display: flex;
	align-items: center;
	justify-content: center;
	font-family: sans-serif;
	line-height: 1.5;
	min-height: 100vh;
	background: #f3f3f3;
	flex-direction: column;
	margin: 0;
}

.main {
	background-color: #fff;
	border-radius: 15px;
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
	padding: 10px 20px;
	transition: transform 0.2s;
	width: 500px;
	text-align: center;
}

h1 {
	color: #5AB2FF;
}

label {
	display: block;
	width: 100%;
	margin-top: 10px;
	margin-bottom: 5px;
	text-align: left;
	color: #555;
	font-weight: bold;
}


input {
	display: block;
	width: 100%;
	margin-bottom: 15px;
	padding: 10px;
	box-sizing: border-box;
	border: 1px solid #ddd;
	border-radius: 5px;
}

button {
	padding: 15px;
	border-radius: 10px;
	margin-top: 15px;
	margin-bottom: 15px;
	border: none;
	color: white;
	cursor: pointer;
	background-color: #378CE7;
	width: 100%;
	font-size: 16px;
}

.wrap {
	display: flex;
	justify-content: center;
	align-items: center;
}
.left{
  top: 30px;
  left: 30px;
  position: absolute;
  z-index: 100;
  color: #222;
}
    </style>
</head>

<body>
	<div class="main">
		<h1>Log in</h1>
		<a href="main.php"><i class="fa-regular fa-circle-left fa-3x left"></i></a>
		<form action="login.php" method="post">
			<label for="first">
				Username:
			</label>
			<input type="text"
				id="first"
				name="first"
				placeholder="Enter your Username" required>

			<label for="password">
				Password:
			</label>
			<input type="password"
				id="password"
				name="password"
				placeholder="Enter your Password" required>

			<div class="wrap">
				<button type="submit" name="submit"
						onclick="solve()">
					Submit
				</button>
			</div>
		</form>
	</div>

</body>

</html>
