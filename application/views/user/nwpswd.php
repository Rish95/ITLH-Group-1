
<!DOCTYPE html>
<html>
<head>
	<title>New Password</title>
</head>
<body>
<!-- C:\Users\Rishabh\Documents\GitHub\ITLH-Group-1 -->
<div class="container">
     	<div class="row padding-top-btm">
    
  			<div class="col-md-4">
            	<div class="new-car-con">

<form method="post" action="doforget" role="form" >
<div class="form-group">
<?php if($this->session->flashdata('message')) {?>
 <label><span style="color: #CC6633"><?php echo $this->session->flashdata('message');?><span></label>
<?php }?>

</div>
<h4>Forgot pasword</h4>
<fieldset>
						<legend>New Password</legend>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-password">Password</label>
							<div class="col-sm-10">
								<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control"><span class="error"><?php echo $pswdErr;?></span>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
							<div class="col-sm-10">
								<input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
								<span class="error"><?php echo $cpswdErr;?></span>
							</div>
						</div>
					</fieldset>
      
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div></div>
</div>
</div>
</body>
</html>