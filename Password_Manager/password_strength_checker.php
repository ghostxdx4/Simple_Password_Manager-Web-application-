<!DOCTYPE html>
<html>
<head>
    <title>Password Strength Checker</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <a href="javascript:history.back()" style="text-decoration: none; color: #000;">&#8592; Go Back</a>
        <h2>Password Strength Checker</h2>
        <input type="text" id="website_name" name="website_name" placeholder="Enter website name" required><br>
        <input type="text" id="password" name="password" readonly><br><br>
        <button type="button" onclick="checkPasswordStrength()">Check Strength</button>
    </div>

    <script>
        function checkPasswordStrength() {
            var websiteName = document.getElementById('website_name').value;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('password').value = this.responseText;
                }
            };
            xhr.open("POST", "fetch_password_strenght.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("website_name=" + websiteName);
        }
    </script>
</body>
</html>
