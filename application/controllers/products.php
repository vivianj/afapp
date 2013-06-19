<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends MY_AdminController{
    
    public function __construct(){
        parent::__construct();
    }
    
    function index(){
        $data = array();
        
        $q = $this->products_model->get_products();
        $data['products'] = $q;
        
        $data['body'] = 'products_view';
        $this->load->view('templates/template', $data);
    }
    
    function add(){
        $data = array('body' => 'addproduct_view');
        
        // Load Categories to the DropDown
        $this->load->model('categories_model');
        $data['categories'] = $this->categories_model->get_categories();
        
        $this->load->view('templates/template', $data);
    }
    
    function edit($long_sku_id){
        $data = array('body' => 'editproduct_view');
        // Load Categories to the DropDown
        $this->load->model('categories_model');
        $data['categories'] = $this->categories_model->get_categories();
        
        $data['product'] = $this->products_model->get_products_by_longskuid($long_sku_id);
        $this->load->view('templates/template', $data);
    }
    
    function create(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('long_sku_id1', 'Long SKU 1st block', 'trim|required|numeric|min_length[3]');
        $this->form_validation->set_rules('long_sku_id2', 'Long SKU 2nd block', 'trim|required|numeric|min_length[3]');
        $this->form_validation->set_rules('long_sku_id3', 'Long SKU 3rd block', 'trim|required|numeric|min_length[4]');
        $this->form_validation->set_rules('long_sku_id4', 'Long SKU 4th block', 'trim|required|numeric|min_length[3]');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        
        if ($this->form_validation->run() == FALSE){
            $this->add();
        }else{
            $data = array(
                'long_sku_id' => $this->input->post('long_sku_id1').$this->input->post('long_sku_id2').$this->input->post('long_sku_id3').$this->input->post('long_sku_id4'),
                'long_sku' => $this->input->post('long_sku_id1').'-'.$this->input->post('long_sku_id2').'-'.$this->input->post('long_sku_id3').'-'.$this->input->post('long_sku_id4'),
                'gender' => $this->input->post('gender'),
                'category_id' => $this->input->post('category_id'),
                'name' => $this->input->post('name'),
                'color' => $this->input->post('color'),
                'price' => $this->input->post('price'),
                'img' => $this->input->post('img'),
                'url' => $this->input->post('url'),
                'onsweep' => $this->input->post('onsweep') == 'on' ? 1 : 0
            );

            $this->products_model->add_product($data);

            $this->index();
        }
    }
    
    function update($long_sku_id){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('long_sku_id1', 'Long SKU 1st block', 'trim|required|numeric|min_length[3]');
        $this->form_validation->set_rules('long_sku_id2', 'Long SKU 2nd block', 'trim|required|numeric|min_length[3]');
        $this->form_validation->set_rules('long_sku_id3', 'Long SKU 3rd block', 'trim|required|numeric|min_length[4]');
        $this->form_validation->set_rules('long_sku_id4', 'Long SKU 4th block', 'trim|required|numeric|min_length[3]');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        
        if ($this->form_validation->run() == FALSE){
            $this->edit();
        }else{
            $data = array(
                'long_sku_id' => $this->input->post('long_sku_id1').$this->input->post('long_sku_id2').$this->input->post('long_sku_id3').$this->input->post('long_sku_id4'),
                'long_sku' => $this->input->post('long_sku_id1').'-'.$this->input->post('long_sku_id2').'-'.$this->input->post('long_sku_id3').'-'.$this->input->post('long_sku_id4'),
                'gender' => $this->input->post('gender'),
                'category_id' => $this->input->post('category_id'),
                'name' => $this->input->post('name'),
                'color' => $this->input->post('color'),
                'price' => $this->input->post('price'),
                'img' => $this-> input->post('img'),
                'url' => $this->input->post('url'),
                'onsweep' => $this->input->post('onsweep') == 'on' ? 1 : 0
            );
        
            $this->products_model->update_product($long_sku_id, $data);

            $this->index();
        }
    }
    
    function delete($long_sku_id){
        $this->products_model->delete_product($long_sku_id);
        $this->index();
    }
}

?>
