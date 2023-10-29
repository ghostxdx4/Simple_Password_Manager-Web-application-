<!DOCTYPE html>
<html>
<head>
    <title>User Registration and Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>User Registration Form</h2>
        <form action="register.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <button type="submit">Register</button>
        </form>
        <br>
        <p>Already have an account? <button onclick="openLoginForm()">Login</button></p>
    </div>

    <div id="loginPopup" style="display: none;">
        <div class="container">
            <h2>Login Form</h2>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>
                <button type="submit">Login</button>
            </form>
            <br>
            <p>Not registered yet? <button onclick="closeLoginForm()">Register</button></p>
        </div>
    </div>

    <script>
        function openLoginForm() {
            document.getElementById('loginPopup').style.display = 'block';
        }

        function closeLoginForm() {
            document.getElementById('loginPopup').style.display = 'none';
        }
    </script>
</body>
</html>
