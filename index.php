<?php

include 'function/login.php';

?>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XML APP - Movie Directory</title>
    <!-- CSS -->
    <link rel="stylesheet" href="view/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/assets_login/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/assets/assets_login/css/form-elements.css">
    <link rel="stylesheet" href="view/assets/assets_login/css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
    queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://
    -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Favicon and touch icons -->

  </head><body>
    <!-- Top content -->
    <div class="top-content">
      <div class="inner-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text">
              <h1>
                <strong>XML APP - Movie Directory</strong></h1>
              <div class="description">
                <p>This is an application that uses db2 as its database. It can executes XQUERIES to insert, update or delete and XML information.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">
              <div class="form-top">
                <div class="form-top-left">
                  <h3>LOGIN</h3>
                  <p>Enter your username and password to log on:</p>
                </div>
              </div>
              <div class="form-bottom">
                <form role="form" action="" method="post" class="login-form">
                  <div class="form-group">
                    <label class="sr-only" for="form-username">Username</label>
                    <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="form-password">Password</label>
                    <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                  </div>
                  <button type="submit" name="submit" class="btn">Sign in!</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript -->
    <script src="view/assets/assets_login/js/jquery-1.11.1.min.js"></script>
    <script src="view/assets/assets_login/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/assets/assets_login/js/jquery.backstretch.min.js"></script>
    <script src="view/assets/assets_login/js/scripts.js"></script>
    <!--[if lt IE 10]>
      <script src="view/assets/assets_login/js/placeholder.js"></script>
    <![endif]-->
  

</body></html>