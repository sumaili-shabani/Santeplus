<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class admin extends CI_Controller
{
		private $token;
		private $connected;
		protected $email_sites;
		protected $logos_sites;
		public function __construct()
		{
		  parent::__construct();
		  if(!$this->session->userdata('admin_login'))
		  {
		      	redirect(base_url().'login');
		  }
		  $this->load->library('form_validation');
		  $this->load->library('encryption');
	      // $this->load->library('pdf');
		  $this->load->model('crud_model'); 

		  $this->load->helper('url');

		  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
		  $this->connected = $this->session->userdata('admin_login');
		  $this->email_sites = $this->crud_model->get_email_du_site();

	      $this->logos_sites = $this->crud_model->get_logo_du_site();

		}

		function index(){
			$data['title']="mon profile admin";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$this->load->view('backend/admin/templete_admin', $data);
		}

		function dashbord(){
			  $data['title']="Tableau de bord";
			  $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		      // $data['nombre_location'] = $this->crud_model->statistiques_nombre("profile_location");


		      $data['nombre_client'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 2);

		      $data['nombre_membre'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 3);

		      $data['nombre_paiement'] = $this->crud_model->statistiques_nombre("paiement");

		      $data['nombre_users'] = $this->crud_model->statistiques_nombre("users");

		      $data['nombre_publicite']   = $this->crud_model->statistiques_nombre("article");
			  $data['nombre_category']   = $this->crud_model->statistiques_nombre("category");

			  $data['nombre_pub']   = $this->crud_model->statistiques_nombre("galery2");
			  $data['nombre_role']   = $this->crud_model->statistiques_nombre("role");
		      $this->load->view('backend/admin/dashbord', $data);
		}

		function stat_entree(){
			 $data['title']="Filtrage entrée en stock marchandise";
			 $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

			 $date1=$this->input->post('date1');
			 $date2=$this->input->post('date2');
			 if ($date1=='' && $date2=='') {
			 	$data['nombre_total'] = $this->crud_model->statistiques_nombre_entree_enstock("profile_entree_stock");
			 	$data['nombre_total_by_cat'] = $this->crud_model->statistiques_nombre_entree_enstock_cat("profile_entree_stock");
			 	$data['title']="Filtrage entrée en stock marchandise";
			 	$this->load->view('backend/admin/stat_entree_stock', $data);
			 }
			 else{
			 	$data['title']="Filtrage entrée en stock marchandise";

			 	$data['date1']=$date1;
			 	$data['date2']=$date2;
			 	$this->load->view('backend/admin/stat_entree_stock', $data);
			 }
		}

		function stat_sortie(){
			 $data['title']="Filtrage sortie en stock marchandise";
			 $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

			 $date1=$this->input->post('date1');
			 $date2=$this->input->post('date2');
			 if ($date1=='' && $date2=='') {
			 	
			 	$data['title']="Filtrage sortie en stock marchandise";
			 	$this->load->view('backend/admin/stat_sortie_stock', $data);
			 }
			 else{
			 	$data['title']="Ok Filtrage sortie en stock marchandise";

			 	$data['date1']=$date1;
			 	$data['date2']=$date2;
			 	$this->load->view('backend/admin/stat_sortie_stock', $data);
			 }
		}

		function impressionStockEntrant(){
	       $customer_id = "Bon d'etrée en stock ";
	       $html_content = '';
	       $html_content .= $this->crud_model->Fiche_impressionStockEntrant();

	       // echo($html_content);
	       $this->pdf->loadHtml($html_content);
	       $this->pdf->render();
	       $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
	    }

	    function stat_fichestock(){

	       $data['title']="Fiche de stock des marchandises";
	       $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	       $customer_id = "Fiche de stock ";
	       $html_content = '';
	       $html_content .= $this->crud_model->Fiche_impressionFichedeStock();

	       // echo($html_content);

	       $this->pdf->loadHtml($html_content);
	       $this->pdf->render();
	       $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
	    }

	    // pour la sortie en stock
	    function impressionStockSortie(){
	       $customer_id = "Bon de sortie en stock ";
	       $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	       $html_content = '';
	       $html_content .= $this->crud_model->Fiche_impressionStockSortie();

	       // echo($html_content);
	       $this->pdf->loadHtml($html_content);
	       $this->pdf->render();
	       $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
	    }

	    function impressionStockEntrant_Date($date1='', $date2=''){
	       $customer_id = "Fiche d'approvisionnement en stock ";
	       $html_content = '';

	       if ($date1 > $date2) {
	       	# code...
	        $html_content .= $this->crud_model->Fiche_impressionStockEntrant_Date($date2, $date1);
	       }
	       else{

	       	$html_content .= $this->crud_model->Fiche_impressionStockEntrant_Date($date1, $date2);

	       }

	       // echo($html_content);

	       $this->pdf->loadHtml($html_content);
	       $this->pdf->render();
	       $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
	    }

	    // bon de sortie filtrage 
	    function impressionStockSortie_Date($date1='', $date2=''){
	       $customer_id = "Fiche d'approvisionnement en stock ";
	       $html_content = '';

	       if ($date1 > $date2) {
	       	# code...
	        $html_content .= $this->crud_model->Fiche_impressionStockSortie_Date($date2, $date1);
	       }
	       else{

	       	$html_content .= $this->crud_model->Fiche_impressionStockSortie_Date($date1, $date2);

	       }

	       // echo($html_content);

	       $this->pdf->loadHtml($html_content);
	       $this->pdf->render();
	       $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
	    }


	    function news(){
	      $data['title']="Information de base!";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      $data['variable']  = $this->crud_model->Select_all_news();
	      // $this->load->view('backend/admin/viewx', $data);
	      $this->load->view('backend/admin/news', $data);
	    }

	     function rapport(){
	      $data['title']="Paremetrage des rapport!";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      $data['variable']  = $this->crud_model->Select_all_rapport();
	      // $this->load->view('backend/admin/viewx', $data);
	      $this->load->view('backend/admin/rapport', $data);
	    }

	    function publicite(){
		    $data['title']        ="Paramétrage  des publicités pour les publications";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

		    $data['articles']     = $this->crud_model->Select_articles();
		    $data['categories']   = $this->crud_model->Select_category();

		    $this->load->view('backend/admin/publicite', $data);  
		}


	    function add_rapport(){
	      $data['title']="Ajout d'un rapport!";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      $data['variable']  = $this->crud_model->Select_all_news();
	      // $this->load->view('backend/admin/viewx', $data);
	      $this->load->view('backend/admin/add_rapport', $data);
	    }

	    function add_news(){
	      $data['title']="Information de base!";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      // $this->load->view('backend/admin/viewx', $data);
	      $this->load->view('backend/admin/add_news', $data);
	    }

		function profile(){
	      $data['title']="mon profile admin";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      // $this->load->view('backend/admin/viewx', $data);
	      $this->load->view('backend/admin/profile', $data);
	    }



	    function basic(){
	        $data['title']="Information basique de mon compte";
	        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/basic', $data);
	    }

	    function basic_image(){
	        $data['title']="Information basique de ma photo";
	        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/basic_image', $data);
	    }

	    function basic_secure(){
	        $data['title']="Paramètrage de sécurité de mon compte";
	        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/basic_secure', $data);
	    }

	    function notification($param1=''){
	      $data['title']    ="Listes des formations";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users']    = $this->crud_model->fetch_connected($this->connected);
	      $this->load->view('backend/admin/notification', $data);
	    }


		function site(){
			$data['title']="Paramétrage  du site";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	    	$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$this->load->view('backend/admin/site', $data);		
		}
		function role(){
			$data['title']="Paramètrage de roles";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$this->load->view('backend/admin/role', $data);
		}

		function category(){

			$data['title']="Paramètrage cétegorie produit";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$this->load->view('backend/admin/category', $data);
		}

		function users(){
	      $data['title']="Nos utilisateurs";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
	      $data['nombre_users_m'] = $this->crud_model->statistiques_nombre_where("users","sexe","M");
	      $data['nombre_users_f'] = $this->crud_model->statistiques_nombre_where("users","sexe","F");
	      $data['nombre_users_a'] = $this->crud_model->statistiques_nombre_where_null("users","sexe","NULL");
	      $data['users']  = $this->crud_model->Select_users();   
	      $data['roles']  = $this->crud_model->Select_roles();    
	      $this->load->view('backend/admin/users', $data);
	    }

	    function stat_users(){
		    $data['title']="Statistique sur nos utilisateurs";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		    $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
		    $data['nombre_users_m'] = $this->crud_model->statistiques_nombre_where("users","sexe","M");
		    $data['nombre_users_f'] = $this->crud_model->statistiques_nombre_where("users","sexe","F");
		    $data['nombre_users_a'] = $this->crud_model->statistiques_nombre_where_null("users","sexe","NULL");
		    $this->load->view('backend/admin/stat_users', $data);
		}


		function article(){
			$data['title']="Paramétrage  des articles et publication";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
 
			$data['articles']  		= $this->crud_model->Select_articles();
			$data['categories']  	= $this->crud_model->Select_category();

			$this->load->view('backend/admin/article', $data);	
		}

		function commentaire(){
			$data['title']="Paramétrage  des commentaire pour les articles";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
 
			$data['articles']  		= $this->crud_model->Select_articles();
			$data['categories']  	= $this->crud_model->Select_category();
			$data['articles']  	= $this->crud_model->Select_artcle_orders();
			

			$this->load->view('backend/admin/commentaire', $data);	
		}

		function publicity_personnele(){
		    $data['title']="Paramétrage  des publicités";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		    $data['users'] = $this->crud_model->fetch_connected($this->connected);
		    $this->load->view('backend/admin/publicity_personnele', $data);  
		}













		// script pour la sauvegarge de données 
	    function database($param1 = '', $param2 = '')
	    {
	        
	        if($param1 == 'restore')
	        {
	            // $this->crud_model->import_db();
	            $this->session->set_flashdata('message',"Importation de la base des données avec succès!!!");
	            redirect(base_url() . 'admin/database/', 'refresh');
	        }
	        if($param1 == 'create')
	        {
	          $this->crud_model->create_backup();
	          $this->session->set_flashdata('message',"Sauvegarde de la base des données avec succès!!!");
	          redirect(base_url() . 'admin/database/', 'refresh');
	        }

	        $data['title'] = "Sauvegarde et restauration de la base des données";
	        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	         $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/database', $data);
	    }
	    // fin script sauvegarde des données 

	    function approvisionnement(){
			$data['title']="Approvisionnement des produits";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['categories'] = $this->crud_model->fetch_categores();
			$data['produits'] = $this->crud_model->fetch_produits();
			$this->load->view('backend/admin/approvisionnement', $data);
		}

		function galery(){

			$data['title']="Ajout des photos dans la galerie";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			
			$this->load->view('backend/admin/galeryPhoto', $data);
		}

		function info_membre(){

			$data['title']="Notre famille";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			
			$this->load->view('backend/admin/info_membre', $data);
		}

		function info_personnel(){
			$data['title']="Nos informations personneles";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			
			$this->load->view('backend/admin/info_personnel', $data);
		}

		function info_service(){
			$data['title']="Les informations sur services";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			
			$this->load->view('backend/admin/info_service', $data);
		}

		function video(){

			$data['title']="Ajoutdes vidéos";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			
			$this->load->view('backend/admin/video', $data);
		}

		function entree(){

			$data['title']="Entrée en stock des produits";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['categories'] = $this->crud_model->fetch_categores();
			$data['produits'] = $this->crud_model->fetch_produits();
			$this->load->view('backend/admin/entree_stock', $data);
		}

		function evaluation(){

			$data['title']="Sortie en stock des produits";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['categories'] = $this->crud_model->fetch_categores();
			$data['produits'] = $this->crud_model->fetch_produits();
			$this->load->view('backend/admin/evaluation_stock', $data);
		}

		function contact_info(){
		    $data['title']="Les informations de contact";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		    $this->load->view('backend/admin/contact_info', $data);
		}

		/*

	    DEBIT FONCTION APPEL DES VIEWS UTILISATION DE PORTALI Ecommerce
	    MES SCRIPTS EcommerceB COMMENCE DEJE
	    ========================================================
	    */


	    function modification_panel($param1='', $param2='', $param3=''){

		      if ($param1="option1") {
		         $data = array(
		            'first_name'        => $this->input->post('first_name'),
		            'last_name'       => $this->input->post('last_name'),
		            'telephone'       => $this->input->post('telephone'),
		            'full_adresse'      => $this->input->post('full_adresse'),
		            'biographie'        => $this->input->post('biographie'),
		            'date_nais'       => $this->input->post('date_nais'),
		            'sexe'          => $this->input->post('sexe'),
		            'email'         => $this->input->post('mail_ok'), 

		            'facebook'        => $this->input->post('facebook'),
		            'linkedin'        => $this->input->post('linkedin'),
		            'twitter'         => $this->input->post('twitter')
		        );

		        $id_user= $this->connected;
		        $query = $this->crud_model->update_crud($id_user, $data);
		        $this->session->set_flashdata('message', 'votre profile a été mis à jour avec succès!!!🆗');
		         redirect('admin/basic', 'refresh');
		      }

		  }

		  function modification_photo(){

		     $id_user= $this->connected;
		     if ($_FILES['user_image']['size'] > 0) {
		       # code...
		        $data = array(
		          'image'     => $this->upload_image()
		        );
		       $query = $this->crud_model->update_crud($id_user, $data);
		       $this->session->set_flashdata('message', 'modification avec succès');
		           redirect('admin/basic_image', 'refresh');
		     }
		     else{

		        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
		        redirect('admin/basic_image', 'refresh');

		     }
		     
		  }


		  function upload_image()  
		  {  
		       if(isset($_FILES["user_image"]))  
		       {  
		            $extension = explode('.', $_FILES['user_image']['name']);  
		            $new_name = rand() . '.' . $extension[1];  
		            $destination = './upload/photo/' . $new_name;  
		            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
		            return $new_name;  
		       }  
		  }

		  function modification_account($param1=''){
		       $id_user= $this->connected;
		       $first_name;

		       $passwords = md5($this->input->post('user_password_ancien'));
		       
		       $users = $this->db->query("SELECT * FROM users WHERE passwords='".$passwords."' AND id='".$id_user."' ");

		       if ($users->num_rows() > 0) {
		          
		          foreach ($users->result_array() as $row) {
		            $first_name = $row['first_name'];
		            // echo($first_name);
		             $nouveau   =  $this->input->post('user_password_nouveau');
		             $confirmer =  $this->input->post('user_password_confirmer');
		             if ($nouveau == $confirmer) {
		              $new_pass= md5($nouveau);

		              $data = array(
		                  'passwords'  => $new_pass
		                );

		                 $query = $this->crud_model->update_crud($id_user, $data);
		                 $this->session->set_flashdata('message', 'votre clée de sécurité a été changer avec succès '.$first_name);
		                   redirect('admin/basic_secure', 'refresh');

		               }
		               else{
		   
		                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
		                redirect('admin/basic_secure', 'refresh');
		               }
		         
		          }

		       }
		       else{

		          $this->session->set_flashdata('message2', 'information incorecte');
		          redirect('admin/basic_secure', 'refresh');
		       }
		     
		  } 

		  function view_1($param1='', $param2='', $param3=''){
		      
			  if($param1=='display_delete') {
			  	$this->session->set_flashdata('message', 'suppression avec succès ');
			    $query = $this->crud_model->delete_notifacation_tag($param2);
			    redirect('admin/notification');
			  }

			  if($param1=='display_delete_message') {

			    $query = $this->crud_model->delete_message_tag($param3);
			    redirect('admin/message/'.$param2);
			  }
			  else{

			  }

		  }


		// script de produit en stock

		function pagination_view_product()
		{

		  $this->load->library("pagination");
		  $config = array();
		  $config["base_url"] = "#";
		  $config["total_rows"] = $this->crud_model->count_all_view_product();
		  $config["per_page"] = 10;
		  $config["uri_segment"] = 3;
		  $config["use_page_numbers"] = TRUE;
		  $config["full_tag_open"] = '<ul class="nav pagination">';
		  $config["full_tag_close"] = '</ul>';
		  $config["first_tag_open"] = '<li class="page-item">';
		  $config["first_tag_close"] = '</li>';
		  $config["last_tag_open"] = '<li class="page-item">';
		  $config["last_tag_close"] = '</li>';
		  $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
		  $config["next_tag_open"] = '<li class="page-item">';
		  $config["next_tag_close"] = '</li>';
		  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
		  $config["prev_tag_open"] = "<li class='page-item'>";
		  $config["prev_tag_close"] = "</li>";
		  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
		  $config["cur_tag_close"] = "</a></li>";
		  $config["num_tag_open"] = "<li class='page-item'>";
		  $config["num_tag_close"] = "</li>";
		  $config["num_links"] = 1;
		  $this->pagination->initialize($config);
		  $page = $this->uri->segment(3);
		  $start = ($page - 1) * $config["per_page"];

		  $output = array(
		   'pagination_link'  => $this->pagination->create_links(),
		   'country_table'   => $this->crud_model->fetch_details_view_product($config["per_page"], $start)
		  );
		  echo json_encode($output);
		}


		function fetch_search_view_product()
		{
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_view_product($query);
		  $output .= '
	      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
	          <thead>  
	            <tr>         
	               <th width="10%">Image</th>
	               <th width="15%">Nom du produit</th>  
	               <th width="10%">Prix</th>
	               <th width="10%">Catégorie produit</th>
	               <th width="15%">Qte en stock</th>
	               <th width="10%">Utilisateur action</th>
	               <th width="5%">Modifier</th> 
	               <th width="5%">Supprimer</th>  
	            </tr> 
	         </thead> 
	      ';
	      if ($data->num_rows() < 0) {
	        
	      }
	      else{

	        foreach($data->result() as $row)
	        {
	         $output .= '
	         <tr>
	          <td><img src="'.base_url().'upload/product/'.$row->product_image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

	          <td>'.nl2br(substr($row->product_name, 0,10)).'...'.'</td>
	          <td>'.nl2br(substr($row->product_price, 0,10)).' $'.'</td>
	          <td>'.nl2br(substr($row->nom, 0,20)).' ...'.'</td>
	          <td>'.nl2br(substr($row->Qte, 0,10)).' '.'</td>
	          <td>'.nl2br(substr($row->first_name, 0,10)).'...'.'</td>
	          
	          <td><button type="button" name="update" product_id="'.$row->product_id.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
	          <td><button type="button" name="delete" product_id="'.$row->product_id.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
	          

	         </tr>
	         ';
	        }
	      }
	      $output .= '
	          <tfoot>  
	            <tr>         
	               <th width="10%">Image</th>
	               <th width="15%">Nom du produit</th>  
	               <th width="10%">Prix</th>
	               <th width="10%">Catégorie produit</th>
	               <th width="15%">Qte en stock</th>
	               <th width="10%">Utilisateur action</th>
	               <th width="5%">Modifier</th> 
	               <th width="5%">Supprimer</th>  
	            </tr> 
	         </tfoot>   
	            
	        </table>';
		  echo $output;
		}


        function fetch_product(){  

           $fetch_data = $this->crud_model->make_datatables_product();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/product/'.$row->product_image.'" class="img-thumbnail" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->product_name, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->product_price, 0,10)).'...';  
                $sub_array[] = nl2br(substr($row->nom, 0,10)).'...'; 

                // $sub_array[] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';
                $sub_array[] = nl2br(substr($row->first_name, 0,10)).'...'; 
                
 
                $sub_array[] = '<button type="button" name="update" product_id="'.$row->product_id.'" class="btn btn-success btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" product_id="'.$row->product_id.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_product(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_product(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
       }

      function fetch_single_product()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_product($_POST["product_id"]);  
           foreach($data as $row)  
           {  
                $output['product_name'] 		= $row->product_name;  
                $output['product_price'] 		= $row->product_price; 
                $output['category_id'] 			= $row->category_id; 
                $output['Qte'] 					= $row->Qte;
                $output['nom'] 					= $row->nom;
                

                if($row->product_image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/product/'.$row->product_image.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->product_image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  
           }  
           echo json_encode($output);  
      }  


      function operation_product(){

      	$id_user = $this->session->userdata("admin_login");


      	  if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
		           'product_name'           =>     $this->input->post('product_name'),  
		           'product_price'          =>     $this->input->post("product_price"), 
		           'Qte'          			=>     $this->input->post("Qte"),
		           'category_id'         	=>     $this->input->post('category_id'), 
		           'id_user'           		=>     $id_user, 
		           'product_image'          =>     $this->upload_image_product()
			  	);    
          }  
          else  
          {  
               $user_image = "photoDefaut.jpg";  
               $insert_data = array(  
		           'product_name'           =>     $this->input->post('product_name'),  
		           'product_price'          =>     $this->input->post("product_price"), 
		           'Qte'          			=>     $this->input->post("Qte"),
		           'category_id'         	=>     $this->input->post('category_id'), 
		           'id_user'           		=>     $id_user, 
		           'product_image'          =>     $user_image
			  	); 
          }

	      
	       
	      $requete=$this->crud_model->insert_product($insert_data);
	      echo("Ajout information avec succès");
	      
      }

      function modification_product(){
  
          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
		           'product_name'           =>     $this->input->post('product_name'),  
		           'product_price'          =>     $this->input->post("product_price"), 
		           'category_id'         	=>     $this->input->post('category_id'),  
		           'Qte'          			=>     $this->input->post("Qte"),
		           'product_image'          =>     $this->upload_image_product()
			  	);    
          }  
          else  
          {  
               $updated_data = array(  
		           'product_name'           =>     $this->input->post('product_name'),  
		           'product_price'          =>     $this->input->post("product_price"), 
		           'Qte'          			=>     $this->input->post("Qte"),
		           'category_id'         	=>     $this->input->post('category_id')  
			  	);    
          }
  
          $this->crud_model->update_product($this->input->post("product_id"), $updated_data);

          echo("modification avec succès");
      }

      


      function supression_product(){
 
          $this->crud_model->delete_product($this->input->post("product_id"));

          echo("suppression avec succès");
        
      }


      function upload_image_product()  
	  {  
	       if(isset($_FILES["user_image"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/product/' . $new_name;  
	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	  } 
	  // fin de script product 


	  // script de galery produit en stock
        function fetch_galery(){  

           $fetch_data = $this->crud_model->make_datatables_galery();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/product/galery/'.$row->photos.'" class="img-thumbnail" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->product_name, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->product_price, 0,10)).'...';  
                $sub_array[] = nl2br(substr($row->Qte, 0,10)).'...'; 

                
 
                $sub_array[] = '<button type="button" name="update" idgalery="'.$row->idgalery.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idgalery="'.$row->idgalery.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_galery(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_galery(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
       }

      function fetch_single_galery()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_galery($_POST["idgalery"]);  
           foreach($data as $row)  
           {  
                $output['product_name'] 		= $row->product_name;  
                $output['product_price'] 		= $row->product_price; 
                $output['product_id'] 			= $row->product_id;

                $output['Qte'] 					= $row->Qte;
                

                if($row->photos != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/product/galery/'.$row->photos.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->photos.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  
           }  
           echo json_encode($output);  
      }  


      function operation_galery(){

      
      	  if($_FILES["user_image"]["size"] > 0)  
          {  
                $insert_data = array(  
		           'product_id'      =>     $this->input->post('product_id'),  
		           'photos'          =>     $this->upload_image_galery()
			  	);    
          }  
          else  
          {  
               $user_image = "photoDefaut.jpg";  
               $insert_data = array(  
		           'product_id'      =>     $this->input->post('product_id'),  
		           'photos'          =>     $user_image
			   ); 
          }

	      
	       
	      $requete=$this->crud_model->insert_galery($insert_data);
	      echo("Ajout information avec succès");
	      
      }

      function modification_galery(){
  
          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
		           'product_id'      =>     $this->input->post('product_id'),  
		           'photos'          =>     $this->upload_image_galery()
			  	);    
          }  
          else  
          {  
               $updated_data = array(  
		           'product_id'      =>     $this->input->post('product_id')  
			  	);    
          }
  
          $this->crud_model->update_galery($this->input->post("idgalery"), $updated_data);

          echo("modification avec succès");
      }

      


      function supression_galery(){
 
          $this->crud_model->delete_galery($this->input->post("idgalery"));

          echo("suppression avec succès");
        
      }


      function upload_image_galery()  
	  {  
	       if(isset($_FILES["user_image"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/product/galery/' . $new_name;  
	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	  } 
	  // fin de script product galery


		// script de category
	    function fetch_category(){  

	           $fetch_data = $this->crud_model->make_datatables_category();  
	           $data = array();  
	           foreach($fetch_data as $row)  
	           {  
	                $sub_array = array();  
	               
	                $sub_array[] = nl2br(substr($row->nom, 0,50)); 
	                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
	               
	 
	                $sub_array[] = '<button type="button" name="update" idcat="'.$row->idcat.'" class="btn btn-success btn-sm btn-circle update"><i class="fa fa-edit"></i></button>';  
	                $sub_array[] = '<button type="button" name="delete" idcat="'.$row->idcat.'" class="btn btn-danger btn-sm btn-circle delete"><i class="fa fa-trash"></i></button>';  
	                $data[] = $sub_array;  
	           }  
	           $output = array(  
	                "draw"                =>     intval($_POST["draw"]),  
	                "recordsTotal"        =>     $this->crud_model->get_all_data_category(),  
	                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_category(),  
	                "data"                =>     $data  
	           );  
	           echo json_encode($output);  
	      }

	      function fetch_single_category()  
	      {  
	           $output = array();  
	           $data = $this->crud_model->fetch_single_category($_POST["idcat"]);  
	           foreach($data as $row)  
	           {  
	                $output['nom'] 		= $row->nom;  
	                
	               
	           }  
	           echo json_encode($output);  
	      }  


	      function operation_category(){

	          $insert_data = array(  
		           'nom'           	=>     $this->input->post('nom')
			  );  

		      $requete=$this->crud_model->insert_category($insert_data);
		      echo("Ajout information avec succès");
		      
	      }

	      function modification_category(){
	  
	          $updated_data = array(  
		           'nom'           	=>     $this->input->post('nom')
			  );
	  
	          $this->crud_model->update_category($this->input->post("idcat"), $updated_data);

	          echo("modification avec succès");
	      }

	      function supression_category(){
	 
	          $this->crud_model->delete_category($this->input->post("idcat"));
	          echo("suppression avec succès");
	        
	      }

		  // fin de sript parametrage 



	    // script des utilisateurs 
	    function fetch_users(){  

	           $fetch_data = $this->crud_model->make_datatables_users();  
	           $data = array(); 
	           $etat =''; 
	           foreach($fetch_data as $row)  
	           {  
	           		if ($row->idrole == 1) {
	           			$etat ='<span class="badge badge-success">Admin</span>';
	           		}
	           		else if ($row->idrole == 2) {
	           			$etat ='<span class="badge badge-danger">Visiteur</span>';
	           		}
	           		else if ($row->idrole == 3) {
	           			$etat ='<span class="badge badge-info">Membre</span>';
	           		}
	           		else{
	           			$etat ='<span class="badge badge-danger">User</span>';
	           		}

	                $sub_array = array();  
	                $sub_array[] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="table-user-thumb" style="border-radius: 50%; width: 50px; height: 30px;" />';  
	                $sub_array[] = nl2br(substr($row->first_name, 0,50)).'...';  
	                $sub_array[] = nl2br(substr($row->last_name, 0,50)).'...'; 

	                $sub_array[] = nl2br(substr($row->sexe, 0,50)).'';

	                $sub_array[] = nl2br(substr($row->email, 0,50));

	                $sub_array[] = nl2br(substr($row->telephone, 0,50));
	                $sub_array[] = $etat;

	                
	 
	                $sub_array[] = '<button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button>'; 

	                $sub_array[] = '<button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';
	                
	                $data[] = $sub_array;  
	           }  
	           $output = array(  
	                "draw"                =>     intval($_POST["draw"]),  
	                "recordsTotal"        =>     $this->crud_model->get_all_data_users(),  
	                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_users(),  
	                "data"                =>     $data  
	           );  
	           echo json_encode($output);  
	      }

	      function operation_users(){

	          if($_FILES["user_image"]["size"] > 0)  
	          {  
	               $insert_data = array(  
	                   'first_name'     =>     $this->input->post('first_name'),  
	                   'last_name'      =>     $this->input->post("last_name"),
	                   'email'          =>     $this->input->post("email"),
	                   'telephone'      =>     $this->input->post("telephone"),
	                   'full_adresse'   =>     $this->input->post("full_adresse"),
	                   'date_nais'      =>     $this->input->post("date_nais"), 
	                   'idrole'         =>     $this->input->post("idrole"),
	                   'sexe'           =>     $this->input->post("sexe"),
	                   'facebook'       =>     $this->input->post("facebook"),
	                   'twitter'        =>     $this->input->post("twitter"),
	                   'linkedin'       =>     $this->input->post("linkedin"),
	                   'passwords'      =>     md5(123456),
	                   'idrole'         =>     $this->input->post("idrole"), 
	                   'image'          =>     $this->upload_image_users()
	                );    
	          }  
	          else  
	          {  
	                 $user_image = "icone-user.png";  
	                 $insert_data = array(  
	                   'first_name'     =>     $this->input->post('first_name'),  
	                   'last_name'      =>     $this->input->post("last_name"),
	                   'email'          =>     $this->input->post("email"),
	                   'telephone'      =>     $this->input->post("telephone"),
	                   'full_adresse'   =>     $this->input->post("full_adresse"),
	                   'date_nais'      =>     $this->input->post("date_nais"), 
	                   'idrole'         =>     $this->input->post("idrole"),
	                   'sexe'           =>     $this->input->post("sexe"),
	                   'facebook'       =>     $this->input->post("facebook"),
	                   'twitter'        =>     $this->input->post("twitter"),
	                   'linkedin'       =>     $this->input->post("linkedin"),
	                   'idrole'         =>     $this->input->post("idrole"),
	                   'image'          =>     $user_image
	                );   
	          }

	        $requete=$this->crud_model->insert_users($insert_data);
	        echo("Ajout information avec succès");
	        
	      }

	      function modification_users(){

	          if($_FILES["user_image"]["size"] > 0)  
	          {  
	               $updated_data = array(  
	                   'first_name'     =>     $this->input->post('first_name'),  
	                   'last_name'      =>     $this->input->post("last_name"),
	                   'email'          =>     $this->input->post("email"),
	                   'telephone'      =>     $this->input->post("telephone"),
	                   'full_adresse'   =>     $this->input->post("full_adresse"),
	                   'date_nais'      =>     $this->input->post("date_nais"), 
	                   'sexe'           =>     $this->input->post("sexe"),
	                   'facebook'       =>     $this->input->post("facebook"),
	                   'twitter'        =>     $this->input->post("twitter"),
	                   'linkedin'       =>     $this->input->post("linkedin"),
	                   'idrole'         =>     $this->input->post("idrole"),
	                   'image'          =>     $this->upload_image_users()
	                );    
	          }  
	          
	          else  
	          {   
	               $updated_data = array(  
	                   'first_name'     =>     $this->input->post('first_name'),  
	                   'last_name'      =>     $this->input->post("last_name"),
	                   'email'          =>     $this->input->post("email"),
	                   'telephone'      =>     $this->input->post("telephone"),
	                   'full_adresse'   =>     $this->input->post("full_adresse"),
	                   'date_nais'      =>     $this->input->post("date_nais"), 
	                   'sexe'           =>     $this->input->post("sexe"),
	                   'facebook'       =>     $this->input->post("facebook"),
	                   'twitter'        =>     $this->input->post("twitter"),
	                   'idrole'         =>     $this->input->post("idrole"),
	                   'linkedin'       =>     $this->input->post("linkedin")
	                );   
	          }
	  
	          
	          $this->crud_model->update_users($this->input->post("id"), $updated_data);

	          echo("modification avec succès");
	      }

	      function supression_users(){
	 
	          $this->crud_model->delete_users($this->input->post("id"));
	          echo("suppression avec succès");
	        
	      }

	      function fetch_single_users()  
	      {  
	           $output = array();  
	           $data = $this->crud_model->fetch_single_users($this->input->post('id'));  
	           foreach($data as $row)  
	           {  
	                $output['first_name'] = $row->first_name;  
	                $output['last_name'] = $row->last_name; 

	                $output['email'] = $row->email;
	                $output['telephone'] = $row->telephone;
	                $output['full_adresse'] = $row->full_adresse;
	                $output['biographie'] = $row->biographie;
	                $output['date_nais'] = $row->date_nais;
	                $output['sexe'] = $row->sexe;
	                $output['idrole'] = $row->idrole;

	                $output['facebook'] = $row->facebook;
	                $output['linkedin'] = $row->linkedin;
	                $output['twitter'] = $row->twitter;
	                $output['image'] = $row->image;

	                if($row->image != '')  
	                {  
	                     $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
	                }  
	                else  
	                {  
	                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	                }  

	                
	           }  
	           echo json_encode($output);  
	      }

      // fun script utilisateurs 



	    // script de role
		function fetch_role(){  

		       $fetch_data = $this->crud_model->make_datatables_role();  
		       $data = array();  
		       foreach($fetch_data as $row)  
		       {  
		            $sub_array = array();  
		           
		            $sub_array[] = nl2br(substr($row->nom, 0,50)); 
		            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
		           

		            $sub_array[] = '<button type="button" name="update" idrole="'.$row->idrole.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
		            $sub_array[] = '<button type="button" name="delete" idrole="'.$row->idrole.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
		            $data[] = $sub_array;  
		       }  
		       $output = array(  
		            "draw"                =>     intval($_POST["draw"]),  
		            "recordsTotal"        =>     $this->crud_model->get_all_data_role(),  
		            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_role(),  
		            "data"                =>     $data  
		       );  
		       echo json_encode($output);  
		  }

		  function fetch_single_role()  
		  {  
		       $output = array();  
		       $data = $this->crud_model->fetch_single_role($_POST["idrole"]);  
		       foreach($data as $row)  
		       {  
		            $output['nom']    = $row->nom;  
		            
		           
		       }  
		       echo json_encode($output);  
		  }  


		  function operation_role(){

		    $insert_data = array(  
		           'nom'            =>     $this->input->post('nom')
		    );  

		      $requete=$this->crud_model->insert_role($insert_data);
		      echo("Ajout information avec succès");
		      
		  }

		  function modification_role(){

		      $updated_data = array(  
		           'nom'            =>     $this->input->post('nom')
		    );

		      $this->crud_model->update_role($this->input->post("idrole"), $updated_data);

		      echo("modification avec succès");
		  }

		  function supression_role(){

		      $this->crud_model->delete_role($this->input->post("idrole"));
		      echo("suppression avec succès");
		    
		  }

		  // fin role

		// script de tbl_info
	    function fetch_tbl_info(){  

	           $fetch_data = $this->crud_model->make_datatables_tbl_info();  
	           $data = array();  
	           foreach($fetch_data as $row)  
	           {  
	                $sub_array = array();  
	                $sub_array[] = '<img src="'.base_url().'upload/tbl_info/'.$row->icone.'" class="img-thumbnail img-responsive" width="50" height="35" style="border-radius:50%;" />';  
	                $sub_array[] = nl2br(substr($row->nom_site, 0,10)).'...'; 
	                $sub_array[] = nl2br(substr($row->email, 0,10)).'...';  
	                $sub_array[] = nl2br(substr($row->tel1, 0,10)).'...'; 
	                // $sub_array[] = nl2br(substr($row->tel2, 0,5)).'...'; 
	                $sub_array[] = nl2br(substr($row->adresse, 0,10)).'...'; 
	                $sub_array[] = nl2br(substr($row->facebook, 0,10)).'...'; 
	                $sub_array[] = nl2br(substr($row->twitter, 0,10)).'...'; 
	                $sub_array[] = nl2br(substr($row->linkedin, 0,10)).'...'; 
	                // $sub_array[] = nl2br(substr($row->termes, 0,10)).'...'; 
	                // $sub_array[] = nl2br(substr($row->confidentialite, 0,10)).'...'; 
	                
	 
	                $sub_array[] = '<button type="button" name="update" idinfo="'.$row->idinfo.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
	                $sub_array[] = '<button type="button" name="delete" idinfo="'.$row->idinfo.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
	                $data[] = $sub_array;  
	           }  
	           $output = array(  
	                "draw"                =>     intval($_POST["draw"]),  
	                "recordsTotal"        =>     $this->crud_model->get_all_data_tbl_info(),  
	                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tbl_info(),  
	                "data"                =>     $data  
	           );  
	           echo json_encode($output);  
	      }

	      function fetch_single_tbl_info()  
	      {  
	           $output = array();  
	           $data = $this->crud_model->fetch_single_tbl_info($_POST["idinfo"]);  
	           foreach($data as $row)  
	           {  
	                $output['nom_site']     = $row->nom_site;  
	                $output['adresse']      = $row->adresse; 
	                $output['tel1']       = $row->tel1; 
	                $output['tel2']       = $row->tel2; 
	                $output['email']      = $row->email; 
	                $output['facebook']     = $row->facebook; 
	                $output['twitter']      = $row->twitter; 
	                $output['linkedin']     = $row->linkedin;

	                $output['termes']       = $row->termes;
	                $output['confidentialite']  = $row->confidentialite;

	                $output['description']   = $row->description;
	                $output['mission']       = $row->mission;
	                $output['objectif']      = $row->objectif;
	                $output['blog']      = $row->blog;


	                if($row->icone != '')  
	                {  
	                     $output['user_image'] = '<img src="'.base_url().'upload/tbl_info/'.$row->icone.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->icone.'" />';  
	                }  
	                else  
	                {  
	                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	                }  
	           }  
	           echo json_encode($output);  
	      }  


	      function operation_tbl_info(){


	          if($_FILES["user_image"]["size"] > 0)  
	          {  
	               $insert_data = array(  
	               'nom_site'             =>     $this->input->post('nom_site'),  
	               'tel1'               =>     $this->input->post("tel1"), 
	               'tel2'                 =>     $this->input->post('tel2'), 
	               'adresse'              =>     $this->input->post("adresse"), 
	               'facebook'             =>     $this->input->post("facebook"), 
	               'twitter'              =>     $this->input->post("twitter"),
	               'linkedin'             =>     $this->input->post("linkedin"), 
	               'email'              =>     $this->input->post("email"),
	               'termes'               =>     $this->input->post("termes"),
	               'confidentialite'        =>     $this->input->post("confidentialite"), 
	               'description'        =>     $this->input->post("description"), 
	               'mission'            =>     $this->input->post("mission"), 
	               'objectif'           =>     $this->input->post("objectif"),
	               'blog'               =>     $this->input->post("blog"), 
	               'icone'              =>     $this->upload_image_tbl_info()
	          );    
	          }  
	          else  
	          {  
	               $user_image = "icone-user.png";  
	               $insert_data = array(  
	               'nom_site'           =>     $this->input->post('nom_site'),  
	               'tel1'               =>     $this->input->post("tel1"), 
	               'tel2'               =>     $this->input->post('tel2'), 
	               'adresse'            =>     $this->input->post("adresse"), 
	               'facebook'           =>     $this->input->post("facebook"), 
	               'twitter'            =>     $this->input->post("twitter"),
	               'linkedin'           =>     $this->input->post("linkedin"), 
	               'email'              =>     $this->input->post("email"),
	               'termes'             =>     $this->input->post("termes"),
	               'confidentialite'    =>     $this->input->post("confidentialite"), 
	               'description'        =>     $this->input->post("description"), 
	               'mission'            =>     $this->input->post("mission"), 
	               'objectif'           =>     $this->input->post("objectif"), 
	               'blog'               =>     $this->input->post("blog"), 
	               'icone'              =>     $user_image
	          );   
	          }

	        
	         
	        $requete=$this->crud_model->insert_tbl_info($insert_data);
	        echo("Ajout information avec succès");
	        
	      }

	      function modification_tbl_info(){
	  
	          if($_FILES["user_image"]["size"] > 0)  
	          {  
	               $updated_data = array(  
	               'nom_site'             =>     $this->input->post('nom_site'),  
	               'tel1'               =>     $this->input->post("tel1"), 
	               'tel2'                 =>     $this->input->post('tel2'), 
	               'adresse'              =>     $this->input->post("adresse"), 
	               'facebook'             =>     $this->input->post("facebook"), 
	               'twitter'              =>     $this->input->post("twitter"),
	               'linkedin'             =>     $this->input->post("linkedin"), 
	               'email'              =>     $this->input->post("email"),
	               'termes'               =>     $this->input->post("termes"),
	               'confidentialite'        =>     $this->input->post("confidentialite"), 
	               'description'        =>     $this->input->post("description"), 
	               'mission'            =>     $this->input->post("mission"), 
	               'objectif'           =>     $this->input->post("objectif"),
	               'blog'               =>     $this->input->post("blog"), 
	               'icone'                  =>     $this->upload_image_tbl_info()
	          );    
	          }  
	          else  
	          {  
	               $updated_data = array(  
	               'nom_site'             =>     $this->input->post('nom_site'),  
	               'tel1'               =>     $this->input->post("tel1"), 
	               'tel2'                 =>     $this->input->post('tel2'), 
	               'adresse'              =>     $this->input->post("adresse"), 
	               'facebook'             =>     $this->input->post("facebook"), 
	               'twitter'              =>     $this->input->post("twitter"),
	               'linkedin'             =>     $this->input->post("linkedin"), 
	               'email'              =>     $this->input->post("email"),
	               'termes'               =>     $this->input->post("termes"),
	               'description'        =>     $this->input->post("description"), 
	               'mission'            =>     $this->input->post("mission"), 
	               'objectif'           =>     $this->input->post("objectif"), 
	               'blog'               =>     $this->input->post("blog"),
	               'confidentialite'        =>     $this->input->post("confidentialite")
	          );    
	          }
	  
	          $this->crud_model->update_tbl_info($this->input->post("idinfo"), $updated_data);

	          echo("modification avec succès");
	      }

	      


	      function supression_tbl_info(){
	 
	          $this->crud_model->delete_tbl_info($this->input->post("idinfo"));

	          echo("suppression avec succès");
	        
	      }

	      // fin script tbl_info


	    // script de galery produit en stock

	    function pagination_view_sortie()
		{

		  $this->load->library("pagination");
		  $config = array();
		  $config["base_url"] = "#";
		  $config["total_rows"] = $this->crud_model->count_all_view_sortie();
		  $config["per_page"] = 10;
		  $config["uri_segment"] = 3;
		  $config["use_page_numbers"] = TRUE;
		  $config["full_tag_open"] = '<ul class="nav pagination">';
		  $config["full_tag_close"] = '</ul>';
		  $config["first_tag_open"] = '<li class="page-item">';
		  $config["first_tag_close"] = '</li>';
		  $config["last_tag_open"] = '<li class="page-item">';
		  $config["last_tag_close"] = '</li>';
		  $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
		  $config["next_tag_open"] = '<li class="page-item">';
		  $config["next_tag_close"] = '</li>';
		  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
		  $config["prev_tag_open"] = "<li class='page-item'>";
		  $config["prev_tag_close"] = "</li>";
		  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
		  $config["cur_tag_close"] = "</a></li>";
		  $config["num_tag_open"] = "<li class='page-item'>";
		  $config["num_tag_close"] = "</li>";
		  $config["num_links"] = 1;
		  $this->pagination->initialize($config);
		  $page = $this->uri->segment(3);
		  $start = ($page - 1) * $config["per_page"];

		  $output = array(
		   'pagination_link'  => $this->pagination->create_links(),
		   'country_table'   => $this->crud_model->fetch_details_view_sortie($config["per_page"], $start)
		  );
		  echo json_encode($output);
		}


		function fetch_search_view_sortie()
		{
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_view_sortie($query);
		  $output .= '
	      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
	          <thead>  
	            <tr>         
	               <th width="10%">Image</th>
	               <th width="25%">Nom du produit</th>  
	               <th width="10%">Prix</th>
	               <th width="10%">Qte en stock</th>
	                 
	               <th width="10%">Qte en sortie</th>

	               <th width="25%">Mise à jour</th>

	               <th width="5%">Modifier</th> 
	               <th width="5%">Supprimer</th>  
	            </tr> 
	         </thead> 
	      ';
	      if ($data->num_rows() < 0) {
	        
	        $output .= '
	         <tr>
	          <td colspan="8">Aucune donnée n\'est à présent</td>

	         </tr>
	         ';
	      }
	      else{

	        foreach($data->result() as $row)
	        {
	         $output .= '
	         <tr>
	          <td><img src="'.base_url().'upload/product/'.$row->product_image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

	          <td>'.nl2br(substr($row->product_name, 0,10)).'...'.'</td>
	          <td>'.nl2br(substr($row->product_price, 0,10)).' $'.'</td>
	          <td>'.nl2br(substr($row->Qte, 0,10)).'...'.'</td>
	          <td>'.nl2br(substr($row->QteEntree, 0,10)).'...'.'</td>
	          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>

	          <td><button type="button" name="update" ids="'.$row->ids.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
	          <td><button type="button" name="delete" ids="'.$row->ids.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
	          

	         </tr>
	         ';
	        }
	      }
	      $output .= '
	          <tfoot>  
	                <tr>         
	                  <th width="10%">Image</th>
	                  <th width="25%">Nom du produit</th>  
	                  <th width="10%">Prix</th>
	                  <th width="10%">Qte en stock</th>
	                   
	                  <th width="10%">Qte en sortie</th>

	                  <th width="25%">Mise à jour</th>

	                  
	                  <th width="5%">Modifier</th> 
	                  <th width="5%">Supprimer</th>      
	              </tr> 
	         </tfoot>   
	            
	        </table>';
		  echo $output;
		}



        function fetch_entree(){  

           $fetch_data = $this->crud_model->make_datatables_entree();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/product/'.$row->product_image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" />';  
                $sub_array[] = nl2br(substr($row->product_name, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->product_price, 0,10)).' $';  
                $sub_array[] = nl2br(substr($row->Qte, 0,10)).'...'; 

                $sub_array[] = nl2br(substr($row->QteEntree, 0,10)).'...';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
                
                $sub_array[] = '<button type="button" name="update" ide="'.$row->ide.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" ide="'.$row->ide.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_entree(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_entree(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
        }

      function fetch_single_entree()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_entree($_POST["ide"]);  
           foreach($data as $row)  
           {  
                $output['product_name'] 		= $row->product_name;  
                $output['product_price'] 		= $row->product_price; 
                $output['product_id'] 			= $row->product_id;

                $output['Qte'] 					= $row->Qte;
                $output['QteEntree'] 			= $row->QteEntree;
                

           }  
           echo json_encode($output);  
      }  


      function operation_entree(){

      	    $insert_data = array(  
	           'product_id'      =>    $this->input->post('product_id'),  
	           'QteEntree'      =>     $this->input->post('QteEntree') 
		  	);

		  	$updated_data = array(  
	           'Qte'      =>    $this->input->post('qte_disponsible')
		  	);  
	       
	      	$requete=$this->crud_model->insert_entree($insert_data);
	      	if ($requete > 0) {
	      		$this->crud_model->update_product($this->input->post("product_id"), $updated_data);
	      	}

	      	echo("Ajout information avec succès");
	      
      }

      function modification_entree(){
  
        $updated_data = array(  
           'product_id'     =>    $this->input->post('product_id'),  
           'QteEntree'      =>     $this->input->post('QteEntree') 
	  	);

        $this->crud_model->update_entree($this->input->post("ide"), $updated_data);

        echo("modification avec succès");
      }

      function supression_entree(){
 
          $this->crud_model->delete_entree($this->input->post("ide"));

          echo("suppression avec succès");
        
      }
	  // fin de script entree product

	  // script de sortie produit en stock
       function fetch_sortie(){  

           $fetch_data = $this->crud_model->make_datatables_sortie();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/product/'.$row->product_image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" />';  
                $sub_array[] = nl2br(substr($row->product_name, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->product_price, 0,10)).' $';  
                $sub_array[] = nl2br(substr($row->Qte, 0,10)).'...'; 

                $sub_array[] = nl2br(substr($row->QteEntree, 0,10)).'...';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
                
                $sub_array[] = '<button type="button" name="update" ids="'.$row->ids.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" ids="'.$row->ids.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_sortie(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_sortie(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
       }

      function fetch_single_sortie()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_sortie($_POST["ids"]);  
           foreach($data as $row)  
           {  
                $output['product_name'] 		= $row->product_name;  
                $output['product_price'] 		= $row->product_price; 
                $output['product_id'] 			= $row->product_id;

                $output['Qte'] 					= $row->Qte;
                $output['QteEntree'] 			= $row->QteEntree;
                

           }  
           echo json_encode($output);  
      }  


      function operation_sortie(){

      	    $insert_data = array(  
	           'product_id'      =>    $this->input->post('product_id'),  
	           'QteEntree'      =>     $this->input->post('QteEntree') 
		  	);

		  	$updated_data = array(  
	           'Qte'      =>    $this->input->post('qte_disponsible')
		  	);  
	       
	      	$requete=$this->crud_model->insert_sortie($insert_data);
	      	if ($requete > 0) {
	      		$this->crud_model->update_product($this->input->post("product_id"), $updated_data);
	      	}

	      	echo("Ajout information avec succès");
	      
      }

      function modification_sortie(){
  
        $updated_data = array(  
           'product_id'     =>    $this->input->post('product_id'),  
           'QteEntree'      =>     $this->input->post('QteEntree') 
	  	);

        $this->crud_model->update_sortie($this->input->post("ids"), $updated_data);

        echo("modification avec succès");
      }

      function supression_sortie(){
 
          $this->crud_model->delete_sortie($this->input->post("ids"));
          echo("suppression avec succès");
        
      }
	  // fin de script sortie product









      function upload_image_users()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/photo/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

       function upload_rapport()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/rapport/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

      function upload_image_tbl_info()  
  	  {  
  	       if(isset($_FILES["user_image"]))  
  	       {  
  	            $extension = explode('.', $_FILES['user_image']['name']);  
  	            $new_name = rand() . '.' . $extension[1];  
  	            $destination = './upload/tbl_info/' . $new_name;  
  	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
  	            return $new_name;  
  	       }  
  	  }

  	// script pour formulaire de contact 
    // ajout des contacts
    function fetch_contact(){  

       $fetch_data = $this->crud_model->make_datatables_contact();  
       $data = array();  
       foreach($fetch_data as $row)  
       {  

          if ($row->fichier != '') {
            $etat = '<a href="'.base_url().'upload/contact/'.$row->fichier.'" class="badge badge-white"><i class="fa fa-file"></i></a>';
          }
          else{
            $etat = '';
          }

            $sub_array = array();

            $sub_array[] = '
            <input type="checkbox" class="delete_checkbox" value="'.$row->email.'" />
            ';  
              
            $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
            $sub_array[] = nl2br(substr($row->sujet, 0,20)).'...'; 
            $sub_array[] = $row->email; 
            $sub_array[] = nl2br(substr($row->message, 0,50)).'...';
            $sub_array[] = substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23);

            $sub_array[] = $etat; 

            $sub_array[] = '<button type="button" name="delete" idcontact="'.$row->id.'" class="btn btn-dark btn-circle btn-sm update"><i class="fa fa-comment-o"></i></button>'; 

            $sub_array[] = '<button type="button" name="delete" idcontact="'.$row->id.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
            $data[] = $sub_array;  
       }  
       $output = array(  
            "draw"                =>     intval($_POST["draw"]),  
            "recordsTotal"        =>     $this->crud_model->get_all_data_contact(),  
            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_contact(),  
            "data"                =>     $data  
       );  
       echo json_encode($output);  
  }

  function fetch_single_contact()  
  {  
       $output = array();  
       $data = $this->crud_model->fetch_single_contact($this->input->post('idcontact'));  
       foreach($data as $row)  
       {  
            $output['nom'] = $row->nom;  
            $output['message'] = $row->message;
            $output['email'] = $row->email;
            $output['sujet'] = $row->sujet; 

       }  
       echo json_encode($output);  
  } 

  function operation_contact(){

    $insert_data = array(  
         'nom'          =>     $this->input->post('name'),  
         'sujet'       =>     $this->input->post("subject"),
         'email'         =>     $this->input->post("email"),  
         'message'       =>     $this->input->post("message")  
         
  );  
     
    $requete=$this->crud_model->insert_contact($insert_data);
    echo("Ajout message  avec succès");
    
  }

  
  function supression_contact()
  {

      $this->crud_model->delete_contact($this->input->post("idcontact"));

      echo("suppression avec succès");
    
  }

    public function get_image(){
		$icone = $this->crud_model->get_logo_du_site();
		$iconev = base_url()."upload/tbl_info/".$icone;
		return $iconev;
	}

    function infomation_par_mail()
    {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {


           		$website = $this->email_sites;

                $to =$id[$count];
                $subject = $this->input->post('sujet');
                $message2 = $this->input->post('message');
                 

                $headers= "MIME Version 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: no-reply@etskase.com" . "\r\n" ."Reply-to: sumailiroger681@gmail.com"."\r\n"."X-Mailer: PHP/".phpversion();


                $info = "<div class='text-center' style='
	                	text-align: center !important;
		                '>
		                	<h1 class='h4 text-gray-900 mb-4' style='
			                	color: #3a3b45 !important;
			                	margin-bottom: 1.5rem !important;
		                	'>Information personnelle</h1>
							".$subject."
	                </div>"
                ;

                $message2 = "<div class='col-md-12' style='
					          position: relative;
							  display: flex;
							  flex-direction: column;
							  min-width: 0;
							  word-wrap: break-word;
							  background-color: #fff;
							  background-clip: border-box;
							  border: 1px solid #e3e6f0;
							  border-radius: 0.35rem;
							  position: relative;
							  width: 100%;
							  padding-right: 0.75rem;
							  padding-left: 0.75rem;
                '>
                <div class='card-header' style='
                	  flex: 1 1 auto;
					  min-height: 1px;
					  padding: 1.25rem;
					  border-radius: calc(0.35rem - 1px) calc(0.35rem - 1px) 0 0;
                '>
                		".$info."
                </div>
                <div class='card-body' style='flex: 1 1 auto;
				  min-height: 1px;
				  padding: 1.25rem;
				  '>
               			 <p>
	               			 <img src='".$this->get_image()."' style='
	               			 	float: left; margin-right: 10px;
	               			 	padding: .25rem;
							    background-color: #fff;
							    border: 1px solid #dddfeb;
							    border-radius: .35rem;
							    max-width: 100%;
							    height: auto;
							    vertical-align: middle;
    							border-style: none;
    						'
	               			 > 
	               			 ".$this->input->post('message')."
               			 </p>
               
                </div>
                </div>
                ";

                mail($to,$subject,$message2,$headers);


           }

           if(mail($to,$subject,$message2,$headers) > 0){
                echo("message envoyé avec succès");
           } 
           else {
                echo("échec lors de l'envoie de message!!!!!!!!!!!!");
           }


        }
    }
     // fin contact

     // script de article
	 function fetch_article(){  

	       $fetch_data = $this->crud_model->make_datatables_article();  
	       $data = array();  
	       $etat = '';
	       foreach($fetch_data as $row)  
	       {  
	            $sub_array = array(); 

	            if ($row->type=='texte') {
	            	$etat = '
	            <div class="user-avatar bg-dim-success d-none d-sm-flex text-center">
	                <span><i class="fa fa-file text-success" ></i></span>
	            </div>
	             ';
	            }
	            elseif ($row->type=='video'){
	            	$etat = '
		                <div class="user-avatar bg-dim-danger d-none d-sm-flex">
		                    <span><i class="fa fa-video-camera text-success"></i></span>
		                </div>
		            ';
	            }
	            else{

	            	$etat = '';
	            }


	            $sub_array[] = $etat;
	           
	            // $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
	            $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
	            $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

	            $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

	            $sub_array[] = nl2br(substr($row->type, 0,15)).'';

	            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

	           
	            $sub_array[] = '<button type="button" name="update" idart="'.$row->idart.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button>'; 

	            $sub_array[] = '<button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';
	            
	            $data[] = $sub_array;  
	       }  
	       $output = array(  
	            "draw"                =>     intval($_POST["draw"]),  
	            "recordsTotal"        =>     $this->crud_model->get_all_data_article(),  
	            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_article(),  
	            "data"                =>     $data  
	       );  
	       echo json_encode($output);  
	  }


	  function fetch_article_pub(){  

	       $fetch_data = $this->crud_model->make_datatables_article();  
	       $data = array();  
	       $etat = '';
	       foreach($fetch_data as $row)  
	       {  
	            $sub_array = array(); 

	            if ($row->type=='texte') {
	              $etat = '
	            <div class="user-avatar bg-dim-success d-none d-sm-flex">
	                <span><i class="fa fa-file text-success" ></i></span>
	            </div>
	             ';
	            }
	            elseif ($row->type=='video'){
	              $etat = '
	                <div class="user-avatar bg-dim-danger d-none d-sm-flex">
	                    <span><i class="fa fa-video-camera text-success"></i></span>
	                </div>
	            ';
	            }
	            else{

	              $etat = '';
	            }


	            $sub_array[] = '<input type="checkbox" class="delete_checkbox" value="'.$row->idart.'" id="delete_checkbox" />'; 

	            // $sub_array[] = $etat;
	           
	            $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
	            $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
	            $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

	            $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

	            $sub_array[] = nl2br(substr($row->type, 0,15)).'';

	            // $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

	           
	            $sub_array[] = '<button type="button" name="update" idart="'.$row->idart.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button>'; 

	            $sub_array[] = '<button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';
	            
	            $data[] = $sub_array;  
	       }  
	       $output = array(  
	            "draw"                =>     intval($_POST["draw"]),  
	            "recordsTotal"        =>     $this->crud_model->get_all_data_article(),  
	            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_article(),  
	            "data"                =>     $data  
	       );  
	       echo json_encode($output);  
	  }



	  function operation_article(){

	      if($_FILES["user_image"]["size"] > 0)  
	      {  
	           $insert_data = array(  
	               'nom'     	      =>     $this->input->post('nom'),  
	               'description'    =>     htmlspecialchars($this->input->post("description")),
	               'lien'           =>     $this->input->post("lien"),
	               'idcat'     	    =>     $this->input->post('idcat'), 
	               'type'     	    =>     $this->input->post('type'), 
	               'image'          =>     $this->upload_image_article()
	            );    
	      }  
	      else  
	      {  
	             $user_image = "icone-user.png";  
	             $insert_data = array(  
	               'nom'     	      =>     $this->input->post('nom'),  
	               'description'    =>     htmlspecialchars($this->input->post("description")),
	               'lien'           =>     $this->input->post("lien"),
	               'idcat'     	    =>     $this->input->post('idcat'), 
	               'type'     	    =>     $this->input->post('type'),
	               'image'          =>     $user_image
	            );   
	      }

	    $requete=$this->crud_model->insert_article($insert_data);
	    echo("Ajout information avec succès");
	    
	  }

	  function modification_article(){

	      if($_FILES["user_image"]["size"] > 0)  
	      {  
	           $updated_data = array(  
	               'nom'     	      =>     $this->input->post('nom'),  
	               'description'    =>     htmlspecialchars($this->input->post("description")),
	               'lien'           =>     $this->input->post("lien"),
	               'idcat'     	    =>     $this->input->post('idcat'), 
	               'type'     	    =>     $this->input->post('type'), 
	               'image'          =>     $this->upload_image_article()
	            );    
	      }  
	      
	      else  
	      {   
	           $updated_data = array(  
	               'nom'     	    =>     $this->input->post('nom'),  
	               'description'    =>     htmlspecialchars($this->input->post("description")),
	               'lien'           =>     $this->input->post("lien"),
	               'idcat'     	    =>     $this->input->post('idcat'), 
	               'type'     	    =>     $this->input->post('type')
	            );   
	      }

	      
	      $this->crud_model->update_article($this->input->post("idart"), $updated_data);

	      echo("modification avec succès");
	  }

	  function supression_article(){

	      $this->crud_model->delete_article($this->input->post("idart"));
	      echo("suppression avec succès");
	    
	  }

	  function fetch_single_article()  
	  {  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_article($this->input->post('idart'));  
	       foreach($data as $row)  
	       {  
	            $output['nom'] = $row->nom;  
	            $output['description'] = $row->description; 

	            $output['lien'] 	= $row->lien;
	            $output['type'] 	= $row->type;
	            $output['idcat'] 	= $row->idcat;
	            
	            $output['image'] 	= $row->image;
	            $output['text_description']   ='
	              <textarea class="form-control textarea" name="description" id="description" placeholder="Parler un peu sur la description de l\'article">
	                  '.$row->description.'
	              </textarea>
	            ';


	            if($row->image != '')  
	            {  
	                 $output['user_image'] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
	            }  
	            else  
	            {  
	                 $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	            }  

	            
	       }  
	       echo json_encode($output);  
	  }

	  function upload_image_article()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/article/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

	// fin de sript article 

    function pagination_view_article($param1='')
	{
	  $limit = $param1;
	  if ($limit !='') {
	  	$output = $this->crud_model->fetch_details_view_articles_limit($limit);
	  }
	  else{
	  	$output = $this->crud_model->fetch_details_view_articles();
	  }
	  
	  echo($output);
	}

	function fetch_search_view_article()
	{
	  $output = '';
	  $query = '';
	  $etat = '';
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_search_view_article($query);
	 $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead class="tb-member-head thead-light">  
              <tr> 
                  <th width="10%">Avatar</th> 
                  <th width="20%">Nom de la vidéo</th>  
                  <th width="20%">Description </th> 
                  <th width="10%">Catégorie </th> 
                  <th width="10%">Type </th>  
                  <th width="20%">Mise à jour</th>
                   
                  
                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th>  
              </tr>  
         </thead> 

         <tbody>
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{

        foreach($data->result() as $row)
        {

            if ($row->type=='texte') {
              $etat = '
                <div class="user-avatar bg-dim-success d-none d-sm-flex text-center">
                    <span><i class="fa fa-file text-success" ></i></span>
                </div>
               ';
            }
            elseif ($row->type=='video'){
              $etat = '
                  <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                      <span><i class="fa fa-video-camera text-success"></i></span>
                  </div>
              ';
            }
            else{

              $etat = '';
            }


         $output .= '
         <tr>
          
          <td><img src="'.base_url().'upload/article/'.$row->image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

          <td>'.nl2br(substr($row->nom, 0,20)).'...'.'</td>
          <td>'.nl2br(substr($row->description, 0,20)).' ....'.'</td>
          <td>'.nl2br(substr($row->nom_cat, 0,20)).' ...'.'</td>
          <td>'.$etat.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
          
          <td><button type="button" name="update" idart="'.$row->idart.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
          <td><button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
          

         </tr>
         ';
        }
      }
      $output .= '
          </tbody>

         <tfoot>  
              <tr>  
                  <th width="10%">Avatar</th> 
                  <th width="20%">Nom de la vidéo</th>  
                  <th width="20%">Description </th> 
                  <th width="10%">Catégorie </th> 
                  <th width="10%">Type </th>  
                  <th width="20%">Mise à jour</th>
                   
                  
                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th> 
              </tr>  
         </tfoot>   
          
      </table>';

	    echo($output);
	  
	}

	/**
   * commentaires des articles de publications
   ===============================================
   *===============================================
   *

   */

   	function operation_commentaire(){

	    $insert_data = array(  
           'etape1'     	=>     htmlspecialchars($this->input->post('etape1')),  
           'etape2'    		=>     htmlspecialchars($this->input->post("etape2")),
           'idart'          =>     $this->input->post("idart")
        ); 

	    $requete=$this->crud_model->insert_commentaire($insert_data);
	    echo("Ajout information avec succès");
	    
	  }

	  function modification_commentaire(){

	    $updated_data = array(  
            'etape1'     	=>     htmlspecialchars($this->input->post('etape1')),  
   			'etape2'    	=>     htmlspecialchars($this->input->post("etape2")),
   			'idart'         =>     $this->input->post("idart")
        );

	    $this->crud_model->update_commentaire($this->input->post("idcomment"), $updated_data);

	    echo("modification avec succès");
	  }

	  function supression_commentaire(){

	      $this->crud_model->delete_commentaire($this->input->post("idcomment"));
	      echo("suppression avec succès");
	    
	  }

	  function fetch_single_commentaire()  
	  {  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_commentaire($this->input->post('idcomment'));  
	       foreach($data as $row)  
	       {  
	            $output['etape1'] = $row->etape1;  
	            $output['etape2'] = $row->etape2; 
	            $output['idart']  = $row->idart;

	            $output['nom']  = $row->nom;

	            $output['description']  = substr(nl2br(html_entity_decode($row->description)), 100) .'...';

	            $output['text_description']   ='
	              <textarea class="form-control textarea" name="etape1" id="etape1" >
	                  '.$row->etape1.'
	              </textarea>
	            ';

	            $output['text_description2']   ='
	              <textarea class="form-control textarea" name="etape2" id="etape2">
	                  '.$row->etape2.'
	              </textarea>
	            ';
	            

	            $output['image'] 	= $row->image;
	            
	            if($row->image != '')  
	            {  
	                 $output['user_image'] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
	            }  
	            else  
	            {  
	                 $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	            }  
	            
	       }  
	       echo json_encode($output);  
	  }

	function pagination_view_commentaire($param1='')
	{
	  $limit = $param1;
	  if ($limit !='') {
	  	$output = $this->crud_model->fetch_details_view_commentaire_limit($limit);
	  }
	  else{
	  	$output = $this->crud_model->fetch_details_view_commentaire();
	  }
	  
	  echo($output);
	}

	function fetch_search_view_commentaire()
	{
	  $output = '';
	  $query = '';
	  $etat = '';
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_search_view_commentaire($query);
	 $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead class="tb-member-head thead-light">  
              <tr> 
                  <th width="10%">Avatar</th> 
                  <th width="20%">Nom de la vidéo</th>  
                  <th width="20%">Description </th> 
                  <th width="10%">Catégorie </th> 
                  <th width="10%">Type </th>  
                  <th width="20%">Mise à jour</th>
                   
                  
                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th>  
              </tr>  
         </thead> 

         <tbody>
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{

        foreach($data->result() as $row)
        {

            if ($row->type=='texte') {
              $etat = '
                <div class="user-avatar bg-dim-success d-none d-sm-flex text-center">
                    <span><i class="fa fa-file text-success" ></i></span>
                </div>
               ';
            }
            elseif ($row->type=='video'){
              $etat = '
                  <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                      <span><i class="fa fa-video-camera text-success"></i></span>
                  </div>
              ';
            }
            else{

              $etat = '';
            }


         $output .= '
         <tr>
          
          <td><img src="'.base_url().'upload/article/'.$row->image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

          <td>'.nl2br(substr($row->nom, 0,20)).'...'.'</td>
          <td>'.nl2br(substr($row->description, 0,20)).' ....'.'</td>
          <td>'.nl2br(substr($row->nomcat, 0,20)).' ...'.'</td>
          <td>'.$etat.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
          
          <td><button type="button" name="update" idcomment="'.$row->idcomment.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
          <td><button type="button" name="delete" idcomment="'.$row->idcomment.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
          

         </tr>
         ';
        }
      }
      $output .= '
          </tbody>

         <tfoot>  
              <tr>  
                  <th width="10%">Avatar</th> 
                  <th width="20%">Nom de la vidéo</th>  
                  <th width="20%">Description </th> 
                  <th width="10%">Catégorie </th> 
                  <th width="10%">Type </th>  
                  <th width="20%">Mise à jour</th>
                   
                  
                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th> 
              </tr>  
         </tfoot>   
          
      </table>';

	    echo($output);
	  
	}

	/*

	*upload galery
	*===============================
	*===============================

	*/

	function upload_galery2()
    {
      sleep(3);
      if($_FILES["files"]["name"] != '')
      {
       $output = '';
       $config["upload_path"] = './upload/galery/';
       $config["allowed_types"] = 'gif|jpg|png|webp';
       $this->load->library('upload', $config);
       $this->upload->initialize($config);
       for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
       {
        $extension = explode('.', $_FILES["files"]["name"][$count]);  
        $new_name = rand() . '.' . $extension[1];

        $_FILES["file"]["name"] = $new_name;
        $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
        $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
        $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
        $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];

        // echo($_FILES["files"]["name"][$count]).'<br>';
        // echo($new_name).PHP_EOL;


        if($this->upload->do_upload('file'))
        {
         $data = $this->upload->data();

         $insert_data = array(  
             'image'         =>     $new_name              
         ); 
         $requete=$this->crud_model->insert_galery2($insert_data);

         $output .= '
         <div class="col-md-3" align="center" style="margin-bottom:24px;">
          <img src="'.base_url().'upload/galery/'.$data["file_name"].'" class="img-thumbnail img-responsive" style="height: 200px;" />
            <br />
            <input type="checkbox" name="images[]" class="select" value="upload/galery/'.$data["file_name"].'" />
         </div>
         ';
        }
       }
       echo $output;   
      }
    }


     // pagination contact 
	function pagination_galery_member2()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_galery_personnel();
	  $config["per_page"] = 3;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_details_pagination_galery2($config["per_page"], $start)
	  );
	  echo json_encode($output);
	  }

	  function supression_photo_galery_personnele(){

	    $this->crud_model->delete_photo_galery_personnele($this->input->post("idg"));
	    echo("suppression avec succès");

	  }

	  function modification_galery_entrep_personnele(){
  
          $updated_data = array(  
                 'url'            =>     $this->input->post('url')
          );
  
          $this->crud_model->update_galery_entrep_personnele($this->input->post("idg"), $updated_data);
          echo("modification avec succès");
      }

    function fetch_single_galery_entrep_personnele()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_galery_entreprise_personnele($_POST["idg"]);  
         foreach($data as $row)  
         {  
              $output['url']    = $row->url;  
              
             
         }  
         echo json_encode($output);  
    }

    function download_photo_galery()
   {
      if($this->input->post('images'))
      {
        $this->load->library('zip');
        $images = $this->input->post('images');
        foreach($images as $image)
        {
          $this->zip->read_file($image);
          // echo($image);
        }
        $this->zip->download(''.time().'.zip');
      }
   }


    function upload_galery()
	{
		  sleep(3);
		  if($_FILES["files"]["name"] != '')
		  {
		   $output = '';
		   $config["upload_path"] = './upload/galery/';
		   $config["allowed_types"] = 'gif|jpg|png|webp';
		   $this->load->library('upload', $config);
		   $this->upload->initialize($config);
		   for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
		   {
		   	$extension = explode('.', $_FILES["files"]["name"][$count]);  
	      $new_name = rand() . '.' . $extension[1];

		    $_FILES["file"]["name"] = $new_name;
		    $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
		    $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
		    $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
		    $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];

		    // echo($_FILES["files"]["name"][$count]).'<br>';
	      // echo($new_name).PHP_EOL;


		    if($this->upload->do_upload('file'))
		    {
		     $data = $this->upload->data();

		     $insert_data = array(  
	           'image'         =>     $new_name              
			   ); 
		     $requete=$this->crud_model->insert_galery($insert_data);

		     $output .= '
		     <div class="col-md-4" align="center" style="margin-bottom:24px;">
		      <img src="'.base_url().'upload/galery/'.$data["file_name"].'" class="img-thumbnail img-responsive" style="height: 200px;" />
		      	<br />
						<input type="checkbox" name="images[]" class="select" value="upload/galery/'.$data["file_name"].'" />
		     </div>
		     ';
		    }
		   }
		   echo $output;   
		  }
	 }


	function supression_photo_galery(){

	  $this->crud_model->delete_photo_galery($this->input->post("idg"));
	  echo("suppression avec succès");

	}


	function pagination_galery_member()
	{

		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->crud_model->fetch_pagination_galery();
		$config["per_page"] = 3;
		$config["uri_segment"] = 3;
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_tag_open"] = '<li class="page-item">';
		$config["first_tag_close"] = '</li>';
		$config["last_tag_open"] = '<li class="page-item">';
		$config["last_tag_close"] = '</li>';
		$config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
		$config["next_tag_open"] = '<li class="page-item">';
		$config["next_tag_close"] = '</li>';
		$config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
		$config["prev_tag_open"] = "<li class='page-item'>";
		$config["prev_tag_close"] = "</li>";
		$config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
		$config["cur_tag_close"] = "</a></li>";
		$config["num_tag_open"] = "<li class='page-item'>";
		$config["num_tag_close"] = "</li>";
		$config["num_links"] = 1;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$start = ($page - 1) * $config["per_page"];

		$output = array(
		 'pagination_link' => $this->pagination->create_links(),
		 'country_table'   => $this->crud_model->fetch_details_pagination_galery($config["per_page"], $start)
		);
		echo json_encode($output);
	}
	  // fin pagination

	 // script de video
    function fetch_video(){  

         $fetch_data = $this->crud_model->make_datatables_video();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  
              $sub_array[] = '<img src="'.base_url().'upload/video/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
              $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
              $sub_array[] = nl2br(substr($row->description, 0,20)).'...'; 

              $sub_array[] = nl2br(substr($row->lien, 0,20)).'';

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

             
              $sub_array[] = '<button type="button" name="update" idv="'.$row->idv.'" class="btn btn-success btn-sm btn-circle update"><i class="fa fa-edit"></i></button>'; 

              $sub_array[] = '<button type="button" name="delete" idv="'.$row->idv.'" class="btn btn-danger btn-sm btn-circle delete"><i class="fa fa-trash"></i></button>';
              
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_video(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_video(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function operation_video(){

    	$data['nom'] 			= $this->input->post('nom'); 
    	$data['description'] 	= $this->input->post('description'); 
    	$data['code'] = rand();
    	
        if($_FILES["user_image"]["size"] > 0)  
        {  
        	$data['image'] = $this->upload_image_video();
              
        }  
        else  
        {  
            $data['image'] = $user_image = "icone-user.png";  
               
        }

        if($_FILES["user_image2"]["size"] > 0)  
        {  
        	
        	$data['lien'] = $this->upload_image_video2();
              
        }  
        

      	$requete=$this->crud_model->insert_video($data);
      	echo("Ajout information avec succès");
      
    }

    function modification_video(){

        $data['nom'] 			= $this->input->post('nom'); 
    	$data['description'] 	= $this->input->post('description'); 
    	
        if($_FILES["user_image"]["size"] > 0)  
        {  
        	$data['image'] = $this->upload_image_video();
              
        }  

        if($_FILES["user_image2"]["size"] > 0)  
        {  
        	
        	$data['lien'] = $this->upload_image_video2();
              
        }  

        
        $this->crud_model->update_video($this->input->post("idv"), $data);

        echo("modification avec succès");
    }

    function supression_video(){

        $this->crud_model->delete_video($this->input->post("idv"));
        echo("suppression avec succès");
      
    }

    function fetch_single_video()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_video($this->input->post('idv'));  
         foreach($data as $row)  
         {  
              $output['nom'] = $row->nom;  
              $output['description'] = $row->description; 

              $output['lien'] = $row->lien;
              
              $output['image'] = $row->image;

              $output['text_description']   ='
              	  <label><i class="fa fa-edit"></i> La description  de la video</label>
	              <textarea class="form-control textarea" name="description" id="description" placeholder="Parler un peu sur la video">
	                  '.$row->description.'
	              </textarea>
	          ';


              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/video/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  

              
         }  
         echo json_encode($output);  
    }

    function upload_image_video()  
	{  
	       if(isset($_FILES["user_image"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/video/' . $new_name;  
	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	}

	 function upload_image_video2()  
	{  
	       if(isset($_FILES["user_image2"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image2']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/video/' . $new_name;  
	            move_uploaded_file($_FILES['user_image2']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	}

  // fin de sript video 
	// script de  tinfo_user
    function fetch_tinfo_user(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_user();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             
              $sub_array[] = nl2br(substr($row->first_name.''.$row->last_name, 0,22)).' ...';
              $sub_array[] = nl2br(substr($row->email, 0,20)).' ...';

              $sub_array[] = nl2br(substr($row->poste, 0,20)).' ...';
              $sub_array[] = nl2br(substr($row->telephone, 0,15));

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_user="'.$row->idtinfo_user.'" class="btn btn-success btn-sm btn-circle update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_user="'.$row->idtinfo_user.'" class="btn btn-danger btn-sm btn-circle delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_user(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_user(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_user()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_user($_POST["idtinfo_user"]);  
         foreach($data as $row)  
         {  
              $output['first_name']    = $row->first_name; 
              $output['last_name']    = $row->last_name;
              $output['email']    = $row->email;
              $output['telephone']    = $row->telephone;
              $output['sexe']    = $row->sexe;
              $output['facebook']    = $row->facebook;
              $output['twitter']    = $row->twitter;
              $output['linkedin']    = $row->linkedin;
              $output['poste']    = $row->poste;


              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_user(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $insert_data = array(  
               'first_name'     =>     $this->input->post('first_name'),
               'last_name'      =>     $this->input->post('last_name'),
               'email'          =>     $this->input->post('email'),
               'sexe'           =>     $this->input->post('sexe'),
               'telephone'      =>     $this->input->post('telephone'),
               'poste'          =>     $this->input->post('poste'),
               'facebook'       =>     $this->input->post('facebook'),
               'twitter'        =>     $this->input->post('twitter'),
               'linkedin'       =>     $this->input->post('linkedin'),
               'image'          =>     $this->upload_image_users()
            );    
      }  
      else  
      {  
             $user_image = "icone-user.png";   
             $insert_data = array(  
                 'first_name'     =>     $this->input->post('first_name'),
                 'last_name'      =>     $this->input->post('last_name'),
                 'email'          =>     $this->input->post('email'),
                 'sexe'           =>     $this->input->post('sexe'),
                 'telephone'      =>     $this->input->post('telephone'),
                 'poste'          =>     $this->input->post('poste'),
                 'facebook'       =>     $this->input->post('facebook'),
                 'twitter'        =>     $this->input->post('twitter'),
                 'linkedin'       =>     $this->input->post('linkedin'),
                 'image'          =>     $user_image
              );  
      }

        

      $requete=$this->crud_model->insert_tinfo_user($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_user(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $updated_data = array(  
               'first_name'     =>     $this->input->post('first_name'),
               'last_name'      =>     $this->input->post('last_name'),
               'email'          =>     $this->input->post('email'),
               'sexe'           =>     $this->input->post('sexe'),
               'telephone'      =>     $this->input->post('telephone'),
               'poste'          =>     $this->input->post('poste'),
               'facebook'       =>     $this->input->post('facebook'),
               'twitter'        =>     $this->input->post('twitter'),
               'linkedin'       =>     $this->input->post('linkedin'),
               'image'            =>     $this->upload_image_users()
            );    
      }  
      else  
      {    
             $updated_data = array(  
                 'first_name'     =>     $this->input->post('first_name'),
                 'last_name'      =>     $this->input->post('last_name'),
                 'email'          =>     $this->input->post('email'),
                 'sexe'           =>     $this->input->post('sexe'),
                 'telephone'      =>     $this->input->post('telephone'),
                 'poste'          =>     $this->input->post('poste'),
                 'facebook'       =>     $this->input->post('facebook'),
                 'twitter'        =>     $this->input->post('twitter'),
                 'linkedin'       =>     $this->input->post('linkedin')
            );  
      }

      $this->crud_model->update_tinfo_user($this->input->post("idtinfo_user"), $updated_data);

      echo("modification avec succès");

    }

    function supression_tinfo_user(){

        $this->crud_model->delete_tinfo_user($this->input->post("idtinfo_user"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_user

     /* script pour lanfing pag commence
    ================================
    tout le landing page 

    */

    // script de  tinfo_personnel
    function fetch_tinfo_personnel(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_personnel();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  
             
              $sub_array[] = nl2br(substr($row->titre, 0,50)).' ...';
              $sub_array[] = nl2br(substr($row->description, 0,50)).' ...';
              $sub_array[] = '<i class="fa '.$row->icone.'"></i> '; 
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_personnel="'.$row->idtinfo_personnel.'" class="btn btn-success btn-sm btn-circle update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_personnel="'.$row->idtinfo_personnel.'" class="btn btn-danger btn-sm btn-circle delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_personnel(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_personnel(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_personnel()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_personnel($_POST["idtinfo_personnel"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['description']    = $row->description;
              $output['icone']    = $row->icone; 
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_personnel(){

        $insert_data = array(  
           'titre'            =>     $this->input->post('titre'),
           'description'            =>     $this->input->post('description'),
           'icone'            =>     $this->input->post('icone')
    );  

      $requete=$this->crud_model->insert_tinfo_personnel($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_personnel(){

        $updated_data = array(  
            'titre'            =>     $this->input->post('titre'),
            'description'      =>     $this->input->post('description'),
            'icone'            =>     $this->input->post('icone')
        );

        $this->crud_model->update_tinfo_personnel($this->input->post("idtinfo_personnel"), $updated_data);

        echo("modification avec succès");
    }

    function supression_tinfo_personnel(){

        $this->crud_model->delete_tinfo_personnel($this->input->post("idtinfo_personnel"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_personnel

    // script de  tinfo_service
    function fetch_tinfo_service(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_service();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = '<img src="'.base_url().'upload/service/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             
              $sub_array[] = nl2br(substr($row->titre, 0,50)).' ...';
              $sub_array[] = nl2br(substr($row->description, 0,50)).' ...';

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_service="'.$row->idtinfo_service.'" class="btn btn-success btn-sm btn-circle update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_service="'.$row->idtinfo_service.'" class="btn btn-danger btn-sm btn-circle delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_service(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_service(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_service()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_service($_POST["idtinfo_service"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['description']    = $row->description;

              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/service/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_service(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $insert_data = array(  
               'titre'            =>     $this->input->post('titre'),
               'description'      =>     $this->input->post('description'),
               'image'            =>     $this->upload_image_service()
            );    
      }  
      else  
      {  
             $user_image = "icone-user.jpg";  
             $insert_data = array(  
                   'titre'            =>     $this->input->post('titre'),
                   'description'      =>     $this->input->post('description'),
                   'image'            =>     $user_image
            );  
      }

        

      $requete=$this->crud_model->insert_tinfo_service($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_service(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $updated_data = array(  
               'titre'            =>     $this->input->post('titre'),
               'description'      =>     $this->input->post('description'),
               'image'            =>     $this->upload_image_service()
            );    
      }  
      else  
      {    
             $updated_data = array(  
                   'titre'            =>     $this->input->post('titre'),
                   'description'      =>     $this->input->post('description')
            );  
      }

      $this->crud_model->update_tinfo_service($this->input->post("idtinfo_service"), $updated_data);

      echo("modification avec succès");

    }

    function supression_tinfo_service(){

        $this->crud_model->delete_tinfo_service($this->input->post("idtinfo_service"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_service

    function operation_news($param1='',$param2='',$param3=''){

      
      	  if($param1 =="ajout")  
          {  
                $insert_data = array(  
		           'apropos'      	=>     $this->input->post('apropos'),
		           'don'      		=>     $this->input->post('don'), 
		           'structure'      =>     $this->input->post('structure'),
		           'apropos_text'   =>     $this->input->post('apropos_text'),  
		           'financement'    =>     $this->input->post('financement'), 
		           'carierre'      	=>     $this->input->post('carierre'), 
		           'partenariat'    =>     $this->input->post('partenariat')
			  	); 

			  	$requete=$this->crud_model->insert_news($insert_data);
	      		$this->session->set_flashdata('message',"Enregistrement avec succès!!!");
	            redirect(base_url() . 'admin/add_news/', 'refresh');
          }  

          if($param1 =="modification")  
          {  
                $update_data = array(  
		           'apropos'      	=>     $this->input->post('apropos'), 
		           'don'      		=>     $this->input->post('don'), 
		           'structure'      =>     $this->input->post('structure'),
		           'apropos_text'   =>     $this->input->post('apropos_text'), 
		           'financement'    =>     $this->input->post('financement'), 
		           'carierre'      	=>     $this->input->post('carierre'), 
		           'partenariat'    =>     $this->input->post('partenariat')
			  	); 

			  	$requete=$this->crud_model->update_news($param2, $update_data);
	      		$this->session->set_flashdata('message',"Modification avec succès!!!");
	            redirect(base_url() . 'admin/operation_news/detail/'.$param2, 'refresh');
          }  

          if($param1 =="suppression")  
          {  
                

			  	$requete=$this->crud_model->delete_news($param2);
	      		$this->session->set_flashdata('message',"Suppression avec succès!!!");
	            redirect(base_url() . 'admin/news/', 'refresh');
          } 

          if($param1 =="detail")  
          {  
                
			  	$data['variable'] = $this->crud_model->fetch_news($param2);
	            $data['title']="Détail de la configuration";
			    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			    $data['users'] = $this->crud_model->fetch_connected($this->connected);
			    $this->load->view('backend/admin/edit_news', $data);
          }  
          else  
          {  
               redirect(base_url() . 'admin/news/', 'refresh');
          }
   
    }

    // script pour les rapports
    function operation_rapport($param1='',$param2='',$param3=''){

      
      	  if($param1 =="ajout")  
          {  

          		 if($_FILES["user_image"]["size"] > 0)  
			      {  
			            $insert_data = array(  
				           'titre'      	=>     $this->input->post('titre'),  
				           'description'    =>     $this->input->post('description'), 
				           'annee'      	=>     $this->input->post('annee'), 
				           'code'    		=>     rand(),
				           'fichier'    	=>     $this->upload_rapport()
					  	);  
			      }  
			      else  
			      {  
			            $insert_data = array(  
			               'titre'      	=>     $this->input->post('titre'),  
				           'description'    =>     $this->input->post('description'), 
				            'code'    		=>     rand(),
				           'annee'      	=>     $this->input->post('annee')
			            );   
			      }

               

			  	$requete=$this->crud_model->insert_rapport($insert_data);
	      		$this->session->set_flashdata('message',"Enregistrement avec succès!!!");
	            redirect(base_url() . 'admin/add_rapport/', 'refresh');
          }  

          if($param1 =="modification")  
          {  
                 if($_FILES["user_image"]["size"] > 0)  
			      {  
			            $update_data = array(  
				           'titre'      	=>     $this->input->post('titre'),  
				           'description'    =>     $this->input->post('description'), 
				           'annee'      	=>     $this->input->post('annee'), 
				           'fichier'    	=>     $this->upload_rapport()
					  	);  
			      }  
			      else  
			      {  
			            $update_data = array(  
			               'titre'      	=>     $this->input->post('titre'),  
				           'description'    =>     $this->input->post('description'), 
				           'annee'      	=>     $this->input->post('annee')
			            );   
			      } 

			  	$requete=$this->crud_model->update_rapport($param2, $update_data);
	      		$this->session->set_flashdata('message',"Modification avec succès!!!");
	            redirect(base_url() . 'admin/operation_rapport/detail/'.$param2, 'refresh');
          }  

          if($param1 =="suppression")  
          {  
                

			  	$requete=$this->crud_model->delete_rapport($param2);
	      		$this->session->set_flashdata('message',"Suppression avec succès!!!");
	            redirect(base_url() . 'admin/rapport/', 'refresh');
          } 

          if($param1 =="detail")  
          {  
                
			  	$data['variable'] = $this->crud_model->fetch_rapport($param2);
	            $data['title']="Détail de la configuration";
			    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			    $data['users'] = $this->crud_model->fetch_connected($this->connected);
			    $this->load->view('backend/admin/edit_rapport', $data);
          }  
          else  
          {  
               redirect(base_url() . 'admin/rapport/', 'refresh');
          }
   
    }




    function upload_image_service()  
	{  
       if(isset($_FILES["user_image"]))  
       {  
            $extension = explode('.', $_FILES['user_image']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = './upload/service/' . $new_name;  
            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
            return $new_name;  
       }  
	}


	// script de publicite
      function fetch_publicite(){  

           $fetch_data = $this->crud_model->make_datatables_publicite();  
           $data = array();  
           $etat2 = '';
           $etat = '';
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->type=='texte') {
                  $etat2 = '
                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                    <span><i class="fa fa-file text-primary" ></i></span>
                </div>
                 ';
                }
                elseif ($row->type=='video'){
                  $etat2 = '
                    <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                        <span><i class="fa fa-video-camera text-primary"></i></span>
                    </div>
                ';
                }
                else{

                  $etat2 = '';
                }

                if ($row->etat == 1) {
                  $etat = '<a href="javascript:void(0);" type="button" name="pdf" idp="'.$row->idp.'" class="btn btn-primary btn-sm desactiver"><i class="fa fa-check"></i> Activé</a>';
                }
                else{

                    $etat = '<a href="javascript:void(0);" type="button" name="pdf" idp="'.$row->idp.'" class="btn btn-danger btn-sm  activer"><i class="fa fa-close"></i> Desactivé</a>';
                }

                $sub_array[] = $etat2; 


               
               
                // $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

                $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

                $sub_array[] = nl2br(substr($row->type, 0,15)).'';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

               
                 $sub_array[] = $etat; 

                $sub_array[] = '<button type="button" name="delete2" idp="'.$row->idp.'" class="btn btn-danger btn-circle btn-sm delete2"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_publicite(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_publicite(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      

      function operation_publicite()
      {
          if($this->input->post('checkbox_value'))
          {
             $id = $this->input->post('checkbox_value');
             for($count = 0; $count < count($id); $count++)
             {
                $insert_data = array(  
                   'idart'    =>     $id[$count]  
                ); 
                $this->crud_model->insert_publicite($insert_data);
             }
             echo("suppression avec succès");
          }

      }

      function activation_publicite(){

          $updated_data = array(  
             'etat'  =>     1
          ); 

          $this->crud_model->update_publicite($this->input->post("idp"), $updated_data);
          echo("la publicité est activée avec succès 👌");
      }

      function desactivation_publicite(){

          $updated_data = array(  
             'etat'  =>     0
          ); 

          $this->crud_model->update_publicite($this->input->post("idp"), $updated_data);
          echo("🏧 la publicité est desactivée avec succès🏧");
      }

      
      function supression_publicite(){
 
          $this->crud_model->delete_publicite($this->input->post("idp"));
          echo("suppression avec succès");
        
      }
  // fin de sript publicite 






























}



 ?>