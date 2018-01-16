<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dribbble API</title>
    <!-- Angular -->
    <script src="/dist/libs/angular/angular.js"></script>
	<script src="/dist/libs/angular-route/angular-route.js"></script>
	<script src="/dist/libs/angular-resource/angular-resource.js"></script>
	<script src="/dist/libs/angular-sanitize/angular-sanitize.js"></script>
    <script src="/dist/libs/angular-cookies/angular-cookies.js"></script>
    <!-- jQuery -->
    <script src="/dist/libs/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="/dist/libs/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
    <!-- Javascript -->
    <script src="/dist/js/main.min.js"></script>
    <!-- Style -->
    <link rel="stylesheet" href="/dist/style.css">
</head>
<body ng-app="app" ng-cloak>

    <div ng-include="'views/header.php'"></div>

    <div ng-view=""></div>
    
    <div ng-include="'views/footer.php'"></div>

</body>
</html>