<?php
class M_service extends CI_Model{
  public function __construct(){
  parent::__construct();
}
  public function listService(){
    $query=$this->db->query("SELECT * FROM dichvu");
    return $query->result_array();
  }
  public function countAll(){
        $query=$this->db->query("SELECT * FROM dichvu");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM dichvu limit $start , $size;");
        return $query->result_array(); 
    }
}

?>