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
                        <h1 class="page-header">
                           Welcome to Admin
                            <small>Author</small>
                        </h1>
                    </div>

                    <div class="category-list">
                        <?php if (isset($_POST['submit'])) {
                            $cat_name = $_POST['cat_name'];

                                if ($cat_name == "" || empty($cat_name)) {
                                    echo "The field should not be empty";
                                }else{
                                    $cat_query = "INSERT INTO category(cat_title) ";
                                    $cat_query .= "VALUE('{$cat_name}') ";

                                    $create_category_query = mysqli_query($connection,$cat_query );

                                    if (!$create_category_query) {
                                       die('QUERY failed' . mysqli_error($connection));
                                    }
                                }
                            }
                        ?>

                        <div class="col-md-6">
                            <form action="" method="post">
                              <div class="form-group">
                                <label for="cat_name">Add Categories</label>
                                <input type="text" class="form-control" name="cat_name" placeholder="Category Name">
                              </div>
                               <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>

                        </div>
                        
                        <div class="col-md-6">

                            <?php 
                                $query_admin = "SELECT * FROM category";
                                $query_admin_categories = mysqli_query($connection, $query_admin);
                            ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($row = mysqli_fetch_assoc($query_admin_categories)) {
                                            $cat_id = $row['cat_id'];
                                            $cat_title = $row['cat_title'];
                                            echo "<tr>";
                                            echo "<td>{$cat_id}</td>"; 
                                            echo "<td>{$cat_title}</td>";
                                            echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                                            echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                                            echo "</tr>";
                                        }

                                        if (isset($_GET['delete'])) {
                                           $cate_list = $_GET['delete'];
                                           $query_list = "DELETE FROM category WHERE cat_id = {$cate_list}";
                                           $delete_category = mysqli_query($connection,$query_list ); 


                                        }
                                    ?>


                                </tbody>
                            </table>
                        </div>
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