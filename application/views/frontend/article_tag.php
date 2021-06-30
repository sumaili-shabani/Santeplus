<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('_meta.php') ?>
  </head>
<body style="background:url('5.jpg');">
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
			   		<?php include('component/_article_tag_contenu.php') ?>
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

  <script type="text/javascript">
      $(document).ready(function() {

          function load_country_data(page)
          {
            $.ajax({
             url:"<?php echo base_url(); ?>home/pagination__videos/"+page,
             method:"GET",
             dataType:"json",
             
              beforeSend:function()
              {
                  var src = "<?= base_url()?>upload/annumation/a.gif";
                   $('.resultat_service').html('<div class="post_data col-md-12 col-sm-12"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
              },
             success:function(data)
             {
              $('.resultat_service').html(data.country_table);
              $('#pagination_link').html(data.pagination_link);
             }
            });
          }
           
          load_country_data(1);

          $(document).on("click", ".pagination li a", function(event){
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            load_country_data(page);
          });

           function load_data(query)
           {
              $.ajax({
               url:"<?php echo base_url(); ?>home/fetch_search_our_videos",
               method:"POST",
               data:{query:query},
               beforeSend:function()
               {
                      var src = "<?= base_url()?>upload/annumation/a.gif";
                   $('.resultat_service').html('<div class="post_data col-md-12 col-sm-12"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
               },
               success:function(data){
                $('.resultat_service').html(data);
               }
              });
            }

           $(document).on('keyup','.search_text',function(){
                var search = $(this).val();
                if(search != '')
                {
                   load_data(search);
                   // $('#pagination_link').html('');
                }
                else
                {
                   load_country_data(1);
                }
           });

         
      });
  </script>


  <script type="text/javascript">
    $(document).ready(function() {
      var idart = $('.idart').val();
      var url = "<?php echo(base_url()) ?>api/json/ip.json";
      // var url = "http://ip-api.com/json/";
      fetch(url)
      .then(response => response.json())
      .then((data) => {

        var ipv4 = $('#ipv4').val();
        var ipv = data.query;

        $('#ipv4').val(ipv);
        console.log(ipv);
          // console.log(data.query);
          if (idart !='' && ipv !='') {
            $.ajax({
              url: '<?php echo(base_url()) ?>home/insert_vue',
              type: 'POST',
              data: {
                idart: idart,
                machine: ipv
              },
            })
            .done(function() {
              console.log("success");
            })
            .fail(function() {
              console.log("error");
            })
            .always(function() {
              console.log("complete");
            });
          }
          else{
            if (idart =='') {
              alert("veillez voir article");
            }
            if (ipv =='') {
              alert("veillez voir l'adresse idv4");
            }
          }
          

        }
      );
      // alert(idart);
    });
  </script>


   
</body>
</html>