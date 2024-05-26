<!DOCTYPE html>
<html>
<head>
    <title>User Records</title>
</head>
<body>
    <h1>User Records</h1>

    <form method="post" action="">
        <label for="username">User Name:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="text" name="password" required><br>

        <input type="submit" name="addUser" value="Add User">
    </form>

    <br>

    <h2>Existing Users</h2>
    <?php
    // Database connection
    $host = 'localhost';
    $username = 'root';
    $password = 'root'; //or blank if this not working
    $database = 'userdb'; //1st make db in localhost/phpMyAdmin

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Add user
    if (isset($_POST['addUser'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "User added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Display existing users
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>User ID</th><th>User Name</th><th>Password</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['user_id']}</td><td>{$row['username']}</td><td>{$row['password']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }

    // Update user password
    if (isset($_POST['updatePassword'])) {
        $user_id = $_POST['user_id'];
        $newPassword = $_POST['newPassword'];

        $updateSql = "UPDATE users SET password = '$newPassword' WHERE user_id = $user_id";
        if (mysqli_query($conn, $updateSql)) {
            echo "Password updated successfully!";
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
    ?>
    <br>
    <h2>Update User Password</h2>
    <form method="post" action="">
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" required><br>

        <label for="newPassword">New Password:</label>
        <input type="text" name="newPassword" required><br>

        <input type="submit" name="updatePassword" value="Update Password">
    </form>
</body>
</html>
