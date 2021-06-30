<div class="col-md-12">
	<div class="row">

		<!-- carousel principal -->
    	<div class="col-md-12">
    		<div class="feature_news_carousel">
				<div id="featured-news-carousal" class="carousel slide" data-ride="carousel">
				    <!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">					    
						
						<div class="item active feature_news_item">
							<div class="item_wrapper">
								<div class="item_img">
									<img class="img-responsive" src="<?php echo(base_url())?>upload/annumation/site_bg.png" alt="Chania" style="height: 200px;">
								</div> <!--item_img--> 
								<div class="item_title_date">
									<div class="news_item_title">
										<h2><a href="javascript:void(0);">Nous sommes là pour les personnes qui ont tout perdu à cause des guerres ou des catastrophes naturelles.  </a></h2>
									</div>
                                    <div class="item_meta"><a href="#">
                                    	
                                    </a></div>
								</div> <!--item_title_date-->
							</div> <!--item_wrapper-->	
							
							<div class="item_content">
								
							</div>

						</div><!--feature_news_item-->
						<!-- debit -->
						
						<!-- fin -->

						

					</div><!--carousel-inner-->
    			</div><!--carousel-->
    		</div><!--feature_news_carousel-->
    	</div><!--col-md-6-->

		<div class="col-md-12" style="margin-top: 15px;">
			<div class="row">

				<div class="col-md-1"></div>
				<div class="col-md-10">
					<?php 

		
						if ($contact_info_site->num_rows() <= 0) {
							# code...
						}
						else{

							foreach ($contact_info_site->result_array() as $row) {

									?>

									<div class="col-md-12">
										<?php echo(html_entity_decode($row['blog'])) ?>
									</div>

									<div class="col-md-12">
										<h2>Notre mission</h2>
										<?php echo(html_entity_decode($row['mission'])) ?>
									</div>

									<div class="col-md-12">
										<h2>Notre objectif</h2>
										<?php echo(html_entity_decode($row['objectif'])) ?>
									</div>
									
									<?php
								
								# code...
							}
						}


					?>
				</div>
				<div class="col-md-1"></div>

				<!-- Feature Video Item -->
    			<?php include('_videos.php') ?>

				
			</div>
		</div>

	</div>
</div>