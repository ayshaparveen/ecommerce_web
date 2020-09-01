<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
?>
<?php
session_start();
if (isset($_SESSION['id'])) {
  echo "Hello ".$_SESSION[‘email’];
} else {
  echo "Hello Guest";
}
?>