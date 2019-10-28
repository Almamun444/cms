<?php

    include "includes/db.php";
    include "includes/header.php";

	if (isset($_POST['submit'])) {
	    $search = $_POST['search'];

	    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";

	    $search_query = mysqli_query($connection, $query);

	    if (!$search_query) {
	    	die("Don't get any post like");
	    }

		$count = mysqli_num_rows($search_query);
	    if ($count == 0) {
	    	echo "<h1>No result</h1>";
	    }else{?>

	        <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Search Page
                    <small>Search somethings text</small>
                </h1>
                 <?php include "includes/content.php"; ?>
   

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <?php include "includes/sidebar.php"; ?>
            </div>

        </div>
        <!-- /.row -->
    </div>

<?php 

    include "includes/footer.php";
?>


	   <?php  }
	}?>



