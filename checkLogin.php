<?php
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
    require_once('connection.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from user_details where Email = '$username' and Password = '$password'";

    $response = mysqli_query($conn,$query );
    if(mysqli_num_rows($response) > 0) {
        $userData = mysqli_fetch_assoc($response);
        session_start();
        $_SESSION['userData'] = $userData;
        echo 'true';
        // header('location:userDetails.php');
    } else {
        echo 'false';
        // header('location:login.php');
    }
} else {
    session_start();
    unset($_SESSION['userData']);
    session_destroy();
    header('location:login.php');
} 

?>