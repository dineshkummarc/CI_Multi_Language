<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function testLanguage() {
		// ===========  Choose Language ============
		  $this->load->helper('language');
          $this->load->helper('url');
          $lang = $this->uri->segment(1);
          if($lang =='en') {
          		$this->lang->load('en', 'english');
          } else if($lang == 'bn'){
          		$this->lang->load('ben', 'bengoli');
          } else {
          		$this->lang->load('en', 'english');
          }
		//=============================================
		$this->load->view('testLanguage');
	}

	public function language_ajax() {
		$lang = $_POST['lang'];
		$lang = array('language'=>$lang);
		$this->session->set_userdata($lang);
		echo "done";
	}


	public function bycookie() {
		// Load Helper
			$this->load->helper('cookie'); 
			$this->load->helper('language');
		// SET ARRAY
                $cookie_en = array(
                'name'   => 'languageCi',
                'value'  => 'eng',
                'expire' => time()+86500,
                );

                $cookie_ch = array(
                'name'   => 'languageCi',
                'value'  => 'ben',
                'expire' => time()+86500,
                );	
        // If language change by post
        	 if (isset($_POST['lang']) && $_POST['lang']=='en') {
                // delete chines
                if (get_cookie('languageCi')) { delete_cookie("languageCi");    }
                // en not already set
                if (!get_cookie('languageCi')) {
                        set_cookie($cookie_en);
                }
                 redirect("welcome/bycookie");
                 
	        } else if (isset($_POST['lang']) && $_POST['lang']=='ben')  {
	                // delete english
	                if (get_cookie('languageCi')) { delete_cookie("languageCi");    }
	                // ch not already set
	                if (!get_cookie('languageCi')) {
	                // set chines
	                	set_cookie($cookie_ch);
	                }
	               redirect("welcome/bycookie");
	        } 
        // Get COOKIE 
	        if( get_cookie('languageCi')=="ben" ) {
	        		 $this->lang->load('ben', 'bengoli');
	        }else{
	               $this->lang->load('en', 'english');
	        }        

	    // load view
	    	 $this->load->view('test');    
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */