			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="sidebar_right">
					<div class="search_sidebar">
						<form action="search.php" class="search_bar" method="get">
							<input type="Search" name="search" placeholder="Search Here">
							<input type="Submit" name="search_submit" value="Search">
						</form>
					</div>
					<div class="sidebar_categories">
						<h2>Course Categories</h2>
						<ul>
							<?php
							$category = "select * from categories";
							$run_category = mysqli_query($con,$category);
							while ($category_row = mysqli_fetch_array($run_category)):
							$cat_id = $category_row['cat_id'];
							$cat_name = $category_row['cat_name'];
							?>
							<li><a href="single-cat.php?cat_id=<?php echo $cat_id;?>"><?php echo $cat_name;?></a></li>
						<?php endwhile ?>
						</ul>
					</div>
					<div class="sidebar_banner">
						<a href="registration.php"><img src="image/register.png" alt="Register Now"></a>
					</div>
				</div>
			</div>