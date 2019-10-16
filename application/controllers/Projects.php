<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Projects extends App_Controller
{
    // function __construct()
    // {
    //     parent::__construct();
    // }

    public function index()
    {
        $data = array(
            'title' => 'Projects List',
            'main_content' => 'projects/projects_list',
            'projects' => $this->Projects_model->get_all(),
        );
        $this->load->view('layouts/mainview', $data);
    }


    public function upload() 
    {
        $data = array(
            'title' => 'Upload Project',
            'main_content' => 'projects/projects_form',
            'project_title' => set_value('project_title'),
            'dateandtime' => set_value('dateandtime'),
            'abstract' => set_value('abstract'),
            'author' => set_value('author'),
        );
        
        $this->load->view('layouts/mainview', $data);
    }
    
    public function upload_action() {
        // upload file
        $file = $this->upload_document($this->input->post('project_title',TRUE));

        // check if upload was succesful
        $arr = explode('/',trim($file));
        if($arr[0] != 'uploads'){
            $this->session->set_flashdata('error_message', $file);
            redirect(site_url('projects/upload'));
        }else{
            $data = array(
                'title' => $this->input->post('project_title',TRUE),
                'author' => $this->input->post('author',TRUE),
                'dateandtime' => $this->input->post('dateandtime',TRUE),
                'abstract' => $this->input->post('abstract',TRUE),
                'file' => $file,
            );

            $this->Projects_model->insert($data);
            $this->session->set_flashdata('message', 'Project Uploaded');
            redirect(site_url('projects'));
        }
            
    }
    
    public function update($id) 
    {
        $row = $this->Projects_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('projects/update_action'),
		'id' => set_value('id', $row->id),
		'title' => set_value('title', $row->title),
		'dateandtime' => set_value('dateandtime', $row->dateandtime),
		'abstract' => set_value('abstract', $row->abstract),
		'file' => set_value('file', $row->file),
	    );
            $this->load->view('projects/projects_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('projects'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'title' => $this->input->post('title',TRUE),
		'dateandtime' => $this->input->post('dateandtime',TRUE),
		'abstract' => $this->input->post('abstract',TRUE),
		'file' => $this->input->post('file',TRUE),
	    );

            $this->Projects_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('projects'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Projects_model->get_by_id($id);

        if ($row) {
            $this->Projects_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('projects'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('projects'));
        }
    }

    

}

/* End of file Projects.php */
/* Location: ./application/controllers/Projects.php */