<!-- Headline Start -->
<section id="newsticker"  style="background-color: rgb(7, 102, 51);">
    <div class="headline-wrapper" style="background-color: rgb(7, 102, 51);">
        <div class="container">
            <div class="row">
            
                <!-- Newsticker start -->
                <div class="col-md-2 col-sm-3 col-xs-5">
                    <div class="headline-title color-6" style="color: rgb(214, 214, 214); background-color: rgb(7, 102, 51);">                
                        <h5 style="color: white;"><?php echo($nom_site_info) ?></h5>
                    </div>
                </div>
                <div class="col-md-7 col-sm-9 col-xs-7 no-padding">
                    <ul class="ticker clearfix">
                        <li><a href="javascript:void(0);">Adresse domicile :<?php echo($adresse_info) ?></a></li>
                        <li><a href="javascript:void(0);">Contact <?php echo($tel1_info) ?> ou <?php echo($tel2_info) ?></a></li>
                        <li><a href="mailto:<?php echo($email_info) ?>">Adresse mail: <?php echo($email_info) ?></a></li>
                        
                    </ul>
                </div><!-- Newsticker end -->
                
                <!-- Search Form start -->
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="fa-icon-wrap">
                        <a class="facebook" href="<?php echo($facebook_info) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                        <a class="google+" href="mailto:<?php echo($email_info) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Google+"><i aria-hidden="true" class="fa fa-google-plus"></i></a>
                        <a class="twitter" href="<?php echo($twitter_info) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                        <a class="linkedin" href="<?php echo($linkedin_info) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Linkedin"><i aria-hidden="true" class="fa fa-linkedin"></i></a>

                        <a class="pinterest" href="<?php echo($instagram_info) ?>" data-toggle="tooltip" data-placement="left" title="instagram page"><i aria-hidden="true" class="fa fa-instagram"></i></a>

                        <a class="pinterest" href="tel:<?php echo($tel1_info) ?>" data-toggle="tooltip" data-placement="left" title="phone number"><i aria-hidden="true" class="fa fa-phone"></i></a>
                       
                    </div>
                </div><!-- Search Form end -->
                
            </div>
        </div>
    </div>
</section><!-- Headline End -->



<!-- Menu Navigation Start -->
<div class="navbar navbar-default yellow megamenu clearfix" style="background-color: rgb(34, 34, 34); color: white;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" data-target="#mainmenu" class="navbar-toggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo(base_url()) ?>"><img class="img-responsive" src="<?php echo($icone_info) ?>" alt="logo"/></a>
				</div>
				<div id="mainmenu" class="navbar-collapse collapse clearfix">
					<ul class="nav navbar-nav">

						<li><a style="color: rgb(214, 214, 214);" href="<?php echo(base_url()) ?>">Accuel</a></li>
						<li><a style="color: rgb(214, 214, 214);" href="<?php echo(base_url()) ?>home/about">Apropos de nous</a></li>
						<li><a style="color: rgb(214, 214, 214);" href="<?php echo(base_url()) ?>home/contact">Contact</a></li>

						<li><a style="color: rgb(214, 214, 214);" href="<?php echo(base_url()) ?>home/traval">Ce que nous faisons</a></li>


						<li><a style="color: rgb(214, 214, 214);" href="<?php echo(base_url()) ?>home/rapport">Les Rapports</a></li>

						<?php 
							if ($categories->num_rows() <=0) {
								# code...
							}
							else{
								foreach ($categories->result_array() as $key) {
									
									?>

									
									<li class="dropdown full-cont"><a  style="color: rgb(214, 214, 214);" href="<?php echo(base_url()) ?>home/category/<?php echo($key['idcat']) ?>" data-toggle="dropdown" class="dropdown-toggle"><?php echo($key['nom']) ?></a>
												<!-- Mega Menu Start -->
										<ul class="dropdown-menu fullwidth">
											<li class="default clearfix">
												<div class="row">
													<?php include('component/_descriptionArticle.php') ?>
													
													
												</div>
											</li>
										</ul><!-- Mega Menu End -->
									</li>
									<?php
								}
							}

							 ?>
						

						
						
						<li class="dropdown"><a href="#"  style="color: rgb(214, 214, 214);" data-toggle="dropdown" class="dropdown-toggle">Plus <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo(base_url()) ?>home/don">Nous faire un don</a></li>
								<li><a href="<?php echo(base_url()) ?>home/carriere">Carrière</a></li>
								<li><a href="<?php echo(base_url()) ?>home/traval">Ce que nous faisons</a></li>
								<li><a href="<?php echo(base_url()) ?>home/structure">Structure de gestion</a></li>
								<li><a href="<?php echo(base_url()) ?>home/member">Notre groupe</a></li>

								<li><a href="<?php echo(base_url()) ?>home/financement">Financement</a></li>
									

                                <li><a href="<?php echo(base_url()) ?>home/partenariat">Partenariat</a></li>

                                <li><a href="<?php echo(base_url()) ?>home/galery">Galerie</a></li>

                                <li><a href="<?php echo(base_url()) ?>home/video">Vidéo</a></li>

                                <li><a href="<?php echo(base_url()) ?>home/article">Blog info</a></li>
									


                                
                                <?php 
									if ($categories2->num_rows() <=0) {
										# code...
									}
									else{
										foreach ($categories2->result_array() as $memu_autre) {

											?>

											<li>
												<a href="<?php echo(base_url()) ?>home/category/<?php echo($memu_autre['idcat']) ?>">
													<?php echo($memu_autre['nom']) ?>
											     </a>
											</li>
									
											<?php
											
										}
									}

										

								?>

                               <?php

									if($this->session->userdata('admin_login'))
								    {	$id_connected_ok = $this->session->userdata('admin_login');
								    	$this->db->where('id',$id_connected_ok);
     							        $ok_users_ = $this->db->get('users')->result_array();
     							        foreach ($ok_users_ as $key) {
     							        	# code...
									      	?>
									      	<li>
									      		 <div class="col-md-12 text-center" style="margin-top: 10px;">
									      		 	<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
									      		 	<a href="<?php echo(base_url()) ?>admin/profile">
									      			<?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
									      		 </div>
									      		
									      	</a></li>
									      	<?php
     							        }
								    }

								   

								    elseif($this->session->userdata('id'))
								    {	$id_connected_ok = $this->session->userdata('id');
								    	$this->db->where('id',$id_connected_ok);
     							        $ok_users_ = $this->db->get('users')->result_array();
     							        foreach ($ok_users_ as $key) {
     							        	# code...
									      	?>
									      	<li>
									      		 <div class="col-md-12 text-center" style="margin-top: 10px;">
									      		 	<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
									      		 	<a href="<?php echo(base_url()) ?>user/profile">
									      			<?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
									      		 </div>
									      		
									      	</a></li>
									      	<?php
     							        }
								    }

								    elseif($this->session->userdata('instuctor_login'))
								    {	$id_connected_ok = $this->session->userdata('instuctor_login');
								    	$this->db->where('id',$id_connected_ok);
     							        $ok_users_ = $this->db->get('users')->result_array();
     							        foreach ($ok_users_ as $key) {
     							        	# code...
									      	?>
									      	<li>
									      		 <div class="col-md-12 text-center" style="margin-top: 10px;">
									      		 	<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
									      		 	<a href="<?php echo(base_url()) ?>entreprise/profile">
									      			<?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
									      		 </div>
									      		
									      	</a></li>
									      	<?php
     							        }
								    }
                                    else{
                                        ?>

                                        <li>
                                            <a href="<?php echo(base_url()) ?>login">Se connecter</a>
                                        </li>
                                        
                                        <?php
                                    }



								

								 ?>
								
                                
                               
                                
                               

                            </ul>
                        </li>
							</ul>
						</li>
					</ul>
					<!-- Search Form start -->
					<form class="navbar-form navbar-right" role="search" id="prefetch2">
						<input type="text" id="search" name="search" placeholder="Search..." class="typeahead">
						<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
					</form><!-- Search Form end -->
				</div>
			</div>
		</div>
	</div>
</div><!-- Menu Navigation End -->