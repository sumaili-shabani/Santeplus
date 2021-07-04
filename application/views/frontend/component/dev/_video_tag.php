
<div class="col-md-12 single-post-container clearfix" style="margin-top: 70px;">

  <?php 

        if ($infos_videos->num_rows() <= 0) {
          # code...
        }
        else{

          foreach ($infos_videos->result_array() as $row) {

            ?>

            


            <!-- debit et fin -->
            <div class="col-md-12 single-post-container clearfix col-md-12">
              <div class="single-post">


                <video 
                  src="<?php echo(base_url()) ?>upload/video/<?php echo($row['lien']) ?>" class="col-md-12 embed-responsive-item" controls=""
                    poster="<?php echo(base_url()) ?>upload/video/<?php echo($row['image']) ?>">
                      <source src="<?php echo(base_url()) ?>upload/video/<?php echo($row['lien']) ?>" type="video/p4">
                      <source src="<?php echo(base_url()) ?>upload/video/<?php echo($row['lien']) ?>" type="video/webm">
                </video>

                
                <!-- Post Share Start -->
                <div class="post-share clearfix">
                  <ul>


                    <li><a class="facebook df-share btn_facebook" data-sharetip="Share on Facebook!" href="javascript:void(0);" rel="nofollow"><i class="fa fa-facebook"></i> <span class="social-text">Facebook</span></a></li>
                    <li><a class="twitter df-share btn_twitter" data-hashtags="" data-sharetip="Share on Twitter!" href="javascript:void(0);" rel="nofollow"><i class="fa fa-twitter"></i> <span class="social-text">Twitter</span></a></li>
                    <li><a class="google df-pluss btn_google" data-sharetip="Share on Google+!" href="javascript:void(0);" rel="nofollow"><i class="fa fa-google-plus"></i> <span class="social-text">Google+</span></a></li>
                    <li><a class="facebook df-share btn_linkedin" data-sharetip="Share on Linkedin!" href="javascript:void(0);" rel="nofollow"><i class="fa fa-linkedin"></i> <span class="social-text">Linkedin</span></a></li>
                  </ul>
                </div><!-- Post Share End -->
                
                <div class="clearfix col-md-12">

                   <?php echo(html_entity_decode($row['description'])) ?>
                  
                </div>
                
               
                
              </div><!-- single-post -->
              
            </div>
            <!-- fin -->

            
            <?php

            
          }
        }


      ?>
    
</div>