<?php

session_destroy();
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
header('Cache-Control: no-cache, must-revalidate');
header('Location: index.php')
?>