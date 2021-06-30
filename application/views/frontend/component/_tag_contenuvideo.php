<div class="category_layout">


	<?php 

		if ($infos_videos->num_rows() <= 0) {
			# code...
		}
		else{

			foreach ($infos_videos->result_array() as $row) {

				?>

				<!-- debit -->
				<div class="single_content_layout">
					<div class="item feature_news_item">
						<div class="item_video">
							<!-- image here -->
						</div><!--item_img--> 
							<div class="item_wrapper">


								<div class="col-md-12 embed-responsive embed-responsive-16by9">
									<video 
										src="<?php echo(base_url()) ?>upload/video/<?php echo($row['lien']) ?>" class="col-md-12 embed-responsive-item" controls=""
									 		poster="<?php echo($icone_info) ?>">
				       					<source src="<?php echo(base_url()) ?>upload/video/<?php echo($row['lien']) ?>" type="video/p4">
				       					<source src="<?php echo(base_url()) ?>upload/video/<?php echo($row['lien']) ?>" type="video/webm">
				       				</video>
								</div>

								<div class="col-md-12">

									<div class="news_item_title">
									<h2><a href="#"><?php echo(substr($row['nom'], 0,4000))?></a></h2>
								</div><!--news_item_title-->
								<div class="item_meta"><a href="javascript:void(0);"><?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></a> </div>

			                        <span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>

									<div class="single_social_icon">
										<a class="icons-sm fb-ic btn_facebook" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<!--Twitter-->
										<a class="icons-sm tw-ic btn_twitter" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<!--Google +-->
										<a class="icons-sm gplus-ic btn_google" href="#"><i class="fa fa-google-plus"></i><span>Google Plus</span></a>
										<!--Linkedin-->
										<a class="icons-sm li-ic btn_linkedin" href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>

									</div> <!--social_icon1-->

									<div class="item_content col-md-12">
										<?php echo(html_entity_decode($row['description'])) ?>
									</div><!--item_content-->
									
								</div>


								
			                       
							</div><!--item_wrapper-->	
					</div><!--feature_news_item-->
						 
				</div>
				<!-- fin -->

				
				<?php

				
			}
		}


	?>
	
	
		
		



</div>