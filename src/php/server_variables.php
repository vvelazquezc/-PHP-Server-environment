
<?php
    session_start();
    $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['time'] = time();

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    // isset: Determine if a variable is declared and is different than null
    // if (!isset($_SESSION['username'])) {
    //     echo "You are not logged in!";
    // } else {
    //     echo "You are logged in!";
    // }


    foreach ($_SERVER as $k => $v) {
        echo $k . ' - ';
        if (!is_array($v)) {
            echo $v;
        }
        echo '<br/>';
    }
?>