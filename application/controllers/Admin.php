<?php
    class admin extends CI_Controller{
        public function __construct() {
            parent::__construct();
            
        }
        public function index(){
            if($this->input->post('adminBut')){
                $this->load->model('LoginModel');
                $user = $this->input->post('user');
                $pass = $this->input->post('pass');
//                
                $userData=array(
                    'user' => $user,
                    'pass'=> $pass
                );
                $data=$this->LoginModel->Login($userData);
                if($data){
                     $this->session->set_userdata('id',$data['id']);
                     session_write_close();
                    redirect(base_url('admin/loginEd'));
                }
                 
               
               
            }
            
            $this->load->view('admin/index');
        }
        public function loginEd(){
            print_r($this->session->userdata());
            if(!$this->session->userdata('id')){
                redirect(base_url('admin'));
            }else if($this->session->userdata('id')){
                redirect(base_url('SiteEdit/'));
            }
        }
       public function logOut(){
            $this->session->sess_destroy();
            redirect(base_url('/'));
        }
    }