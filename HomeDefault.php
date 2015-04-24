<?php
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
	<script src="angular.js"></script>
	<script src="app/app.js"></script>
	<script src="app/home.js"></script>
	
</head>
<body>
<div ng-app="">
    <p>Name: <input type="text" ng-model="name"></p>
    <p ng-bind="name"></p>
</div>
<div id="container">
            <div id="login" ng-app='angular_post_demo' ng-controller='sign_up'>
                EMAIL: <input type="text" size="40" ng-model="email"><br>
                PASS&nbsp;&nbsp;&nbsp;:  <input type="password" size="40" ng-model="password"><br>
                <button ng-click="check_credentials()">Login</button><br>
                <span id="message"></span>
            </div>
</div>
</body>
</html>