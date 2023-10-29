<!DOCTYPE html>
<html>
<head>
    <title>View All Passwords</title>
    	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="container">
        <a href="javascript:history.back()" style="text-decoration: none; color: #000;">&#8592; Go Back</a>
        <h2>View All Passwords</h2>
        <table>
            <tr>
                <th>Website Name</th>
                <th>Password</th>
            </tr>
            <?php
            session_start();

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "advance_pass_manager";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $userId = $_SESSION['user_id'];

            $sql = "SELECT website_name, password FROM passwords WHERE user_id = '$userId'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['website_name'] . "</td><td>" . $row['password'] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No passwords found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
