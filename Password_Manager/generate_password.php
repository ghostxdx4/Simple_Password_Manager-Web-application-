<!DOCTYPE html>
<html>
<head>
    <title>Generate Password</title>

</head>
	    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="container">
        <a href="javascript:history.back()" style="text-decoration: none; color: #000;">&#8592; Go Back</a>
        <h2>Generate Password</h2>
        <form action="save_password.php" method="post">
            <label for="website_name">Website Name:</label><br>
            <input type="text" id="website_name" name="website_name" required><br><br>
            <input type="text" id="password" name="password" readonly><br><br>
			
            Password Length:&nbsp;<input type="number" id="length" name="length" min="8" max="64" value="12"><br><br>
            Include Numbers:&nbsp;<input type="checkbox" id="numbers" name="numbers" checked><br><br>
            Include Lowercase Letters:&nbsp;<input type="checkbox" id="lowercase" name="lowercase" checked><br><br>
            Include Uppercase Letters:&nbsp;<input type="checkbox" id="uppercase" name="uppercase" checked><br><br>
            Include Symbols:&nbsp;<input type="checkbox" id="symbols" name="symbols"><br><br><br>
			<div>
            <button type="button" onclick="generatePassword()">Generate Password</button>
            <button type="submit">Save Password</button>
            <button type="button" onclick="copyPassword()">Copy Password</button>
			</div>
        </form>
    </div>

    <script>
        function generatePassword() {
            var length = document.getElementById('length').value;
            var numbers = document.getElementById('numbers').checked;
            var lowercase = document.getElementById('lowercase').checked;
            var uppercase = document.getElementById('uppercase').checked;
            var symbols = document.getElementById('symbols').checked;

            var charset = "";
            if (numbers) charset += "0123456789";
            if (lowercase) charset += "abcdefghijklmnopqrstuvwxyz";
            if (uppercase) charset += "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            if (symbols) charset += "!@#$%^&*()_+{}[]";

            var password = "";
            for (var i = 0, n = charset.length; i < length; ++i) {
                password += charset.charAt(Math.floor(Math.random() * n));
            }

            document.getElementById('password').value = password;
        }

        function copyPassword() {
            var password = document.getElementById('password');
            password.select();
            document.execCommand("copy");
            alert("Password copied to clipboard: " + password.value);
        }
    </script>
</body>
</html>
