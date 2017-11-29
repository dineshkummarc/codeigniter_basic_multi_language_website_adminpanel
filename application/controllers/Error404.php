<?php 
    class Error404 extends MY_Controller{
        public function __construct() {
            parent::__construct();
        }
        public function index(){
            $data['menu']=$this->Menu_model->getAllMenu();
            $this->layout->title('');
            $this->layout->view('404_v',$data);
	}
    }
