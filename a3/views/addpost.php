<?php include('elements/admin_header.php');?>

<div class="container">
	<div class="page-header">
   <h1> the Add Post View </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>addpost/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>Title</label>
          	<input type="text" name="post_title" value="<?php echo $title?>">
					<label>Category</label>
						<input type="radio" name="post_categoryID" value="1"> Techstuff<br>
  					<input type="radio" name="post_categoryID" value="2"> Weather<br>
  					<input type="radio" name="post_categoryID" value="3"> Sports<br>
     			<label>Content</label>
          	<textarea id="tinyeditor" name="post_content" style="width:556px;height: 200px"><?php echo $content?></textarea>
    			<br/>
					<input type="datetime-local" name="post_date" value="<?php echo $date?>"/>
          <input type="hidden" name="pID" value="<?php echo $pID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>


      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>
