<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<footer class="footer_section section_wrapper section_wrapper" >
	<div class="footer_top_section">
		<div class="container">
			<div class="row">

				<div class="col-md-3">
					<div class="text_widget footer_widget">
					<div class="footer_widget_title"><h2>Apropos de <?php echo($nom_site_info) ?></h2></div>
		         
		         	<div class="footer_widget_content">
		         		<?php echo($blog_info) ?>
		         		<div class="social_icon1" style="margin-top: 20px;">
								<a href="<?php echo($facebook_info) ?>" class="btn btn-primary" target="_blank" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
								<!--Twitter-->
								<a href="<?php echo($twitter_info) ?>" class="btn btn-info" target="_blank" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
								<!--Google +-->
								<a href="mailto:<?php echo($email_info) ?>" class="btn btn-danger" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a>
								<!--Linkedin-->
								<a href="<?php echo($linkedin_info) ?>" class="btn btn-primary" target="_blank" class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a> 
								<!--Pinterest-->
								<a href="tel:<?php echo($tel1_info) ?>" class="btn btn-success" class="icons-sm pin-ic"><i class="fa fa-phone"> </i></a>
						</div> <!--social_icon1-->
					</div>
					</div><!--text_widget-->
				</div><!--col-xs-3-->

				<div class="col-md-3">
					<div class="footer_widget">
                        <div class="footer_widget_title"><h2>Suivez plus <?php echo($nom_site_info) ?> </h2></div>
					    <div class="footer_menu_item ">
						<div class="row">
							<div class="col-sm-6"> 
								<ul class="nav navbar-nav ">
									<li><a href="<?php echo(base_url()) ?>">Accueil</a></li>
									<li><a href="<?php echo(base_url()) ?>home/contact">Contact</a></li>
									<li><a href="<?php echo(base_url()) ?>home/don">Ce que nous faisons</a></li>
									<li><a href="<?php echo(base_url()) ?>home/carriere">Carrière</a></li>
									<li><a href="<?php echo(base_url()) ?>home/member">Notre groupe</a></li>
								</ul>
						    </div><!--col-sm-6-->
					        <div class="col-sm-6 "> 

					        	<ul class="nav navbar-nav ">
									<li><a href="<?php echo(base_url()) ?>home/financement">Financement</a></li>
									<li><a href="<?php echo(base_url()) ?>home/partenariat">Partenariat</a></li>
									<li><a href="<?php echo(base_url()) ?>home/rapport">Les Rapports</a></li>

									<li><a href="<?php echo(base_url()) ?>home/galery">Notre Galerie</a></li>
									<li><a href="<?php echo(base_url()) ?>home/video">Nos Vidéos</a></li>
									<li><a href="<?php echo(base_url()) ?>">Blog info</a></li>
									
								</ul>					  						
								
					        </div><!--col-sm-6-->
					       
				      	</div><!--row-->
			      	</div><!--footer_menu_item-->
                    </div><!--footer_widget-->
				</div><!--col-xs-6-->

				<div class="col-md-3">
 					<div class="text_widget footer_widget">
						<div class="footer_widget_title"><h2>Notre Objectif</h2></div>
						
						<div class="footer_widget_content text-justify">
							<?php echo($mission_info) ?></div>
					</div>
				</div><!--col-xs-3-->

				<div class="col-md-3">
 					<div class="text_widget footer_widget">
						<div class="footer_widget_title"><h2>Notre mission</h2></div>
						<img src="<?php echo($icone_info) ?>" class="img-thumbnail img-responsive" style="height: 100px;" />
						<div class="footer_widget_content text-justify"><?php echo($objectif_info) ?></div>
					</div>
				</div><!--col-xs-3-->
			</div><!--row-->
		</div><!--container-->
	</div><!--footer_top_section-->
	<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	
	<div class="copyright-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
							Droit et privilège: Dream of drc
					</div><!--col-xs-3-->
					<div class="col-md-6">
						<div class="copyright">
						© Copyright <?php echo(date('Y')) ?> - <?php echo($nom_site_info) ?>: <a href="<?php echo(base_url()) ?>" title="<?php echo($nom_site_info) ?>"><?php echo($nom_site_info) ?></a>
						</div>
					</div><!--col-xs-6-->
					<div class="col-md-3">
						<?php echo($nom_site_info) ?>
					</div><!--col-xs-3-->
				</div><!--row-->
			</div><!--container-->
		</div><!--copyright-section-->

		
</footer>