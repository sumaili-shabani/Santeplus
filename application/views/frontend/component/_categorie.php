<div class="col-md-12 card">
	<div class="row">
		 <div class="col-md-12 mb-2" id="prefetch_info">

		   <form class="navbar-form" role="search">
				<div class="input-group">
					<input class="form-control typeahead_info search_text" placeholder="Rechercher une publication" name="q" type="text" style="
					width: 250px;border-radius: 0;
	   				height: 40px;
	    			box-shadow: 0px 0px;">
					<div class="input-group-btn">
						<button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
				</div>
			</form>
		    
		</div>	
		<?php 

			
			if ($category_article->num_rows() <= 0) {
				# code...
			}
			else{

				foreach ($category_article->result_array() as $row) {

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

					<div class="col-md-6 card" style="margin-top: 10px;">
						<div class="feature_news_item card-body">
							<div class="item">
								<div class="item_wrapper">
									<div class="item_img" style="height: 300px;">
										<img class="img-responsive" src="<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h2><a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><?php echo (substr($row['nom'], 0,50)); ?> ... </a></h2>
										</div>
										<div class="item_meta"><a href="#"><?php echo($nombre_vue) ?>&nbsp; <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></a></div>
									</div><!--item_title_date-->
								</div> <!--item_wrapper-->
								<div class="item_content">
									<p><?php substr(html_entity_decode($row['description']), 0,100) ?></p>
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