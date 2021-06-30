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

                           <!-- mes script commencent -->

                          <div class="col-md-12 mb-2">
                              <div class="text-center" align="center">
                                <?php
                                    if($this->session->flashdata('message'))
                                    {
                                        echo '
                                        <div class="alert alert-success">
                                        <button class="close" data-dismiss="alert">x</button>
                                            '.$this->session->flashdata("message").'
                                        </div>
                                        ';
                                    }
                                    elseif ($this->session->flashdata('message2')) {
                                      echo '
                                        <div class="alert alert-danger">
                                        <button class="close" data-dismiss="alert">x</button>
                                            '.$this->session->flashdata("message2").'
                                        </div>
                                        ';
                                    }
                                    else{

                                    }
                                    ?>
                              </div>
                          </div>

                          <div class="col-md-12">
                             <div class="row">
                               <div class="col-md-12">
                                 <a href="<?php echo(base_url()) ?>admin/add_rapport" class="btn btn-dim btn-sm btn-outline-secondary pull-right  mb-4"><i class="fa fa-plus"></i>Effectuer la configuration</a>
                               </div>
                             </div>
                          </div>
                          <!-- insertion de tableau -->
                          <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
                                    <thead>  
                                        <tr>  
                                            <th width="30%">Titre</th>  
                                            <th width="15%">Description</th>  
                                            <th width="5%">Année</th>  
                                            <th width="15%">Fichier</th>
                                            <th width="25%">Mise à jour</th>
                                             
                                            
                                            <th width="5%">Modifier</th> 
                                            <th width="5%">Supprimer</th>    
                                        </tr>  
                                   </thead> 

                                   <tbody>
                                      <?php 
                                       if ($variable->num_rows() > 0) {

                                        foreach ($variable->result_array() as $key) {
                                          # code...
                                          ?>
                                          <tr>
                                            <td><?php echo(substr($key['titre'], 0,50)) ?>...</td>
                                            <td><?php echo(substr($key['description'], 0,50)) ?>...</td>
                                            <td><?php echo($key['annee']) ?></td>
                                             <td>
                                              <a  href="<?php echo(base_url()) ?>upload/rapport/<?php echo($key['fichier']) ?>" class="text-primary">
                                                <i class="fa fa-file mr-1"></i> Lire le fichier
                                              </a>
                                            </td>
                                            <td>
                                              <?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?>
                                            </td>
                                            <td>
                                              <a href="<?php echo(base_url()) ?>admin/operation_rapport/detail/<?php echo($key['idrapport']) ?>" class="btn btn-warning btn-sm btn-circle">
                                                <i class="fa fa-edit"></i>
                                              </a>
                                            </td>

                                            <td>
                                              <a onclick="return confirm('êtes-vous sûre de vouloire le supprimer?');" href="<?php echo(base_url()) ?>admin/operation_rapport/suppression/<?php echo($key['idrapport']) ?>" class="btn btn-danger btn-sm btn-circle">
                                                <i class="fa fa-trash"></i>
                                              </a>
                                            </td>


                                          </tr>
                                          <?php
                                        }
                                         # code...
                                       }
                                       else{

                                       }

                                      ?>
                                   </tbody>

                                   

                                    <tfoot>  
                                        <tr>  
                                            <th width="30%">Titre</th>  
                                            <th width="15%">Description</th>  
                                            <th width="5%">Année</th>  
                                            <th width="15%">Fichier</th>
                                            <th width="25%">Mise à jour</th>
                                             
                                            
                                            <th width="5%">Modifier</th> 
                                            <th width="5%">Supprimer</th>   
                                        </tr>  
                                   </tfoot>   
                                    
                                </table>
                            </div>
                          </div>
                          <!-- fin insertion tableau -->
                          <!-- fin de mes scripts -->
                           
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
       var dataTable = $('#user_data').DataTable();
     });
   </script>

</body>

</html>