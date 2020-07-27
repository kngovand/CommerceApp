<!--Bootstrap CDN-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Commerce App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</html>

<?php 
    require "header.php" 
?>

    <main>
        <body>
        <div class="container">
        <h1>PHP Commerce App</h1><br>
            <div class="jumbotron"> 
                <p>
                    A learning experience with PHP and mySQL. A boilerplate for PHP apps.<br><br>
                    Features: login/logout/signup, saved session states, security-oriented (hashing, sql placeholders).<br>
                    todo: Commerce logic and dashboard for users, sql statements for database manipulation.<br>
                </p>                 
            </div>
        </div>
        </body>
    </main>

<?php
    require "footer.php"
?>