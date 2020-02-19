<?php
class DAL extends CI_Model
{
  function __construct()  {
    parent::__construct();
    $this->load->database();
  }
  //$query = $this->db->query('YOUR QUERY HERE');

  function query($queryText){
    $this->benchmark->mark('code_start');
    $query = $this->db->query($queryText);
    $this->benchmark->mark('code_end');
    $data = array('query' => $query, 'elapsed_time' => $this->benchmark->elapsed_time('code_start', 'code_end'));
    return $data;
  }
}
?>
