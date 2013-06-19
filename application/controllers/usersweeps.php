<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usersweeps extends MY_UserController{

    public function __construct(){
        parent::__construct();
    }
    
    function index(){
        $data = array();
        
        $q = $this->products_model->get_sweep_products();
        $data['products'] = $q;

        $data['body'] = 'usersweeps_view';
        $this->load->view('templates/template', $data);
    }
    
    function quicksweep(){
        echo 'Buliding';
    }
}

?>
