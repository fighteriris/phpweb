<?php  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>AngularJs Post data with PHP - Codeforgeek</title>
        <script src="js/angular.js"></script>
		<script src="app/angular-md5.js"></script>
        <script src="app/app.js" type="text/javascript"></script>
        <script src="app/home.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/global.css">
		<link rel="stylesheet" href="css/main_page.css">
    </head>
    <body class ="body_main_page">
        <div id="container" class = "main_container">
            <h1> This is demo of AngularJS ajax POST call to PHP file</h1>
             <h3> For tutorial visit this link.</h3>
            <div id="login" ng-app='angular_post' ng-controller='sign_up'>
               <input type="text" size="40" ng-model="email" placeholder="Type your email"><br>
               <input type="password" size="40" ng-model="password" placeholder="Type your password"><br>
                <button ng-click="check_credentials()">Login</button><br>
                <span id="message">{{message}}</span>
            </div>
        <div id="navigater_main_page">
            this is the nagigater;
        </div>


        </div>
    </body>
</html>
