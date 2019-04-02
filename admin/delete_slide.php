<?php include("includes/header.php");?>
 
 <?php 
    if(isset($_GET['delete_slide'])){
    $delete_slide_id = $_GET['delete_slide'];
    $delete_slide = "delete from slider where slide_id = '$delete_slide_id'";
    $del_slide = mysqli_query($con,$delete_slide);  
      
    echo "<script>alert('Slide Deleted Successfully!!')</script>";
    echo "<script>window.open('view_all_slider.php','_self');</script>"; 
        
    };
?>
 

<?php include("includes/footer.php");?>


