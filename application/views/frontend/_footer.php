
<!-- Footer Sidebar Start -->
<section class="footer-wrapper clearfix">
    <div class="container">
        <div class="row">


            <!-- Footer Widgets Start -->
            <div class="col-md-3 col-sm-6">
            
                <!-- Text Widget Start -->
                <div class="widget text-widget">
                    <div class="widget-title">
                        <h2>Apropos de nous</h2>
                    </div>
                  
                    <p>  <img class="img-responsive" src="<?= $icone_info ?>" alt="logo" style="height: 100px; float: left; padding-right: 10px;"/><span class="fbt-tooltip text-justify" data-toggle="tooltip" title="Blog pour information"></span> <?php echo(substr($blog_info, 0,370)) ?>...</p>
                   
                </div><!-- Text Widget End -->
                
            </div>
            <div class="col-md-3 col-sm-6">
            
                <!-- Categories Widget Start -->
                <div class="widget categories-widget">
                    <div class="widget-title">
                        <h2>Nos Catégories</h2>
                    </div>
                    <div class="col-md-12">
                    	<div class="row">
                    		<div class="col-md-6">
                    			<ul class="category-list">

			                    	<li><a href="<?php echo(base_url()) ?>">Accueil</a></li>
									<li><a href="<?php echo(base_url()) ?>home/contact">Contact</a></li>
									<li><a href="<?php echo(base_url()) ?>home/traval">Ce que nous faisons</a></li>
									<li><a href="<?php echo(base_url()) ?>home/carriere">Carrière</a></li>
									<li><a href="<?php echo(base_url()) ?>home/member">Notre groupe</a></li>

									<li><a href="<?php echo(base_url()) ?>home/financement">Financement</a></li>

									<li><a href="<?php echo(base_url()) ?>home/don">Nous faire un don</a></li>
									

			                        
			                       
                    			</ul>
                    		</div>

                    		<div class="col-md-6">
                    			<ul class="category-list">

			                    	
									<li><a href="<?php echo(base_url()) ?>home/partenariat">Partenariat</a></li>
									<li><a href="<?php echo(base_url()) ?>home/rapport">Les Rapports</a></li>
									<li><a href="<?php echo(base_url()) ?>home/structure">Structure de gestion</a></li>
									

									<li><a href="<?php echo(base_url()) ?>home/galery">Notre Galerie</a></li>
									<li><a href="<?php echo(base_url()) ?>home/video">Nos Vidéos</a></li>
									<li><a href="<?php echo(base_url()) ?>home/article">Blog info</a></li>
									
                    			</ul>
                    		</div>
                    		<div class="col-md-12">
                    			<ul class="category-list">

			                        <?php 
			                        if ($categories2->num_rows() <=0) {
			                            # code...
			                        }
			                        else{
			                            foreach ($categories2->result_array() as $memu_autre) {

			                                $nbr_pub_cat  =  $this->db->query("SELECT COUNT(idcat) AS total FROM profile_article  WHERE idcat=".$memu_autre['idcat']." ");
			                                if ($nbr_pub_cat->num_rows() <=0) {
			                                    $nombre_pub = 0;
			                                }
			                                else{
			                                    foreach ($nbr_pub_cat->result_array() as $key_vue) {
			                                        $nombre_pub = $key_vue['total'];
			                                    }
			                                }
			                                
			                                ?>

			                                 <li><a href="<?php echo(base_url()) ?>home/publication/<?php echo($memu_autre['idcat']) ?>"><?php echo(substr($memu_autre['nom'], 0,20)) ?>  <span><?php echo($nombre_pub) ?></span></a></li>

			                                <?php
			                            }

			                            
			                        }

			                         ?>
			                       
                    			</ul>
                    		</div>
                    	</div>
                    </div>
                </div><!-- Categories Widget End -->
                
            </div>
            <div class="col-md-3 col-sm-6">
            
                <!-- Footer Small List Start -->
                <div class="widget fbt-vc-inner clearfix">
                    <div class="widget-title">
                        <h2>Nos articles</h2>
                    </div>

                      <?php 

                        $coucoux = $this->db->query("SELECT * FROM profile_article  ORDER BY RAND() LIMIT 3");
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

                                <div class="post-item small">
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-3">
                                            <div class="img-thumb">
                                                <a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><div class="fbt-resize" style="background-image: url(<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>)"></div></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-xs-9 no-padding-left">
                                            <div class="post-content">
                                                <a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>">
                                                    <h3><?php echo (substr($row['nom'], 0,80)); ?> ...</h3>
                                                </a>
                                                <div class="post-info clearfix">
                                                    <span> <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 15));?></span>
                                                    <span>-</span>
                                                    <span> <i class="fa fa-eye"></i> <?php echo($nombre_vue) ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                               <?php

                                # code...
                            }
                        }


                    ?>

                   
                </div><!-- Footer Small List End -->
                
            </div>
            <div class="col-md-3 col-sm-6">

            	 <!-- Text Widget Start -->
                <div class="widget text-widget">
                    <div class="widget-title">
                        <h2>Mission</h2>
                    </div>
                  
                    <p><span class="fbt-tooltip text-justify" data-toggle="tooltip" title="Blog pour information"></span> <?php echo(substr($mission_info, 0,350)) ?>...</p>

                    <!-- Social Icons Start -->
                    <div class="fa-icon-wrap">
                        <a class="facebook" href="<?php echo($facebook_info) ?>" target="_blank"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                        <a class="twitter" href="<?php echo($twitter_info) ?>" target="_blank"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                        
                        <a class="google-plus" href="mailto:<?php echo($email_info) ?>" target="_blank"><i aria-hidden="true" class="fa fa-google-plus"></i></a>
                        <a class="dribbble" href="tel:<?php echo($tel1_info) ?>"><i aria-hidden="true" class="fa fa-phone"></i></a>
                      
                    </div><!-- Social Icons End -->
                </div><!-- Text Widget End -->
            
            </div>
        </div><!-- Footer Widgets End -->
        
        <!-- Copyrights Start -->
        <div class="copyrights">
            <div class="row">
                <div class="col-md-6">
                    <p>COPYRIGHT &copy; <?php date('Y') ?> Dream of drc</p>
                </div>
                <div class="col-md-6">
                    <div class="fbt-footer-nav">
                        <ul>
                            <li><a href="<?php echo(base_url()) ?>">Home</a></li>
                            
                            <li><a href="<?php echo(base_url()) ?>home/about">Apropos</a></li>
                            <li><a href="<?php echo(base_url()) ?>home/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Copyrights End -->
        
    </div>
</section><!-- Footer Sidebar End -->

