<?php
require "common.php";

$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
$email = $_POST['email'];
$password = $_POST['first_name'];
$user_registration_query = "insert into users(email, password) values ('$email', '$password')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
echo md5($password);
$select_query = "SELECT  email, id FROM users";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
?>
