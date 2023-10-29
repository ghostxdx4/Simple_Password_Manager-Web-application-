<!DOCTYPE html>
<html>
<head>
    <title>Password Retrieval</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <a href="javascript:history.back()" style="text-decoration: none; color: #000;">&#8592; Go Back</a>
        <h2>Password Retrieval</h2>
       <input type="text" id="website_name" name="website_name" required><br><br>
<input type="text" id="password" name="password" readonly><br><br>
<button type="button" onclick="fetchPassword()">View Password</button>

<script>
function fetchPassword() {
    var websiteName = document.getElementById('website_name').value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('password').value = this.responseText;
        }
    };
    xhr.open("POST", "fetch_password.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("website_name=" + websiteName);
}
</script>
    </div>
</body>
</html>
