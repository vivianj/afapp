<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_UserController extends CI_Controller{

    function __construct(){
        parent::__construct();
         $this->is_logged_in();
    }
    
    function is_logged_in(){
        
        $is_logged_in = $this->session->userdata('is_logged_in');
        
        if(!isset($is_logged_in) || $is_logged_in !== true){
            redirect('login');
        }
    }
}
?>
