<div class="category_layout">
	
	<div class="row">

		<?php 


			if ($article_blog_one->num_rows() <= 0) {
				# code...
			}
			else{

				foreach ($article_blog_one->result_array() as $key) {

					$vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$key['idart']." ");
					if ($vues->num_rows() <=0) {
						$nombre_vue = 0;
					}
					else{
						foreach ($vues->result_array() as $key_vue) {
							$nombre_vue = $key_vue['total'];
						}
					}

					$idcat_ok_boss = $key['idcat'];

					?>


					<!-- bloc info 1 -->
					<div class="col-md-7">
						<div class="item active feature_news_item">
							<div class="item_wrapper">
								<div class="item_img">
									<img class="img-responsive" src="<?php echo(base_url())?>upload/article/<?php echo($key['image'])?>">
								</div><!--item_img-->  
								<div class="item_title_date">
									<div class="news_item_title">
										<h2><a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"> <?php echo (substr($key['nom'], 0,95)); ?> ...</a></h3>
									</div><!--news_item_title-->
				                    <div class="item_meta"><a href="javascript:void(0);">  <?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?></a> </div>
								</div><!--item_title_date-->
							</div><!--item_wrapper-->	
						    <div class="item_content">
						    	<?php substr(html_entity_decode($key['description']), 0,100) ?>
						    </div>

						    

						</div><!--feature_news_item-->
						
					</div><!--col-md-7-->



					<div class="col-md-5">
						<div class="media_wrapper">

							<!-- debit -->
							<?php 

								$coucoux = $this->db->query("SELECT * FROM profile_article WHERE idcat=".$key['idcat']."  ORDER BY RAND() LIMIT 3");
								if ($coucoux->num_rows() <= 0) {
									# code...
								}
								else{

									foreach ($coucoux->result_array() as $row) {

										$vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$row['idart']." ");
										if ($vues->num_rows() <=0) {
											$nombre_vue = 0;
										}
										else{
											foreach ($vues->result_array() as $key_vue) {
												$nombre_vue = $key_vue['total'];
											}
										}

										?>

										<div class="media">
											<div class="media-left">
												<a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><img class="media-object img-thumbnail" src="<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>" alt="Generic placeholder image" style="width: 80px; height: 80px; border-color: white;"></a>
											</div><!--media-left-->
											<div class="media-body">
												<h3 class="media-heading"><a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"> <?php echo (substr($row['nom'], 0,50)); ?> ... 
												</a></h3>

												<p><?php substr(html_entity_decode($row['description']), 0,100) ?></p>
												<p><i class="fa fa-eye"></i> <?php echo($nombre_vue) ?>&nbsp; <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></p>



											</div><!--media-body-->
										</div><!--media-->



									
										<?php

										
									}
								}


							?>
							<!-- fin -->

							<hr>

							
							
						</div><!--media_wrapper-->
					</div><!--col-md-5-->

					<!-- fin bloc info 1 -->


					<?php

					?>


					
					<?php
					# code...
				}
			}


		?>

	</div><!--row-->
	</div><!--category_layout-->

	<!-- membre bloc -->
	<div class="col-md-12">
		<div class="row">

			<!-- bloc services personnel -->
			<div class="col-md-12" style="margin-top: 10px;">
				<div class="nk-block-head-content text-center">
                    <h2 class="nk-block-title fw-normal">Pourquoi nous choisir?</h2>
                    <div class="nk-block-des">
                        <p>Votre choix n'a pas été en vain. En nous choisissant vous optenez un mode de vie digne de mains d'aide pour la santé plus. ✅</p>
                    </div>
                </div>
			</div>

			<?php 
		
				if ($infos_personnels->num_rows() <= 0) {
					# code...
				}
				else{

					foreach ($infos_personnels->result_array() as $row) {

						?>

						
						<!-- bloc 1 -->
						<div class="col-md-6 mr-1 mb-2" style="margin-top: 10px;">
							<div class="col-md-12 most_comment plan-item-card">

								<div class="col-md-12 text-center">
									 <h1><i class="fa <?php echo($row['icone']) ?>"></i></h1>
									
								</div>

								<div class="col-md-12" style="height: 160px;">
									<div class="nk-block-head-content">
					                    <h2 class="nk-block-title fw-normal"><?php echo($row['titre'])?></h2>
					                    <div class="nk-block-des">
					                        <p><?php echo(substr($row['description'], 0,150))?>...</p>
					                    </div>
					                </div>
									
								</div>
				               
				            </div>
						</div>
						<!-- fin block 1 -->


					
						<?php

						
					}
				}


				?>
			<!-- fin services -->

			<!-- bloc famille -->
			<div class="col-md-12">
				<div class="nk-block-head-content text-center">
                    <h2 class="nk-block-title fw-normal">Notre famille</h2>
                    <div class="nk-block-des">
                        <p>Faite un tour et consulter les meilleurs profiles de  Ces personnages 👌</p>
                    </div>
                </div>
			</div>

			<?php 
		
				if ($member_pub->num_rows() <= 0) {
					# code...
				}
				else{

					foreach ($member_pub->result_array() as $row) {

						?>

						
						<!-- bloc 1 -->
						<div class="col-md-4  mr-1 mb-2">
							<div class="col-md-12 most_comment plan-item-card">
				                <div class="plan-item-head card-body">
				                    <div class="plan-item-heading add">

				                    	 <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($row['image'])?>" class="card-img-top" alt="" style="height: 200px; border: 2px dashed
				                    	  #E5E9F2;">
				                    </div>
				                    <div class="plan-item-summary card-text">

				                    	<h5 class="plan-item-title card-title title text-center mb-2" style="margin-top: 5px;">
				                    	<?php echo($row['first_name']) ?> <?php echo($row['last_name']) ?>
				                    	 	<a targey="_blank" href="tel:<?php echo($row['telephone']) ?>" class="text-info" style="float: right;" tabindex="0">
				                            	<i class="fa fa-mobile fa-lg"></i>
				                            </a>
				                    	</h5>
				                        <p class="sub-text text-center"><?php echo($row['poste']) ?></p>

				                        <div class="row">
				                            <div class="col-12">
				                                <div class="row">
				                                	<div class="col-1"></div>
				                                	<div class="col-10 text-center">

				                                		<a target="_blank" href="<?php echo($row['facebook']) ?>" class="btn btn-icon btn-sm btn-primary btn-action" tabindex="0">
				                                			<em class="fa fa-facebook-f"></em>
				                                		</a>

				                                		<a target="_blank" href="mailto:<?php echo($row['email']) ?>" class="btn btn-icon btn-sm btn-danger btn-action" tabindex="0"><em class="fa fa-google"></em></a>

				                                		<a target="_blank" href="<?php echo($row['linkedin']) ?>" class="btn btn-icon btn-sm btn-info btn-action" tabindex="0"><em class="fa fa-linkedin"></em></a>

				                                		<a target="_blank" href="<?php echo($row['twitter']) ?>" class="btn btn-icon btn-sm btn-primary btn-action" tabindex="0"><em class="fa fa-twitter"></em></a>

				                                		
				                                	</div>
				                                	<div class="col-1"></div>
				                                </div>
				                            </div>
				                            
				                        </div>
				                    </div>
				                </div>
				                
				            </div>
						</div>
						<!-- fin block 1 -->


					
						<?php

						
					}
				}


				?>
			<!-- fin bloc famille -->

			<!-- bloc services -->
			<div class="col-md-12" style="margin-top: 10px;">
				<div class="nk-block-head-content text-center">
                    <h2 class="nk-block-title fw-normal">Nos services</h2>
                    <div class="nk-block-des">
                        <p>Explorez plus de nos services ! 🔔</p>
                    </div>
                </div>
			</div>

			<?php 
		
				if ($infos_services->num_rows() <= 0) {
					# code...
				}
				else{

					foreach ($infos_services->result_array() as $row) {

						?>

						
						<!-- bloc 1 -->
						<div class="col-md-6 mr-1 mb-2" style="margin-top: 10px;">
							<div class="col-md-12 most_comment plan-item-card">

								<div class="col-md-6">
									 <img src="<?php echo(base_url()) ?>upload/service/<?php echo($row['image'])?>" class="card-img-top" alt="" style="height: 150px; border: 2px dashed
				                    	  #E5E9F2;">
									
								</div>

								<div class="col-md-6" style="height: 220px;">
									<div class="nk-block-head-content text-center">
					                    <h2 class="nk-block-title fw-normal"><?php echo($row['titre'])?></h2>
					                    <div class="nk-block-des">
					                        <p><?php echo(substr($row['description'], 0,150))?>...</p>
					                    </div>
					                </div>
									
								</div>
				               
				            </div>
						</div>
						<!-- fin block 1 -->


					
						<?php

						
					}
				}


				?>
			<!-- fin bloc service -->


			
		</div>
	</div>
	<!-- fin bloc -->







	<div id="more_news_item" class="more_news_item">
		

	<!-- Feature Video Item -->
    <?php include('_videos.php') ?>



</div><!--more_news_item-->	