<!DOCTYPE html>

<html>
<head>
	<title>Products</title>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet" type='text/css'>
	<link rel="stylesheet" type="text/css" href="C:\Users\Rishabh\Documents\ITLH\Prac\lib\css\Rg2.css">
	<link rel="stylesheet" href="C:\Users\Rishabh\Documents\ITLH\Prac\lib\css\bootstrap.min.css">
	<link rel="shortcut icon" href="C:\Users\Rishabh\Documents\ITLH\Prac\img\favicon.ico">
</head>
<body>
<!-- cd users/rishabh/documents/itlh/prac/
	php -S localhost:8080 -->
<div class="container">
		<h1 id="h" align="center">Product</h1>
		<div class="col-md-8 col-md-offset-2">
		<div class="well well-lg">
			<form action="user/prdt_post" method="post" enctype="multipart/form-data" class="form-horizontal">
				<fieldset id="account">
					<legend>Product Details</legend>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-name">Product Name</label>
							<div class="col-sm-10">
								<input type="text" name="prdtnm" value="" placeholder="Product Name" id="input-name" class="form-control">
							</div>
						</div>

						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
							<div class="col-sm-10">
								<input type="int" name="qty" value="" placeholder="Quantity" id="input-qty" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-mobile">Mobile</label>
							<div class="col-sm-10">
								<input type="int" name="prc" value="" placeholder="Price" id="input-prc" class="form-control">
							</div>
						</div>
					</fieldset>
					<fieldset id="address">

						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-address-1">Address </label>
							<div class="col-sm-10">
								<input type="text" name="address_1" value="" placeholder="Address" id="input-address-1" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-cgt">Category</label>
							<div class="col-sm-10">
								<SELECT NAME="Cgt" id="input-cgt" class="form-control" >
									<OPTION VALUE="">---SELECT---</OPTION>
									<OPTION VALUE="1">Electronics</OPTION>
									<OPTION VALUE="2" SELECTED>Mobiles</OPTION>
									<OPTION VALUE="3">Computers</OPTION>
								</select>	
							</div>

								<!-- <input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control"> -->
							</div>
						</div>

						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-dscp">Description</label>
							<div class="col-sm-10">
								<textarea rows="14" cols="30" name="dscp"></textarea>
									
							</div>
						</div>
					</fieldset>

			</form>
			</div>
		</div>
	</div>
	</body>
	</html>