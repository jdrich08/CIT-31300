
<?php include('elements/header.php');?>
<?php
if( is_array($post) ) {
	extract($post);?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

<?php echo $content;?>

</div>
<?php }?>

<?php if( is_array($posts) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/view/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
	<h4><?php echo $p['name'];?></h4></br>
	<p><?php echo $p['content'];?></p></br>
	<p><?php echo $p['first_name'], $p['last_name'];?></p></br>
	<p>Date posted: <?php $date = date_create($p['date']);
	echo $date->format('F jS Y h:i A');?></p>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>
