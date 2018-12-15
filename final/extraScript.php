$('#commentMain').append(
  for(var i=0; i<response.length; i++){
    <blockquote>
     <p>response[i].commentText</p>
     <sub class="text-primary">response[i].first_name + " " + response[i].last_name + " " + response[i].date</sub>
     <?php if($u->isAdmin()) {
     ?>
       <button class="btn btn-default btn-delete-comment" value="<?php echo $c['commentID'];?>">Delete</button>
     <?php
     }
     ?>
    </blockquote>
  }
);
