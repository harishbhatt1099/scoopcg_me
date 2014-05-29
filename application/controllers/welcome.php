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
	 
      public function __construct() {
        parent::__construct();
        //$this->load->model('admin_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        //$this->load->library('email');
        //session_start();
    }
	public function index($page = 'home')
	{
  $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->load->helper('url');
	$this->load->view('templates/header', $data);
  

       	////$this->load->view('pages/'.$page, $data);
		$this->load->view('welcome_message');
  
	$this->load->view('templates/footer', $data);
	}
	
	public function labee($page = 'home')
	{
  $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->load->helper('url');
	$this->load->view('templates/header', $data);
  

       	////$this->load->view('pages/'.$page, $data);
		$this->load->view('labee');
  
	$this->load->view('templates/footer', $data);
	}
	
	public function upload()
	{
	
	$count=$_POST['haridh'];
	
	
	for($i=0;$i<=$count;$i++){
		//echo "file_$i";
		ini_set('memory_limit', '400M');
        ini_set('upload_max_filesize', '300M');
        ini_set('post_max_size', '400M');
        ini_set('max_input_time', 3600);
        ini_set('max_execution_time', 3600);
		$config['file_name'] = time();
		$this->load->library('upload');
		$config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'doc|docx|pdf|jpg|jpeg|gif|png';
		$this->upload->initialize($config);
		
		if ($this->upload->do_upload("file_$i")) {
		
		}
		}	echo $count."  Successfully Uploaded";
}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */