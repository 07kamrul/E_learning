<?php 
include("includes/header.php");
?>
<section class="featured_categories">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
                <div class="section_title text-center">
                <div class="section_title text-center contact_title">
                    <h2><i class="fa fa-flash"></i>All Courses</h2>
                             
                <div class="our_latest_courses">
                    <?php 
                    $post = "select * from posts ORDER BY rand() LIMIT 5";
                    $run_post = mysqli_query($con,$post); 
                    while($post_row = mysqli_fetch_array($run_post)):
                    $post_id = $post_row ['post_id']; 
                    $cat_id = $post_row ['cat_id']; 
                    $post_title = $post_row ['post_title']; 
                    $post_date = $post_row ['post_date']; 
                    $post_author = $post_row ['post_author']; 
                    $post_keywords = $post_row ['post_keywords'];
                    $post_content = substr($post_row ['post_content'],0,500); 
                    ?>
                    <div class="single_latest">
                        <h4><a href="single.php?post_id=<?php echo $post_id;?>"><?php echo $post_title;?></a></h4>
                        <p style="margin-bottom:10px"><strong><span>Course Author: <em><?php echo $post_author;?></em></span><span> | </span><span>Started Date: <em><?php echo $post_date;?></em></span></strong></p>
                        <?php echo $post_content;?>
                        <div class="readmore clearfix"><a href="single.php?post_id=<?php echo $post_id;?>">Read More</a></div>
                    </div> 
                    <?php endwhile;?> 
                    </div> 
                </div>
            </div> 
        </div>
    </div>
</section> 
<?php include("includes/footer.php");?>
