<!DOCTYPE html>

<?php
require "common.php";
?>    <head>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login page</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.html">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="login_submit.php">
                                <p class="text-warning">Login to make a purchase:</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-mail" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                </div>
                                <input type="submit" value="Login" class="btn btn-primary">
                                
                            </form>
                        </div>
                        <div class="panel-footer">
                            Don't have an account?
                            <a href="#">Register here</a>
                        </div>

                    </div>
                </div>

            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <div class="container">
            <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
    </footer >
</body>
</html>
