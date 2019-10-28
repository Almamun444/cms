<?php  ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Tags</th>
                <th>Image</th>
                <th>Content</th>
                <th>Date</th>
                <th>Comments</th>
                <th>Staus</th>
            </tr>

           
        </thead>
        <tbody>

    <?php 
        $query_post = "SELECT * FROM posts";
        $query_admin_post = mysqli_query($connection, $query_post);
            while ($row = mysqli_fetch_assoc($query_admin_post)) {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_categories = $row['post_categories'];
            $post_tags = $row['post_tags'];
            $post_status = $row['post_status'];
            $post_image = $row['post_image'];
            $post_comment_count = $row['post_comment_count'];
            $post_content = $row['post_content'];
            $post_date = $row['post_date'];
            echo "<tr>";
            echo "<td>$post_id</td>"; 
            echo "<td>$post_title</td>";
            echo "<td>$post_author</td>";
            echo "<td>$post_categories</td>";
            echo "<td>$post_tags</td>";
            echo "<td><img src='../images/$post_image'> </td>";
            echo "<td>$post_content</td>";
            echo "<td>$post_date</td>";
            echo "<td>$post_comment_count</td>";
            echo "<td>$post_status</td>";
            echo "</tr>";
        }
    ?>
        </tbody>
    </table>