
<div class="tab sitebar" style="margin-top: 10px;">

	<div class="most_comment">

		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v11.0&appId=301499887887474&autoLogAppEvents=1" nonce="U6rgA9qA"></script>

		<div class="fb-page" data-href="https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/" data-tabs="timeline" data-width="" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/">Santé-Plus Asbl</a></blockquote></div>
		
	</div>

	
	<!--tab-content-->
</div><!--tab-->


<div class="tab sitebar most_comment">
	<div class="sidebar_title">
	    <h2>Nos partennaires</h2>
	</div>

	<?php 

		
		if ($pub_publicite->num_rows() <= 0) {
			# code...
		}
		else{

			foreach ($pub_publicite->result_array() as $row) {

				?>

				
				<div class="ad">
					<a href="<?php echo($row['url'])?>" target="_blank">
						<img class="img-responsive img-thumbnail" src="<?php echo(base_url())?>upload/galery/<?php echo($row['image'])?>" alt="img" />
					</a>
					<!-- <hr> -->
				</div>


			
				<?php

				
			}
		}


		?>

</div>


<div class="tab sitebar most_comment">
	<div class="sidebar_title">
	    <h2>Suivez-nous sur twitter</h2>
	</div>


	<a class="twitter-timeline" href="https://twitter.com/ONGSANTEPLUS1?ref_src=twsrc%5Etfw">Tweets by ONGSANTEPLUS1</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	
</div>









<div class="most_comment">
    <div class="sidebar_title">
        <h2>Publications plus suivies</h2>
    </div>

    <?php 
		
		if ($article_pub->num_rows() <= 0) {
			# code...
		}
		else{

			foreach ($article_pub->result_array() as $row) {

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
				<!-- media -->
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
				</div>
				<!--media-->

				<?php

				
			}
		}


	?>

</div><!--most_comment-->
