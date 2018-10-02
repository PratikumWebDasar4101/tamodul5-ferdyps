<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="prosesLogin.php" method="post">
        Username : <input type="text" name="username"><br><br>
        Password : <input type="password" name="password"><br>
        <br>
        <input type="submit" name="kirim" value="LOGIN">
    </form>
</body>
</html>
