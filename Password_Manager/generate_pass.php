<!DOCTYPE html>
<html>
<head>
    <title>Password Generator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <a href="javascript:history.back()" style="text-decoration: none; color: #000;">&#8592; Go Back</a>
        <h2>Password Generator</h2>
        <input type="text" id="password" readonly>
        
		Password Length: <input type="number" id="length" min="8" max="64" value="12"><br><br>
        Include Numbers: <input type="checkbox" id="numbers" checked><br>
        Include Lowercase Letters: <input type="checkbox" id="lowercase" checked><br>
        Include Uppercase Letters: <input type="checkbox" id="uppercase" checked><br>
        Include Symbols: <input type="checkbox" id="symbols"><br><br>
        <button onclick="generatePassword()">Generate Password</button>
        <button onclick="copyPassword()">Copy Password</button>
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
