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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */