<?php
  session_start();
  $userName = $_SESSION['username'];
  $password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<style>
    .wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -75px 0 0 -250px;
        width: 500px;
        height: 150px;
    }
    .wrapper h2 {
        color: #fff;
        text-shadow: 0 0 10px rgba(0,0,0,0.3);
        letter-spacing:1px;
        text-align:center;
    }
    button {
        width: 70%;
        border: none;
        color: white;
        background-color: #0000;
        padding: 0.8em;
        border: 2px solid white;
        font-size: medium;
    }
    .formOut {
        display:flex;
        width: 100%;
        flex-flow: column nowrap;
        align-items: center;
    }
</style>
<body>
    <div class="wrapper">
        <h2>Welcome <?php echo $userName ?> are logged</h2>
        <form class="formOut" action="close_session.php" method="post">
            <button type="submit">Log out</button>
        </form>
    </div>
</body>
</html>