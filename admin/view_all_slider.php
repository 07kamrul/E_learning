<?php include("includes/header.php");?>


<section class="admin_area">
    <div class="container">
        <div class="row">
            <?php include("includes/admin_menus.php");?>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>View All Slider</h2>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Id</th>
                             <th>Slide Image</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $slide = "select * from slider";
                        $run_slide = mysqli_query($con,$slide); 
                        while($slide_row = mysqli_fetch_array($run_slide)):
                        $slide_id = $slide_row ['slide_id'];   
                        $slide_image = $slide_row ['slide_image']; 
                        ?>             
                          <tr>
                            <td><?php echo $slide_id;?></td>
                            <td><img src="images/<?php echo $slide_image;?>" height="100px" width="200px"></td>
                            <td><a href="delete_slide.php?delete_slide=<?php echo $slide_id;?>">Delete</a></td>
                          </tr>
                        <?php endwhile;?>   
                       </tbody>
                      </table>
                    <a href="insert_slider.php">Add Slide</a>
                </div>
            </div>                 
        </div>
    </div>
</section>
 

<?php include("includes/footer.php");?>


