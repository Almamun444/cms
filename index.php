<?php 
    include "includes/db.php";
    include "includes/header.php";
?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
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
