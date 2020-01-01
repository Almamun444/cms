<?php  ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <!-- <th>Post Id</th> -->
                <th>Content</th>
                <th>Author</th>
                <th>Status</th>
                <th>Email</th>
                <th>Date</th>
                <th>Comment</th>
                <th>Approve</th>
                <th>Upapporove</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

           
        </thead>
        <tbody>

    <?php 
        $query_post = "SELECT * FROM comments";
        $query_admin_comment = mysqli_query($connection, $query_post);
            while ($row = mysqli_fetch_assoc($query_admin_comment)) {
            $comment_id = $row['comment_id'];
            $comment_post_id = $row['comment_post_id'];
            $comment_content = $row['comment_content'];
            $comment_author = $row['comment_author'];
            $comment_status = $row['comment_status'];
            $comment_email = $row['comment_email'];
            $comment_date = $row['commnet_date'];
            echo "<tr>";
            echo "<td>$comment_id</td>"; 
            echo "<td>$comment_post_id</td>";
            echo "<td>$comment_content</td>";
            echo "<td>$comment_author</td>";
            echo "<td>$comment_status</td>";
            echo "<td>$comment_email</td>";
            echo "<td>$comment_date</td>";
            echo "<td><a href='comments.php?delete={$comment_id}'>Approve</a></td>";
            echo "<td><a href=''comments.php?delete={$comment_id}'>Upapporove</a></td>";
            echo "<td><a href=''comments.php?delete={$comment_id}'>Edit</a></td>";
            echo "<td><a href=''comments.php?delete={$comment_id}'>Delete</a></td>";
            echo "</tr>";
        }
    ?>
        </tbody>
    </table>

    <?php 

    //     if(isset($_GET['delete()'])) {
    //       $delete_post = $_GET['delete'];

    //       $query = "DELETE FROM posts WHERE post_id = {$delete_post} ";
    //       $delete_post_query = mysqli_query($connection, $query);

    //       if (!$delete_post_query) {
    //          die("Query failed" . mysqli_error($connection));
    //     }
    // }

    ?>