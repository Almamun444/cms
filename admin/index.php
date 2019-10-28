<?php 
    include "includes/header.php";
?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php 
            include "includes/navigation.php";
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <?php if ($connection) echo "Database connection success"; ?>
                            
                        <?php //endif ?>
                        <h1 class="page-header">
                           Welcome to Admin
                            <small>Author</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php 
    include "includes/footer.php";
?>