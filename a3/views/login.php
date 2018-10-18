<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
   <?php echo $numbers ?>
  </div>
	<div class="row">
			<div class="span8">
				<form action="<?php echo BASE_URL?>do_login/<?php echo $task?>" method="post" onsubmit="editor.post()">
					<label>Email</label>
						<input type="email" name="post_email">
					<label>Password</label>
						<input type="text" name="post_password">
				 <br/>
					<button id="submit" type="submit" class="btn btn-primary" >Submit</button>
				</form>
			</div>
		</div>
</div>
<?php include('elements/footer.php');?>
