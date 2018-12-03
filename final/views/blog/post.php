
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>


    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>


    </div>

    <div class="container">
        <div>
          <h1>Comments</h1>
          <?php if($message){?>
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            	<?php echo $message?>
            </div>
          <?php }?>
          <?php foreach($comments as $c){?>
            <blockquote>
              <p><?php echo $c['commentText'];?></p>
              <sub class="text-primary"><?php echo $c['first_name'] . ' ' . $c['last_name'] . ' ' . $c['date'];?></sub>
              <?php
              if($u->isAdmin()) {
              ?>
                <button class="btn btn-default btn-delete" value="<?php echo $c['commentID'];?>">Delete</button>
              <?php
              }
              ?>
            </blockquote>
          <?php }?>
        </div>
    </div>

    <?php
    if($u->isRegistered()) {
    ?>
    <div class="container">
      <div class="form-group">
        <form action="<?php echo BASE_URL?>blog/<?php echo $task;?>" method="post">
          <label for="comment">Comment:</label>
          <textarea class="form-control" rows="5" id="commentText" name="commentText" style="min-width: 100%"></textarea>
          <?php date_default_timezone_set('America/Indiana/Indianapolis');?>
          <input type="hidden" name="date" id="date" value="<?php echo date('Y-m-d H:i:s');?>"/>
          <input type="hidden" name="uID" id="uID" value="<?php echo $_SESSION['uID']?>"/>
          <input type="hidden" name="pID" id="pID" value="<?php echo $pID;?>"/>
          <button id="submitComment" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <?php
    } else {
    ?>
    <div class="container">
      <p>Login to post a comment.</p></br>
      <a href="<?php echo BASE_URL?>login/index.php" class="btn btn-default">Login</a>
    </div>
    <?php
    }
    ?>


<?php include('views/elements/footer.php');?>
