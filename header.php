<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prim and Polished</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
<body>
<header>
    <nav>
        <!--Style for the navigation bar-->  
  <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                     
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="index.php"><img src="img/logowhite1crop.png"></a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
        <?php
             if (isset($_SESSION['userId'])) {
                 echo ' <form action="includes/logout.inc.php" method="post">
                 <button type="submit" name="logout-submit">Logout</button>
                 </form>';
            }
            else {
                 echo '<form action="includes/login.inc.php" method="post" class="loginForm">
                 <input type="text" name="mailuid" placeholder="E-mail/Username">
                 <input type="password" name="pwd" placeholder="Password">
                 <input type="submit" value="Submit" name="login-submit">
                 <a href="signup.php">Signup</a>';

            } 
        ?>              
                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Menu</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                     <a class="dropdown-item" href="index.php">Home</a> <a class="dropdown-item" href="product.php">Products</a> <a class="dropdown-item" href="about.php">About Us</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </nav>
</header>


