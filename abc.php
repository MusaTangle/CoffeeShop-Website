<?php 
    include('connection.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $query = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ( '$name', '$email', '$message')";
        $result = mysqli_query($con,$query);
        if (!$result) {
            echo mysqli_error($con);
        }
    }
?>