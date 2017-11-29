<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class MY_Controller extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $url=$_SERVER['REQUEST_URI'];
            $leng=$_SERVER['REQUEST_URI'];
            $leng=explode('/',$leng);
            $url=explode('/',$url);
            $url1=$leng['1'];
            if(strlen($url[1])==2){
                unset($url[0],$url[1]);   
            }else{
                unset($url[0]); 
            }
            $controller= implode("/", $url);

            if($url1=='' || strlen($url1)>2){
                 $lengChange='';

            }else{
                $lengChange=$url1;

            }

            $this->layout->lengChange($lengChange);
            $this->layout->controller($controller);
            $this->layout->menu($this->Menu_model->getAllMenu($parent_id=0,$lengChange));
            $this->layout->menuIn($this->Menu_model->getMenuIn($lengChange));

            //$this->layout->reklam($this->Reclame_model->getDescReclame());
        }

    }
    

