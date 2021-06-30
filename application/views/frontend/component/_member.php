<div class="col-md-12">
	<div class="row">
		
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

		<!-- Feature Video Item -->
    	<?php include('_videos.php') ?>


	</div>
</div>