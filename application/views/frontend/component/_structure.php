<div class="col-md-12">
	<div class="row">
		
		<?php 

		
			if ($infos_news->num_rows() <= 0) {
				# code...
			}
			else{

				foreach ($infos_news->result_array() as $row) {

						?>

						<div class="col-md-12">
							<?php echo(html_entity_decode($row['structure'])) ?>
						</div>
						
						<?php
					
					# code...
				}
			}


		?>


	</div>
</div>