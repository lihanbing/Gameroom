<?php 
session_start();
unset($_SESSION['user']);
unset($_COOKIE['user']);
unset($_SESSION['iconid']);
echo "<script>alert('You hava logouted!');location.href = '/Gameroom/welcome.php'</script>";
exit();