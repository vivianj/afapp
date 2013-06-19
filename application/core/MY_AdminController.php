<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_AdminController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->is_logged_in_as_admin();
    }
    
    function is_logged_in_as_admin(){
        
        $is_logged_in_as_admin = $this->session->userdata('is_logged_in_as_admin');
        if(!isset($is_logged_in_as_admin) || $is_logged_in_as_admin !== TRUE){
            redirect('login');
        }
    }
}
?>
