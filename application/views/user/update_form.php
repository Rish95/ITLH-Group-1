<!DOCTYPE html>
<html>
<head>
	<title>Store</title>
</head>
<body>
	
		<?php //echo validation_errors(); ?>
		<?php 
		if(!empty($errors)){
			foreach ($errors as $key => $value) {
				echo $value;
			}			
		}
		?>
		
	<form action="/user/update_post" method="post">

		<div class="container">
			<h1 id="h" align="center">Product</h1>
			<div class="col-md-offset-5 col-md-5">
				<div class="well well-md">

					<fieldset id="account">
						<legend>Product Details</legend>

						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<h3>
										Products
									</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group required">
												<label class="col-sm-2 control-label" for="input-name">Product Name</label>
												<div class="col-sm-10">
													<input type="text" name="prdtnm" value="<?php echo $product->prdt_nm; ?>" placeholder="Product Name" id="input-name" class="form-control">
													
												</div>
											</div>

											<div class="form-group required">
												<label class="col-sm-2 control-label" for="input-qty">Quantity</label>
												<div class="col-sm-10">
													<input type="int" name="qty" value="<?php echo $product->qty; ?>" placeholder="Quantity" id="input-qty" class="form-control">
												</div>
											</div>
											<div class="form-group required">
												<label class="col-sm-2 control-label" for="input-prc">Price</label>
												<div class="col-sm-10">
													<input type="int" name="prc" placeholder="Price" id="input-prc" class="form-control" value="<?php echo $product->prc; ?>">
													<input type="hidden" name="id" value="<?php echo $product->id; ?>"> 
												</div>
											</div>
										<!-- </fieldset>
										<fieldset id="address"> -->

											
											<div class="form-group required">
												<label class="col-sm-2 control-label" for="input-ctg">Category</label>
												<div class="col-sm-10">
													<!-- <SELECT NAME="ctg_id" id="input-ctg" class="form-control" >
														<OPTION VALUE="Elec">Electronics</OPTION>
														<OPTION VALUE="Mobi" SELECTED>Mobiles</OPTION>
														<OPTION VALUE="Comp">Computers</OPTION>
													</select> -->	

													<SELECT NAME="ctg_id" id="input-ctg" class="form-control" >
														<?php 
														
															foreach ($categories as $category) {
																if ($product->ctg_id==$category->id) {
																	echo "<option selected value='{$category->id}'>{$category->title}</option>"; 
																}
																else
																{
																	echo "<option value='{$category->id}'>{$category->title}</option>"; 
																}
																}
															
															?>																							
													</SELECT>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group required">
													<label class="col-sm-2 control-label" for="input-descp">Description</label>
													<div class="col-sm-10">
														<textarea rows="14" cols="30" name="descp"></textarea>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



						</div>


					


					
					
					<button type="submit"> Submit </button>
				
			</div>
		</div>
	</fieldset>

</form>

<ul>
	<?php 
	echo "<b><pre>ID:&nbsp;&nbsp;&nbsp;&nbsp;\tQty&nbsp;&nbsp;&nbsp;\tPrice&nbsp;&nbsp;&nbsp;\tDescription&nbsp;&nbsp;&nbsp;\tImg<br></pre></b>";
	if(!empty($products)){
		foreach ($products as $product) {
			// echo "<li> $product->prdtnm <a href='/user/delete/$product->id'> Delete </a> </li>";
			echo "<li><pre>{$product->prdt_nm}\t{$product->qty}&nbsp;&nbsp;&nbsp;\t{$product->prc}&nbsp;&nbsp;&nbsp;\t{$product->descp}\t{$product->img}\t\t\t<a href='/user/delete/$product->id'>Delete</a>&nbsp;&nbsp;<a href='/user/update/$product->id'>Update</a></pre></li>"; 
			// 
		}
	}
	?>

</ul>

</body>
</html>