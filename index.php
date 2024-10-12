<?php
if (file_get_contents('function.php') == '') {
	header('Location: '.'/install/');
} 
require_once('function.php');
session_start();

if (is_user()) {
	redirect('home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        body {
            background-color: #f5f5f5;
        }

        .text {
            color: #007bff; /* Change text color */
        }

        .form-box {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
        }

        .form-top {
            margin-bottom: 25px;
        }

        .form-top-left h3 {
            font-size: 24px;
            font-weight: 700;
            color: #333; /* Change heading color */
        }

        .form-top-left p {
            color: #6c757d; /* Change paragraph color */
        }

        .form-top-right {
            text-align: right;
            padding: 5px;
        }

        .form-top-right i {
            font-size: 3em;
            color: #000; /* Change tailoring icon to black */
        }

        .form-group input {
            height: 50px;
            padding-left: 45px;
            color: #555; /* Input text color */
        }

        .form-group .fa {
            position: absolute;
            left: 15px;
            top: 15px;
            font-size: 1.2em;
            color: #999;
        }

        .btn {
            background-color: #28a745; /* Green button color */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #218838; /* Darker green on hover */
        }

        .pass {
            width: 100%;
            height: 50px;
        }

        .alert {
            margin-top: 20px;
        }

        /* Additional color changes */
        h1 {
            color: #28a745; /* Title text color */
        }

        .form-bottom button {
            background-color: #28a745; /* Green button color */
        }

        .form-bottom button:hover {
            background-color: #218838; /* Darker green on hover */
        }
    </style>
    
</head>

<body>

    <!-- Top content -->
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>ADMIN</strong> Login</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Sign In</h3>
                                <p>Fill in the form below to get instant access:</p>
                            </div>
                            <div class="form-top-right">
                                <!-- Tailoring icon in black -->
                                <i class="fa fa-cut"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            
                            <?php if (!empty($_GET['error'])): ?>
                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>	
                                  <?php echo $_GET['error']?>
                              </div>
                            <?php endif ?>
                            
                            <form role="form" action="signin_post.php" method="post" class="registration-form">
                                <div class="form-group">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="username" placeholder="Username" class="form-first-name form-control" required>
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name="password" placeholder="Password" class="pass form-control" required>
                                </div>
                                <button type="submit" class="btn">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/retina-1.1.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    
</body>
</html>
