<?php ?>

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
            <div class="input-group">
                <input type="text" name="search" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" name="submit">
                        <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
        </form>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">

                    <?php 
                        $query_sidebar = "SELECT * FROM category";
                        $query_sidebar_categories = mysqli_query($connection, $query_sidebar);

                        while ($row = mysqli_fetch_assoc($query_sidebar_categories)) {
                            $cat_title = $row['cat_title'];

                            echo "<li><a href='#'>{$cat_title}</a></li>"; 
                        }

                    ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
 <?php include "includes/widget.php" ?>