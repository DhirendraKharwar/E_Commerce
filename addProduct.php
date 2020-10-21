<?php?>



<!DOCTYPE html> 
<head> <!---- The page has a title Lifestyle Store--> 
<title>Lifestyle Store</title> <!---- External css file index.css placed in the folder css is linked--> 
<link href="login.css" rel="stylesheet" type="text/css"/> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head> 
<body> 
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse"id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <?php                 
                        if (isset($_SESSION['email'])) { ?>
                            <li><a href = "index.php"><span class = "glyphicon glyphicon-home"></span> Home </a></li>
                            <li><a href = "addProduct.php"><span class='glyphicon glyphicon-plus'></span> Add Product </a></li>
                            <li><a href="account.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['email'] ?></a></li>
                            <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart <?php echo $_SESSION['num'];?></a></li>
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>                     
                            <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php  } 
                    else { ?>
                        <li><a href = "index.php"><span class = "glyphicon glyphicon-home"></span> Home </a></li>   
                        <li><a href = "addProduct.php"><span class='glyphicon glyphicon-plus'></span> Add Product </a></li>  
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>   
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
    </nav>


    <div class="container">
            <div class="row row-style">
                <div class="col-xs-11 col-lg-5 col-md-6 col-sd-5">
                    <div class="pannel pannel-default">
                        <div class="pannel-heading"><h2 class="header">Add Product</h2></div>
                        <div class="pannel-body">
                            <p class="text-warning"><b>Add product to more sells</b></p>
                            
                            <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Product name" name="product_name" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Price" name="price" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" placeholder="Upload picture" name="picture" required = "true">
                                    </div>
                                    <button type="submit" name="Add" class="btn btn-primary">Add</button><br><br>
                                    
                            </form>  
                            <a href="change_password.php">Change password</a><br>
                        </div>
                        <div class="pannel-footer"><h2 class="p-f">Don't have an account?<a href="signup.php">Register</a></h2></div>
                    </div>
                </div>