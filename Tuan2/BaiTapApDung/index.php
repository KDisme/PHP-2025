<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập áp dụng</title>
</head>
<body>
    <form action ="#"method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        if ($user === "admin" && $pass === "12345") {
            echo '<p style="font-family: Tahoma; color: red;">Welcome, admin</p>';
        } else {
            echo '<p>Username hoặc password sai. Vui lòng nhập lại</p>';
        }
    }
    ?>
</body>
</html>