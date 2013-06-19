<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminsweeps extends MY_AdminController{

    public function __construct(){
        parent::__construct();
    }
    
    function index(){
        $data = array();
        
        $q = $this->products_model->get_sweep_products();
        $data['products'] = $q;

        $data['body'] = 'adminsweeps_view';
        $this->load->view('templates/template', $data);
    }
    
    function add(){
//        $data = array('body' => 'addproduct_view');
//        
//        // Load Categories to the DropDown
//        $this->load->model('categories_model');
//        $data['categories'] = $this->categories_model->get_categories();
//        
//        $this->load->view('templates/template', $data);
    }
}

?>
