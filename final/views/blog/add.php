
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>

    <div class="container">
        <div class="page-header">

            <h1>Comment Successfully Added</h1>
        </div>
        <a href="<?php echo BASE_URL;?>blog/post/<?php echo $pID;?>" class="btn btn-default">Back to Post</a>

    </div>


<?php include('views/elements/footer.php');?>
