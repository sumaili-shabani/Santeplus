<?php 

/**
 * 
 */

defined('BASEPATH') OR exit('No direct script access allowed');  
class home extends CI_Controller
{
    
        private $token;
        private $connected;
        public function __construct()
        {
          parent::__construct();
          
          $this->load->library('form_validation');
          $this->load->library('encryption');
          // $this->load->library('pdf');
          $this->load->model('crud_model'); 

          $this->load->helper('url');

          $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
          $this->connected = $this->session->userdata('admin_login');

        }


        function index(){
            $data['title']          = "L'acccueil vous soit doux!";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            $data['padding_articles']   = $this->crud_model->Select_padding_articles_tri();

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories2']    = $this->crud_model->Select_category();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['infos_videos']  = $this->crud_model->Select_all_video();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
            $data['infos_news']  = $this->crud_model->Select_all_to_news();

            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();
            
            // $this->load->view('frontend/exemple', $data); 
            $this->load->view('frontend/panel', $data);
        }


        function category($param1 =''){
            $data['title']          = "Nos Articles!";
            $data['title2']         = $this->crud_model->get_name_article_cat($param1);
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories2']    = $this->crud_model->Select_category();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['infos_videos']  = $this->crud_model->Select_all_video();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['category_article']  = $this->crud_model->Select_article_by_category($param1);
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();
            $data['padding_articles']   = $this->crud_model->Select_padding_articles_tri();

            $data['article_tag']  = $this->crud_model->Select_our_article_tag($param1);


            $this->load->view('frontend/_pannelPub', $data);

            
            // $this->load->view('frontend/category', $data);
        }

        function article($param1 =''){
           
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            $data['padding_articles']   = $this->crud_model->Select_padding_articles_tri();

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories2']    = $this->crud_model->Select_category();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['infos_videos']  = $this->crud_model->Select_all_video();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();

            if ($param1 !='') {
                $title_job = $this->crud_model->get_name_article_pub($param1);
                $data['title']          = $title_job;
                $data['category_article']  = $this->crud_model->Select_article_by_tag($param1);
                $data['offre_tag']  = $this->crud_model->Select_our_articles_tag($param1);
                $data['commentaires']  = $this->crud_model->Select_our_commentaire_to_articles_tag($param1);
                $this->load->view('frontend/_pannelArticle', $data);
            }
            else{
                $data['title']          = "Nos publications";
                $data['category_article']  = $this->crud_model->Select_article_all_ok();
                $data['article_tag']  = $this->crud_model->Select_article_all_ok();
                // $this->load->view('frontend/article', $data);
                $this->load->view('frontend/article', $data);

            }

            
            
        }

        function video($param1=''){
          
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


            if ($param1 !='') {
                $title_job = $this->crud_model->get_name_video_pub($param1);
                $data['title']          = $title_job;
                $data['infos_videos']  = $this->crud_model->Select_video_tag($param1);
                $this->load->view('frontend/video_tag', $data);
            }
            else{
                $data['title']          = "Nos vid??os!";
                $this->load->view('frontend/video', $data);
            }
            
           
        }

        function rapport($param1=''){
          
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


            if ($param1 !='') {
                $title_job = $this->crud_model->get_name_rapport_pub($param1);
                $data['title']          = "Rapport portant sur ".$title_job;
                $data['infos_rapport']  = $this->crud_model->Select_rapport_tag($param1);
                $this->load->view('frontend/rapport_tag', $data);
            }
            else{

                $data['title']              = "Nos rapports!";
                $data['category_article']   = $this->crud_model->Select_rapport_all_ok();
                $this->load->view('frontend/rapport', $data);
            }
            
           
        }

        function galery($param1=''){
            $data['title']          = "Nos vid??os!";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


             $this->load->view('frontend/galery', $data);
            
           
        }


        function contact(){
            $data['title']          = "Contact pour information";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();

            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();
            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


            // $this->load->view('frontend/contact', $data);
            $this->load->view('frontend/_contact_info', $data);
            
        }

        function traval(){
            $data['title']          = "Ce que nous faisons";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['infos_news']  = $this->crud_model->Select_all_to_news();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


             $this->load->view('frontend/traval', $data);
            
           
        }

        function don(){
            $data['title']          = "Nous faire un bon!";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['infos_news']  = $this->crud_model->Select_all_to_news();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


             $this->load->view('frontend/don', $data);
         
        }

        function structure(){
            $data['title']          = "Structure de gestion";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['infos_news']  = $this->crud_model->Select_all_to_news();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


             $this->load->view('frontend/structure', $data);
         
        }

        function financement(){
            $data['title']          = "Savoir plus sur le financement";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['infos_news']  = $this->crud_model->Select_all_to_news();

            $data['infos_videos']  = $this->crud_model->Select_all_video();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


            $this->load->view('frontend/financement', $data);
            
           
        }

        function carriere(){
            $data['title']          = "Savoir plus sur nos carri??res";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['infos_news']  = $this->crud_model->Select_all_to_news();
            
            $data['infos_videos']  = $this->crud_model->Select_all_video();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


            $this->load->view('frontend/carriere', $data);
            
           
        }

        function partenariat(){
            $data['title']          = "Savoir plus sur partenariats";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['infos_news']  = $this->crud_model->Select_all_to_news();
            
            $data['infos_videos']  = $this->crud_model->Select_all_video();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


            $this->load->view('frontend/partenariat', $data);
            
           
        }

        function member(){
            $data['title']          = "Savoir plus sur nos membres";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member_show();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['infos_news']  = $this->crud_model->Select_all_to_news();
            
            $data['infos_videos']  = $this->crud_model->Select_all_video();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


            $this->load->view('frontend/member', $data);
            
           
        }


        function about(){
            $data['title']          = "Apropos de nous";
            $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

            
            $data['categories']     = $this->crud_model->Select_category_menu();
            $data['categories_all']     = $this->crud_model->Select_category_menu_all();
            

            $data['article_blog_one']  = $this->crud_model->Select_article_by_cat();
            $data['article_pub']  = $this->crud_model->Select_article_pub();

            $data['member_pub']  = $this->crud_model->Select_all_member();

            $data['infos_services']  = $this->crud_model->Select_all_tinfo_service();
            $data['infos_personnels']  = $this->crud_model->Select_all_tinfo_personnel();

            $data['pub_publicite']  = $this->crud_model->Select_galery_publicite();

            $data['infos_news']  = $this->crud_model->Select_all_to_news();

            $data['infos_videos']  = $this->crud_model->Select_all_video();

            $data['categories2']    = $this->crud_model->Select_category();
            $data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


            $this->load->view('frontend/about', $data);
            
           
        }

        // auto complete de videos
        function fetch_auto_vides()
        {
            echo $this->crud_model->fetch_data_auto_videos($this->uri->segment(3));
        }

         // auto complete articles
        function fetch_auto_articles()
        {
            echo $this->crud_model->fetch_data_auto_articles($this->uri->segment(3));
        }


        public function get_image(){
            $icone = $this->crud_model->get_logo_du_site();
            $iconev = base_url()."upload/tbl_info/".$icone;
            return $iconev;
        }

         // pagination de galery de la pages
         function pagination__videos()
         {

          $this->load->library("pagination");
          $config = array();
          $config["base_url"] = "#";
          $config["total_rows"] = $this->crud_model->fetch_pagination_videos();
          $config["per_page"] = 4;
          $config["uri_segment"] = 3;
          $config["use_page_numbers"] = TRUE;
          $config["full_tag_open"] = '<ul class="pagination">';
          $config["full_tag_close"] = '</ul>';
          $config["first_tag_open"] = '<li class="page-item">';
          $config["first_tag_close"] = '</li>';
          $config["last_tag_open"] = '<li class="page-item">';
          $config["last_tag_close"] = '</li>';
          $config['next_link'] = '<li class="page-item active"><i class="">&gt;&gt;</i>';
          $config["next_tag_open"] = '<li class="page-item">';
          $config["next_tag_close"] = '</li>';
          $config["prev_link"] = '<li class="page-item active"><i class="">&lt;&lt;</i>';
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
           'country_table'   => $this->crud_model->fetch_pagination_videos_page($config["per_page"], $start)
          );
          echo json_encode($output);
         }

         // recherche de videos
         function fetch_search_our_videos()
         {
              $output = '';
              $query = '';
              if($this->input->post('query'))
              {
               $query = $this->input->post('query');
              }
              $data = $this->crud_model->fetch_data_search_videos($query);
              $today = date('Y-m-d');
              $status = '';
              
              if($data->num_rows() > 0)
              {

                  
                   foreach($data->result() as $key)
                   {



                        $output .= '

                         <div class="col-md-6 mb-2" style="margin-top: 15px;">
                          <div class="col-md-12 most_comment plan-item-card">

                              <div class="col-md-12 embed-responsive embed-responsive-21by9" style="height: 150px;"> 

                                <video src="'.base_url().'upload/video/'.$key->lien.'" class="col-md-12 " controls=""
                                 poster="'.base_url().'upload/video/'.$key->image.'">
                                  <source src="'.base_url().'upload/video/'.$key->lien.'" type="video/p4">
                                  <source src="'.base_url().'upload/video/'.$key->lien.'" type="video/webm">
                                </video>
                                
                                
                              </div>

                              <div class="col-md-12" style="height: 70px;">
                                <div class="nk-block-head-content text-center">
                                    <h5 class="nk-block-title fw-normal">
                                      <a href="'.base_url().'home/video/'.$key->code.'">
                                      '.substr($key->nom, 0,40).'...
                                       
                                      </a>
                                    </h5>
                                    <div class="nk-block-des">
                                        <p>'.nl2br(substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23)).'</p>
                                    </div>
                                </div>
                                
                              </div>
                                 
                          </div>
                      </div>

                     ';
                   }
              }
              else
              {
                    $output .= '
                        <div class="col-md-12 media text-muted pt-2 bg-white">
                            <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: 300px;" src="data:'.base_url().'upload/annumation/b.gif" srcset="'.base_url().'upload/annumation/b.gif" data-holder-rendered="true">
                            
                          </div>
                    ';
              }

            echo $output;
         }

         // pagination de galery de la pages
         function pagination__galeries()
         {

          $this->load->library("pagination");
          $config = array();
          $config["base_url"] = "#";
          $config["total_rows"] = $this->crud_model->fetch_pagination_galeries();
          $config["per_page"] = 9;
          $config["uri_segment"] = 3;
          $config["use_page_numbers"] = TRUE;
          $config["full_tag_open"] = '<ul class="pagination">';
          $config["full_tag_close"] = '</ul>';
          $config["first_tag_open"] = '<li class="page-item">';
          $config["first_tag_close"] = '</li>';
          $config["last_tag_open"] = '<li class="page-item">';
          $config["last_tag_close"] = '</li>';
          $config['next_link'] = '<li class="page-item active"><i class="">&gt;&gt;</i>';
          $config["next_tag_open"] = '<li class="page-item">';
          $config["next_tag_close"] = '</li>';
          $config["prev_link"] = '<li class="page-item active"><i class="">&lt;&lt;</i>';
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
           'country_table'   => $this->crud_model->fetch_pagination_galery_page($config["per_page"], $start)
          );
          echo json_encode($output);
         }

         function operation_contact(){

        if ($_FILES['user_image']['size'] > 0) {
            
            $logo = $this->upload_image_fichier_contact_radio();
            $insert_data = array(  

                   'nom'           =>     $this->input->post('name'),  
                   'sujet'         =>     $this->input->post("subject"),
                   'email'         =>     $this->input->post("email"),  
                   'message'       =>     $this->input->post("message"),
                   'fichier'       =>     $logo  
                   
             ); 

            $requete=$this->crud_model->insert_contact($insert_data);
            echo("Nous vous r??pondrons dans un instant");   
        }
        else{
            $insert_data = array(  

                   'nom'           =>     $this->input->post('name'),  
                   'sujet'         =>     $this->input->post("subject"),
                   'email'         =>     $this->input->post("email"),  
                   'message'       =>     $this->input->post("message")                
             ); 

            $requete=$this->crud_model->insert_contact($insert_data);
            echo("Nous vous r??pondrons dans un instant");
        }
  
      }


      function upload_image_fichier_contact_radio()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/contact/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

      // insertion de vues 
    function insert_vue(){

        $idart      = $this->input->post('idart');
        $machine    = $this->input->post('machine');
        $test_existe = $this->crud_model->Select_idart_tag_insert($idart,$machine);
        if ($test_existe->num_rows() > 0) {
            echo("adresse ip existe deja");
        }
        else{

            $data_insert = array(
                'idart'        => $this->input->post('idart'),
                'machine'       => $this->input->post('machine')
            );

            $query = $this->crud_model->insert_vues_ip($data_insert);

        }
        
    }


        // pagination de articles
     function pagination_access_our_article()
     {

      $this->load->library("pagination");
      $config = array();
      $config["base_url"] = "#";
      $config["total_rows"] = $this->crud_model->fetch_pagination_articles();
      $config["per_page"] = 3;
      $config["uri_segment"] = 3;
      $config["use_page_numbers"] = TRUE;
      $config["full_tag_open"] = '<ul class="flex-wr-c-c m-rl--7 p-t-15 pagination mb-0 pagination-list">';
      $config["full_tag_close"] = '</ul>';
      $config["first_tag_open"] = '<li class="page-item">';
      $config["first_tag_close"] = '</li>';
      $config["last_tag_open"] = '<li class="page-item">';
      $config["last_tag_close"] = '</li>';
      $config['next_link'] = '<li class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active"><i class="" style="color:white;">&gt;&gt;</i>';
      $config["next_tag_open"] = '<li class="page-item">';
      $config["next_tag_close"] = '</li>';
      $config["prev_link"] = '<li class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active"><i class="" style="color:white;">&lt;&lt;</i>';
      $config["prev_tag_open"] = "<li class='page-item'>";
      $config["prev_tag_close"] = "</li>";
      $config["cur_tag_open"] = "<li class='flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active'><a href='#' class='page-link'>";
      $config["cur_tag_close"] = "</a></li>";
      $config["num_tag_open"] = "<li class='page-item'>";
      $config["num_tag_close"] = "</li>";
      $config["num_links"] = 1;
      $this->pagination->initialize($config);
      $page = $this->uri->segment(3);
      $start = ($page - 1) * $config["per_page"];

      $output = array(
       'pagination_link' => $this->pagination->create_links(),
       'country_table'   => $this->crud_model->fetch_details_pagination_articles($config["per_page"], $start)
      );
      echo json_encode($output);
     }


     // recherche de formations
     function fetch_search_our_articles()
     {
          $output = '';
          $query = '';
          if($this->input->post('query'))
          {
           $query = $this->input->post('query');
          }
          $data = $this->crud_model->fetch_data_search_articles($query);
          
          if($data->num_rows() > 0)
          {

              
               foreach($data->result() as $key)
               {

                 $vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$key->idart." ");
                  if ($vues->num_rows() <=0) {
                    $nombre_vue = 0;
                  }
                  else{
                    foreach ($vues->result_array() as $key_vue) {
                      $nombre_vue = $key_vue['total'];
                    }
                  }

                $output .= '
                  <div class="col-sm-6 p-r-25 p-r-15-sr991">
                    <!-- Item latest -->
                    <div class="m-b-45">
                      <a href="'.base_url().'home/article/'.$key->idart.'" class="wrap-pic-w hov1 trans-03">
                        <img src="'.base_url().'upload/article/'.$key->image.'" alt="IMG" style="height: 200px;">
                      </a>
                      <div class="p-t-16">
                        <h5 class="p-b-5">
                          <a href="'.base_url().'home/article/'.$key->idart.'" class="f1-m-3 cl2 hov-cl10 trans-03">
                            '.nl2br(substr($key->nom, 0,100)).'...
                          </a>
                        </h5>
                        <span class="cl8">
                         
                          <span class="f1-s-3 m-rl-3">
                            <i class="fa fa-eye"></i>  '.$nombre_vue.' vue(s) &nbsp;&nbsp; - &nbsp;&nbsp;
                          </span>
                          <span class="f1-s-3">
                            '.nl2br(substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23)).'
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>

                  
                 ';

               }
          }
          else
          {
                $output .= '
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
                        
                      </div>
                ';
          }

        echo $output;
     }

     // fin script articles 

    /*
    *======================================
    les script commence pour la articles
    =======================================
    ___________________________________________
    */

    // auto complete text roffres d'emplois
    function fetch_auto_offres_articles()
    {
        echo $this->crud_model->fetch_data_auto_articles($this->uri->segment(3));
    }

    // auto complete text roffres d'emplois
    function search_auto_offres_articles()
    {
        echo $this->crud_model->recherche_data_auto_articles($this->uri->segment(3));
    }

















}