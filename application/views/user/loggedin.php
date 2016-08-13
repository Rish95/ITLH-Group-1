<!DOCTYPE html>
<html>
<head>
	<title>BELOW THE WAIST</title>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap Core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="/public/css/agency.min.css" rel="stylesheet">

</head>
<body id="page-top" class="index">
    <form action="/user/register_post" method="post">
	
		<?php //echo validation_errors(); ?>
		<?php 
		if(!empty($errors)){
			foreach ($errors as $key => $value) {
				echo $value;
			}			
		}
		?>

             <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
		   <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Below the waist</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Daily Updates</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                                      
                    <li>
                        <a class="page-scroll" href="#team">Youtube</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a>$name</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">WELCOME <?php echo $name ?> </div>
                <div class="intro-heading">LET'S SHOP</div>
                <a href="#login" class="page-scroll btn btn-xl">SHOP</a>
            </div>
        </div>
    </header>

    <!-- jQuery -->
    <script src="C:/Users/PRATEEEK/Desktop/ITLH/CI_Project/public/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="C:/Users/PRATEEEK/Desktop/ITLH/CI_Project/public/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="C:/Users/PRATEEEK/Desktop/ITLH/CI_Project/public/js/jqBootstrapValidation.js"></script>
    <script src="C:/Users/PRATEEEK/Desktop/ITLH/CI_Project/public/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="C:/Users/PRATEEEK/Desktop/ITLH/CI_Project/public/js/agency.min.js">
 
    </script>





</form>
</body>
</html>