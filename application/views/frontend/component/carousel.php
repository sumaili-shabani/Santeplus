<section id="fp-container">
		<div class="container-fluid">	
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
										<div class="col-md-3 col-sm-4 no-padding">
											<div class="post-item clearfix">
												<div class="img-thumb">
													
													<a href="javascript:void(0);"><div class="fbt-resize" style="background-image: url('<?php echo(base_url()) ?>upload/annumation/logo3.jpg')"></div></a>
													<div class="img-credits">
														<a class="post-category" href="#">Objectif</a>
														<a href="javascript:void(0);"><h5 style="color: white;"><?php echo($objectif_info) ?></h5></a>
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
													
													<a href="javascript:void(0);"><div class="fbt-resize" style="background-image: url('<?php echo(base_url()) ?>upload/annumation/IMG_9941.JPG')"></div></a>
													<div class="img-credits">
														<a class="post-category" href="#">Savoir plus sur nous!</a>
														<a href="javascript:void(0);"><h5 style="color: white;"><?php echo($blog_info) ?></h5></a>
														<div class="post-info clearfix">
															
															<span><?php echo($nom_site_info) ?></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 no-padding">
											<div class="post-item clearfix">
												<div class="img-thumb">
													<span class="video-icon"><i class="fa fa-play-circle-o"></i></span>
													<a href="javascript:void(0);"><div class="fbt-resize" style="background-image: url('<?php echo(base_url()) ?>upload/annumation/IMG_9883.jpg')"></div></a>
													<div class="img-credits">
														<a class="post-category" href="#">Mission</a>
														<a href="javascript:void(0);"><h5 style="color: white;"><?php echo($mission_info) ?>.</h5></a>
														<div class="post-info clearfix">
															<span><?php echo($nom_site_info) ?></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- Big Gallery End -->
								
								<?php
							
							# code...
						}
					}


				?>

			
				
			</div>
		</div>
	</section>