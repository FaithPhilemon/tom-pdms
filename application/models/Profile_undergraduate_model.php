<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile_undergraduate_model extends CI_Model
{

    public $table = 'profile_undergraduate';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('university_id', $q);
	$this->db->or_like('campus_address', $q);
	$this->db->or_like('campus_state_id', $q);
	$this->db->or_like('date_of_grad', $q);
	$this->db->or_like('program_of_study', $q);
	$this->db->or_like('present_level', $q);
	$this->db->or_like('enrollment_status', $q);
	$this->db->or_like('cgpa', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('university_id', $q);
	$this->db->or_like('campus_address', $q);
	$this->db->or_like('campus_state_id', $q);
	$this->db->or_like('date_of_grad', $q);
	$this->db->or_like('program_of_study', $q);
	$this->db->or_like('present_level', $q);
	$this->db->or_like('enrollment_status', $q);
	$this->db->or_like('cgpa', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Profile_undergraduate_model.php */
/* Location: ./application/models/Profile_undergraduate_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-08 13:30:06 */
/* http://harviacode.com */