<div class="theiaStickySidebar" style="margin-top: 10px;">
						
	<!-- Social Counter Start -->
	<div class="widget">
		<div class="social-counter">
			<div class="title-wrapper border-5">
				<h2><span class="color-5">Réseaux sociaux</span></h2>
			</div>
			<div class="social-item">
				<div class="social-rss clearfix">
					<a href="#" class="rss"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					<span class="left">1,2 k</span>
					<span class="right">RSS</span>
				</div>
			</div>
			<div class="social-item">
				<div class="social-tw clearfix">
					<a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<span class="left">803 Followers</span>
					<span class="right">Twitter</span>
				</div>
			</div>
			
			<div class="social-item last clearfix">
				<div class="social-fb clearfix">
					<a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<span class="left">3.5 Fans</span>
					<span class="right">Facebook</span>
				</div>
			</div>
		</div>
	</div><!-- Social Counter End -->
	
	<!-- Advertisement Start -->
	<!-- Facebook Page -->
	<div class="widget advertisement">
		<div class="desktop-ad">
			<span>- Abonnez-vous déjà -</span>

			<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v11.0&appId=301499887887474&autoLogAppEvents=1" nonce="U6rgA9qA"></script>

			<div class="fb-page" data-href="https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/" data-tabs="timeline" data-width="" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/">Santé-Plus Asbl</a></blockquote></div>
		</div>

	</div> 

	<!-- Twitter -->
	<div class="widget advertisement">
		<div class="desktop-ad">
			<span>- Suivez-nous sur twitter -</span>
			
			<a class="twitter-timeline" href="https://twitter.com/ONGSANTEPLUS1?ref_src=twsrc%5Etfw">Tweets by ONGSANTEPLUS1</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>

	</div> 
	
	
	<!-- Sidebar Carousel Start -->
	<div class="widget sidebar-carousel clearfix">
		<div class="title-wrapper border-1">
			<h2><span class="color-1">Nos partenaires</span></h2>
		</div>
		<div class="carousel-content-box owl-wrapper-video clearfix">
			<div class="owl-carousel" data-num="1">

				

				<?php 

					if ($pub_publicite3->num_rows() <= 0) {
						# code...
					}
					else{

						foreach ($pub_publicite3->result_array() as $row) {

								?>

								<div class="item fbt-hr-crs">
									<div class="post-item clearfix">
										<div class="img-thumb">
											<a target="_blank" href="<?php echo($row['url'])?>"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/galery/<?php echo($row['image'])?>')"></div></a>
											
										</div>
									</div>
								</div>
								
								<?php
							
							# code...
						}
					}
				?>

				
			</div>
		</div>
	</div><!-- Sidebar Carousel End -->

	
	



	
	
	
	
</div>


