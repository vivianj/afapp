<?php

class login extends CI_Controller{
    
    function index(){
    
        $data['body'] = 'login_view';
        $this->load->view('templates/template', $data);
    }
    
    function log_in(){
        $this->load->model('users_model');
        $user = $this->users_model->get_user($this->input->post('username'), sha1($this->input->post('password')));
        
        if($user){
            $userdata = array(
                'username' => $user[0]->username,
                'is_logged_in' => TRUE,
                'is_logged_in_as_admin' => ($user[0]->type == 1),
                'nickname' => $user[0]->nickname
            );
            $this->session->set_userdata($userdata);
            if($userdata['is_logged_in_as_admin'])
                redirect('products');
            else if($userdata['is_logged_in'])
                redirect('usersweeps');
            else
                redirect('login');
        }else{
            $data['body'] = 'login_view';
            $data['errorMsg'] = 'Login Failed!';
            $this->load->view('templates/template', $data);
        }
    }
    
    function log_out(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>
