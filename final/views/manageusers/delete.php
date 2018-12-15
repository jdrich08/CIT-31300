<?php
include('views/elements/header.php');
?>

<div class="container">
	<div class="page-header">
   <h1><?php echo $title;?></h1>
 </div>
</div>

<div class="container">
    <?php foreach($users as $u){?>
			<blockquote>
      <h3><?php echo $u['first_name'];?> <?php echo $u['last_name'];?></h3>
      <?php
      if($u['user_type'] == 2) {
      ?>
        <a class="btn btn-danger" href="<?php echo BASE_URL;?>manageusers/delete/<?php echo $u['uID'];?>">Delete</a>
      <?php
      }
      ?>
      <?php
      if($u['active'] == 0) {
      ?>
        <a class="btn btn-primary" href="<?php echo BASE_URL;?>manageusers/approve/<?php echo $u['uID'];?>">Approve</a>
      <?php
      }
      ?>
		</blockquote>
    <?php }?>
	</div>

<?php include('views/elements/footer.php');?>
