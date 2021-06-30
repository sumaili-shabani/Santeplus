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
			   		<?php include('component/_don.php') ?>
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


        


   
</body>
</html>