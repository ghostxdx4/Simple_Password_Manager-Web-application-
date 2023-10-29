<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: registration.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            margin-top: 50px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-bottom: 10px;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
       <a href="logout.php" style="float: right;">Logout</a>
        
		 <div class="container">
			 <div class="button-container">
		<button onclick="location.href='generate_password.php'">Generate Password</button><br>
		</div>
			 
        <div class="button-container">
			<button onclick="location.href='password_retrieval.php'">Password Retrieval</button><br></div>
		
			  <div class="button-container">
				 <button onclick="location.href='password_strength_checker.php'">Password Strength Checker</button>
			 </div>
			 
			 <div class="button-container">
				 <button onclick="location.href='delete_password.php'">Delete Password</button>
			 </div>
			 
			 <div class="button-container">
				 <button onclick="location.href='view_passwords.php'">View All Saved Passwords</button>
			 </div>
		
        
    </div>
	</div>
</body>
</html>
