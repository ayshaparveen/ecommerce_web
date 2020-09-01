<!DOCTYPE html>
<?php
require "common.php";
?>
<?php
if (isset($_SESSION['email'])) {header('location: products.php');}?>
    <head>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index page</title>
    </head>
    <body>
    <?php
        include 'header.php';
        ?>
        <div class="banner_image">
            <div class="container">
                <div class="banner_content">
                    <a href="products.html" class="btn btn-dangerbtn-lg active">Shop Now</a>
                </div>
            </div>

        </div>
    
        <?php
        include 'footer.php';
        ?>
    </body>
</html>