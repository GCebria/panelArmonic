<?php
include("loginserv.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Armonic</title>
        <link href="assets/css/login.css" rel="stylesheet" type="text/css"/>
        <!-- Latest compiled and minified CSS -->
        <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="login-background">
            <div class="col-xs-4 panel-login-container">
                <div class="panel  panel-login panel-default">
                    <div class="panel-body">
                        <img class="center-block" src="assets/images/armonic_logo.png" alt="" width="150px" height="100px"/>
                        <div class="panel">
                            <div class="panel-body">
                                <form action="" method="post">
                                <div class="input-group input-group-sm input-login">
                                    <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                    <input id="user" name="user" type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                                </div>
                                <div class="input-group input-group-sm input-login">
                                    <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                    <input id="pass" name="pass" type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
                                </div>
                                <div class="center-block input-login">
                                    <input type="submit" class="center-block btn btn-danger" placeholder="entrar" name="submit" value="Login" />
                                    </div>
                                </form>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>







