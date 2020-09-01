<!DOCTYPE html>
<?php
require "common.php";
?> 
    <head>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup page</title>
    </head>
    <body>
    <?php
        include 'header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <form>
                        <h4>Sign Up</h4>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="E-mail" name="e-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact" name="contact">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" name="city">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
        

                </div>
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
    </html>
    