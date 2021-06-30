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
                                          <th width="35%">Titre</th>  
                                          <th width="30%">Description</th>
                                          <th width="5%">icone</th>
                                          <th width="20%">Mise à jour</th>
                                           
                                          
                                          <th width="5%">Modifier</th> 
                                          <th width="5%">Supprimer</th>  
                                      </tr>  
                                 </thead> 

                                 <tfoot>  
                                      <tr>  
                                           <th width="35%">Titre</th>  
                                          <th width="30%">Description</th>
                                          <th width="5%">icone</th>
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

     <!-- modal  -->
   <div id="userModal" class="modal fade">
      <div class="modal-dialog modal-md">
        <form method="post" id="user_form" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header bg-success text-white">
              <p class="modal-title text-center">cat</p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    

                  <!-- .contenues -->
                  <div class="form-group col-md-12">
                    <label><i class="fa fa-tag"></i> Titre de l'information</label>
                    <input type="text" name="titre" id="titre" class="form-control titre" placeholder="Entrez le titre">
                  </div>

                  <!-- debit ajout -->
                  <div class="form-group jf-inputwithicon col-md-12">
                      <label><i class="fa fa-pencil"></i> Description de l'information</label>
                      <textarea class="form-control" name="description" id="description" placeholder="Description de l'information"></textarea>
                  </div>
                  <!-- fin ajout -->

                  <div class="form-group col-md-12">
                    <label><i class="fa fa-git"></i> Icone de l'information</label>
                    <input type="text" name="icone" id="icone" class="form-control titre" placeholder="Entrez le icone" value="fa-git">
                  </div>

                  <div class="col-md-12" style="margin-bottom: 10px;">
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">

                      <div class="buysell-field form-action text-center mb-2">
                            <div>

                              <input type="hidden" name="idtinfo_personnel" id="idtinfo_personnel" />
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
                  <!-- fin contenus -->

                    
              
            </div>
           
          </div>
        </form>
      </div>
    </div>
   <!-- fin modal -->


    <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  
          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des informations personnelles");  
               $('#action').val("Add");  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_tinfo_personnel'; ?>",  
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
               var titre = $('#titre').val();  
               var description = $('#description').val();
               var icone = $('#icone').val();
               
               var action = $('#action').val();


               if(titre != '' && description != '' && icone != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_tinfo_personnel'?>",  
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
                             url:"<?php echo base_url() . 'admin/modification_tinfo_personnel'?>",  
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
                   swal("Erreur!!!", "Tous les champs doivent être remplis 🔕", "error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var idtinfo_personnel = $(this).attr("idtinfo_personnel");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_tinfo_personnel",  
                    method:"POST",  
                    data:{idtinfo_personnel:idtinfo_personnel},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#titre').val(data.titre);
                         $('#description').val(data.description);
                         $('#icone').val(data.icone);
                         
                         $('.modal-title').text("modification des informations personneles "+data.titre);  
                         $('#idtinfo_personnel').val(idtinfo_personnel);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idtinfo_personnel = $(this).attr("idtinfo_personnel");

              if(confirm("Are you sure you want to delete this?"))
            {
              
                $.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_tinfo_personnel",
                      method:"POST",
                      data:{idtinfo_personnel:idtinfo_personnel},
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





     });  
     </script>






</body>

</html>