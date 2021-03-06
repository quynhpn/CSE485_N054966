<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Invoice extends CI_Controller {
  public function __construct(){
      parent::__construct();
      //Nếu chưa đăng nhập
        if (!$this->session->userdata("CheckLogin")){
            redirect(base_url() . "index.php/login/view");
        }
    }
    public function index()
    {
      $this->getListInvoice();
    }
    public function getListInvoice(){
      $this->load->model("M_invoice");
      $data['listInvoiceDetail']= $this->M_invoice->listInvoiceDetail();

        $config['total_rows'] = $this->M_invoice->countAll();
        $config['base_url'] = base_url()."index.php/invoice/index";
        $config["per_page"]=1;
      $start = $this->uri->segment(3);
       $this->load->library('pagination',$config);
      $data['listInvoice'] = $this->M_invoice->getList($start,$config['per_page']);
      //print_r($data);
      $this->load->view('admin/invoice_admin_view.php',$data);
       //echo $this->pagination->create_links();
    }   
    public function getListInvoiceS(){
      if(isset($_POST['search']))
      {
        $s = $_POST['search'];
        $this->session->set_userdata('search',$s);
      }
      else 
      {
        $s=$this->session->userdata('search');  
      }
        $s=trim(htmlspecialchars(addslashes($s)));
        $this->load->model("M_invoice");
        $data['listInvoiceDetail']= $this->M_invoice->listInvoiceDetail();
        $config['total_rows'] = $this->M_invoice->countAllS($s);
        $config['base_url'] = base_url()."index.php/invoice/getListInvoiceS";
        $config["per_page"]=1;
        $start = $this->uri->segment(3);
        $this->load->library('pagination',$config);
        $data['listInvoice'] = $this->M_invoice->getListS($start,$config['per_page'],$s);
        $this->load->view('admin/invoice_admin_view.php',$data);
        //print_r ($s);
    }



}