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

                    		<!-- mes script commencent -->
		                      <div class="col-md-12">
		                         <div class="row">
		                           <div class="col-md-12">
		                             <button class="btn btn-dim btn-sm btn-outline-secondary pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
		                           </div>
		                         </div>
		                      </div>
		                      <!-- insertion de tableau -->
		                      <div class="col-md-12">
		                        <div class="table-responsive">
		                            <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
		                               <thead class="tb-member-head thead-light">  
                                        <tr> 

                                          <th width="5%">Image</th> 
                                            <th width="20%">Nom complet</th>  
                                            <th width="15%">Email</th>

                                            <th width="15%">Poste</th>
                                            <th width="15%">Téléphone</th>
                                            
                                            <th width="20%">Mise à jour</th>
                                             
                                            
                                            <th width="5%">Modifier</th> 
                                            <th width="5%">Supprimer</th>  
                                        </tr>  
                                   </thead> 

                                   <tfoot>  
                                        <tr> 
                                          <th width="5%">Image</th> 
                                            <th width="20%">Nom complet</th>  
                                            <th width="15%">Email</th>

                                            <th width="15%">Poste</th>
                                            <th width="15%">Téléphone</th>
                                            
                                            <th width="20%">Mise à jour</th>
                                             
                                            
                                            <th width="5%">Modifier</th> 
                                            <th width="5%">Supprimer</th>    
                                        </tr>  
                                   </tfoot> 
		                                
		                            </table>
		                        </div>
		                      </div>
		                      <!-- fin insertion tableau -->
		                      <!-- fin de mes scripts -->
		                   
		        			<!-- fin -->
                    		
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

     <!-- modal ajout radio -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <span class="nk-block-title modal-title">Paramètrage des émissions</span>
                        
                    </div>
                    <div class="nk-block">

                    	<form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
                    		
                    		  <div class="form-group col-md-6">
                            <label><i class="fa fa-user"></i> Nom du membre</label>
                            <input type="text" name="first_name" id="first_name" class="form-control titre" placeholder="Entrez le Nom du membre">
                          </div>

                          <div class="form-group col-md-6">
                            <label><i class="fa fa-dribbble"></i> Postnom du membre</label>
                            <input type="text" name="last_name" id="last_name" class="form-control titre" placeholder="Entrez le Postnom du membre">
                          </div>

                          <div class="form-group col-md-6">
                            <label><i class="fa fa-google"></i>Adresse mail</label>
                            <input type="text" name="email" id="email" class="form-control titre" placeholder="Entrez son adresse mail">
                          </div>

                          <div class="form-group col-md-6">
                            <label><i class="fa fa-tag"></i> Fonction ou poste occupé</label>
                            <input type="text" name="poste" id="poste" class="form-control titre" placeholder="Entrez le poste du membre">
                          </div>

                          <div class="form-group col-md-6">
                            <label><i class="fa fa-phone"></i> Son numéro de téléphone</label>
                            <input type="text" name="telephone" id="telephone" class="form-control titre" placeholder="Entrez son numéro de téléphone">
                          </div>

                          <div class="form-group col-md-6">
                            <label><i class="fa fa-male"></i> Son Sexe</label>  
                                <select name="sexe_ok" id="sexe_ok" class="form-control selectpicker" data-live-search="true">
                                  <option value="">Selection le sexe du membre</option>
                                  <option value="M">masculin</option>
                                  <option value="F">feminin</option>
                                </select>
                          </div>

                          <div class="form-group col-md-6">
                            <label><i class="fa fa-facebook"></i> Facebook</label>  
                                <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Adresse facebook" /> 
                          </div>

                          <div class="form-group col-md-6">
                            <label><i class="fa fa-twitter"></i> Twitter</label>  
                                <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Adresse twitter" /> 
                          </div>

                          <div class="form-group col-md-12">
                            <label><i class="fa fa-linkedin"></i> Linkedin</label>  
                                <input type="text" name="linkedin" id="linkedin" class="form-control" placeholder="Adresse linkedin" /> 
                          </div>


                          <div class="form-group col-md-12">
                            <label><i class="fa fa-camera"></i> Selectionner l'image de l'utilisateur</label>
                            <input type="file" name="user_image" id="user_image" class="form-control" />
                            
                         </div>

                          <div class="col-md-12">
                          <div class="row">

                            <div class="col-md-4 mb-2"></div>
                            <div class="col-md-4">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-12" style="margin-top: 7px;">
                                    <span id="user_uploaded_image"></span>
                                  </div>
                                  
                                </div>
                              </div>
                              
                              
                            </div>
                            <div class="col-md-4 mb-2"></div>
                            
                          </div>
                        </div>

                          <div class="col-md-12" style="margin-bottom: 10px;">
                            <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-4">

                                <div class="buysell-field form-action text-center mb-2">
                                    <div>

                                      <input type="hidden" name="idtinfo_user" id="idtinfo_user" />
                                      <input type="hidden" name="sexe" id="sexe" />
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
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->


    <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  
          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des membres");  
               $('#action').val("Add");  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_tinfo_user'; ?>",  
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
               var first_name   = $('#first_name').val(); 
               var last_name  = $('#last_name').val();
               var email    = $('#email').val();
               var telephone  = $('#telephone').val(); 
               var poste    = $('#poste').val();

              

               var extension  = $('#user_image').val().split('.').pop().toLowerCase(); 
               
               var action = $('#action').val();

               if(extension != '')  
               {  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                    {  
                         alert("Invalid Image File");  
                         $('#user_image').val('');  
                         return false;  
                    }  
               }


               if(first_name != '' && last_name != '' && email != '' && poste != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_tinfo_user'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                swal('succès', ''+data, 'success'); 
                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                dataTable.ajax.reload();  
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'admin/modification_tinfo_user'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  swal('succès', ''+data, 'success'); 
                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                  dataTable.ajax.reload();  
                             }  
                        });

                  }

                }
                else
                {
                  swal("Erreur!!!", "Tous les champs doivent être remplis🔕", "error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var idtinfo_user = $(this).attr("idtinfo_user");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_tinfo_user",  
                    method:"POST",  
                    data:{idtinfo_user:idtinfo_user},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#first_name').val(data.first_name);
                         $('#last_name').val(data.last_name);
                         $('#email').val(data.email);
                         $('#telephone').val(data.telephone);
                         $('#poste').val(data.poste);
                         $('#sexe').val(data.sexe);
                         $('#facebook').val(data.facebook);

                         $('#linkedin').val(data.linkedin);
                         $('#twitter').val(data.twitter);

                         $('#user_uploaded_image').html(data.user_image);
                         
                         $('.modal-title').text("modification du membre "+data.first_name);  
                         $('#idtinfo_user').val(idtinfo_user);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idtinfo_user = $(this).attr("idtinfo_user");

              if(confirm("Are you sure you want to delete this?"))
            {
              
                $.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_tinfo_user",
                      method:"POST",
                      data:{idtinfo_user:idtinfo_user},
                      success:function(data)
                      {
                         swal("succès!", ''+data, "success");
                         dataTable.ajax.reload();
                      }
                    });
            }
            else
            {
              swal("Ouf!!!", "opération annulée :)", "error");
            }

               

          });

          $(document).on('change', '#sexe_ok',function(){
              var sexe = $(this).val();
              if (sexe !='') {
                $('#sexe').val(sexe);
              }
              else{
                $('#sexe').val("");
                swal("Ouf!!!", "Veillez complèter son sexe 😰", "error");
              }
        });





     });  
     </script>






</body>

</html>