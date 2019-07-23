<?php

if(!isset($_COOKIE['username'])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    setcookie('username', "", time() - 3600,'/');
}
if(!isset($_COOKIE['marketuser'])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    setcookie('marketuser', "", time() - 3600,'/');
}

header("Location: index.php"); /* Redirect browser */
exit();

?>