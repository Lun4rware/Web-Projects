<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/index.css">
    <script src="assets/index.js"></script>
</head>
<body>
    <div class="main">
        <h1>Login Box</h1>
        <h4>Do not enter real login information</h4>
        <main>
        <form action="index.php" method="post">
            <input name="username" id="uname" type="text" placeholder="Username" tf>
            <input name="password" id="pword" type="password" placeholder="Password" tf>
            <button type="submit">Login</button>
        </form>
        <div class="form-output">
            <?php
            if(strlen($_POST["username"]) > 1 && strlen($_POST["password"] > 1)) {
                echo "Username: " . htmlspecialchars($_POST["username"]) . " <br>Password: " . htmlspecialchars($_POST["password"]);
            };
            ?>
        </div>
        </main>
        <footer>
            Created by <a href="https://github.com/Lun4rware/">Lunar</a>
        </footer>
    </div>
</body>
</html>