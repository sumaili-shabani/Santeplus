<!-- bloc services -->
	<!-- service bloc -->
	<div class="col-md-12">

	
		<div class="row resultat_service ticket-msg-attach-list">

			<?php 

			
			if ($category_article->num_rows() <= 0) {
				# code...
			}
			else{

				foreach ($category_article->result_array() as $row) {

					

					?>

					<div class="col-md-6 card" style="margin-top: 10px;">
						<div class="feature_news_item card-body">
							<div class="item">
								<div class="item_wrapper">
									<div class="item_img" style="height: 200px;">
										<img class="img-responsive" src="<?php echo($icone_info)?>" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date" style="height: 200px;">
										<div class="news_item_title">
											<h2><a href="<?php echo(base_url())?>home/rapport/<?php echo($row['code'])?>"><?php echo (substr($row['titre'], 0,100)); ?> ... </a></h2>
										</div>
										<div class="item_meta"><a href="#"> <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></a>
											<p>Année <h1><?php echo($row['annee']) ?></h1></p>
										</div>
									</div><!--item_title_date-->
								</div> <!--item_wrapper-->
								<div class="item_content">
									<p><h2><?php substr(html_entity_decode($row['description']), 0,100) ?></h2></p>
								</div>

							</div><!--item-->
						</div><!--feature_news_item-->
					</div><!--col-md-6-->


					<?php

					
				}
			}


		?>

		</div>

	</div>
