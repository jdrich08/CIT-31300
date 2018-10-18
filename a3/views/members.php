<?php include('elements/header.php');?>
<?php
if( is_array($user) ) {
	extract($user);?>

<div class="container">
	<div class="page-header">

<?php echo $first_name;?></br>
<?php echo $last_name;?></br>
<?php echo $email;?></br>

</div>
<?php }?>

<?php if( is_array($users) ) {?>

<div class="container">
<div class="page-header">

  </div>

	<?php foreach($users as $u){?>
    <h3><a href="<?php echo BASE_URL?>members/view/<?php echo $u['uID'];?>" title="<?php echo $u['email'];?>"><?php echo $u['email'];?></a></h3>
	<h4><?php echo $u['email'];?></h4></br>
	<p><?php echo $u['first_name'], $u['last_name'];?></p></br>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>
