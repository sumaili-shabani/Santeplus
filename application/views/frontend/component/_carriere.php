<div class="col-md-12">
	<div class="row">
		
		<?php 

		
			if ($infos_news->num_rows() <= 0) {
				# code...
			}
			else{

				foreach ($infos_news->result_array() as $row) {

						?>

						<!-- Big Gallery Start -->
							<div class="gallery bgallery clearfix">
								<div class="gallery-img clearfix">
									<div class="col-md-6 col-sm-4 no-padding">
										<div class="post-item clearfix">
											<div class="img-thumb">
												
												<a href="javascript:void(0);"><div class="fbt-resize" style="background-image: url('<?php echo(base_url()) ?>upload/annumation/logo6.jpg')"></div></a>
												<div class="img-credits">
													
													<a href="javascript:void(0);"><h5 style="color: white;">Nous Carrière chez «SANTE-PLUS» </h5></a>
													<div class="post-info clearfix">
														<span><?php echo($nom_site_info) ?></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-4 big-section no-padding">
										<div class="post-item clearfix">
											<div class="img-thumb">
												
												<a href="javascript:void(0);"><div class="fbt-resize" style="background-image: url('<?php echo(base_url()) ?>upload/annumation/logo7.JPG')"></div></a>
												<div class="img-credits">
													
													<a href="javascript:void(0);"><h5 style="color: white;"><?php echo($blog_info) ?></h5></a>
													<div class="post-info clearfix">
														
														<span><?php echo($nom_site_info) ?></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div><!-- Big Gallery End -->

						<div class="col-md-12">
							<?php echo(html_entity_decode($row['carierre'])) ?>
						</div>
						
						<?php
					
					# code...
				}
			}


		?>

		

	</div>
</div>