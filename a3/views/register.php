<?php include('elements/admin_header.php');?>

<div class="container">
	<div class="page-header">
   <h1> the Register User View </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>addUser/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>First Name</label>
          	<input type="text" name="post_first_name" value="<?php echo $first_name?>">
          <label>Last Name</label>
            <input type="text" name="post_last_name" value="<?php echo $last_name?>">
          <label>Email</label>
            <input type="email" name="post_email" value="<?php echo $email?>">
          <label>Password</label>
            <input type="text" name="post_password" value="<?php echo $password?>">
    			<br/>
					<input type="hidden" name="post_user_type" value="<?php echo $user_type?>"/>
          <input type="hidden" name="post_uID" value="<?php echo $uID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>
      </div>
    </div>
</div>

<?php include('elements/admin_footer.php');?>
