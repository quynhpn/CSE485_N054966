<?php
class M_invoice extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    // public function listInvoice(){
    //   $query=$this->db->query("SELECT * FROM donhang JOIN chitietdh ON donhang.MaDH = chitietdh.MaDH JOIN khachhang on donhang.SĐT = khachhang.SĐT");
    //   return $query->result_array();
    // }
    public function listInvoiceDetail(){
      $query=$this->db->query("SELECT * FROM dichvu;");
      return $query->result_array();
    }
    public function countAll(){
        $query=$this->db->query("SELECT * FROM donhang JOIN chitietdh ON donhang.MaDH = chitietdh.MaDH JOIN khachhang on donhang.SĐT = khachhang.SĐT");
        return $query->num_rows();
    }
    public function getList($start,$size){
        $start=isset($start) ? $start : 0;
        $query=$this->db->query("SELECT * FROM donhang JOIN chitietdh ON donhang.MaDH = chitietdh.MaDH JOIN khachhang on donhang.SĐT = khachhang.SĐT limit $start , $size;");
        return $query->result_array(); 
    }
}
?>