<?php

    if(isset($_POST['create_post'])){
      // $post_id =  $_POST['id'];

      $post_title =  $_POST['title'];
      $post_categories =  $_POST['post_category'];
      $post_author =  $_POST['post_author'];
      $post_status =  $_POST['post_status'];
      $post_tags =  $_POST['post_tags'];
      $post_content =  $_POST['post_content'];
      $post_image        =  $_FILES['image']['name'];
      $post_image_temp  =  $_FILES['image']['tmp_name'];
      $post_date =  date('d-m-y');
      $post_comment_count =  4;

      move_uploaded_file($post_image_temp, "../images/$post_image");

      $post_query_2 = "INSERT INTO posts(post_title,post_categories, post_date, post_author, post_status,post_content,post_image, post_tags, post_comment_count) ";

      $post_query_2 .= "VALUES('{$post_title}', '{$post_categories}',now(),'{$post_author}', '{$post_status}', '{$post_content}', '{$post_image}', '{$post_tags}', '{$post_comment_count}' ) ";

      $post_query_list = mysqli_query($connection,$post_query_2 );

      if (! $post_query_list) {
       die("query falied" . mysqli_error($connection));
      }

    }


?>


    <form action="" method="post" enctype="multipart/form-data">  
    <!--    <div class="form-group">
         <label for="title">Post Id</label>
          <input type="text" class="form-control" name="id" >
      </div>  --> 
      <div class="form-group">
         <label for="title">Post Title</label>
          <input type="text" class="form-control" name="title">
      </div>

      <div class="form-group">
       <label for="category">Category</label>
       <select name="post_category" id="post_category">

         <?php 
              $query_admin_cat = "SELECT * FROM category";
              $query_admin_2 = mysqli_query($connection, $query_admin_cat);

                    while ($row = mysqli_fetch_assoc( $query_admin_2)) {
                      $cat_id = $row['cat_id'];
                      $cat_title = $row['cat_title'];
                      echo "  <option value='{$cat_id}'>{$cat_title}</option>";
                  }
          ?>
               
       </select>
      
      </div>


       <div class="form-group">
       <label for="users">Author</label>
        <input type="text" class="form-control" name="post_author">
<!--        <select name="post_user" id="">
          <option value=''>Java</option>
          <option value=''>PHp</option>      
        
       </select>
       -->
      </div>





      <!-- <div class="form-group">
         <label for="title">Post Author</label>
          <input type="text" class="form-control" name="author">
      </div> -->
      
      

       <div class="form-group">
        <label for="users">Status</label>
         <input type="text" class="form-control" name="post_status">
    <!--      <select name="post_status" id="">
             <option value="draft">Post Status</option>
             <option value="published">Published</option>
             <option value="draft">Draft</option>
         </select> -->
      </div>
      
      
      
    <div class="form-group">
         <label for="post_image">Post Image</label>
          <input type="file"  name="image">

          <img src="..//images/<?php echo $post_image;?>" alt="">
      </div>

      <div class="form-group">
         <label for="post_tags">Post Tags</label>
          <input type="text" class="form-control" name="post_tags">
      </div>
      
      <div class="form-group">
         <label for="post_content">Post Content</label>
         <textarea class="form-control "name="post_content" id="" cols="30" rows="10">
         </textarea>
      </div>
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
      </div>


</form>
    