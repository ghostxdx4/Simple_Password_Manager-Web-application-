<!DOCTYPE html>
<html>
<head>
    <title>Delete Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <a href="javascript:history.back()" style="text-decoration: none; color: #000;">&#8592; Go Back</a>
        <h2>Delete Password</h2>
        <form action="delete.php" method="post">
            <label for="website_name">Website Name:</label><br>
            <input type="text" id="website_name" name="website_name" required><br><br>
            <button type="submit">Delete Password</button>
        </form>
    </div>
</body>
</html>
