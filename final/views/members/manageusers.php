
<?php
include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

<h1>Manage Users</h1>
  </div>

	<?php foreach($users as $u){?>
    <blockquote>
      <h3><?php echo $u['first_name'];?> <?php echo $u['last_name'];?></h3>
      <button class="btn btn-default btn-delete-user" value="<?php echo $u['uID'];?>">Delete</button>
    </blockquote>
    <?php }?>


</div>

<?php include('views/elements/footer.php');?>
