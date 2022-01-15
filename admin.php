<?php
include "connect.php";
$adminid=$_POST['adminid'];
$adminpwd=$_POST['adminpwd'];
if($adminid=="admin" && $adminpwd=='1234')
{
    include "admin1.php";
}
else
{?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Invalid User</title>
        <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
        crossorigin="anonymous">
    </head>
    <body>
    <div class="container-fluid" style="padding:20px;text-align:center;font: size 20px;">
    <p><b>Sorry, <u>Invalid</u> Id or Password</b></p>
    <a href="login.php"><button class="btn btn-danger">Try Again</button></a>
    </div>
    </body>
    </html>
    <?php
}
?>