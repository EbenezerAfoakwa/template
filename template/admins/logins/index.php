<!doctype html>
<html lang="en">

<head>
	<title>Login Page</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
		body {
			background-color: #f1f1f1;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			flex-direction: column;
		}

		* {
			font-family: sans-serif;
			box-sizing: border-box;
		}

		form {
			width: 400px;
			border: 0px solid #ccc;
			padding: 25px 30px 30px;
			background: #fff;
			border-radius: 0px;
		}

		h2 {
			text-align: center;
			margin-bottom: 20px;
		}

		input {
			width: 100%;
			padding: 8px;
			/* Some padding */
			border: 1px solid #ccc;
			/* Gray border */
			border-radius: 4px;
			/* Rounded borders */
			box-sizing: border-box;
			/* Make sure that padding and width stays in place */
			resize: vertical;
			/* Allow the user to vertically resize the textarea (not horizontally) */
			color: #65696b;
			background-color: #fff;
			margin: 20px 0px;
		}

		label {
			color: #888;
			font-size: 18px;
		}

		button {
			float: right;
			background-color: #0AA1DD;
			padding: 10px 15px;
			color: #fff;
			border-radius: 5px;
			margin-right: 0px;
			border: none;
		}

		button:hover {
			opacity: .7;
		}

		.error {
			background: #F2DEDE;
			color: #A94442;
			padding: 10px;
			width: 95%;
			border-radius: 5px;
			margin: 20px auto;
		}

		.success {
			background: #D4EDDA;
			color: #40754C;
			padding: 10px;
			width: 95%;
			border-radius: 5px;
			margin: 20px auto;
		}

		h1 {
			text-align: center;
			color: #fff;
		}

		.ca {
			font-size: 14px;
			display: inline-block;
			text-decoration: none;
			color: #444;
			margin-top: 20px;
		}

		.ca:hover {
			text-decoration: underline;
		}









		/* BUTTON-48 */
		.button-48 {
			appearance: none;
			background-color: #0AA1DD;
			border-width: 0;
			box-sizing: border-box;
			color: #fff;
			cursor: pointer;
			display: inline-block;
			font-family: Clarkson, Helvetica, sans-serif;
			font-size: 13px;
			font-weight: 500;
			letter-spacing: 0;
			line-height: 1em;
			opacity: 1;
			outline: 0;
			padding: 1em 2.2em;
			position: relative;
			text-align: center;
			text-decoration: none;
			text-rendering: geometricprecision;
			text-transform: uppercase;
			transition: opacity 300ms cubic-bezier(.694, 0, 0.335, 1), background-color 100ms cubic-bezier(.694, 0, 0.335, 1), color 100ms cubic-bezier(.694, 0, 0.335, 1);
			user-select: none;
			-webkit-user-select: none;
			touch-action: manipulation;
			vertical-align: baseline;
			white-space: nowrap;
			border-radius: 2px;
		}

		.button-48:before {
			animation: opacityFallbackOut .5s step-end forwards;
			backface-visibility: hidden;
			background-color: #161e26; 
			clip-path: polygon(-1% 0, 0 0, -25% 100%, -1% 100%);
			content: "";
			height: 100%;
			left: 0;
			position: absolute;
			top: 0;
			transform: translateZ(0);
			transition: clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1), -webkit-clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1);
			width: 100%;
			color: #fff;
		}

		.button-48:hover {
			color: #fff;
		}

		.button-48:hover:before {
			animation: opacityFallbackIn 0s step-start forwards;
			clip-path: polygon(0 0, 101% 0, 101% 101%, 0 101%);
			border-radius: 2px;
			color: #fff;
		}

		.button-48:after {
			background-color: #FFFFFF;
			color: #fff;
		}

		.button-48 span {
			z-index: 1;
			position: relative;
		}

		/* BUTTON-48 */







		@media screen and (max-width: 1500px) {
			form {
				width: 400px;
				border: 0px solid #ccc;
				padding: 25px 30px 30px;
				background: #fff;
				border-radius: 0px;
			}
		}

		@media screen and (max-width: 700px) {
			form {
				width: 300px;
				border: 0px solid #ccc;
				padding: 25px 30px 30px;
				background: #fff;
				border-radius: 0px;
			}
		}
	</style>
</head>

<body>



	<form action="login.php" method="post">
		<h2 style="font-size: 20px;" style=" font-size: 25px; font-weight: 600;">Admin Login</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<input type="text" name="uname" placeholder="User Name"><br>

		<input type="password" name="password" placeholder="Password.."><br>

		<button class="button-48" role="button" style=" padding: 14px 42px;"><span class="text">Login</span></button>
		<a href="../../index.html" class="ca">Back to Site</a>
	</form>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>