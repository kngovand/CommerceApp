<?php 
    require "header.php" 
?>

    <main>
        <body>
        <div class ="container">
            <form role="form" method="post" action="includes/login.inc.php">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputUser" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUser" name="user" placeholder="Username">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="password1" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Repeat Password</label>
                <div class="col-sm-10">
                <input type="repeatpassword" class="form-control" id="inputPassword" name="password2" placeholder="Repeat Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Sign Up" name="signup-submit" class="btn btn-primary"/>
                </div>
            </div>
            </form>
        </div>
        </body>
    </main>

<?php
    require "footer.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</html>

