<section id="feature_news_section" class="feature_news_section section_wrapper">
	<div class="container">   
	    <div class="row">
	    	<!-- carousel principal -->
	    	<div class="col-md-6">
	    		<div class="feature_news_carousel">
					<div id="featured-news-carousal" class="carousel slide" data-ride="carousel">
					    <!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">					    
							
							<?php 

								$coucoux = $this->db->query("SELECT * FROM profile_article ORDER BY RAND() LIMIT 1");
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

										
										<div class="item active feature_news_item">
											<div class="item_wrapper">
												<div class="item_img">
													<img class="img-responsive" src="<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>" alt="Chania">
												</div> <!--item_img--> 
												<div class="item_title_date">
													<div class="news_item_title">
														<h2><a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><?php echo (substr($row['nom'], 0,50)); ?> ... </a></h2>
													</div>
			                                        <div class="item_meta"><a href="#">2<?php echo($nombre_vue) ?>&nbsp; <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></a></div>
												</div> <!--item_title_date-->
											</div> <!--item_wrapper-->	
											
											<div class="item_content">
												<p><?php substr(html_entity_decode($row['description']), 0,100) ?></p>
											</div>

										</div><!--feature_news_item-->



									
										<?php

										
									}
								}


							?>


							<!-- debit -->
							<?php 

								$coucoux = $this->db->query("SELECT * FROM profile_article ORDER BY RAND() LIMIT 10");
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

										
										<div class="item feature_news_item">
											<div class="item_wrapper">
												<div class="item_img">
													<img class="img-responsive" src="<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>" alt="Chania">
												</div> <!--item_img--> 
												<div class="item_title_date">
													<div class="news_item_title">
														<h2><a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><?php echo (substr($row['nom'], 0,50)); ?> ... </a></h2>
													</div>
			                                        <div class="item_meta"><a href="#"><?php echo($nombre_vue) ?>&nbsp; <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></a></div>
												</div> <!--item_title_date-->
											</div> <!--item_wrapper-->	
											
											<div class="item_content">
												<p><?php substr(html_entity_decode($row['description']), 0,100) ?></p>
											</div>

										</div><!--feature_news_item-->



									
										<?php

										
									}
								}


							?>
							<!-- fin -->

							

					  		<!-- Left and right controls -->
							<div class="control-wrapper">
								<a class="left carousel-control" href="#featured-news-carousal" role="button" data-slide="prev">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</a>
								<a class="right carousel-control" href="#featured-news-carousal" role="button" data-slide="next">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</a>
							</div>
						</div><!--carousel-inner-->
	    			</div><!--carousel-->
	    		</div><!--feature_news_carousel-->
	    	</div><!--col-md-6-->
	    	<!-- fin carousel principal -->
	    	
	    	<!-- les deux recents  publications -->
	    	<div class="col-md-6 ">
	    		<div class="feature_news_static">
		    		<div class="row">


		    			<!-- debit -->
						<div class="col-sm-12 mb-2">
            				<div class="row">
            					

            					<div class="col-md-12">
            						<div class="row">

            							<!-- fin information personnelle -->
		            					<div class="col-sm-12 mb-2">
		            						<div class="col-md-12">
		            							<div class="col-md-12 text-center">
		            								<h3>
		            									Nous sommes là pour nos voisins dans le besoin, qui souffrent dans ce monde brisé.
		            								</h3>
		            							</div>
		            						</div>
		            					</div>
		                    			<div class="col-sm-6 mb-2">
		                    				<div class="card  bg-lighter">
											    <div class="card-header text-center">
											    	<i class="fa fa-hacker-news fa-lg"></i>
											    </div>
											    <div class="card-inner card-body" style="height: 300px;">
											        <h5 class="card-title text-center">Soyez toujours à jour</h5>
											        <p class="card-text">Nous sommes là pour les personnes qui ont tout perdu à cause des guerres ou des catastrophes naturelles. Ensemble, nous pouvons leur venir en aide dans les situations d'urgence, en leur fournissant de la nourriture, des vêtements et un accès à l'eau potable. Nous restons fidèles aux communautés alors qu'elles se rétablissent – ​​en leur offrant de nouvelles opportunités de s'aider à nouveau.</p>

											    </div>
											</div>
		                    			</div>
		                    			<!-- fin information personnelle -->

		                    			<div class="col-sm-6 mb-2">
		                    				<div class="card  bg-lighter">
											    <div class="card-header text-center">
											    	<i class="fa fa-tag fa-lg"></i>
											    </div>
											    <div class="card-inner card-body" style="height: 300px;">
											        <h5 class="card-title text-center">Meilleure qualité de service</h5>
											        <p class="card-text">Redonner L'espoir aux populations pauvres et autres vulnérables qui souffrent à cause de l'injustice sociale, des conflits armés ou autre désastre naturelle.
													</p>

											    </div>
											</div>
		                    			</div>
		                    			<!-- fin information personnelle -->

            							
            						</div>
            					</div>

            				</div>
            			</div>
						<!-- fin -->


						
						
						
					</div><!--row-->
	    		</div><!--feature_news_static-->
	    	</div><!--col-md-6-->
	    	<!-- publication -->
	    </div><!--row-->
	</div><!--container-->   	
</section>