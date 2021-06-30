<?php 
class crud_model extends CI_Model{
   // opertion role
  var $table1 = "role";  
  var $select_column1 = array("idrole", "nom", "created_at");  
  var $order_column1 = array(null, "nom", "created");
  // fin de la role

  // opertion tbl_info
  var $table2 = "tbl_info";  
  var $select_column2 = array("idinfo", "nom_site", "icone", "adresse", "tel1","tel2","facebook","twitter", "linkedin", "email", "termes", "confidentialite", 
    "description", "mission", "objectif","blog");  
  var $order_column2 = array(null, "nom_site", "adresse","tel1","tel2", 
    "description", "mission", "objectif","blog", null, null);
    // fin de la tbl_info
  // opertion category
  var $table3 = "category";  
  var $select_column3 = array("idcat", "nom", "created_at");  
  var $order_column3 = array(null, "nom", "created_at");
  // fin category

  // opertion produit
  var $table4 = "profile_product";  
  var $select_column4 = array("product_id", "category_id", "product_name", "product_price", "product_image", "id_user", "first_name", "image", "nom","Qte");  
  var $order_column4 = array(null, "nom","product_name","product_price","first_name", "id_user","Qte");
  // fin produit

  // opertion galery produit
  var $table5 = "profile_galery";  
  var $select_column5 = array("idgalery","product_id", "photos", "product_name", "product_price", "Qte");  
  var $order_column5 = array(null, "product_id", "photos", "product_name", "product_price", "Qte");
  // fin produit

   // opertion category information
  var $table15 = "profile_article";  
  var $select_column15 = array("idart", "nom","description","lien","image", 
    "type","idcat","nom_cat","created_at");  
  var $order_column15 = array(null, "nom","description","lien","type","idcat","nom_cat", "created_at");
  // fin category

   // opertion galery produit
  var $table6 = "profile_entree_stock";  
  var $select_column6 = array("ide","product_id", "QteEntree", "product_name", "product_price", "Qte","created_at","product_image");  
  var $order_column6 = array(null, "product_id", "QteEntree", "product_name", "product_price", "Qte","created_at","product_image");
  // fin produit

   // opertion galery produit
  var $table7 = "profile_sortie_stock";  
  var $select_column7 = array("ids","product_id", "QteEntree", "product_name", "product_price", "Qte","created_at","product_image","nom");  
  var $order_column7 = array(null, "product_id", "QteEntree", "product_name", "product_price", "Qte","created_at","product_image","nom");
  // fin produit

   //users
  var $table8 = "users";  
  var $select_column8 = array("id", "first_name", "last_name", "email","image","telephone","full_adresse","biographie","date_nais","facebook","twitter","linkedin","idrole","sexe");  
  var $order_column8 = array(null, "first_name", "last_name","telephone","sexe","id", null, null);
  // fin information

   // contact
  var $table12 = "contact";  
  var $select_column12 = array("id", "nom", "sujet","email", "message","fichier","created_at");  
  var $order_column12 = array(null, "nom", "sujet","email","fichier", null, null);
  // fin contact

  // opertion tinfo_personnel
  var $table16 = "tinfo_personnel";  
  var $select_column16 = array("idtinfo_personnel", "titre","description","icone", "created_at");  
  var $order_column16 = array(null, "titre","description","icone", "created_at");
  // fin de la tinfo_personnel

  // opertion tinfo_service
  var $table17 = "tinfo_service";  
  var $select_column17 = array("idtinfo_service", "titre","description","image", "created_at");  
  var $order_column17 = array(null, "titre","description","image", "created_at");
  // fin de la tinfo_service


  //tinfo_user
  var $table20 = "tinfo_user";  
  var $select_column20 = array("idtinfo_user", "first_name", "last_name","sexe", "email","image","telephone","facebook","twitter","linkedin","poste","created_at");  
  var $order_column20 = array(null, "first_name", "last_name","telephone","sexe","email",
    "created_at",null, null);
  // fin tinfo_user

   // opertion video information
  var $table21 = "video";  
  var $select_column21 = array("idv","code", "nom","description","lien","image", "created_at");  
  var $order_column21 = array(null, "nom","description","lien","code", "created_at");
  // fin video




    // retourner les numéros  
    function get_email_du_site(){
      $this->db->limit(1);
      $nom = $this->db->get("tbl_info");
      $numeros = '';
      if ($nom->num_rows() > 0) {
        foreach ($nom->result_array() as $key) {
          $numeros = $key["email"];
          
        }
      }
      else{
         $numeros ="info@gmail.com";
      }
      return $numeros ;
      

    }

     // retourner les numéros  
    function get_logo_du_site(){
      $this->db->limit(1);
      $nom = $this->db->get("tbl_info");
      $numeros = '';
      if ($nom->num_rows() > 0) {
        foreach ($nom->result_array() as $key) {
          $numeros = $key["icone"];
          
        }
      }
      else{
         $numeros ="";
      }
      return $numeros ;
      

    }

  function Select_articles()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('profile_article');
  }

  function Select_category()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('category');
  }


  function fetch_produits()
  {
    $this->db->order_by("product_id", "DESC");
    $this->db->limit(100);
    return $this->db->get('profile_product');
  } 

  function fetch_categores()
  {
    $this->db->order_by('nom','ASC');
      return $this->db->get('category');
  }

  // information basique du site
  function Select_contact_info_site()
  {
      return $this->db->query('SELECT * FROM tbl_info  LIMIT 1');
  }

   

  // pagination contact
  function fetch_pagination_galery(){
    $this->db->order_by("idg", "DESC");
    $query = $this->db->get("galery");
    return $query->num_rows();
  }

  // contact 
  function insert_contact($data)  
  {  
       $this->db->insert('contact', $data);  
  }

// test_email si existe
  function get_users_email($email)
  {
      $this->db->limit(1);
      return $this->db->get_where('users', array('email' => $email));
  }
// utilisateur connecte
  function fetch_connected($id){
      $this->db->where('id',$id);
      return $this->db->get('users')->result_array();
  }
  // online 
  function insert_online($data){
      $this->db->insert('online', $data);
  }
  // creation de compte
  function insert_user($data)
  {
    $this->db->insert('users', $data);
    return $this->db->insert_id();
  } 

  // insertion dans la table recuper pwd 
  function insert_recupere($data){
     $this->db->insert('recupere', $data);
  }

  // suppression deconnexion en ligne 
  function delete_online($id_user){
    $this->db->where('id_user', $id_user);
    $this->db->delete("online");
  }

  //modification des utilisateurs
  function update_user($email, $data)
  {
    $this->db->where('email', $email);
    return $this->db->update('users', $data);
  }

  // insertion des notifications 
  function insert_notification($data)  
  {  
     $this->db->insert('notification', $data);  
  }
  function update_crud($user_id, $data)  
  {  
       $this->db->where("id", $user_id);  
       $this->db->update("users", $data);  
  }
  //supression de notification
  function delete_notifacation_tag($id){
    $this->db->where('id', $id);
    $this->db->delete('notification');
  }

  //supression de favories
  function delete_favory_tag($idfovorie){
    $this->db->where('idfovorie', $idfovorie);
    $this->db->delete('favories');
  }

  //supression de favories
  function delete_favory_vente($code){
    $this->db->where('code', $code);
    $this->db->delete('pading_vente');
  }

  function Select_users()
  {
      $this->db->order_by('first_name','ASC');
      $this->db->limit(50);
      return $this->db->get('users');
  }

  function Select_roles()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('role');
  }

  // utilisateur vente en attente
  function fetch_connected_vente($user_id){
      $this->db->where('user_id',$user_id);
      $this->db->group_by('code');
      return $this->db->get('profile_padding_vente')->result_array();
  }

  // nombre des produits au panier 
  function fetch_number_Panier_connected($user_id){
      $nombreTotal;
      $query= $this->db->query("SELECT COUNT(product_id) AS nombre FROM cart WHERE user_id=".$user_id." ");
      if ($query->num_rows() > 0) {
        foreach ($query->result_array() as $key) {
          # code...
          $nombreTotal = $key['nombre'];
        }

      }
      else{
        $nombreTotal = 0;
      }
      return $nombreTotal;
  }

 

  function get_info_user(){
      $nom = $this->db->get("users")->result_array();
      return $nom;
  }

  function statistiques_nombre_entree_enstock($query){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;
  }

  function statistiques_nombre_entree_enstock_cat($query){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." GROUP BY nom ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;
  }



  function statistiques_nombre_tag_by_column($query, $value){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE idrole=".$value." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;
  }


  function statistiques_nombre($query){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;
  }

  function statistiques_nombre_where($query, $colone,$value){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE ".$colone."='".$value."' ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;

  }

  function statistiques_nombre_where_null($query, $colone,$value){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE ".$colone." is ".$value." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;

  }


   // script pour ctegorie mrchandise du site
    function make_query_category()  
    {  
          
         $this->db->select($this->select_column3);  
         $this->db->from($this->table3);
         
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idcat", $_POST["search"]["value"]);  
              $this->db->or_like("nom", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column3[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idcat', 'DESC');  
         }  
    }

   function make_datatables_category(){  
         $this->make_query_category();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_category(){  
         $this->make_query_category();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_category()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table3);  
         return $this->db->count_all_results();  
    }

    function insert_category($data)  
    {  
         $this->db->insert('category', $data);  
    }

    
    function update_category($idcat, $data)  
    {  
         $this->db->where("idcat", $idcat);  
         $this->db->update("category", $data);  
    }


    function delete_category($idcat)  
    {  
         $this->db->where("idcat", $idcat);  
         $this->db->delete("category");  
    }

    function fetch_single_category($idcat)  
    {  
         $this->db->where("idcat", $idcat);  
         $query=$this->db->get('category');  
         return $query->result();  
    } 

  // script pour role du site
   function make_query_role()  
   {  
          
         $this->db->select($this->select_column1);  
         $this->db->from($this->table1);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idrole", $_POST["search"]["value"]);  
              $this->db->or_like("nom", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column1[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idrole', 'DESC');  
         }  
    }

   function make_datatables_role(){  
         $this->make_query_role();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_role(){  
         $this->make_query_role();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_role()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table1);  
         return $this->db->count_all_results();  
    }

    function insert_role($data)  
    {  
         $this->db->insert('role', $data);  
    }

    
    function update_role($idrole, $data)  
    {  
         $this->db->where("idrole", $idrole);  
         $this->db->update("role", $data);  
    }


    function delete_role($idrole)  
    {  
         $this->db->where("idrole", $idrole);  
         $this->db->delete("role");  
    }

    function fetch_single_role($idrole)  
    {  
         $this->db->where("idrole", $idrole);  
         $query=$this->db->get('role');  
         return $query->result();  
    } 
    // fin de script role

    // script pour information du site
    function make_query_tbl_info()  
    {  
          
         $this->db->select($this->select_column2);  
         $this->db->from($this->table2);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("adresse", $_POST["search"]["value"]);  
              $this->db->or_like("nom_site", $_POST["search"]["value"]);
              $this->db->or_like("tel1", $_POST["search"]["value"]); 
              $this->db->or_like("tel2", $_POST["search"]["value"]);
              $this->db->or_like("email", $_POST["search"]["value"]);
              $this->db->or_like("idinfo", $_POST["search"]["value"]);
              $this->db->or_like("termes", $_POST["search"]["value"]);
              $this->db->or_like("confidentialite", $_POST["search"]["value"]);  
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idinfo', 'DESC');  
         }  
    }

   function make_datatables_tbl_info(){  
         $this->make_query_tbl_info();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tbl_info(){  
         $this->make_query_tbl_info();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tbl_info()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table2);  
         return $this->db->count_all_results();  
    }

    function insert_tbl_info($data)  
    {  
         $this->db->insert('tbl_info', $data);  
    }

    
    function update_tbl_info($idinfo, $data)  
    {  
         $this->db->where("idinfo", $idinfo);  
         $this->db->update("tbl_info", $data);  
    }


    function delete_tbl_info($idinfo)  
    {  
         $this->db->where("idinfo", $idinfo);  
         $this->db->delete("tbl_info");  
    }

    function delete_compte_utilisateur($id)  
    {  
         $this->db->where("id", $id);  
         $this->db->delete("users");  
    }

    function fetch_single_tbl_info($idinfo)  
    {  
         $this->db->where("idinfo", $idinfo);  
         $query=$this->db->get('tbl_info');  
         return $query->result();  
    } 

    function fetch_single_to_modal($product_id)  
    {  
         $this->db->where("product_id", $product_id);  
         $query=$this->db->get('profile_product');  
         return $query->result();  
    } 

    function fetch_single_galery_to_modal($product_id)  
    {  
         $this->db->where("product_id", $product_id);  
         $query=$this->db->get('profile_galery');  
         return $query->result();  
    } 

    function fetch_single_rand_pro_one()  
    {  
         $img='';
         $query = $this->db->query("SELECT * FROM profile_product ORDER BY RAND() LIMIT 1"); 
          if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
              $img ='
                <a class="category-item mb-4" 
                   href="'.base_url().'user/detailProduct/'.$row->product_id.'">
                   <img class="img-fluid" src="'.base_url().'upload/product/'.$row->product_image.'" alt=""><strong class="category-item-title">'.$row->nom.'</strong>
                </a>

              ';
            }
          }
          else{

          } 
         return $img;  
    }

    /*

    OPERATION DE FILTRE POUR LES CATEGORIES
    DES SRTICLE CLOMMECE
    ===================================================
    ===================================================

    */

    // filtrage de category 
    function filtre_de_nom_Category_produit()  
    {   
         $query=$this->db->query("SELECT * FROM profile_product ORDER BY RAND() LIMIT 6");  
         return $query;  
    } 

    // filtrage de category 
    function filtre_de_donnees_produit_tag($product_id)  
    {   
         $query=$this->db->query("SELECT * FROM profile_product WHERE product_id=".$product_id." LIMIT 1");  
         return $query;  
    } 

     // filtrage de category 
    function filtre_de_cat_Category_produit()  
    {   
         $query=$this->db->query("SELECT * FROM profile_product GROUP BY category_id LIMIT 40");  
         return $query;  
    } 

     /*

    FIN OPERATION DE FILTRE POUR LES CATEGORIES
    DES SRTICLE CLOMMECE
    ===================================================
    ===================================================

    */




    // fin de tbl_info 

    // script users
    function make_query_users()  
    {  
          
         $this->db->select($this->select_column8);  
         $this->db->from($this->table8);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("first_name", $_POST["search"]["value"]);  
              $this->db->or_like("last_name", $_POST["search"]["value"]); 
              $this->db->or_like("full_adresse", $_POST["search"]["value"]); 
              $this->db->or_like("biographie", $_POST["search"]["value"]);  
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column8[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('id', 'DESC');  
         }  
    }

    function make_datatables_users(){  
         $this->make_query_users();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_users(){  
         $this->make_query_users();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_users()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table8);  
         return $this->db->count_all_results();  
    }

    function insert_users($data)  
    {  
         $this->db->insert('users', $data);  
    }

    
    function update_users($id, $data)  
    {  
         $this->db->where("id", $id);  
         $this->db->update("users", $data);  
    }


    function delete_users($id)  
    {  
         $this->db->where("id", $id);  
         $this->db->delete("users");  
    }

    function fetch_single_users($id)  
    {  
         $this->db->where("id", $id);  
         $query=$this->db->get('users');  
         return $query->result();  
    }

    //fin de script users

    // script pour information du produit en stock

    function fetch_details_view_product($limit, $start)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("profile_product");
      $this->db->order_by("product_id", "DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
        {
         $output .= '
         <tr>
          <td><img src="'.base_url().'upload/product/'.$row->product_image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

          <td>'.nl2br(substr($row->product_name, 0,10)).'...'.'</td>
          <td>'.nl2br(substr($row->product_price, 0,10)).' $'.'</td>
          <td>'.nl2br(substr($row->nom, 0,20)).' ...'.'</td>
          <td>'.nl2br(substr($row->Qte, 0,10)).' '.'</td>
          <td>'.nl2br(substr($row->first_name, 0,10)).'...'.'</td>
          
          <td><button type="button" name="update" product_id="'.$row->product_id.'" class="btn btn-warning btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
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
      return $output;
    }


   function fetch_data_search_view_product($query)
   {
      $this->db->select("*");
      $this->db->from("profile_product");
      $this->db->limit(10);
      if($query != '')
      {
       $this->db->like('product_id', $query);
       $this->db->or_like('Qte', $query);
       $this->db->or_like('product_name', $query);
       $this->db->or_like('product_price', $query);
       $this->db->or_like('nom', $query);
      }
      $this->db->order_by('product_id', 'DESC');
      return $this->db->get();
   }


    function make_query_product()  
    {  
          
         $this->db->select($this->select_column4);  
         $this->db->from($this->table4);
         $this->db->limit(30);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("nom", $_POST["search"]["value"]);  
              $this->db->or_like("product_price", $_POST["search"]["value"]);
              $this->db->or_like("product_name", $_POST["search"]["value"]); 
              $this->db->or_like("first_name", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column4[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('product_id', 'DESC');  
         }  
    }

   function make_datatables_product(){  
         $this->make_query_product();  
         if($_POST["length"])  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_product(){  
         $this->make_query_product();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_product()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table4);  
         return $this->db->count_all_results();  
    }

    function insert_product($data)  
    {  
         $this->db->insert('product', $data);  
    }

    
    
    function update_product($product_id, $data)  
    {  
         $this->db->where("product_id", $product_id);  
         $this->db->update("product", $data);  
    }


    function delete_product($product_id)  
    {  
         $this->db->where("product_id", $product_id);  
         $this->db->delete("product");  
    }

    function fetch_single_product($product_id)  
    {  
         $this->db->where("product_id", $product_id);  
         $query=$this->db->get('profile_product');  
         return $query->result();  
    } 

    // fin de produit en stock 


    // script pour information galery du produit en stock
    function make_query_galery()  
    {  
          
         $this->db->select($this->select_column5);  
         $this->db->from($this->table5);
         $this->db->limit(30);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("product_name", $_POST["search"]["value"]);  
              $this->db->or_like("product_price", $_POST["search"]["value"]);
              $this->db->or_like("Qte", $_POST["search"]["value"]); 
             
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column5[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idgalery', 'DESC');  
         }  
    }

   function make_datatables_galery(){  
         $this->make_query_galery();  
         if($_POST["length"])  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_galery(){  
         $this->make_query_galery();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_galery()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table5);  
         return $this->db->count_all_results();  
    }

    function insert_galery($data)  
    {  
         $this->db->insert('galery', $data);  
    }
    //suppression des photos pour la galerie
    function delete_photo_galery($idg)  
    {  
         $this->db->where("idg", $idg);  
         $this->db->delete("galery");  
    }

    
    function update_galery($idgalery, $data)  
    {  
         $this->db->where("idgalery", $idgalery);  
         $this->db->update("galery", $data);  
    }


    function delete_galery($idgalery)  
    {  
         $this->db->where("idgalery", $idgalery);  
         $this->db->delete("galery");  
    }

    function fetch_single_galery($idgalery)  
    {  
         $this->db->where("idgalery", $idgalery);  
         $query=$this->db->get('profile_galery');  
         return $query->result();  
    } 

    // fin de galery produit en stock 


     // script pour information entreee du produit en stock
    function make_query_entree()  
    {  
          
         $this->db->select($this->select_column6);  
         $this->db->from($this->table6);
         $this->db->limit(30);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("product_name", $_POST["search"]["value"]);  
              $this->db->or_like("product_price", $_POST["search"]["value"]);
              $this->db->or_like("Qte", $_POST["search"]["value"]); 
              $this->db->or_like("QteEntree", $_POST["search"]["value"]);
             
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column6[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('ide', 'DESC');  
         }  
    }

   function make_datatables_entree(){  
         $this->make_query_entree();  
         if($_POST["length"])  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_entree(){  
         $this->make_query_entree();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_entree()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table6);  
         return $this->db->count_all_results();  
    }

    function insert_entree($data)  
    {  
         $this->db->insert('entree', $data); 
         return $this->db->insert_id(); 
    }

    
    function update_entree($ide, $data)  
    {  
         $this->db->where("ide", $ide);  
         $this->db->update("entree", $data);  
    }


    function delete_entree($ide)  
    {  
         $this->db->where("ide", $ide);  
         $this->db->delete("entree");  
    }

    function fetch_single_entree($ide)  
    {  
         $this->db->where("ide", $ide);  
         $query=$this->db->get('profile_entree_stock');  
         return $query->result();  
    } 

    // fin de entree produit en stock 

    // script pour information sortie du produit en stock
    function count_all_view_sortie()
    {
      $query = $this->db->get("profile_sortie_stock");
      $this->db->limit(30);
      return $query->num_rows();
    }

    // script pour information  des produits en stock
    function count_all_view_product()
    {
      $query = $this->db->get("profile_product");
      $this->db->limit(30);
      return $query->num_rows();
    }

    function fetch_details_view_sortie($limit, $start)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("profile_sortie_stock");
      $this->db->order_by("ids", "DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
        $output .= '
         <tr>
          <td colpan="8">Aucune donnée n\'est à présent</td>

         </tr>
         ';
      }
      else{

        foreach($query->result() as $row)
        {
         $output .= '
         <tr>
          <td><img src="'.base_url().'upload/product/'.$row->product_image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

          <td>'.nl2br(substr($row->product_name, 0,10)).'...'.'</td>
          <td>'.nl2br(substr($row->product_price, 0,10)).' $'.'</td>
          <td>'.nl2br(substr($row->Qte, 0,10)).'...'.'</td>
          <td>'.nl2br(substr($row->QteEntree, 0,10)).'...'.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>

          <td><button type="button" name="update" ids="'.$row->ids.'" class="btn btn-warning btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
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
      return $output;
    }


   function fetch_data_search_view_sortie($query)
   {
      $this->db->select("*");
      $this->db->from("profile_sortie_stock");
      $this->db->limit(10);
      if($query != '')
      {
       $this->db->like('product_id', $query);
       $this->db->or_like('QteEntree', $query);
       $this->db->or_like('product_name', $query);
       $this->db->or_like('product_price', $query);
       $this->db->or_like('nom', $query);
      }
      $this->db->order_by('ids', 'DESC');
      return $this->db->get();
   }


    function make_query_sortie()  
    {  
          
         $this->db->select($this->select_column7);  
         $this->db->from($this->table7);
         $this->db->limit(30);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("product_name", $_POST["search"]["value"]);  
              $this->db->or_like("product_price", $_POST["search"]["value"]);
              $this->db->or_like("Qte", $_POST["search"]["value"]); 
              $this->db->or_like("QteEntree", $_POST["search"]["value"]);
             
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column7[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('ids', 'DESC');  
         }  
    }

   function make_datatables_sortie(){  
         $this->make_query_sortie();  
         if($_POST["length"])  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_sortie(){  
         $this->make_query_sortie();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_sortie()  
    {  
         $this->db->select("*");  
         $this->db->limit(30); 
         $this->db->from($this->table7);  
         return $this->db->count_all_results();  
    }

    function insert_sortie($data)  
    {  
         $this->db->insert('sortie', $data); 
         return $this->db->insert_id(); 
    }

    
    function update_sortie($ids, $data)  
    {  
         $this->db->where("ids", $ids);  
         $this->db->update("sortie", $data);  
    }


    function delete_sortie($ids)  
    {  
         $this->db->where("ids", $ids);  
         $this->db->delete("sortie");  
    }

    function fetch_single_sortie($ids)  
    {  
         $this->db->where("ids", $ids);  
         $query=$this->db->get('profile_sortie_stock');  
         return $query->result();  
    } 
    // fin de entree produit en stock 

    // impression bon d'entrée
    function Fiche_impressionStockEntrant()
    {

        $data = $this->db->get('profile_entree_stock');

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            Fiche de stock des produits entrants ".$nom_site."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         $output .= '
            <table border="1" style="
                width: 100%;
                  margin-bottom: 1rem;
                  background-color: transparent;
                  border: 1px solid #dee2e6;
                  border-collapse: collapse;

             ">
              <thead>
                <tr>
                  <th>Photo</th>
                  <th>Nom du produit</th>
                  <th>Qte entrée</th>
                  <th>Categoré</th>
                  <th>Prix utinitaire</th>
                  <th>Mise à jour</th>
                </tr>
              </thead>
              <tbody>

          ';

            if ($data->num_rows() > 0) {

              foreach($data->result_array() as $items)
              {
                
                  $data_paie = $this->db->query("SELECT Count(product_id) AS montant FROM profile_entree_stock ");
                  if ($data_paie->num_rows() > 0) {
                      # code...
                      foreach($data_paie->result_array() as $items2)
                      {
                        $montantT =  $items2["montant"];
                      }

                  }
                  else{
                    $montantT = 0;
                  }

                   $retour = "javascript:history.go(-1);";

                   $output .= '

                   <!-- detail des produits commencent par ici
                  view ok fiche de stock -->
                  <tr>
                    <td>
                      <img src="'.base_url().'upload/product/'.$items["product_image"].'" style="height: 40px; width: 50px; border-radius: 50%;"/>
                    </td>
                    <td>'.$items["product_name"].'</td>
                    <td>'.$items["QteEntree"].'</td>
                    <td>'.$items["nom"].'</td>
                    <td>'.$items["product_price"].' $</td>
                    <td>'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>

                  </tr>
                  <!-- fin boucle -->

                   ';
              }

              $output .= '

                <tr>
                  <td colspan="5" align="right">Nombre Total de produit entrant &nbsp;&nbsp;</td>
                  <td>'.$montantT.' produit(s)</td>
                </tr>

               ';
              # code...
            }
            $output .= '
            </tbody>
          </table>

       
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'admin/stat_entree" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
       
        ';

        return $output;

    }

     // impression bon de sortie
    function Fiche_impressionStockSortie()
    {

        $data = $this->db->get('profile_sortie_stock');

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            Bon de sortie de stock des produits  ".$nom_site."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         $output .= '
            <table  style="
                width: 100%;
                  margin-bottom: 1rem;
                  background-color: transparent;
                  border: 1px solid #dee2e6;
                  border-collapse: collapse;

             ">
              <thead>
                <tr>
                  <th>Photo</th>
                  <th>Nom du produit</th>
                  <th>Qte entrée</th>
                  <th>Categoré</th>
                  <th>Prix utinitaire</th>
                  <th>Mise à jour</th>
                </tr>
              </thead>
              <tbody>

          ';

            if ($data->num_rows() > 0) {

              foreach($data->result_array() as $items)
              {
                
                  $data_paie = $this->db->query("SELECT Count(product_id) AS montant FROM profile_sortie_stock ");
                  if ($data_paie->num_rows() > 0) {
                      # code...
                      foreach($data_paie->result_array() as $items2)
                      {
                        $montantT =  $items2["montant"];
                      }

                  }
                  else{
                    $montantT = 0;
                  }

                   $retour = "javascript:history.go(-1);";

                   $output .= '

                   <!-- detail des produits commencent par ici
                  view ok fiche de stock -->
                  <tr>
                    <td>
                      <img src="'.base_url().'upload/product/'.$items["product_image"].'" style="height: 40px; width: 50px; border-radius: 50%;"/>
                    </td>
                    <td>'.$items["product_name"].'</td>
                    <td>'.$items["QteEntree"].'</td>
                    <td>'.$items["nom"].'</td>
                    <td>'.$items["product_price"].' $</td>
                    <td>'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>

                  </tr>
                  <!-- fin boucle -->

                   ';
              }

              $output .= '

                <tr>
                  <td colspan="5" align="right">Nombre Total de produit entrant &nbsp;&nbsp;</td>
                  <td>'.$montantT.' produit(s)</td>
                </tr>

               ';
              # code...
            }
            $output .= '
            </tbody>
          </table>

       
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'admin/stat_sortie" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
       
        ';

        return $output;

    }

     // impression bon d'entrée filtrage de date
    function Fiche_impressionStockEntrant_Date($date1,$date2)
    {

        $data = $this->db->query("SELECT * FROM profile_entree_stock WHERE created_at BETWEEN '".$date1."'
         AND '".$date2."' ");

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            Fiche de stock des produits entrants ".$nom_site." du date de ".nl2br(substr(date(DATE_RFC822, strtotime($date1)), 0, 15))." au ".nl2br(substr(date(DATE_RFC822, strtotime($date2)), 0, 15))."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         $output .= '
            <table border="1" style="
                width: 100%;
                  margin-bottom: 1rem;
                  background-color: transparent;
                  border: 1px solid #dee2e6;
                  border-collapse: collapse;

             ">
              <thead>
                <tr>
                  <th>Photo</th>
                  <th>Nom du produit</th>
                  <th>Qte entrée</th>
                  <th>Categoré</th>
                  <th>Prix utinitaire</th>
                  <th>Mise à jour</th>
                </tr>
              </thead>
              <tbody>

          ';

            if ($data->num_rows() > 0) {

              foreach($data->result_array() as $items)
              {
                
                  $data_paie = $this->db->query("SELECT Count(product_id) AS montant FROM profile_entree_stock 
                  WHERE created_at BETWEEN '".$date1."' AND '".$date2."' ");
                  if ($data_paie->num_rows() > 0) {
                      # code...
                      foreach($data_paie->result_array() as $items2)
                      {
                        $montantT =  $items2["montant"];
                      }

                  }
                  else{
                    $montantT = 0;
                  }

                   $retour = "javascript:history.go(-1);";

                   $output .= '

                   <!-- detail des produits commencent par ici
                  view ok fiche de stock -->
                  <tr>
                    <td>
                      <img src="'.base_url().'upload/product/'.$items["product_image"].'" style="height: 40px; width: 50px; border-radius: 50%;"/>
                    </td>
                    <td>'.$items["product_name"].'</td>
                    <td>'.$items["QteEntree"].'</td>
                    <td>'.$items["nom"].'</td>
                    <td>'.$items["product_price"].' $</td>
                    <td>'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>

                  </tr>
                  <!-- fin boucle -->

                   ';
              }

              $output .= '

                <tr>
                  <td colspan="5" align="right">Nombre Total de produit entrant &nbsp;&nbsp;</td>
                  <td>'.$montantT.' produit(s)</td>
                </tr>

               ';
              # code...
            }
            $output .= '
            </tbody>
          </table>

       
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'admin/stat_entree" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
       
        ';

        return $output;

    }

     // impression bon de sortie filtrage de date
    function Fiche_impressionStockSortie_Date($date1,$date2)
    {

        $data = $this->db->query("SELECT * FROM profile_sortie_stock WHERE created_at BETWEEN '".$date1."'
         AND '".$date2."' ");

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            Bon de sortie des produits ".$nom_site." du date de ".nl2br(substr(date(DATE_RFC822, strtotime($date1)), 0, 15))." au ".nl2br(substr(date(DATE_RFC822, strtotime($date2)), 0, 15))."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         $output .= '
            <table style="
                width: 100%;
                  margin-bottom: 1rem;
                  background-color: transparent;
                  border: 1px solid #dee2e6;
                  border-collapse: collapse;

             ">
              <thead>
                <tr>
                  <th>Photo</th>
                  <th>Nom du produit</th>
                  <th>Qte entrée</th>
                  <th>Categoré</th>
                  <th>Prix utinitaire</th>
                  <th>Mise à jour</th>
                </tr>
              </thead>
              <tbody>

          ';

            if ($data->num_rows() > 0) {

              foreach($data->result_array() as $items)
              {
                
                  $data_paie = $this->db->query("SELECT Count(product_id) AS montant FROM profile_sortie_stock 
                  WHERE created_at BETWEEN '".$date1."' AND '".$date2."' ");
                  if ($data_paie->num_rows() > 0) {
                      # code...
                      foreach($data_paie->result_array() as $items2)
                      {
                        $montantT =  $items2["montant"];
                      }

                  }
                  else{
                    $montantT = 0;
                  }

                   $retour = "javascript:history.go(-1);";

                   $output .= '

                   <!-- detail des produits commencent par ici
                  view ok fiche de stock -->
                  <tr>
                    <td>
                      <img src="'.base_url().'upload/product/'.$items["product_image"].'" style="height: 40px; width: 50px; border-radius: 50%;"/>
                    </td>
                    <td>'.$items["product_name"].'</td>
                    <td>'.$items["QteEntree"].'</td>
                    <td>'.$items["nom"].'</td>
                    <td>'.$items["product_price"].' $</td>
                    <td>'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>

                  </tr>
                  <!-- fin boucle -->

                   ';
              }

              $output .= '

                <tr>
                  <td colspan="5" align="right">Nombre Total de produit entrant &nbsp;&nbsp;</td>
                  <td>'.$montantT.' produit(s)</td>
                </tr>

               ';
              # code...
            }
            $output .= '
            </tbody>
          </table>

       
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'admin/stat_sortie" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
       
        ';

        return $output;

    }

    // impression fiche de stock
    function Fiche_impressionFichedeStock()
    {

        $data = $this->db->get('fiche_de_stock');

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            Fiche de stock pour les produits ".$nom_site."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         $output .= '
            <table border="1" style="
                width: 100%;
                margin-bottom: 1rem;
                background-color: transparent;
                border: 1px solid #dee2e6;
                border-collapse: collapse;
           ">
            <thead>
              <tr>
                <th rowspan="2" colspan="4">Entree</th>
                <th rowspan="2" colspan="3">Sortie</th>
                <th rowspan="2" colspan="3">Stock final</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Nom du produit</th>
                <th>Qte entrée</th>
                <th>Prix Unitaire</th>
                <th>Prix total</th>

                <th>Qte sortant</th>
                <th>Prix sortant</th>
                <th>Prix sortant</th>

                <th>Qte en stoock</th>
                <th>Prix en stoock</th>
                <th>Prix en stoock</th>
              </tr>
          ';

            if ($data->num_rows() > 0) {

              foreach($data->result_array() as $items)
              {
                
                  $data_paie = $this->db->query("SELECT Count(product_id) AS montant FROM fiche_de_stock ");
                  if ($data_paie->num_rows() > 0) {
                      # code...
                      foreach($data_paie->result_array() as $items2)
                      {
                        $montantT =  $items2["montant"];
                      }

                  }
                  else{
                    $montantT = 0;
                  }

                   $retour = "javascript:history.go(-1);";

                   $output .= '

                   <!-- detail des produits commencent par ici
                    view ok fiche de stock -->
                    <tr>
                      <td>'.$items["product_name"].'</td>
                      <td>'.$items["qte_E"].'</td>
                      <td>'.$items["pu_E"].' $</td>
                      <td>'.$items["pt_E"].' $</td>

                      <td>'.$items["qte_s"].'</td>
                      <td>'.$items["pu_s"].' $</td>
                      <td>'.$items["pt_s"].' $</td>

                      <td>'.$items["qte_stock"].'</td>
                      <td>'.$items["pu_stock"].' $</td>
                      <td>'.$items["pt_stock"].' $</td>
                      
                    </tr>
                    <!-- fin boucle -->

                   ';
              }

              $output .= '

                <tr>
                  <td colspan="9" align="right">Nombre Total de produit &nbsp;&nbsp;</td>
                  <td>'.$montantT.' produit(s)</td>
                </tr>

               ';
              # code...
            }
            $output .= '
            </tbody>
          </table>

       
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'admin/stat_entree" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
       
        ';

        return $output;

    }


    /*

    LES SCRIPTS POUR LA GESTION D'AFFICHAGE DE PRODUITS COMMENCENTS
    =================================================================
    USER INTERFACE
    *************

    */

     /*
      favorie
     =======================
     */

     // ajouter au favorie
    function insert_to_favories($data)
    {
      $this->db->insert('favories', $data);
    } 

    function verification_favory($id_user, $product_id){
      return $this->db->get_where('favories', array(
        'id_user'     =>  $id_user,
        'product_id'  =>  $product_id  
      ));
    }

    // retourner le nom  
    function get_name_article_tag($product_id){
      $this->db->where("product_id", $product_id);
      $this->db->limit(1);
      $nom = $this->db->get("product")->result_array();
      foreach ($nom as $key) {
        $titre = $key["product_name"];
        return $titre ;
      }

    }

    // retourner les numéros  
    function get_telephone_du_site(){
      $this->db->limit(1);
      $nom = $this->db->get("tbl_info");
      $numeros = '';
      if ($nom->num_rows() > 0) {
        foreach ($nom->result_array() as $key) {
          $numeros = $key["tel1"].' ou '.$key["tel2"];
          
        }
      }
      else{
         $numeros ="+243817883541 ou +243970524665";
      }
      return $numeros ;
      

    }

   
   



    // ajouter au panier
    function insert_to_cart($data)
    {
      $this->db->insert('cart', $data);
    } 

    // suppression panier
    function suppression_produit_cart($idc){
      $this->db->where("idc", $idc);
      $this->db->delete("cart");
    }
    // insertion padding vente 
    function insert_pading_vente($data){
      $this->db->insert('pading_vente', $data);
    }

    // voir les administrateurs
    function get_admins(){
        $user = $this->db->get_where("users", array(
          'idrole'  =>  1
        ))->result_array();
        return $user;
    }

    // vider panier 
    function vide_suppression_produit_cart($user_id){
      $this->db->where("user_id", $user_id);
      $this->db->delete("cart");
    }
    // solde net à payer
    function calcul_net_apayer($user_id){
        $query = $this->db->query("SELECT SUM(product_priceTotal) AS total_a_payer FROM cart WHERE user_id= '".$user_id."'");
        $montant;
        if ($query->num_rows() > 0) {
          foreach ($query->result_array() as $key) {
            $montant = $key['total_a_payer'];
          }
        }
        else{

          $montant = 0;
        }

        return $montant;

    }


    // solde net à payer
    function padding_vente_calcul_net_apayer($user_id, $code){
        $query = $this->db->query("SELECT SUM(product_priceTotal) AS total_a_payer FROM pading_vente WHERE user_id= '".$user_id."' AND code= '".$code."'");
        $montant;
        if ($query->num_rows() > 0) {
          foreach ($query->result_array() as $key) {
            $montant = $key['total_a_payer'];
          }
        }
        else{

          $montant = 0;
        }

        return $montant;

    }

    // detail des produits 
    function detail_cart($user_id){
      $this->db->order_by("idc","DESC");
      $query = $this->db->get_where("cart",array(
        'user_id' =>  $user_id
      ));
      return $query;
    }

    // detail des produits en attente de vente
    function padding_vente_detail_cart($user_id, $code){
      $this->db->order_by("idv","DESC");
      $query = $this->db->get_where("pading_vente",array(
        'user_id' =>  $user_id,
        'code' =>  $code,

      ));
      return $query;
    }

    // acheteur
    function detail_acheteur($id){
      $this->db->where("id", $id);
      $user = $this->db->get("users")->result_array();
      return $user;
    }




    // pagination product
    function fetch_pagination_product(){
      $this->db->limit(300);
      $query = $this->db->get("product");
      return $query->num_rows();
    }

     // recherche des produits par fultres
    function fetch_data_search_product_to_lean($query)
     {
      $this->db->select("*");
      $this->db->from("product");
      $this->db->limit(12);
      if($query != '')
      {
       $this->db->like('product_id', $query);
       $this->db->or_like('product_name', $query);
       $this->db->or_like('product_price', $query);

      }
      $this->db->order_by('product_name', 'ASC');
      return $this->db->get();
    }

    // pagination de produits
    function fetch_details_pagination_product($limit, $start){
        $output = '';
        $this->db->select("*");
        $this->db->from("product");
        $this->db->order_by("product_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        foreach($query->result() as $row)
        {

         $output .= '
         
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="product text-center">
            <div class="position-relative mb-3">
              <div class="badge text-white badge-"></div><a class="d-block" href="javascript:void(0);"><img class="img-fluid w-100" src="'.base_url().'upload/product/'.$row->product_image.'" alt="..." style="height: 250px;"></a>
              <div class="product-overlay">
                <ul class="mb-0 list-inline">
                <input type="number" min="1" max="'.$row->Qte.'" name="quantity" class="form-control quantity" id="'.$row->product_id.'" placeholder="Entrez la quantité" /><br />
                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add_favory" href="javascript:void(0);" favoryProduct="'.$row->product_id.'"><i class="far fa-heart"></i></a></li> 
                  <li class="list-inline-item m-0 p-0">
                   <a class="btn btn-sm btn-dark add_cart" 
                      data-productname="'.$row->product_name.'" 
                      data-price="'.$row->product_price.'" 
                      data-productid="'.$row->product_id.'" 
                      data-product_image="'.$row->product_image.'" 
                      Qte="'.$row->Qte.'"
                      href="javascript:void(0);">
                    Ajouter au panier
                    </a></li>
                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark modalView" product_id="'.$row->product_id.'"><i class="fas fa-expand"></i></a></li>
                </ul>
              </div>
            </div>
            <h6> <a class="reset-anchor" href="'.base_url().'user/detailProduct/'.$row->product_id.'">'.$row->product_name.'</a></h6>
            <p class="small text-muted">'.$row->product_price.'$</p>
          </div>
        </div>



         ';
        }
        
        return $output;
    }
    // fin pagination

    // pagination de produits
    function fetch_details_pagination_product_shop($limit, $start){
        $output = '';
        $this->db->select("*");
        $this->db->from("product");
        $this->db->order_by("product_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        foreach($query->result() as $row)
        {

         $output .= '

        <div class="col-lg-4 col-sm-6">
          <div class="product text-center">
            <div class="position-relative mb-3">
              <div class="badge text-white badge-"></div><a class="d-block" href="javascript:void(0);"><img class="img-fluid w-100" src="'.base_url().'upload/product/'.$row->product_image.'" alt="..." style="height: 250px;"></a>
              <div class="product-overlay">
                <ul class="mb-0 list-inline">
                <input type="number" min="1" max="'.$row->Qte.'" name="quantity" class="form-control quantity" id="'.$row->product_id.'" placeholder="Entrez la quantité" /><br />
                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add_favory" href="javascript:void(0);" favoryProduct="'.$row->product_id.'"><i class="far fa-heart"></i></a></li> 
                  <li class="list-inline-item m-0 p-0">
                   <a class="btn btn-sm btn-dark add_cart" 
                      data-productname="'.$row->product_name.'" 
                      data-price="'.$row->product_price.'" 
                      data-productid="'.$row->product_id.'" 
                      data-product_image="'.$row->product_image.'" 
                      Qte="'.$row->Qte.'"
                      href="javascript:void(0);">
                    + Au panier
                    </a></li>
                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark modalView" product_id="'.$row->product_id.'"><i class="fas fa-expand"></i></a></li>
                </ul>
              </div>
            </div>
            <h6> <a class="reset-anchor" href="'.base_url().'user/detailProduct/'.$row->product_id.'">'.$row->product_name.'</a></h6>
            <p class="small text-muted">'.$row->product_price.'$</p>
          </div>
        </div>



         ';
        }
        
        return $output;
    }
    // fin pagination

    // recent produits 
    function fetch_details_recent_products($limit, $start){
        $output = '';
        $this->db->select("*");
        $this->db->from("product");
        $this->db->order_by("product_id", "DESC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        foreach($query->result() as $row)
        {

         $output .= '

        <div class="col-lg-4 col-sm-6">
          <div class="product text-center">
            <div class="position-relative mb-3">
              <div class="badge text-white badge-"></div><a class="d-block" href="javascript:void(0);"><img class="img-fluid w-100" src="'.base_url().'upload/product/'.$row->product_image.'" alt="..." style="height: 250px;"></a>
              <div class="product-overlay">
                <ul class="mb-0 list-inline">
                <input type="number" min="1" max="'.$row->Qte.'" name="quantity" class="form-control quantity" id="'.$row->product_id.'" placeholder="Entrez la quantité" /><br />
                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add_favory" href="javascript:void(0);" favoryProduct="'.$row->product_id.'"><i class="far fa-heart"></i></a></li> 
                  <li class="list-inline-item m-0 p-0">
                   <a class="btn btn-sm btn-dark add_cart" 
                      data-productname="'.$row->product_name.'" 
                      data-price="'.$row->product_price.'" 
                      data-productid="'.$row->product_id.'" 
                      data-product_image="'.$row->product_image.'" 
                      Qte="'.$row->Qte.'"
                      href="javascript:void(0);">
                    + Au panier
                    </a></li>
                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark modalView" product_id="'.$row->product_id.'"><i class="fas fa-expand"></i></a></li>
                </ul>
              </div>
            </div>
            <h6> <a class="reset-anchor" href="'.base_url().'user/detailProduct/'.$row->product_id.'">'.$row->product_name.'</a></h6>
            <p class="small text-muted">'.$row->product_price.'$</p>
          </div>
        </div>



         ';
        }
        
        return $output;
    }
    // fin pagination

    // fultre selon la categorie des formations
   function fultrage_fetch_data_search_product_by_product_id($query)
   {
    
    $this->db->limit(24);
    $this->db->order_by('product_name', 'ASC');
    $resultat = $this->db->get_where("product", array(
      'product_id' =>  $query
    ));

    return $resultat;
   
   }

   // fultre selon la categorie des formations
   function fultrage_fetch_data_search_product_by_category_id($query)
   {
    
    $this->db->limit(24);
    $this->db->order_by('product_name', 'ASC');
    $resultat = $this->db->get_where("product", array(
      'category_id' =>  $query
    ));

    return $resultat;
   }

   // fultre selon le prix des formations
   function fultrage_fetch_data_search_product_by_product_price($query)
   {
    
    $this->db->limit(24);
    $this->db->order_by('product_name', 'ASC');
    $resultat = $this->db->get_where("product", array(
      'product_price' =>  $query
    ));

    return $resultat;
   }

   /*

   Gestion de paiement
   =====================================
   =====================================

   */

    function insert_paiement_pading($data){
        $this->db->insert('paiement_pading', $data);
        return $this->db->insert_id();
    }

    function insert_paiement_compte($data){
        $this->db->insert('paiement', $data);
        return $this->db->insert_id();
    }

    function get_name_user($id){
      $this->db->where("id", $id);
      $nom = $this->db->get("users")->result_array();
      foreach ($nom as $key) {
        return $key["first_name"];
      }

    }

     // script de contact 
  // contact
  function make_query_contact()  
  {  
      
     $this->db->select($this->select_column12);  
     $this->db->from($this->table12);  
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("sujet", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);  
          $this->db->or_like("email", $_POST["search"]["value"]);  
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column12[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('id', 'DESC');  
     }  
  }

  function make_datatables_contact(){  
     $this->make_query_contact();  
     if($_POST["length"] != -1)  
     {  
          $this->db->limit($_POST['length'], $_POST['start']);  
     }  
     $query = $this->db->get();  
     return $query->result();  
  }

  function get_filtered_data_contact(){  
     $this->make_query_contact();  
     $query = $this->db->get();  
     return $query->num_rows();  
  }       
  function get_all_data_contact()  
  {  
     $this->db->select("*");  
     $this->db->from($this->table12);  
     return $this->db->count_all_results();  
  }



  function update_contact($id, $data)  
  {  
     $this->db->where("id", $id);  
     $this->db->update("contact", $data);  
  }


  function delete_contact($id)  
  {  
     $this->db->where("id", $id);  
     $this->db->delete("contact");  
  }

  function fetch_single_contact($id)  
  {  
     $this->db->where("id", $id);  
     $query=$this->db->get('contact');  
     return $query->result();  
  }


   // script pour nos article 
  function make_query_article()  
  {  
      
     $this->db->select($this->select_column15);  
     $this->db->from($this->table15);
     $this->db->limit(10);
     
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("idart", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);
          $this->db->or_like("description", $_POST["search"]["value"]);
          $this->db->or_like("lien", $_POST["search"]["value"]);
          $this->db->or_like("nom_cat", $_POST["search"]["value"]);
          $this->db->or_like("type", $_POST["search"]["value"]);
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column15[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('idart', 'DESC');  
     }  
  }

   function make_datatables_article(){  
         $this->make_query_article();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_article(){  
         $this->make_query_article();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_article()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table15);  
         return $this->db->count_all_results();  
    }

    function insert_article($data)  
    {  
         $this->db->insert('article', $data);  
    }

    
    function update_article($idart, $data)  
    {  
         $this->db->where("idart", $idart);  
         $this->db->update("article", $data);  
    }


    function delete_article($idart)  
    {  
         $this->db->where("idart", $idart);  
         $this->db->delete("article");  
    }

    function fetch_single_article($idart)  
    {  
         $this->db->where("idart", $idart);  
         $query=$this->db->get('article');  
         return $query->result();  
    } 
    //fin de la article information

    // filtrage avec limit 
    function fetch_details_view_articles_limit($limit)
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("profile_article");
      $this->db->order_by("idart", "DESC");
      $this->db->limit($limit);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

     function fetch_details_view_articles()
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("profile_article");
      $this->db->order_by("idart", "DESC");
      $this->db->limit(10);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

    function fetch_data_search_view_article($query)
    {
        $this->db->select("*");
        $this->db->from("profile_article");
        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('idart', $query);
         $this->db->or_like('nom', $query);
         $this->db->or_like('description', $query);
         $this->db->or_like('type', $query);
         $this->db->or_like('nom_cat', $query);
        }
        $this->db->order_by('idart', 'DESC');
        return $this->db->get();
    }

    function Select_artcle_orders()
    {
        $this->db->order_by('created_at','DESC');
        $this->db->limit(15);
        return $this->db->get('article');
    }

    // operation commentaire

    function insert_commentaire($data)  
    {  
         $this->db->insert('commentaire', $data);  
    }

    
    function update_commentaire($idcomment, $data)  
    {  
         $this->db->where("idcomment", $idcomment);  
         $this->db->update("commentaire", $data);  
    }


    function delete_commentaire($idcomment)  
    {  
         $this->db->where("idcomment", $idcomment);  
         $this->db->delete("commentaire");  
    }

    function fetch_single_commentaire($idcomment)  
    {  
         $this->db->where("idcomment", $idcomment);  
         $query=$this->db->get('profile_commentaire');  
         return $query->result();  
    } 


    function fetch_details_view_commentaire()
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("profile_commentaire");
      $this->db->order_by("idcomment", "DESC");
      $this->db->limit(10);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

    // filtrage avec limit 
    function fetch_details_view_commentaire_limit($limit)
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("profile_commentaire");
      $this->db->order_by("idcomment", "DESC");
      $this->db->limit($limit);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }


    //insertion des photos pour la galerie
    function insert_galery2($data)  
    {  
        $this->db->insert('galery2', $data);  
    }
    // fin pagination
    function fetch_pagination_galery_personnel(){
      $this->db->order_by("idg", "DESC");
      $query = $this->db->get("galery2");
      return $query->num_rows();
    }

    // pagination galery utilisateur
    function fetch_details_pagination_galery2($limit, $start){
      $output = '';
      $this->db->select("*");
      $this->db->from("galery2");
      // $this->db->order_by("nom", "ASC");
      $this->db->order_by("idg", "DESC");

      $this->db->limit($limit, $start);
      $query = $this->db->get();
      
      foreach($query->result() as $row)
      {
        
       $output .= '

          <div class="col-md-4" align="center" style="margin-bottom:24px;">
              <img src="'.base_url().'upload/galery/'.$row->image.'" class="img-thumbnail img-responsive" style="height: 200px;" />
                <br />
            <input type="checkbox" name="images[]" idg="'.$row->idg.'" class="select checkbox_id image_galery" value="upload/galery/'.$row->image.'" /> &nbsp;
            <a href="javascript:void(0);" class="text-danger supprimer" idg="'.$row->idg.'">
              <i class="fa fa-trash"></i> supprimer
            </a>

            &nbsp;
            <a href="javascript:void(0);" class="text-success update" idg="'.$row->idg.'">
              <i class="fa fa-edit"></i> editer
            </a>

         </div>
       ';
      }
      
      return $output;
    }
    // fin pagination

    //suppression des photos pour la galerie
    function delete_photo_galery_personnele($idg)  
    {  
         $this->db->where("idg", $idg);  
         $this->db->delete("galery2");  
    }
    // pagination contact

    function update_galery_entrep_personnele($idg, $data)  
    {  
         $this->db->where("idg", $idg);  
         $this->db->update("galery2", $data);  
    }

    function fetch_single_galery_entreprise_personnele($idg)  
    {  
         $this->db->where("idg", $idg);  
         $query=$this->db->get('galery2');  
         return $query->result();  
    }

    // pagination galery utilisateur
    function fetch_details_pagination_galery($limit, $start){
          $output = '';
        $this->db->select("*");
        $this->db->from("galery");
        // $this->db->order_by("nom", "ASC");
        $this->db->order_by("idg", "DESC");

        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        foreach($query->result() as $row)
        {
          
         $output .= '

        <div class="col-md-4" align="center" style="margin-bottom:24px;">
        <img src="'.base_url().'upload/galery/'.$row->image.'" class="img-thumbnail img-responsive" style="height: 200px;" />
          <br />
      <input type="checkbox" name="images[]" idg="'.$row->idg.'" class="select checkbox_id image_galery" value="upload/galery/'.$row->image.'" /> &nbsp;
      <a href="javascript:void(0);" class="text-danger supprimer" idg="'.$row->idg.'">
        <i class="fa fa-trash"></i> supprimer
      </a>
       </div>
         ';
        }
        
        return $output;
    }
    // fin pagination

    // script pour nos video 
    function make_query_video()  
    {  
        
       $this->db->select($this->select_column21);  
       $this->db->from($this->table21);
       
       if(isset($_POST["search"]["value"]))  
       {  
            $this->db->like("idv", $_POST["search"]["value"]);  
            $this->db->or_like("nom", $_POST["search"]["value"]);
            $this->db->or_like("description", $_POST["search"]["value"]);
            $this->db->or_like("lien", $_POST["search"]["value"]);
       }  
       if(isset($_POST["order"]))  
       {  
            $this->db->order_by($this->order_column21[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
       }  
       else  
       {  
            $this->db->order_by('idv', 'DESC');  
       }  
    }

     function make_datatables_video(){  
           $this->make_query_video();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_video(){  
           $this->make_query_video();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_video()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table21);  
           return $this->db->count_all_results();  
      }

      function insert_video($data)  
      {  
           $this->db->insert('video', $data);  
      }

      
      function update_video($idv, $data)  
      {  
           $this->db->where("idv", $idv);  
           $this->db->update("video", $data);  
      }


      function delete_video($idv)  
      {  
           $this->db->where("idv", $idv);  
           $this->db->delete("video");  
      }

      function fetch_single_video($idv)  
      {  
           $this->db->where("idv", $idv);  
           $query=$this->db->get('video');  
           return $query->result();  
      } 
    ///fin de la video information

         // script pour tinfo_user 
   function make_query_tinfo_user()  
   {  
          
         $this->db->select($this->select_column20);  
         $this->db->from($this->table20);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idtinfo_user", $_POST["search"]["value"]);  
              $this->db->or_like("poste", $_POST["search"]["value"]);
              $this->db->or_like("first_name", $_POST["search"]["value"]);
              $this->db->or_like("last_name", $_POST["search"]["value"]);
              $this->db->or_like("email", $_POST["search"]["value"]);
              $this->db->or_like("sexe", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column20[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idtinfo_user', 'DESC');  
         }  
    }

   function make_datatables_tinfo_user(){  
         $this->make_query_tinfo_user();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tinfo_user(){  
         $this->make_query_tinfo_user();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tinfo_user()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table20);  
         return $this->db->count_all_results();  
    }

    function insert_tinfo_user($data)  
    {  
         $this->db->insert('tinfo_user', $data);  
    }

    
    function update_tinfo_user($idtinfo_user, $data)  
    {  
         $this->db->where("idtinfo_user", $idtinfo_user);  
         $this->db->update("tinfo_user", $data);  
    }


    function delete_tinfo_user($idtinfo_user)  
    {  
         $this->db->where("idtinfo_user", $idtinfo_user);  
         $this->db->delete("tinfo_user");  
    }

    function fetch_single_tinfo_user($idtinfo_user)  
    {  
         $this->db->where("idtinfo_user", $idtinfo_user);  
         $query=$this->db->get('tinfo_user');  
         return $query->result();  
    } 
  // fin de script tinfo_user

    // script pour tinfo_personnel 
   function make_query_tinfo_personnel()  
   {  
          
         $this->db->select($this->select_column16);  
         $this->db->from($this->table16);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idtinfo_personnel", $_POST["search"]["value"]);  
              $this->db->or_like("titre", $_POST["search"]["value"]);
              $this->db->or_like("icone", $_POST["search"]["value"]);
              $this->db->or_like("description", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column16[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idtinfo_personnel', 'DESC');  
         }  
    }

   function make_datatables_tinfo_personnel(){  
         $this->make_query_tinfo_personnel();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tinfo_personnel(){  
         $this->make_query_tinfo_personnel();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tinfo_personnel()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table16);  
         return $this->db->count_all_results();  
    }

    function insert_tinfo_personnel($data)  
    {  
         $this->db->insert('tinfo_personnel', $data);  
    }

    
    function update_tinfo_personnel($idtinfo_personnel, $data)  
    {  
         $this->db->where("idtinfo_personnel", $idtinfo_personnel);  
         $this->db->update("tinfo_personnel", $data);  
    }


    function delete_tinfo_personnel($idtinfo_personnel)  
    {  
         $this->db->where("idtinfo_personnel", $idtinfo_personnel);  
         $this->db->delete("tinfo_personnel");  
    }

    function fetch_single_tinfo_personnel($idtinfo_personnel)  
    {  
         $this->db->where("idtinfo_personnel", $idtinfo_personnel);  
         $query=$this->db->get('tinfo_personnel');  
         return $query->result();  
    } 
  // fin de script tinfo_personnel

      // script pour tinfo_service 
   function make_query_tinfo_service()  
   {  
          
         $this->db->select($this->select_column17);  
         $this->db->from($this->table17);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idtinfo_service", $_POST["search"]["value"]);  
              $this->db->or_like("titre", $_POST["search"]["value"]);
              $this->db->or_like("description", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column17[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idtinfo_service', 'DESC');  
         }  
    }

   function make_datatables_tinfo_service(){  
         $this->make_query_tinfo_service();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tinfo_service(){  
         $this->make_query_tinfo_service();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tinfo_service()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table17);  
         return $this->db->count_all_results();  
    }

    function insert_tinfo_service($data)  
    {  
         $this->db->insert('tinfo_service', $data);  
    }

    
    function update_tinfo_service($idtinfo_service, $data)  
    {  
         $this->db->where("idtinfo_service", $idtinfo_service);  
         $this->db->update("tinfo_service", $data);  
    }


    function delete_tinfo_service($idtinfo_service)  
    {  
         $this->db->where("idtinfo_service", $idtinfo_service);  
         $this->db->delete("tinfo_service");  
    }

    function fetch_single_tinfo_service($idtinfo_service)  
    {  
         $this->db->where("idtinfo_service", $idtinfo_service);  
         $query=$this->db->get('tinfo_service');  
         return $query->result();  
    } 
  // fin de script tinfo_personnel

    function fetch_data_search_view_commentaire($query)
   {
      $this->db->select("*");
      $this->db->from("profile_commentaire");
      $this->db->limit(10);
      if($query != '')
      {
       $this->db->like('idart', $query);
       $this->db->or_like('nom', $query);
       $this->db->or_like('description', $query);
       $this->db->or_like('type', $query);
       $this->db->or_like('nomcat', $query);
      }
      $this->db->order_by('idcomment', 'DESC');
      return $this->db->get();
   }

   /*
   *
   *
   *==========================
   * partie fron
   *=========================
   */

    function Select_category_menu()
    {
       
        return $this->db->query("SELECT * from category order by nom ASC limit 7");
    }

    function Select_category_menu_all()
    {
       
        return $this->db->query("SELECT * from category order by nom ASC");
    }

    function Select_article_by_cat()
    {
        return $this->db->query('SELECT * FROM profile_article  GROUP BY idcat LIMIT 6 ');
    }

    function Select_article_by_category($idcat)
    {
        return $this->db->query("SELECT * FROM profile_article  WHERE idcat=".$idcat." ORDER BY created_at DESC LIMIT 24");
    }

    function Select_article_by_tag($idart)
    {
        return $this->db->query("SELECT * FROM profile_article  WHERE idart=".$idart." ORDER BY created_at DESC LIMIT 1");
    }

    function get_name_article_pub($idart){
        $this->db->where("idart", $idart);
        $nom = $this->db->get("profile_article")->result_array();
        foreach ($nom as $key) {
          $titre = $key["nom"];
          return $titre ;
        }

    }

    function get_name_video_pub($code){
        $this->db->where("code", $code);
        $nom = $this->db->get("video")->result_array();
        foreach ($nom as $key) {
          $titre = $key["nom"];
          return $titre ;
        }

    }

    function get_name_rapport_pub($code){
        $this->db->where("code", $code);
        $nom = $this->db->get("rapport")->result_array();
        foreach ($nom as $key) {
          $titre = $key["titre"];
          return $titre ;
        }

    }

    function Select_article_all_ok()
    {
        return $this->db->query("SELECT * FROM profile_article  ORDER BY created_at DESC LIMIT 24");
    }

     function Select_rapport_all_ok()
    {
        return $this->db->query("SELECT * FROM rapport  ORDER BY created_at DESC LIMIT 10");
    }

    function Select_article_pub()
    {
        return $this->db->query("SELECT * FROM profile_article  LIMIT 4 ");
    }

    function Select_all_member()
    {
        return $this->db->query("SELECT * FROM tinfo_user  LIMIT 6 ");
    }

    function Select_all_member_show()
    {
        return $this->db->query("SELECT * FROM tinfo_user  LIMIT 24 ");
    }

    function Select_all_tinfo_service()
    {
        return $this->db->query("SELECT * FROM tinfo_service  LIMIT 6 ");
    }

    function Select_all_tinfo_personnel()
    {
        return $this->db->query("SELECT * FROM tinfo_personnel  LIMIT 6 ");
    }

    function Select_all_video()
    {
        return $this->db->query("SELECT * FROM video  LIMIT 4 ");
    }

     function Select_video_tag($code)
    {
        return $this->db->query("SELECT * FROM video  WHERE code='".$code."' LIMIT 1 ");
    }

     function Select_rapport_tag($code)
    {
        return $this->db->query("SELECT * FROM rapport  WHERE code='".$code."' LIMIT 1 ");
    }

    function Select_all_to_news()
    {
        return $this->db->query("SELECT * FROM news  LIMIT 1 ");
    }

    function Select_galery_publicite()
    {
        return $this->db->query('SELECT * FROM galery2 ORDER BY created_at DESC LIMIT 3');
    }

     // auto complete text roffres d'emplois
    function fetch_data_auto_videos($query)
    {

        $this->db->like('nom', $query);
        $this->db->or_like('description', $query);
        
        $query = $this->db->get('video');
        if($query->num_rows() > 0)
        {
           foreach($query->result_array() as $row)
           {
            $output[] = array(
             'code'  => $row["code"],
             'name'  => $row["nom"],
             'image'  => $row["image"]
            );
           }
         echo json_encode($output);
        }
    }

     // auto complete des articles
    function fetch_data_auto_articles($query)
    {

        $this->db->like('nom', $query);
        $this->db->or_like('description', $query);
        
        $query = $this->db->get('article');
        if($query->num_rows() > 0)
        {
           foreach($query->result_array() as $row)
           {
            $output[] = array(
             'idart'  => $row["idart"],
             'name'  => substr($row["nom"], 0,28).'...',
             'image'  => $row["image"]
            );
           }
         echo json_encode($output);
        }
    }

    // operation  news 
    function insert_news($data)  
    {  
         $this->db->insert('news', $data);  
    }
    // modification de news 
    function update_news($idnews, $data)  
    {  
         $this->db->where("idnews", $idnews);  
         $this->db->update("news", $data);  
    }
    //suppression des photos pour la galerie
    function delete_news($idnews)  
    {  
         $this->db->where("idnews", $idnews);  
         $this->db->delete("news");  
    }

    //detail des photos pour la galerie
    function fetch_news($idnews)  
    {    $this->db->limit(1); 
         $this->db->where("idnews", $idnews);  
         $query = $this->db->get("news");  
         return $query;
    }

    // detail all 
    function Select_all_news()
    {   
        return $this->db->query('SELECT * FROM news');
    }

     // debit script video 
    function fetch_pagination_videos()
    {
      $query = $this->db->query("SELECT * FROM video");
      return $query->num_rows();
    }

    public function get_image(){
      $icone = $this->get_logo_du_site();
      $iconev = base_url()."upload/tbl_info/".$icone;
      return $iconev;
    }
    // detail de script videos de la page
   function fetch_pagination_videos_page($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("video");
    $this->db->order_by("created_at", "DESC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    $today = date('Y-m-d');
    $status = '';


    foreach($query->result() as $key)
    {

      
     $output .= '
     
      <div class="col-md-6 mb-2" style="margin-top: 15px;">
          <div class="col-md-12 most_comment plan-item-card">

              <div class="col-md-12 embed-responsive embed-responsive-21by9" style="height: 150px;"> 

                <video src="'.base_url().'upload/video/'.$key->lien.'" class="col-md-12 " controls=""
                 poster="'.$this->get_image().'">
                  <source src="'.base_url().'upload/video/'.$key->lien.'" type="video/p4">
                  <source src="'.base_url().'upload/video/'.$key->lien.'" type="video/webm">
                </video>
                
                
              </div>

              <div class="col-md-12" style="height: 70px;">
                <div class="nk-block-head-content text-center">
                    <h2 class="nk-block-title fw-normal">
                      <a href="'.base_url().'home/video/'.$key->code.'">
                      '.substr($key->nom, 0,40).'...
                       
                      </a>
                    </h2>
                    <div class="nk-block-des">
                        <p>'.nl2br(substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23)).'</p>
                    </div>
                </div>
                
              </div>
                 
          </div>
      </div>

     ';



    }
    
    return $output;
   }
   // fin script videos de la page

    // recherche de videos
  function fetch_data_search_videos($query)
  {
    $this->db->select("*");
    $this->db->from("video");
    $this->db->limit(8);
    if($query != '')
    {
     $this->db->like('nom', $query);
     $this->db->or_like('description', $query);

    }
    $this->db->order_by('nom', 'ASC');
    return $this->db->get();
  }

  // debit script galery 
  function fetch_pagination_galeries()
  {
      $query = $this->db->query("SELECT * FROM galery");
      return $query->num_rows();
  }

  // detail de script galery de la page
  function fetch_pagination_galery_page($limit, $start)
  {
    $output = '';
    $this->db->select("*");
    $this->db->from("galery");
    $this->db->order_by("created_at", "DESC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    $today = date('Y-m-d');
    $status = '';

    foreach($query->result() as $key)
    {

      
     $output .= '

      <div class="col-md-4 mb-2" style="margin-top:10px;">
          <a  href="'.base_url().'upload/galery/'.$key->image.'">
              <img src="'.base_url().'upload/galery/'.$key->image.'" alt="" class="img-thumbnail img-responsive" style="height: 200px;" />
              
          </a>
      </div>


     ';

    }
    
    return $output;
  }
   // fin script galery de la page


  // operation  rapport 
    function insert_rapport($data)  
    {  
         $this->db->insert('rapport', $data);  
    }
    // modification de rapport 
    function update_rapport($idrapport, $data)  
    {  
         $this->db->where("idrapport", $idrapport);  
         $this->db->update("rapport", $data);  
    }
    //suppression des photos pour la galerie
    function delete_rapport($idrapport)  
    {  
         $this->db->where("idrapport", $idrapport);  
         $this->db->delete("rapport");  
    }

    //detail des photos pour la galerie
    function fetch_rapport($idrapport)  
    {    $this->db->limit(1); 
         $this->db->where("idrapport", $idrapport);  
         $query = $this->db->get("rapport");  
         return $query;
    }

    // detail all 
    function Select_all_rapport()
    {   
        return $this->db->query('SELECT * FROM rapport ORDER BY created_at DESC');
    }

    function Select_idart_tag_insert($idart, $machine)
    {   
        $this->db->limit(1);
        return $this->db->get_where("vues", array(
          'idart'   =>  $idart,
          'machine' =>  $machine
        ));
    }

    // insertion des vues 
    function insert_vues_ip($data)  
    {  
       $this->db->insert('vues', $data);  
    }





    























   // validation
  function can_login($email, $password_ok)
  {
      $this->db->where('email', $email);
      $query = $this->db->get('users');
      if($query->num_rows() > 0)
      {
       foreach($query->result() as $row)
       {
          if($row->idrole == '1')
          {

             $password = md5($password_ok);
             $store_password = $row->passwords;
             if($password == $store_password)
             {
              $this->session->set_userdata('admin_login', $row->id);
             }
             else
             {
              return 'mot de passe incorrect';
             }

          }
          elseif($row->idrole == '2')
          {
             $password = md5($password_ok);
             $store_password = $row->passwords;
             if($password == $store_password)
             {
              $this->session->set_userdata('id', $row->id);
             }
             else
             {
              return 'mot de passe incorrect';
             }

          }
          elseif($row->idrole == '3')
          {
             $password = md5($password_ok);
             $store_password = $row->passwords;
             if($password == $store_password)
             {
              $this->session->set_userdata('instuctor_login', $row->id);
             }
             else
             {
              return 'mot de passe incorrect';
             }

            }
          else
          {
           return 'les informations incorrectes';
          }
          



       }
      }
      else
      {
       return 'adresse email incorrecte';
      }
    
  }


  function can_recuperation($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
               
            }
        }
        else
        {
        return 'Adresse email non trouvée!!!!';
        }
    }


    // sauvegarde des donnees  et controle d'acces 
      function create_backup() 
      {
          $this->load->dbutil();
          $options = array(
              'format' => 'txt', 
              'add_drop' => TRUE,
              'add_insert' => TRUE,
              'newline' => "\n"
          );
          $tables = array('');
          $file_name = 'santeplus';
          $backup = & $this->dbutil->backup(array_merge($options, $tables));
          $this->load->helper('download');
          force_download($file_name . '.sql', $backup);
      }

      function import_db()
      {
          $this->load->database();
          // $this->db->truncate('users');
          // $this->db->truncate('categorie_aprenant');
          // $this->db->truncate('derogation');
          // $this->db->truncate('edition');
          // $this->db->truncate('formation');
          // $this->db->truncate('inscription_formation');
          // $this->db->truncate('messagerie');
          // $this->db->truncate('notification');
          // $this->db->truncate('online');
          // $this->db->truncate('paiement');
          // $this->db->truncate('presence');
          // $this->db->truncate('question');
          // $this->db->truncate('recouvrement');
          // $this->db->truncate('recupere');
          // $this->db->truncate('reponse');
          // $this->db->truncate('role');
          // $this->db->truncate('rubrique');
          // $this->db->truncate('tbl_info');
          // $this->db->truncate('tranche');
          

          $file_n = $_FILES["file_name"]["name"];
          move_uploaded_file($_FILES["file_name"]["tmp_name"], "upload/" . $_FILES["file_name"]["name"]);
          $filename = "upload/".$file_n;
          $mysql_host = 'localhost';
          $mysql_username = 'root';
          $mysql_password = '';
          $mysql_database = 'media';
          mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connect to MySQL: ' . mysql_error());
          mysql_select_db($mysql_database) or die('Error to connect MySQL: ' . mysql_error());
          $templine = '';
          $lines = file($filename);
          foreach ($lines as $line)
          {
                  if (substr($line, 0, 2) == '--' || $line == '')
                  {
                      continue;
                  }
                  $templine .= $line;
                  if (substr(trim($line), -1, 1) == ';')
                  {
                      mysql_query($templine) or print('Error \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
                      $templine = '';
                  if (mysql_errno() == 1062) 
                  {
                  print 'no way!';
                  }
              }
          }
          unlink("upload/" . $file_n);

      }
    //fin validation et sauvegarde des données

}


?>