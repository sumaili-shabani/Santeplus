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
                             <div class="col-md-12">
		                         <div class="row">
		                           <div class="col-md-12">
		                             <button class="btn btn-dim btn-sm btn-outline-success pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
		                           </div>
		                         </div>
		                      </div>
		                      <!-- insertion de tableau -->
		                      <div class="col-md-12">
		                        <div class="table-responsive">
		                           <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
                                  <thead class="tb-member-head thead-light">  
                                   <tr>  
                                        <th width="10%">Image</th> 
                                      <th width="20%">Nom de la vidéo</th>  
                                        <th width="20%">Description </th> 
                                        <th width="20%">Lien de la vidéo </th> 
                                  <th width="20%">Mise à jour</th>
                                   
                                  
                                  <th width="5%">Modifier</th> 
                                  <th width="5%">Supprimer</th> 
                                    </tr>    
                                 </thead> 

                                 <tbody>
                             
                                 </tbody>

                                 <tfoot>  
                                    <tr>  
                                        <th width="10%">Image</th> 
                                      <th width="20%">Nom de la vidéo</th>  
                                        <th width="20%">Description </th> 
                                        <th width="20%">Lien de la vidéo </th> 
                                  <th width="20%">Mise à jour</th>
                                   
                                  
                                  <th width="5%">Modifier</th> 
                                  <th width="5%">Supprimer</th> 
                                    </tr>  
                                 </tfoot>   
                                  
                              </table>
		                        </div>
		                      </div>
		                      <!-- fin insertion tableau -->
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

   <div id="userModal" class="modal fade">
      <div class="modal-dialog">
        
          <div class="modal-content">
            <div class="modal-header bg-success text-white">
              <p class="modal-title text-center">role</p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    

               <!-- debit -->
               <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
                        
                  <div class="form-group col-md-12">
                       <label> <i class="fa fa-edit"></i> Entrer le nom de la vidéo</label>
                       <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom de la vidéo" />
                  </div>

                  <div class="form-group col-md-12">
                       <label><i class="fa fa-video"></i> Selectionner la vidéo</label>
                      <input type="file" name="user_image2" id="user_image2" class="form-control" />
                  </div>

                  <div class="form-group col-md-12">
                      <label><i class="fa fa-camera"></i> Selectionner l'image de la vidéo</label>
                      <input type="file" name="user_image" id="user_image" class="form-control" />
                      
                   </div>


                  <div class="form-group jf-inputwithicon description_bloc col-md-12">
                      <label><i class="fa fa-edit"></i> La description de la Vidéo</label>
                      <textarea class="form-control textarea" name="description" id="description" placeholder="Parler un peu sur la vidéo"></textarea>
                  </div>

                  <div class="form-group jf-inputwithicon col-md-12 description_mod mb-2">
                        
                  </div>

                  <div class="col-md-12 mt-1">
                      <div class="row">

                        <div class="col-md-1 mb-2"></div>
                        <div class="col-md-10">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-3"></div>
                              <div class="col-6">
                                <div class="col-md-12" style="margin-top: 7px;">
                                  <span id="user_uploaded_image"></span>
                                </div>
                              </div>
                              <div class="col-3"></div>
                              
                            </div>
                          </div>
                          
                          
                        </div>
                        <div class="col-md-1"></div>
                        
                      </div>
                    </div>

                  
                  <div class="col-md-12" style="margin-bottom: 20px;">
                    <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-4">

                        <div class="buysell-field form-action text-center mb-2">
                              <div>

                                <input type="hidden" name="idv" id="idv" />
                                <input type="hidden" name="operation" id="operation" />
                                 <input type="submit" name="action" id="action" class="btn btn-success btn-lg" value="Add" />
                              </div>
                              <div class="pt-3">
                                  <a href="javascript:void(0);" data-dismiss="modal" class="link link-danger">Annuler l'opération</a>
                              </div>
                          </div>
                        
                      </div>
                      <div class="col-md-4"></div>
                    </div>
                  </div>

                </form>
               <!-- fin script -->
                    
              
            </div>
           
          </div>
        
      </div>
    </div> 

    


    <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  

      var  $message = '';

          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des nos vidéos  d'informations");  
               $('#action').val("Add"); 
               $('.description_mod').html(''); 

               $('.description_bloc').html('<textarea class="form-control textarea" name="description" id="description" placeholder="Parler un peu sur la vidéo"></textarea>'); 
               $('.description_bloc').show(); 
               $('.textarea').summernote();
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_video'; ?>",  
                    type:"POST"  
               },  
               "columnDefs":[  
                    {  
                         "targets":[0, 0, 0],  
                         "orderable":false,  
                    },  
               ],  
          });

          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var nom = $('#nom').val();  
               var description = $('#description').val(); 
               var lien = $('#lien').val(); 
               var extension  = $('#user_image').val().split('.').pop().toLowerCase(); 

               var extension2  = $('#user_image2').val().split('.').pop().toLowerCase(); 
               var action = $('#action').val();


               if(extension != '' )  
               {  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                    {  
                        swal("erreur!!!!","Invalid Image File","error");  
                         $('#user_image').val('');  
                         return false;  
                    }  
               }

               if(extension2 != '' )  
               {  
                    if(jQuery.inArray(extension2, ['mp4','webm']) == -1)  
                    {  
                        swal("erreur!!!!","Invalid Video File","error");  
                         $('#user_image2').val('');  
                         return false;  
                    }  
               }


               if(nom != '' && description !='' && lien !='')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_video'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                //swal('succès', ''+data, 'success'); 
                                $message =  data;
                                swal("succès!!!", $message, "success");

                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                dataTable.ajax.reload();  
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'admin/modification_video'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  //swal('succès', ''+data, 'success'); 

                                  $message =  data;
                                   swal("succès!!!", $message, "success");


                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                  dataTable.ajax.reload();  
                             }  
                        });

                  }

                }
                else
                {
                 swal("Erreur!!!", "Tous les champs doivent être remplis", "error");
                }
 
          });  


          $(document).on('click', '.update', function(){  
               var idv = $(this).attr("idv");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_video",  
                    method:"POST",  
                    data:{idv:idv},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#nom').val(data.nom);
                         $('#description').val(data.description);
                         $('#lien').val(data.lien);
                         $('#user_uploaded_image').html(data.user_image);
                         
                         $('.modal-title').text("modification de la vidéo  "+data.nom);  
                         $('#idv').val(idv);   
                         $('#action').val("Edit"); 

                         $('.description_bloc').hide();  
                         $('.description_mod').html(data.text_description);
                         $('.textarea').summernote();
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idv = $(this).attr("idv");

              if(confirm("Are you sure you want to delete this?"))
              {
                
                  $.ajax({
                        url:"<?php echo base_url(); ?>admin/supression_video",
                        method:"POST",
                        data:{idv:idv},
                        success:function(data)
                        {

                           var message =  data;
                           swal("succès!!!", message,"success");

                           dataTable.ajax.reload();
                        }
                      });
              }
              else
              {
                swal("Ouf!!!", "opération annulée :)", "error");
              }

          });



     });  
     </script>

     





</body>

</html>