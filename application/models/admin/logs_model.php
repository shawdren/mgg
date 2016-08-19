<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class logs_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();


    }

    public function get_logs()
    {
        $query = $this->db->get('logs');

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    }

}