<?php 

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
}

class Admin_Controller extends MY_Controller {
	// var $permission = array();

	// public function __construct() {
	// 	parent::__construct();

	// 	$group_data = array();
	// 	if(empty($this->session->userdata('logged_in'))) {
	// 		$session_data = array('logged_in' => FALSE);
	// 		$this->session->set_userdata($session_data);
	// 	}
	// 	else {
	// 		$user_id = $this->session->userdata('id');
	// 	}
	// }

	public function upload_document($topic){
    	// uploads/users
        $config['upload_path'] = 'uploads/documents';
        $config['file_name'] = $topic;
        $config['allowed_types'] = 'docx|doc|pdf';
        $config['max_size'] = '1024';

        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('document'))
        {
            $error = $this->upload->display_errors();
			return $error;

        }else{
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['document']['name']);
            $type = $type[count($type) - 1];
            
			$path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;            
        }
	}

}
