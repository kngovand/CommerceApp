<?php $title = 'Login'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php $currentPage = 'login'; ?>
<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class ="container">
            <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Login" name="submit" class="btn btn-primary"/>
                </div>
            </div>
            </form>
    </div>
</body>
</html>