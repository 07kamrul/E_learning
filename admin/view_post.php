<?php include("includes/header.php");?>


<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>View All Posts</h2>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Course Id</th>
                            <th>Course Title</th>
                            <th>Course Content</th>
                            <th>Course Image</th>
                            <th>Published By</th>
                            <th>Published On</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $post = "select * from posts";
                        $run_post = mysqli_query($con,$post); 
                        while($post_row = mysqli_fetch_array($run_post)):
                        $post_id = $post_row ['post_id'];   
                        $post_title = $post_row ['post_title']; 
                        $post_image = $post_row ['post_image']; 
                        $post_date = $post_row ['post_date']; 
                        $post_author = $post_row ['post_author'];  
                        $post_content = substr($post_row ['post_content'],0,100); 
                        ?>             
                          <tr>
                            <td><?php echo $post_id;?></td>
                            <td><?php echo $post_title;?></td>
                            <td><?php echo $post_content;?></td>
                            <td><img src="images/<?php echo $post_image;?>" height="60px" width="60px"></td>
                            <td><?php echo $post_author;?></td>
                            <td><?php echo $post_date;?></td>
                            <td><a href="edit_post.php?edit=<?php echo $post_id;?>">Edit</a></td>
                            <td><a href="delete_post.php?delete_post=<?php echo $post_id;?>">Delete</a></td>
                          </tr>
                        <?php endwhile;?>   
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>
 

<?php include("includes/footer.php");?>


