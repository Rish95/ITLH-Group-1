<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
</head>
<body>

	<?php //echo validation_errors(); ?>
	<?php 
	if(!empty($errors)){
	foreach ($errors as $key => $value) {
	echo "<pre>$value</pre>";
}			
}
?>
<!-- 
cd users/rishabh/documents/itlh/prac/ci1/ 
php -S localhost:8080



-->
<form action="/ctg/add_post" method="post" enctype="multipart/form-data">

	<div class="container">
		<h1 id="h" align="center">Categories</h1>
		<div class="col-md-offset-5 col-md-5">
			<div class="well well-md">

				<fieldset id="account">
					<legend>Category Details</legend>

					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<h3>
									Category
								</h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group required">
											<label class="col-sm-2 control-label" for="input-name">Category Title</label>
											<div class="col-sm-10">
												<input type="text" name="title" value="" placeholder="Product Name" id="input-name" class="form-control">

											</div>
										</div>

										<div class="form-group required">
											<label class="col-sm-2 control-label" for="input-qty">Visibility</label>
											<div class="col-sm-10">
												<label class="radio-inline">
													<input type="radio" name="visible" value="1">
													Yes</label>
													<label class="radio-inline">
														<input type="radio" name="visible" value="0" checked="checked">
														No</label>
													</div>
												</div>

											</div>
										

										<!-- <div class="form-group required">
											<label class="col-sm-2 control-label" for="input-descp">Description</label>
											<div class="col-sm-10">
												<textarea rows="14" cols="30" name="descp"></textarea>

											</div>
										</div> -->
									
									</div>
								</div>
							</div>

							<!-- <form action="upload.php" method="post" enctype="multipart/form-data"> -->
								Select image to upload:
								<input type="file" name="fileToUpload" id="fileToUpload">
								<input type="submit" value="Upload Image" name="submit">
							<!-- </form> -->
							</fieldset>
				





<!-- <label for="email">Email</label>
	<input type="text" name="email" id="email" value=""> -->

	<button type="submit"> Submit </button>


</fieldset>

</form>

<ul>
	<!-- <table border="0" cellspacing="2" cellpadding="2">
	<?php 
	echo "<tr><b><pre><td>Categories:</td>
				<td>Visibility</td>
				<td>Img</td>
				<br></pre></b></tr>";
	if(!empty($categories)){
	foreach ($categories as $category) {
		
	// echo "<li> $product->prdtnm <a href='/user/delete/$product->id'> Delete </a> </li>";
	echo "<li><pre>{$category->title}\t{$category->visible}&nbsp;&nbsp;&nbsp;\t{$category->icon}&nbsp;&nbsp;&nbsp;\t\t\t\t<a href='/categories/delete/$category->id'>Delete</a>&nbsp;&nbsp;</pre></li>";
	// 
}
}
?> -->
	<?php 
	echo "<b><pre>Categories:&nbsp;&nbsp;&nbsp;&nbsp;\tVisibility&nbsp;&nbsp;&nbsp;\t&nbsp;&nbsp;&nbsp;\tImg<br></pre></b>";
	if(!empty($categories)){
	foreach ($categories as $category) {
	// echo "<li> $product->prdtnm <a href='/user/delete/$product->id'> Delete </a> </li>";
	echo "<li><pre>{$category->title}&nbsp;&nbsp;&nbsp;&nbsp;\t&nbsp;&nbsp;&nbsp;{$category->visible}&nbsp;&nbsp;&nbsp;\t{$category->icon}&nbsp;&nbsp;&nbsp;\t\t\t\t<a href='/categories/delete/$category->id'>Delete</a>&nbsp;&nbsp;</pre></li>"; 
	// 
}
}
?>

</ul>

</body>
</html>