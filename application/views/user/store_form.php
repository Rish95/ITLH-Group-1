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
	
		<?php //echo validation_errors(); ?>
		<?php 
		if(!empty($errors)){
			foreach ($errors as $key => $value) {
				echo $value;
			}			
		}
		?>


		   <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Prateek's Blog</a>
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
                        <a class="page-scroll" href="#portfolio">Log In</a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="#team">Youtube</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
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
            <div class="intro-text">
                <div class="intro-lead-in">YOU DESERVE TO LOOK GOOD</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#portfolio" class="page-scroll btn btn-xl">Log In</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
   
    <!--section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Daily Updates</h2>
                    <h3 class="section-subheading text-muted">I share my daily life with you guys here</h3>
                </div>
            </div>
            <div class="row text-center">
                                <div class="col-md-offset-4 col-md-4 col-ms-offset-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">UPDATES</h4>
                    <p class="text-muted">Once you log in to this site, you will be notified through email or text about my daily blog.</p>
                </div>
            </div>
        </div>
    </section-->
   
       <!-- Portfolio Grid Section -->
    <!--section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">ABOUT</h2>
                    <h3 class="section-subheading text-muted">Some of the topics that will be discussed</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="C:\Users\PRATEEEK\Pictures\Saved Pictures\IMG_20160107_131044219.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>EVENTS</h4>
                        <p class="text-muted">It's fun when you have your friends around you</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="C:\Users\PRATEEEK\Pictures\kashmir\SAM_0270.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ADVENTURES</h4>
                        <p class="text-muted">Amazing discoveries of new places</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="C:\Users\PRATEEEK\Pictures\download.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>COLLEGE LIFE</h4>
                        <p class="text-muted">My course, friends, teachers and much more</p>
                    </div>
                </div>
                
    </section-->

     <!-- log in section-->
       <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">LOG IN</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
           		 <div class="col-md-offset-4 col-md-4 col-ms-offset-4">
                                    
<FORM class="col-pad-20" action="index2.php" method="post">
    <div>
            <LABEL> First Name</LABEL>
     	    <INPUT TYPE="TEXT" NAME="f_name" />
    </div>
    <div>
            <LABEL> Last Name</LABEL>
        	<INPUT TYPE="TEXT" NAME="l_name" />
    </div>
    <div> 
        <label>Gender</label>
        <INPUT TYPE="RADIO" NAME=" HOME ADDRESS" />Male
        <INPUT TYPE="RADIO" NAME=" HOME ADDRESS" />Female   
    </div>
	<div>
   			<label>Date of Birth</label>
    		<input type="date" name="date"/>
    </div>    
    <div >
        <label>Contact Number</label>
        <INPUT TYPE="TEXT" NAME="NUMBER"  MAXLENGTH="10" />
    </div>
    <div>
   		<label>Email Address</label>
    	<input type="email" name="email" placeholder="FULL EMAIL ADDRESS" />
    </div>
    <div>
        <label>Password</label>
        <INPUT TYPE="TEXT" NAME="SECURITY" PLACEHOLDER="SECURITY" />
    </div>
     <div>
        <label>RE-enter Password</label>
        <INPUT TYPE="TEXT" NAME="SECURITY" PLACEHOLDER="SECURITY" />
    </div>
    <div>
        <label>Permanent Address</label>
        <INPUT TYPE="TEXT" NAME=" HOME ADDRESS" PLACEHOLDER=" HOME ADDRESS" />      
    <div>
        <button type="submit" class="btn btn-primary btn-lg active">submit</button>
        <button type="reset" class="btn btn-default btn-lg active">reset</button>
    </div>
    </div>
    </input>
</FORM>             

                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 >
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body"-->

                                                    <!-- Project Details Go Here >
                            <h2>EVENTS</h2>
                            <p class="item-intro text-muted">It's fun when you have your friends around you</p>
                            <img class="img-responsive img-centered" src="C:\Users\PRATEEEK\Pictures\Saved Pictures\IMG_20160107_131044219.jpg" alt="">
                            <ul class="list-inline">
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->

    <!-- Portfolio Modal 2 >
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>ADVENTURES</h2>
                            <p class="item-intro text-muted">Amazing discoveries of new places</p>
                            <img class="img-responsive img-centered" src="C:\Users\PRATEEEK\Pictures\kashmir\SAM_0270.jpg" alt="">
                            lass="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->

    <!-- Portfolio Modal 3 >
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body"-->
                        					    <!-- Project Details Go Here >
                            <h2>COLLEGE LIFE</h2>
                            <p class="item-intro text-muted">My course, friends, teachers and much more</p>
                            <img class="C:\Users\PRATEEEK\Pictures\Saved Pictures\IMG_20160107_131044219.jpg" alt="">
                             <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->

    

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
   /* $('#services').on("click",function()
    {
   $.ajax({
        url: "partial_services.html",

   }).done(function(responce){
    console.log(responce);
    $('#xyz').html(responce);
   }); 
    }
    );*/
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


</body>
</html>