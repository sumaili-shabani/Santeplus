<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('_meta.php') ?>
  </head>
<body style="background:url('<?php echo(base_url()) ?>5.jpg');">
<div id="main-wrapper">

    <!-- Header Section -->
	<?php include('_menuheader.php') ?>

    <!-- Feature Carousel Section -->

    <?php //include('component/carousel.php') ?>

	<!--feature_news_section-->

    <!-- Feature Category Section & sidebar -->
    <section id="feature_category_section" class="feature_category_section section_wrapper">
		<div class="container">   
			<div class="row">
				<!-- contenu principal -->
			   	<div class="col-md-9">
			   		<?php include('component/_contact.php') ?>
			   	</div><!--col-md-9-->
			   	<!-- fin contenu principal -->

			   	<!-- menu droit -->
			   	<div class="col-md-3">
			   		<?php include('component/_letmenu.php') ?>
            
			   	</div>
			   	<!-- fin menu droit -->
			</div>	   	
	</section>
	<!--feature_category_section-->

   

    <!-- Footer Section -->
    <?php include('_footer.php') ?>

</div> <!--main-wrapper-->
  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php include('_script.php') ?>



 <script type="text/javascript">
    $(document).ready(function(){
      var sample_data = new Bloodhound({
       datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
       queryTokenizer: Bloodhound.tokenizers.whitespace,
       prefetch:'<?php echo base_url(); ?>home/fetch_auto_vides',
       remote:{
        url:'<?php echo base_url(); ?>home/fetch_auto_vides/%QUERY',
        wildcard:'%QUERY'
       }
      });
      

      $('#prefetch_video .typeahead_video').typeahead(null, {
       name: 'sample_data',
       display: 'name',
       source:sample_data,
       limit:10,
       templates:{
        suggestion:Handlebars.compile('<div class="col-md-12 card"><div class="row card-body"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"><img src="<?php echo(base_url()) ?>upload/video/{{image}}" class="img-thumbnail" width="68" /></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;"><a class="text-primary" href="<?php echo(base_url()) ?>home/video/{{code}}">{{name}}</a><hr></div></div></div>')
       }
      });
    });
</script>

 <script type="text/javascript">
    $(document).ready(function(){
      var sample_data = new Bloodhound({
       datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
       queryTokenizer: Bloodhound.tokenizers.whitespace,
       prefetch:'<?php echo base_url(); ?>home/fetch_auto_articles',
       remote:{
        url:'<?php echo base_url(); ?>home/fetch_auto_articles/%QUERY',
        wildcard:'%QUERY'
       }
      });
      

      $('#prefetch2 .typeahead').typeahead(null, {
       name: 'sample_data',
       display: 'name',
       source:sample_data,
       limit:10,
       templates:{
        suggestion:Handlebars.compile('<div class="col-md-12 card"><div class="row card-body"><div class="col-md-10" style="padding-right:5px; padding-left:5px;"><a class="text-primary" href="<?php echo(base_url()) ?>home/article/{{idart}}">{{name}}</a><hr></div></div></div>')
       }
      });
    });
</script>


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
</html>