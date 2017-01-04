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
    <title>Installation | My Recipes</title>
    <link href="src/styles/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/app.min.css" rel="stylesheet">
  </head>
  <body ng-app="myRecipes" ng-controller="mainCtrl">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">

          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div><!-- /.progress-bar -->
          </div><!-- /.progress -->

          <form>
            <div class="row">
              <div class="col-xs-12">
                <h3>Database Information</h3>
              </div><!-- /.col-xs-12 -->
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="form-group">
                  <label for="host">Database Host</label>
                  <input type="text" class="form-control" id="host" name="host" placeholder="localhost">
                </div><!-- /.form-group -->
              </div><!-- /.col-xs-12 -->
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="form-group">
                  <label for="database">Database Name</label>
                  <input type="text" class="form-control" id="database" name="database" placeholder="name">
                </div><!-- /.form-group -->
              </div><!-- /.col-xs-12 -->
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="form-group">
                  <label for="user">Database User</label>
                  <input type="text" class="form-control" id="user" name="user" placeholder="username">
                </div><!-- /.form-group -->
              </div><!-- /.col-xs-12 -->
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="form-group">
                  <label for="password">Database Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password">
                </div><!-- /.form-group -->
              </div><!-- /.col-xs-12 -->
              <div class="col-xs-12">
                <button class="btn btn-default">Check Connection</button>
                <hr>
              </div><!-- /.col-xs-12 -->
              <div class="col-xs-12">
                <h4>Administrator Information</h4>
              </div><!-- /.col-xs-12 -->
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="form-group">
                  <label for="adminUser">Username</label>
                  <input type="text" class="form-control" id="adminUser" name="adminUser" placeholder="admin username">
                </div><!-- /.form-group -->
              </div><!-- /.col-xs-12 -->
              <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="form-group">
                  <label for="adminPass">Password</label>
                  <input type="password" class="form-control" id="adminPass" name="adminPass" placeholder="admin password">
                </div><!-- /.form-group -->
              </div><!-- /.col-xs-12 -->
              <div class="col-xs-12">
                <button type="submit" class="btn btn-default">Submit</button>
              </div><!-- /.col-xs-12 -->
            </div><!-- /.row -->
          </form>
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
