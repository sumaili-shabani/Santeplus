<!DOCTYPE html>
<html lang="fr">

<head>

   <?php include('_meta.php') ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php include('_navigation.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('_menuheader.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mb-4">

                   <div class="col-md-12 card">
                       <div class="row card-body">
                           <!-- mes scripts commencent -->
                           <?php include('component/edit_rapport_form.php') ?>
                           <!-- fin de mes scripts commencent -->
                       </div>
                   </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('_footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   
   <?php include('_script.php') ?>

    <script type="text/javascript">
     $(document).ready(function() {

           $(document).on('change', '#user_image', function(event) {
             event.preventDefault();
             /* Act on the event */
             var extension  = $('#user_image').val().split('.').pop().toLowerCase(); 
          
             if(extension != '')  
             {  
                  if(jQuery.inArray(extension, ['pdf']) == -1)  
                  {  

                       var erreur = "Fichier invalide il doit être de l'extension pdf";
                       swal("Erreur🏖!!!",erreur,'error');

                       $('#user_image').val('');  

                       $('.rapport_show').html('<i class="fa fa-close text-danger" style="font-size: 40px; margin-top: 10px;"></i>');
                       return false;  
                  } 
                  else{

                     $('.rapport_show').html('<i class="fa fa-check text-success" style="font-size: 40px; margin-top: 10px;"></i>');
                  }
             }


           });

           $(document).on('change', '#annee', function(event) {
             event.preventDefault();
             /* Act on the event */

             var annee = $(this).val();
              if (annee !='') {
                $('#annee').val(annee);
              }
              else{

                  $('#annee').val("");

                  var erreur = "Veillez selectionner une année";
                 swal("Oups!!!🔇",erreur,'error');
                 
              }

           });
       
     });
   </script>

</body>

</html>