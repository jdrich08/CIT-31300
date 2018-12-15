<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
		<img src="<?php echo BASE_URL;?>views/elements/home.png" class="img-responsive" width="500" height="600">
    <h1>This is how your final project shouldn't function.</h1>
		<p>Your site is supposed to function, unlike this one. Be happy you are better at this than I am.</p>
  </div>
	<div>
</div>
<div class="container">
	<h1>Latest News from <?php echo $title;?></h1>
</div>
	<?php
	echo $data;
	?>
</div>
<?php include('views/elements/footer.php');?>
