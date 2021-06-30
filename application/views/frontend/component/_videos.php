<!-- bloc services -->
<div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px;">
	<div class="nk-block-head-content text-center">
        <h2 class="nk-block-title fw-normal">Nos vidéos</h2>
        <div class="nk-block-des">
            <p>Explorez plus nos actions ! 🔔</p>
        </div>
    </div>
</div>



<!-- service bloc -->
<div class="col-md-12">

	 <div class="col-md-12 mb-2" id="prefetch_video">

	   <form class="navbar-form" role="search">
			<div class="input-group">
				<input class="form-control typeahead_video search_text" placeholder="Rechercher une vidéo" name="q" type="text" style="
				width: 250px;border-radius: 0;
   				height: 40px;
    			box-shadow: 0px 0px;">
				<div class="input-group-btn">
					<button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</div>
		</form>
	    
	</div>
	<div class="row resultat_service ticket-msg-attach-list col-md-12 ">
		
	    
		
	</div>


	</div>
	<div class="col-md-12">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<!-- pagination box -->
				<div class="pagination-box" id="pagination_link">
					
				</div>
				<!-- End Pagination box -->
			</div>
			<div class="col-4"></div>
		</div>
	</div>
<!-- fin service -->

	<?php 

		if ($infos_videos->num_rows() <= 0) {
			# code...
		}
		else{

			foreach ($infos_videos->result_array() as $row) {

				?>

				
				<!-- bloc 1 -->
				<div class="col-md-6 mb-2" style="margin-top: 10px;">
					<div class="col-md-12 most_comment plan-item-card">

						<div class="col-md-12 embed-responsive embed-responsive-21by9" style="height: 100px;"> 

							<video src="<?php echo(base_url()) ?>upload/video/<?php echo($row['lien']) ?>" class="col-md-12 " controls=""
							 poster="<?php echo($icone_info) ?>">
		       					<source src="<?php echo(base_url()) ?>upload/video/<?php echo($row['lien']) ?>" type="video/p4">
		       					<source src="<?php echo(base_url()) ?>upload/video/<?php echo($row['lien']) ?>" type="video/webm">
		       				</video>
							
							
						</div>

						<div class="col-md-12" style="height: 70px;">
							<div class="nk-block-head-content text-center">
			                    <h2 class="nk-block-title fw-normal">
			                    	<a href="<?php echo(base_url()) ?>home/video/<?= $row['code'] ?>">
			                    		<?php echo(substr($row['nom'], 0,40))?>...
			                    	</a>
			                    </h2>
			                    <div class="nk-block-des">
			                        <p><?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></p>
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