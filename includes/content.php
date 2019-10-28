<?php
    $query_post = "SELECT * FROM posts";

    $post_all_query = mysqli_query($connection, $query_post);

    while ($row = mysqli_fetch_assoc($post_all_query)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_tags = $row['post_tags'];
        $post_categories = $row['post_categories'];
        $post_author = $row['post_author'];
        $post_content = $row['post_content'];
        $post_image = $row['post_image'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_comment_count = $row['post_comment_count'];
    ?>

        <!-- First Blog Post -->
        <div class="post-list">
            <header class="entry-header">
                <h2><a href="#"><?php echo $post_title; ?></a></h2>
               
            </header>
            <div class="entry-meta">
                <span><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></span>
                 <span class="author">By <a href="index.php"><?php echo $post_author; ?></a></span>
            </div>s
             <br>
            <div class="post-thumbnail">
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            </div>
            <br>
            <div class="entry-content">
                <p class="lead"><?php echo $post_content; ?></p>
            </div>
            <br>
            <footer class="entry-footer">
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
            </footer>
        </div>
    <?php } ?>

    <!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>