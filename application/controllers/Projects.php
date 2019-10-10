<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Projects extends CI_Controller
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

    

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('projects/create_action'),
	    'id' => set_value('id'),
	    'title' => set_value('title'),
	    'dateandtime' => set_value('dateandtime'),
	    'abstract' => set_value('abstract'),
	    'file' => set_value('file'),
	);
        $this->load->view('projects/projects_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'title' => $this->input->post('title',TRUE),
		'dateandtime' => $this->input->post('dateandtime',TRUE),
		'abstract' => $this->input->post('abstract',TRUE),
		'file' => $this->input->post('file',TRUE),
	    );

            $this->Projects_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
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

    public function _rules() 
    {
	$this->form_validation->set_rules('title', 'title', 'trim|required');
	$this->form_validation->set_rules('dateandtime', 'dateandtime', 'trim|required');
	$this->form_validation->set_rules('abstract', 'abstract', 'trim|required');
	$this->form_validation->set_rules('file', 'file', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Projects.php */
/* Location: ./application/controllers/Projects.php */