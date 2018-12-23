<?php 
class M_appointment extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function listAppointment(){
        $query=$this->db->query("SELECT * FROM lichhen JOIN khachhang ON khachhang.SDTKH=lichhen.SDTKH ");
        return $query->result_array();
    }

    public function countAll(){
        $query=$this->db->query("SELECT * FROM lichhen JOIN khachhang ON khachhang.SDTKH=lichhen.SDTKH;");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM lichhen JOIN khachhang ON khachhang.SDTKH=lichhen.SDTKH limit $start , $size;");
        return $query->result_array(); 
    }
    public function deleteByID($id){
        $this->db->query("DELETE FROM `lichhen` WHERE  lichhen.SDTKH='$id';");
    }

}
?>
