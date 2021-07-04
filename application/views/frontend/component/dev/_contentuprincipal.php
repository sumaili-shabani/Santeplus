<!-- Horizontal Mag 1 Start -->
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

			<div class="fbt-vc-inner hor">
				<div class="title-wrapper border-7">
					<h5><span class="color-7"><?php echo ($key['nom_cat']); ?></span></h5>
				</div>
				<div class="row">
					<div class="fbt-col-lg-8 col-md-7">
						<div class="post-item big clearfix">
							<div class="img-thumb">
								<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/article/<?php echo($key['image'])?>')"></div></a>
								<div class="img-credits">
									<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><h3> <?php echo (substr($key['nom'], 0,95)); ?> ...</h3></a>
									<div class="post-info clearfix">
										<span><a href="#"> <i class="fa fa-eye"></i> <?php echo($nombre_vue) ?> vue(s)</a></span>
										<span>-</span>
										<span><?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="fbt-col-lg-4 col-md-5">

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

									<div class="post-item small">
										<div class="row">
											<div class="col-sm-4 col-xs-3">
												<div class="img-thumb">
													<a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>')"></div></a>
												</div>
											</div>
											<div class="col-sm-8 col-xs-9 no-padding-left">
												<div class="post-content">
													<a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><h3> <?php echo (substr($row['nom'], 0,95)); ?> ...</h3></a>
													<div class="post-info clearfix">
														<span><a href="#"> <i class="fa fa-eye"></i> <?php echo($nombre_vue) ?> vue(s)</a></span>
														<span>-</span>
														<span><?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></span>
													</div>
												</div>
											</div>
										</div>
									</div>



									
		                            <!-- Item post -->
									<?php

									
								}
							}


						?>
	                    
						
					</div>
				</div>
			</div><!-- Horizontal Mag 1 End -->



			

			<?php

			?>


			
			<?php
			# code...
		}
	}


?>


<!-- membre bloc -->
	<div class="col-md-12">
		<div class="row">

			<!-- bloc services personnel -->
			<div class="col-md-12" style="margin-top: 10px;">
				<div class="col-md-12 card">
					<div class="nk-block-head-content text-center card-body">
	                    <h5 class="nk-block-title fw-normal">Pourquoi nous choisir?</h5>
	                    <div class="nk-block-des">
	                        <p>Votre choix n'a pas été en vain. En nous choisissant vous optenez un mode de vie digne de mains d'aide pour la santé plus. ✅</p>
	                    </div>
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
							<div class="col-md-12 most_comment plan-item-card card">

								<div class="col-md-12 card-body">
									<div class="col-md-12 text-center">
										 <h1><i class="fa <?php echo($row['icone']) ?>"></i></h1>
										
									</div>

									<div class="col-md-12" style="height: 160px;">
										<div class="nk-block-head-content">
						                    <h5 class="nk-block-title fw-normal"><?php echo($row['titre'])?></h5>
						                    <div class="nk-block-des">
						                        <p><?php echo(substr($row['description'], 0,150))?>...</p>

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
			<!-- fin services -->

			<!-- bloc famille -->
			<div class="col-md-12">
				<div class="col-md-12 ">
					<div class="nk-block-head-content text-center">
	                    <h5 class="nk-block-title fw-normal">Notre famille</h5>
	                    <div class="nk-block-des">
	                        <p>Faite un tour et consulter les meilleurs profiles de  Ces personnages 👌</p>
	                    </div>
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
						<div class="col-md-4  mr-1 mb-2" style="margin-top: 10px;">
							<div class="col-md-12 most_comment plan-item-card  card">
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
                    <h5 class="nk-block-title fw-normal">Nos services</h5>
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
							<div class="col-md-12 card">

								<div class="col-md-12 most_comment plan-item-card card-body">

									<div class="col-md-12 text-center">
										 <img src="<?php echo(base_url()) ?>upload/service/<?php echo($row['image'])?>" class="img-thumbnail img-responsive" alt="" style="height: 50px; border: 2px dashed
					                    	  #E5E9F2;">
										
									</div>

									<div class="col-md-12" style="height: 200px;">
										<div class="nk-block-head-content">
						                    <div class="nk-block-title fw-normal text-center">
						                    	<b><?php echo($row['titre'])?></b>
						                    </div>
						                    <div class="nk-block-des">
						                        <p><?php echo(substr($row['description'], 0,150))?>...</p>
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
			<!-- fin bloc service -->


			
		</div>
	</div>
	<!-- fin bloc -->


						