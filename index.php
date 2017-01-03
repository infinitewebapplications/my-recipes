<?php
  // includes
  include('helper/install-class.php');
  
  // is the app installed?
  install::check();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Caleb Nance">
    <title>My Recipes | Recipes, Accessible Anywhere</title>
    <link href="src/styles/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/app.min.css" rel="stylesheet">
  </head>
  <body ng-app="myRecipes" ng-controller="mainCtrl">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>My Recipes</h1>
        </div><!-- /.col-xs-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->

    <!-- le javascript -->
    <script src="src/scripts/jquery-1.11.1.min.js"></script>
    <script src="src/scripts/bootstrap.min.js"></script>
    <script src="src/scripts/angular.min.js"></script>

    <script src="dist/js/main.min.js"></script>

    <!-- <script src="scripts/app.js"></script>
    <script src="scripts/controllers/main.js"></script>
    <script src="scripts/services/data.js"></script> -->
  </body>
</html>
