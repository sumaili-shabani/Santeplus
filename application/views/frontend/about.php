<!DOCTYPE html>
<html dir="ltr" lang="fr" class="no-js"> 

<!-- Mirrored from fbtemplates.net/html/glossymag/header_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jun 2020 10:46:36 GMT -->
<head>
  <!-- Basic -->
  <?php include('_meta2.php') ?>
</head>
<body class="fbt-owl-header">
  <div class="navbar-fixed-top"></div>
  
  <?php include('_nav.php') ?>
  
  <?php //include('component/carousel.php') ?>
  
  <!-- Main Content Start -->
  <section id="main-content" class="full-width-slider clearfix">
    <div class="container">
      <div class="row">
        <div class="outer-wrapper clearfix">
          <!-- Main Wrapper Start -->
          <div class="fbt-col-lg-9 col-md-8 col-sm-6 main-wrapper clearfix">
          
            <?php include('component/_about.php') ?>
            
          </div><!-- Main Wrapper End -->
          
          <!-- Sidebar Start -->
          <div class="fbt-col-lg-3 col-md-4 col-sm-6 sidebar">
            <?php include('component/dev/_pub.php') ?>
          </div><!-- Sidebar End -->
          
        </div>
        
        
        
        <!-- Post Outer Start -->
        <div class="outer-wrapper clearfix">
          <?php// include('news.php') ?>
          
        </div><!-- Post Outer End -->
      </div>
    </div>    
  </section><!-- Main Content End -->
  
  <?php include('_footer.php') ?>
  
  <a href="#" id="BackToTop"><i class="fa fa-angle-up"></i></a>
  <div class="navbar-fixed-bottom"></div>
  
  <!-- JAVASCRIPTS -->
  <?php include("_script2.php") ?>

  <script type="text/javascript" language="javascript" >  
   $(document).ready(function(){


      
      $(document).on('submit', '#user_form', function(event){  
           event.preventDefault();




           var name = $('#name').val();
           var subject = $('#subject').val();
           var email = $('#email').val();
           var message = $('#message').val(); 
           var extension = $('#user_image').val().split('.').pop().toLowerCase();
           // alert(nom+" sujet:"+sujet+" email:"+email+" message:"+message);

            if(extension != '')  
           {  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','txt','xlsx','docx','mp3','mp4']) == -1)  
                {  
                     // alert("Invalid Image File"); 
                     swal("Oups!!!", " erreur liée au format du fichier","error");  
                     $('#user_image').val('');  
                     return false;  
                }  
           } 

           if(name != '' && subject != '' && email != '' && message != '')
            {
                  $.ajax({  
                       url:"<?php echo base_url() . 'home/operation_contact'?>",  
                       method:'POST',  
                       data:new FormData(this),  
                       contentType:false,  
                       processData:false,  
                       success:function(data)  
                       {  
                            swal("succès!!!👌",data,"success");  
                            $('#user_form')[0].reset();    
                       }  
                  });
                 // swal("cool👌", "félicitation", "success");

            }
            else
            {
              if (name=='') {
                swal("error!!!🙆", " Veillez complèter le nom","error");
              }
              if (subject=='') {
                swal("error!!!🙆", " Veillez complèter le sujet","error");
              }
              if (email=='') {
                swal("error!!!🙆", " Veillez complèter votre adresse mail","error");
              }
              if (message=='') {
                swal("error!!!🙆", " Veillez complèter le message","error");
              }
              
            }


             
      });  
      

 });  
  </script>

</body>

<!-- Mirrored from fbtemplates.net/html/glossymag/header_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jun 2020 10:46:37 GMT -->
</html>


