   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo BASE_URL?>views/js/jquery.js"></script>
    <script src="<?php echo BASE_URL?>views/js/bootstrap.min.js"></script>
   <?php
   if($u->isAdmin()) {
       ?>
   <script src="<?php echo BASE_URL?>application/plugins/tinyeditor/tiny.editor.packed.js"></script>
   <script>
       var editor = new TINY.editor.edit('editor', {
           id: 'tinyeditor',
           width: 584,
           height: 175,
           cssclass: 'tinyeditor',
           controlclass: 'tinyeditor-control',
           rowclass: 'tinyeditor-header',
           dividerclass: 'tinyeditor-divider',
           controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
               'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
               'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
               'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|'],
           footer: true,
           fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
           xhtml: true,
           cssfile: 'custom.css',
           bodyid: 'editor',
           footerclass: 'tinyeditor-footer',
           toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
           resize: {cssclass: 'resize'}
       });


   </script>

   <?php
    }
    ?>

   <script>
   $(document).ready(function(){
     $('.post-loader').click(function(event){
       event.preventDefault();
       var el = $(this);
       $.ajax({
         url:el.attr('href'),
         type:'GET',
         success:function(data){
           el.parent().append(data);
           el.remove();
         }
       });
     });
   });

   $(document).ready(function(){
     var pID = {id: <?php echo $pID;?>};
     if(pID.id != 'undefined'){
       getComments();
     }

     function getComments(){
       $.ajax({
         url: "<?php echo BASE_URL;?>ajax/getComments",
         data: pID,
         type: "POST",
         success: function(response){
           $('#commentMain').html('').append(response);
           console.log(response);

           $('.btn-delete-comment').click(function(e){
             e.preventDefault();
             var el = $(this);
             var comID = el.val();

             el.parent().slideUp(function(){
               el.remove();
             });

             $.ajax({
               url: "<?php echo BASE_URL;?>ajax/deleteComment",
               type:"POST",
               data: comID
             });
           });
         }
       });
     }

     $('.submit-comment').click(function(e){
       e.preventDefault();
       var data = {data:$('#commentText').val(),
                   date: $('#date').val(),
                   postid: $('#pid').val(),
                   userid: $('#uid').val()
                   }
       $.ajax({
         url:"<?php echo BASE_URL;?>ajax/postComment",
         type: "POST",
         data: data,
         success: function(){

         }
       });
     });
   });
   </script>



  </body>
</html>
