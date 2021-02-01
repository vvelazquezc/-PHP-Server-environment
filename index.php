<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="login">
	<h1>Login</h1>
    <form action="validation.php" method="post">
        <input type="text" name="username" value="<?php echo htmlspecialchars($username)?>" placeholder="Username"/>
            <?php if (isset($name_error)) {
                echo $name_error; } ?>
        <input type="password" name="password" placeholder="Password"/>
            <?php if (isset($password_error)) {
                    echo $password_error; } ?>
        <button type="submit" class="btn">Let me in.</button>
    </form>
</div>
</body>
</html>