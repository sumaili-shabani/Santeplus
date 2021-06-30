<header>
    <div class="container">
     	<div class="top_ber">
			<div class="row">
	    		<div class="col-md-6">
					<div class="top_ber_left">
						<i class="fa fa-map-marker mr-2"></i> <?php echo($adresse_info) ?>
					</div><!--top_ber_left-->
	    		</div><!--col-md-6-->
	    		<div class="col-md-6">
	    			<div class="top_ber_right">
	    				<div class="top-menu">
	    					<ul class="nav navbar-nav"> 

	    						<?php

		                            if($this->session->userdata('admin_login'))
		                            {   $id_connected_ok = $this->session->userdata('admin_login');
		                                $this->db->where('id',$id_connected_ok);
		                                $ok_users_ = $this->db->get('users')->result_array();
		                                foreach ($ok_users_ as $key) {
		                                    # code...
		                                    ?>
		                                    <li>
			                                    <a href="<?php echo(base_url()) ?>admin/profile">Profile</a>
			                                </li>
		                                    <li>
		                                         
		                                        <a href="<?php echo(base_url()) ?>admin/profile">
		                                            <?php echo($key['first_name']) ?> 
		                                        </a>
		                                         
		                                    </li>
		                                    <?php
		                                }
		                            }

		                            elseif($this->session->userdata('instuctor_login'))
		                            {   $id_connected_ok = $this->session->userdata('instuctor_login');
		                                $this->db->where('id',$id_connected_ok);
		                                $ok_users_ = $this->db->get('users')->result_array();
		                                foreach ($ok_users_ as $key) {
		                                    # code...
		                                    ?>
		                                    <li>
			                                    <a href="<?php echo(base_url()) ?>entreprise/profile">Profile</a>
			                                </li>
		                                    <li>
		                                         
		                                        <a href="<?php echo(base_url()) ?>entreprise/profile">
		                                            <?php echo($key['first_name']) ?> 
		                                        </a>
		                                         
		                                    </li>
		                                    <?php
		                                }
		                            }
		                            else{
		                                ?>
		                                <li>
		                                    <a href="<?php echo(base_url()) ?>login">Login</a>
		                                </li>
		                                <li>
		                                    <a href="<?php echo(base_url()) ?>login">Se connecter</a>
		                                </li>

		                                <?php
		                            }


		                        

		                         ?>

		                       
                    		</ul>
	    				</div><!--top-menu-->
	    			</div><!--top_ber_left-->
	    		</div><!--col-md-6-->
	    	</div><!--row-->
     	</div><!--top_ber-->
     	
     	<div class="header-section">
			<div class="row">
	    	 	<div class="col-md-3">
					<div class="logo">
						<a  href="<?php echo(base_url()) ?>">
							<!-- <img class="img-responsive" src="<?php echo(base_url()) ?>js/dev/assets/img/logo.png" alt=""> -->

							<img class="img-responsive" src="<?php echo($icone_info) ?>" alt="" style="height: 70px; width: 170px;">
						</a>
					</div><!--logo-->
	    	 	</div><!--col-md-3-->
	    	 	
	    	 	<div class="col-md-6">
					<div class="header_ad_banner">
					<a  href="#"><img class="img-responsive" src="<?php echo(base_url()) ?>js/dev/assets/img/l1.jpg" alt=""></a>
					</div>
	    	 	</div><!--col-md-6-->
	    	 	
	    	 	<div class="col-md-3">
					<div class="social_icon1">
							<a href="<?php echo($facebook_info) ?>" target="_blank" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
							<!--Twitter-->
							<a href="<?php echo($twitter_info) ?>" target="_blank" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
							<!--Google +-->
							<a href="mailto:<?php echo($email_info) ?>" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a>
							<!--Linkedin-->
							<a href="<?php echo($linkedin_info) ?>" target="_blank" class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a> 
							<!--Pinterest-->
							<a href="tel:<?php echo($tel1_info) ?>" class="icons-sm pin-ic"><i class="fa fa-phone"> </i></a>
					</div> <!--social_icon1-->
	    	 	</div><!--col-md-3-->
	    	</div> <!--row-->	
     	</div><!--header-section-->    	      
    </div><!-- /.container -->   

	<nav class="navbar main-menu navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			</div>
			<div id="navbar" class="collapse navbar-collapse sidebar-offcanvas" 
			style="background-color: white; color: blue;">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo(base_url()) ?>">&nbsp;&nbsp;</a></li>
				<li><a href="<?php echo(base_url()) ?>" style="font-size: 14px; color: red;">Accueil</a></li>
				<li><a href="<?php echo(base_url()) ?>home/don" style="font-size: 14px; color: red;">Ce que nous faisons</a></li>
                <li><a href="<?php echo(base_url()) ?>home/about" style="font-size: 14px; color: red;">Apropos de nous</a></li>
                <li><a href="<?php echo(base_url()) ?>home/financement" style="font-size: 14px; color: red;">Financement</a></li>
                <li><a href="<?php echo(base_url()) ?>home/rapport" style="font-size: 14px; color: red;">Rapport</a></li>
                <li><a href="<?php echo(base_url()) ?>home/partenariat" style="font-size: 14px; color: red;">Partenariat</a></li>
                <li><a href="<?php echo(base_url()) ?>home/contact" style="font-size: 14px; color: red;">Contact</a></li>

                
				
				<li class="hidden"><a href="#page-top"></a></li>

				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 14px; color: red;">Plus <b class="caret"></b></a>
					<ul class="dropdown-menu">
						
						<li><a href="<?php echo(base_url()) ?>home/galery">Galerie</a></li>
						<li><a href="<?php echo(base_url()) ?>home/video">Vidéo</a></li>
						<li><a href="<?php echo(base_url()) ?>home/member">Notre Groupe</a></li>
						
						<hr>
						<div class="dropdown-divider"></div>

						<?php 
			                if ($categories_all->num_rows() <=0) {
			                    # code...
			                }
			                else{
			                    foreach ($categories_all->result_array() as $key) {
			                        
			                        ?>

			                       <li><a  href="<?php echo(base_url()) ?>home/category/<?php echo($key['idcat']) ?>"> <?php echo($key['nom']) ?></a></li>


			                        <?php
			                    }
			                }

		                ?>



						<?php

		                            if($this->session->userdata('admin_login'))
		                            {   $id_connected_ok = $this->session->userdata('admin_login');
		                                $this->db->where('id',$id_connected_ok);
		                                $ok_users_ = $this->db->get('users')->result_array();
		                                foreach ($ok_users_ as $key) {
		                                    # code...
		                                    ?>
		                                    
		                                    <li>
		                                         
		                                        <a href="<?php echo(base_url()) ?>admin/profile">
		                                            <?php echo($key['first_name']) ?> 
		                                        </a>
		                                         
		                                    </li>
		                                    <?php
		                                }
		                            }

		                            elseif($this->session->userdata('instuctor_login'))
		                            {   $id_connected_ok = $this->session->userdata('instuctor_login');
		                                $this->db->where('id',$id_connected_ok);
		                                $ok_users_ = $this->db->get('users')->result_array();
		                                foreach ($ok_users_ as $key) {
		                                    # code...
		                                    ?>
		                                   
		                                    <li>
		                                         
		                                        <a href="<?php echo(base_url()) ?>entreprise/profile">
		                                            <?php echo($key['first_name']) ?> 
		                                        </a>
		                                         
		                                    </li>
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
			<div class="pull-right">
				<form class="navbar-form" role="search">
					<div class="input-group" id="prefetch2">
						<input class="form-control typeahead" placeholder="Search" name="q" type="text" style="
						width: 200px;border-radius: 0;
		   				height: 56px;
		    			box-shadow: 0px 0px;">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
					</div>
				</form>
			</div>
			</div>
		</div>
	</nav> 
	<!-- .navbar -->
</header>

