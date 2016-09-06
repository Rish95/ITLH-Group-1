<!DOCTYPE html>
<html>
<head>
	<title>BELOW THE WAIST</title>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

    <!-- Bootstrap Core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="/public/css/agency.css" rel="stylesheet">

</head>
<body id="page-top" class="index">
    <!-- <form action="/user/register_post" method="post"> -->
	
		<?php //echo validation_errors(); ?>
		<?php 
		if(!empty($errors)){
			foreach ($errors as $key => $value) {
				echo $value;
			}			
		}
		?>

             <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top affix">
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
                        <a class="page-scroll" href="#portfolio">Sign up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Log in</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
        <?php echo validation_errors(); ?>

            <div class="intro-text">
                <div class="intro-lead-in">YOU DESERVE TO LOOK GOOD</div>
                <div class="intro-heading">LET'S GET STARTED</div>
                <a href="#login" class="page-scroll btn btn-xl">Log In</a>
            </div>
        </div>
    </header>

                                                                 <!-- SIGN UP section-->
 <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">SIGN UP</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
           		 <div class="col-md-offset-4 col-md-4 col-ms-offset-4">
                                    
<!-- <FORM class="col-pad-10" action="index2.php" method="post"> -->
    <form action="/user/register_post" method="post">
    <div class="well">
    <div>
            <LABEL> First Name </span></LABEL>
            <INPUT TYPE="TEXT" NAME="f_name"><span class="glyphicon glyphicon-asterisk"></span></INPUT>
    </div>
    <div>
            <LABEL> Last Name</LABEL>
            <INPUT TYPE="TEXT" NAME="l_name"><span class="glyphicon glyphicon-asterisk"></span></INPUT>
    </div>
    <div> 
        <label>Gender</label>
        <INPUT TYPE="RADIO" NAME="gender" />Male
        <INPUT TYPE="RADIO" NAME="gender">Female<span class="glyphicon glyphicon-asterisk"></span></INPUT>   
    </div>
    <div>
            <label>Date of Birth</label>
            <input type="date" name="date"/>
    </div>    
    <div >
        <label>Contact Number</label>
        <INPUT TYPE="TEXT" NAME="number"  MAXLENGTH="10" />
    </div>
    <div>
        <label>Email Address</label>
        <input type="email" name="email" placeholder="FULL EMAIL ADDRESS"><span class="glyphicon glyphicon-asterisk"></span></INPUT>
    </div>
    <div>
        <label>Password</label>
        <INPUT TYPE="TEXT" NAME="security" PLACEHOLDER="SECURITY"><span class="glyphicon glyphicon-asterisk"></span></INPUT>
    </div>
     <div>
        <label>RE-enter Password</label>
        <INPUT TYPE="TEXT" NAME="security1" PLACEHOLDER="SECURITY" />
    </div>
    <div>
        <label>Permanent Address</label>
        <INPUT TYPE="TEXT" NAME="home_add" PLACEHOLDER=" HOME ADDRESS" />      
    <div>
        <button type="submit" class="btn btn-primary btn-lg active">submit</button>
        <button type="reset" class="btn btn-default btn-lg active">reset</button>
    </div>
    </div>
    </div>
</form>             

                </div>
            </div>
        </div>
    </section>
<section id="login">
    <!-- <FORM class="col-pad-10" action="index2.php" method="post"> -->
    <div class="col-lg-12 text-center">
    <h1>Log in</h1>
        <br></br>
            <br></br>
    <div class="row text-center">
                 <div class="col-md-offset-4 col-md-4 col-ms-offset-4">
    <form action="user/home" method="post">
    <div class="well">
    <!-- <div class="col-lg-12 text-center"> -->
    
    <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br></br>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password"/>
     <br> </br>   
    <button type="submit" class="btn btn-primary btn-lg active">LOGIN</button>
    <br></br>
     <a href="user/forgotpassword">Forgot Password</a>
     <br>
    </div>
    </form>           

                </div>
            </div>
     </div>
     </div>
        </div>
    </section>
    

    <!-- jQuery -->
    <script src="/public/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/public/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/public/js/jqBootstrapValidation.js"></script>
    <script src="/public/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="/public/js/agency.min.js">
    $('#services').on("click",function()
    {
   $.ajax({
        url: "partial_services.html",

   }).done(function(responce){
    console.log(responce);
    $('#xyz').html(responce);
   }); 
    }
    );
    </script>





	<!--?php 
	echo "<b><pre>Product:&nbsp;&nbsp;&nbsp;&nbsp;\tQty&nbsp;&nbsp;&nbsp;\tPrice&nbsp;&nbsp;&nbsp;\tCategory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\tDescription&nbsp;&nbsp;&nbsp;\tImg<br></pre></b>";
	if(!empty($products)){
		foreach ($products as $product) {
			// echo "<li> $product->prdtnm <a href='/user/delete/$product->id'> Delete </a> </li>";
			echo "<li><pre>{$product->prdt_nm}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\t{$product->qty}&nbsp;&nbsp;&nbsp;\t{$product->prc}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\t&nbsp;&nbsp;&nbsp;{$product->ctg_id}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\t{$product->descp}&nbsp;&nbsp;&nbsp;&nbsp;\t{$product->img}&nbsp;&nbsp;&nbsp;&nbsp;\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\t<a href='/user/delete/$product->id'>Delete</a>&nbsp;&nbsp;<a href='/user/update/$product->id'>Update</a></pre></li>"; 
			// 
		}
	}
	?-->

<!-- </form> -->
</body>
</html>