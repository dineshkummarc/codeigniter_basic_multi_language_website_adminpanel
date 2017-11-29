<?php
    class SiteEdit extends CI_Controller{

        public function __construct() {
            parent::__construct();

            if(!$this->session->userdata('id')){
                redirect(base_url('admin'));
            }
            $data['error']='';
            $data['select_menu']=$this->Menu_model->getAllMenu($parent_id=0);
            $this->load->view('admin/header',$data);
        }

        public function index(){
            $data['select_menu']=$this->Menu_model->getAllMenu($parent_id=0);
            $this->load->view('admin/menu',$data);
        }

        public function addMenu(){
            $this->load->model('Menu_model');
            if($this->input->post('addMenu')){
                $arm_title=$this->input->post('arm_title');
                $rus_title=$this->input->post('rus_title');
                $eng_title=$this->input->post('eng_title');
                $arm_text=$this->input->post('arm_text');
                $rus_text=$this->input->post('rus_text');
                $eng_text=$this->input->post('eng_text');
                $fileRandom = '';
                if(!empty($_FILES['menuImg']['name'])){
                    $fileName=$_FILES['menuImg'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.$fileName['name'];
                    $imgSrc="public/images/picture/menu/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        //unlink("public/images/picture/menu");
                    };
                }
                $addMenu = array(
                    'menuImg' => $fileRandom,
                    'arm_title' => $arm_title,
                    'rus_title' => $rus_title,
                    'eng_title' => $eng_title,
                    'arm_text' => $arm_text,
                    'rus_text' => $rus_text,
                    'eng_text' => $eng_text,
                    'arm_meta_title' => $arm_meta_title,
                    'rus_meta_title' => $rus_meta_title,
                    'eng_meta_title' => $eng_meta_title,
                    'meta_description' => $meta_description


                );
                $this->Menu_model->addMenu($addMenu);
                    redirect(base_url('SiteEdit/'));
            }
            $data['select_menu']=$this->Menu_model->getAllMenu();
            $this->load->view('admin/menu',$data);
        }

        public function parentMenu($id=0){
            $this->load->model('Menu_model');
            $data['selectparent_menu']=$this->Menu_model->getAllMenu($id);
            $data['id_menu'] = $id;
            $this->load->view('admin/parent_menu',$data);

        }

        public function insertNewMenu($id = 0){
            $this->load->model('Menu_model');
            if($this->input->post('addParentMenu')){

                $dataPost = $this->input->post();
                $dataPost['parent_id'] = $id;

                unset($dataPost['addParentMenu']);

                if(!empty($_FILES['parent_menuImg']['name'])){
                    $fileName=$_FILES['parent_menuImg'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.$fileName['name'];
                    $imgSrc="public/images/picture/menu/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        $dataPost["menuImg"] = $fileRandom;
                        //unlink("public/images/picture/menu");
                    };

                }

                $this->Menu_model->addParentMenu($dataPost);
                redirect(base_url('SiteEdit/parentMenu/'.$id));
            }

        }

        public function deleteParentMenu(){
            if ($this->input->post('deleteParentMenu')==0){
                $this->load->model('Menu_model');
                $delImg=$this->input->post('parentMenuImg');
                $delId=$this->input->post('parentMenuId');
                $data=array(
                    'id'=>$delId
                );
                $delet=$this->Menu_model->deleteParentMenu($data);
                if($delet==TRUE){
                    if($delImg){
                        unlink("public/images/picture/menu/".$delImg);
                    }
                    echo '1';
                    exit();
                }
            }
        }

        public function edit_menu($id=''){
            $this->load->model('Menu_model');
            $data['menuEdit']=$this->Menu_model->selectMenuForEdit($id);
            if($this->input->post('menuEdite')){
                $menuImg=$_FILES['menuImg']['name'];
                $arm_title=$this->input->post('arm_title');
                $rus_title=$this->input->post('rus_title');
                $eng_title=$this->input->post('eng_title');
                $arm_text=$this->input->post('arm_text');
                $rus_text=$this->input->post('rus_text');
                $eng_text=$this->input->post('eng_text');
                $arm_meta_title=$this->input->post('arm_meta_title');
                $rus_meta_title=$this->input->post('rus_meta_title');
                $eng_meta_title=$this->input->post('eng_meta_title');
                $meta_description=$this->input->post('meta_description');
                $url=$this->input->post('url');
                $fileDelet=$data['menuEdit']['menuImg'];
                if(!empty($_FILES['menuImg']['name'])){
                    $fileName=$_FILES['menuImg'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.$fileName['name'];
                    $imgSrc="public/images/picture/menu/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/menu/".$fileDelet);
                    };
                    $fileDelet=$fileRandom;
                }
                $data_menu_edit=array(
                    'menuImg' => $fileDelet,
                    'arm_title' => $arm_title,
                    'rus_title' => $rus_title,
                    'eng_title' => $eng_title,
                    'arm_text' => $arm_text,
                    'rus_text' => $rus_text,
                    'eng_text' => $eng_text,
                    'url' => $url,
                    'arm_meta_title' => $arm_meta_title,
                    'rus_meta_title' => $rus_meta_title,
                    'eng_meta_title' => $eng_meta_title,
                    'meta_description' => $meta_description
                );
                $this->Menu_model-> updateMenu($id,$data_menu_edit);
                // redirect(base_url('SiteEdit'));
            }
            $data['menuEdit']=$this->Menu_model->selectMenuForEdit($id);
            $this->load->view('admin/Menu_edite',$data);
        }

        public function deleteMenu(){
            if ($this->input->post('deleteMenu')==0){
                $this->load->model('Menu_model');
                $delImg=$this->input->post('menuImg');
                $delId=$this->input->post('menuId');
                $data=array(
                    'id'=>$delId
                );
                $delet=$this->Menu_model->deleteMenu($data);
                if($delet==TRUE){
                    if($delImg){
                        unlink("public/images/picture/menu/".$delImg);
                    }
                    echo '1';
                    exit();
                }
            }
        }

        //menu_slid

        public function insertSlide($id){
            $this->load->model('Menu_model');
            if($this->input->post('addCatalog')){
                $arm_paragraph=$this->input->post('arm_paragraph');
                $rus_paragraph=$this->input->post('rus_paragraph');
                $eng_paragraph=$this->input->post('eng_paragraph');
                $arm_text=$this->input->post('arm_text');
                $rus_text=$this->input->post('rus_text');
                $eng_text=$this->input->post('eng_text');
                if(!empty($_FILES['menuSlid']['name'])){
                    $fileName=$_FILES['menuSlid'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.$fileName['name'];
                    $imgSrc="public/images/picture/menuCatalog/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        $data['error']='Տվյալները պահպանվել են';
                    };
                    $data_menuSlid = array(
                        'image' => $fileRandom,
                        'arm_paragraph' => $arm_paragraph,
                        'rus_paragraph' => $rus_paragraph,
                        'eng_paragraph' => $eng_paragraph,
                        'arm_text' => $arm_text,
                        'rus_text' => $rus_text,
                        'eng_text' => $eng_text,
                        'parent_id' => $id
                    );
                    $this->Menu_model->insertSlide($data_menuSlid);
                }else{
                   $data['error']='Լրացրեք ազատ դաշտերը';
                }

            }
            $data['selectSlide']=$this->Menu_model->selectSlide($id);
            $this->load->view('admin/gallery',$data);
        }

        public function deleteSlid(){
            if($this->input->post('deleteSlid')==0){
                $this->load->model('Menu_model');
                $delImg = $this->input->post('slidImg');
                $delId = $this->input->post('slidId');
                $data = array(
                    'id'=>$delId
                );
                $delet=$this->Menu_model->deletSlid($data);
                if($delet==TRUE){
                    unlink("public/images/picture/menuCatalog/".$delImg);
                    echo '1';
                    exit();
                }
            }
        }


        //parent_menu_slid

        public function insertParentSlide($id){
            $this->load->model('Menu_model');
            if($this->input->post('addParentCatalog')){
                $arm_paragraph=$this->input->post('arm_paragraph');
                $rus_paragraph=$this->input->post('rus_paragraph');
                $eng_paragraph=$this->input->post('eng_paragraph');
                $arm_text=$this->input->post('arm_text');
                $rus_text=$this->input->post('rus_text');
                $eng_text=$this->input->post('eng_text');
                if(!empty($_FILES['parentMenuSlid']['name'])){
                    $fileName=$_FILES['parentMenuSlid'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.$fileName['name'];
                    $imgSrc="public/images/picture/menucatalog/parentcatalog/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        $data['error']='Տվյալները պահպանվել են';
                    };
                    $data_menuSlid = array(
                        'arm_paragraph' => $arm_paragraph,
                        'rus_paragraph' => $rus_paragraph,
                        'eng_paragraph' => $eng_paragraph,
                        'arm_text' => $arm_text,
                        'rus_text' => $rus_text,
                        'eng_text' => $eng_text,
                        'image' => $fileRandom,
                        'parent_id' => $id
                    );
                    $this->Menu_model->insertSlide($data_menuSlid);
                }else{
                    $data['error']='Լրացրեք ազատ դաշտերը';
                }

            }
            $data['selectParentSlide']=$this->Menu_model->selectParentSlide($id);
            $this->load->view('admin/parent_gallery',$data);
        }


        public function edit_parent_gallery($id=''){
            $this->load->model('Menu_model');
            $data['menuEdit']=$this->Menu_model->selectGalleryForEdit($id);
            if($this->input->post('updatePBox')){
                $arm_paragraph=$this->input->post('arm_paragraph');
                $rus_paragraph=$this->input->post('rus_paragraph');
                $eng_paragraph=$this->input->post('eng_paragraph');
                $arm_text=$this->input->post('arm_text');
                $rus_text=$this->input->post('rus_text');
                $eng_text=$this->input->post('eng_text');
                $alt=$this->input->post('alt');
                $fileDelet=$data['menuEdit']['image'];
                if(!empty($_FILES['image']['name'])){
                    $fileName=$_FILES['image'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.$fileName['name'];
                    $imgSrc="public/images/picture/menucatalog/parentcatalog/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/menucatalog/parentcatalog/".$fileDelet);
                    };
                    $fileDelet=$fileRandom;
                }
                $data_pgallery_edit=array(
                    'image' => $fileDelet,
                    'arm_paragraph' => $arm_paragraph,
                    'rus_paragraph' => $rus_paragraph,
                    'eng_paragraph' => $eng_paragraph,
                    'arm_text' => $arm_text,
                    'rus_text' => $rus_text,
                    'eng_text' => $eng_text,
                    'alt' => $alt,
                    'id' => $id
                );

                $this->Menu_model->updatePGallery($id,$data_pgallery_edit);
            }
            $data['pboxgallery']=$this->Menu_model->selectGalleryForEdit($id);
            $this->load->view('admin/edit_parent_gallery',$data);
        }

        public function edit_gallery($id=''){
            $this->load->model('Menu_model');
            $data['menuEdit']=$this->Menu_model->selectGalleryForEdit($id);
            if($this->input->post('updateBox')){
                $arm_paragraph=$this->input->post('arm_paragraph');
                $rus_paragraph=$this->input->post('rus_paragraph');
                $eng_paragraph=$this->input->post('eng_paragraph');
                $arm_text=$this->input->post('arm_text');
                $rus_text=$this->input->post('rus_text');
                $eng_text=$this->input->post('eng_text');
                $fileDelet=$data['menuEdit']['image'];
                if(!empty($_FILES['image']['name'])){
                    $fileName=$_FILES['image'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.$fileName['name'];
                    $imgSrc="public/images/picture/menuCatalog/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/menuCatalog/".$fileDelet);
                    };
                    $fileDelet=$fileRandom;
                }
                $data_gallery_edit=array(
                    'image' => $fileDelet,
                    'arm_paragraph' => $arm_paragraph,
                    'rus_paragraph' => $rus_paragraph,
                    'eng_paragraph' => $eng_paragraph,
                    'arm_text' => $arm_text,
                    'rus_text' => $rus_text,
                    'eng_text' => $eng_text,
                    'id' => $id
                );

                $this->Menu_model->updateGallery($id,$data_gallery_edit);
            }
            $data['boxgallery']=$this->Menu_model->selectGalleryForEdit($id);
            $this->load->view('admin/gallery_edit',$data);
        }


        public function deleteParentSlid(){
            if($this->input->post('deleteParentSlide')==0){
                $this->load->model('Menu_model');
                $delImg = $this->input->post('parentSlideImg');
                $delId = $this->input->post('parentSlideId');
                $data = array(
                    'id'=>$delId
                );
                $delet=$this->Menu_model->deletParentSlid($data);
                if($delet==TRUE){
                    unlink("public/images/picture/menucatalog/parentcatalog/".$delImg);
                    echo '1';
                    exit();
                }
            }
        }

        //slider

        public function slideInsert(){
            $this->load->model('Menu_model');
            if($this->input->post('addCatalog')){
                $arm_paragraph=$this->input->post('arm_paragraph');
                $rus_paragraph=$this->input->post('rus_paragraph');
                $eng_paragraph=$this->input->post('eng_paragraph');
                $arm_text=$this->input->post('arm_text');
                $rus_text=$this->input->post('rus_text');
                $eng_text=$this->input->post('eng_text');
                $alt=$this->input->post('alt');
                $link=$this->input->post('link');
                $video=$this->input->post('video');
                if(!empty($_FILES['menuSlid']['name'])){
                    $fileName=$_FILES['menuSlid'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/slide/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        $data['error']='Տվյալները պահպանվել են';
                    };
                    $data_slide = array(
                        'image' => $fileRandom,
                        'arm_paragraph' => $arm_paragraph,
                        'rus_paragraph' => $rus_paragraph,
                        'eng_paragraph' => $eng_paragraph,
                        'arm_text' => $arm_text,
                        'rus_text' => $rus_text,
                        'eng_text' => $eng_text,
                        'alt' => $alt,
                        'link' => $link,
                        'video' => $video
                    );
                    $this->Menu_model->slideInsert($data_slide);
                }else{
                   $data['error']='Լրացրեք ազատ դաշտերը';
                }

            }
            $data['selectSlide']=$this->Menu_model->slideSelect();
            $this->load->view('admin/slider',$data);
        }

        public function slideEdite($id=''){
            $this->load->model('Menu_model');
            $data['menuEdit']=$this->Menu_model->selectslideForEdit($id);
            if($this->input->post('updateBox')){
                $arm_paragraph=$this->input->post('arm_paragraph');
                $rus_paragraph=$this->input->post('rus_paragraph');
                $eng_paragraph=$this->input->post('eng_paragraph');
                $arm_text=$this->input->post('arm_text');
                $rus_text=$this->input->post('rus_text');
                $eng_text=$this->input->post('eng_text');
                $alt=$this->input->post('alt');
                $link=$this->input->post('link');
                $video=$this->input->post('video');
                $fileDelet=$data['menuEdit']['image'];
                if(!empty($_FILES['image']['name'])){
                    $fileName=$_FILES['image'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/slide/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/slide/".$fileDelet);
                    };
                    $fileDelet=$fileRandom;
                }
                $data_slide=array(
                    'image' => $fileDelet,
                    'arm_paragraph' => $arm_paragraph,
                    'rus_paragraph' => $rus_paragraph,
                    'eng_paragraph' => $eng_paragraph,
                    'arm_text' => $arm_text,
                    'rus_text' => $rus_text,
                    'eng_text' => $eng_text,
                    'id' => $id,
                    'alt' => $alt,
                    'link' => $link,
                    'video' => $video
                );

                $this->Menu_model->slideUpdate($id,$data_slide);
                redirect(base_url('SiteEdit/slideInsert'));
            }
            $data['boxgallery']=$this->Menu_model->selectslideForEdit($id);
            $this->load->view('admin/slider_edite',$data);
        }

        public function slideDelete(){
            if($this->input->post('deleteSlid')==0){
                $this->load->model('Menu_model');
                $slidImg = $this->input->post('slidImg');
                $slidId = $this->input->post('slidId');
                $data = array(
                    'id'=>$slidId
                );
                $delet=$this->Menu_model->slideDelete($data);
                if($delet==TRUE){
                    unlink("public/images/picture/slide/".$slidImg);
                    echo '1';
                    exit();
                }
            }
        }

        /* gallery */

        public function gallery_view(){
            $this->load->model('Menu_model');
            if($this->input->post('addGallery')){
                $arm_title=$this->input->post('arm_title');
                $rus_title=$this->input->post('rus_title');
                $eng_title=$this->input->post('eng_title');
                $alt=$this->input->post('alt');
                $link=$this->input->post('link');
                if(!empty($_FILES['gallery']['name'])){
                    $fileName=$_FILES['gallery'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/gallery/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        $data['error']='Տվյալները պահպանվել են';
                    };
                    $data_gallery = array(
                        'image' => $fileRandom,
                        'arm_title' => $arm_title,
                        'rus_title' => $rus_title,
                        'eng_title' => $eng_title,
                        'alt' => $alt
                    );
                    $this->Menu_model->galleryInsert($data_gallery);
                }else{
                   $data['error']='Լրացրեք ազատ դաշտերը';
                }

            }
            $data['selectGallery']=$this->Menu_model->gallerySelect();
            $this->load->view('admin/gallery_view',$data);
        }

        public function galleryEdite($id=''){
            $this->load->model('Menu_model');
            $data['galleryEdit']=$this->Menu_model->galleryForEdit($id);
            if($this->input->post('updateBox')){
                $arm_title=$this->input->post('arm_title');
                $rus_title=$this->input->post('rus_title');
                $eng_title=$this->input->post('eng_title');
                $alt=$this->input->post('alt');
                $fileDelet=$data['galleryEdit']['image'];
                if(!empty($_FILES['image']['name'])){
                    $fileName=$_FILES['image'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/gallery/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/gallery/".$fileDelet);
                    };
                    $fileDelet=$fileRandom;
                }
                $data_gallery=array(
                    'image' => $fileDelet,
                    'arm_title' => $arm_title,
                    'rus_title' => $rus_title,
                    'eng_title' => $eng_title,
                    'id' => $id,
                    'alt' => $alt
                );

                $this->Menu_model->galleryUpdate($id,$data_gallery);
                redirect(base_url('SiteEdit/gallery_view'));
            }
            $data['boxgallery']=$this->Menu_model->galleryForEdit($id);
            $this->load->view('admin/gallery_view_edite',$data);
        }

        public function galleryDelete(){
            if($this->input->post('galleryDeleteButton')==0){
                $this->load->model('Menu_model');
                $galleryImg = $this->input->post('galleryImg');
                $galleryId = $this->input->post('galleryId');
                $data = array(
                    'id'=>$galleryId
                );
                $delet=$this->Menu_model->galleryDelete($data);
                if($delet==TRUE){
                    unlink("public/images/picture/gallery/".$galleryImg);
                    echo '1';
                    exit();
                }
            }
        }

        /* gallery */

        /* partners */

        public function partners_view(){
            $this->load->model('Menu_model');
            if($this->input->post('addPartners')){
                $alt=$this->input->post('alt');
                $link=$this->input->post('link');
                if(!empty($_FILES['gallery']['name'])){
                    $fileName=$_FILES['gallery'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/partners/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        $data['error']='Տվյալները պահպանվել են';
                    };
                    $data_partners = array(
                        'image' => $fileRandom,
                        'alt' => $alt,
                        'link' => $link
                    );
                    $this->Menu_model->partnersInsert($data_partners);
                }else{
                   $data['error']='Լրացրեք ազատ դաշտերը';
                }

            }
            $data['selectPartners']=$this->Menu_model->partnersSelect();
            $this->load->view('admin/partners_view',$data);
        }

        public function partnersEdite($id=''){
            $this->load->model('Menu_model');
            $data['partnersEdit']=$this->Menu_model->partnersForEdit($id);
            if($this->input->post('updateBox')){
                $alt=$this->input->post('alt');
                $link=$this->input->post('link');
                $fileDelet=$data['partnersEdit']['image'];
                if(!empty($_FILES['image']['name'])){
                    $fileName=$_FILES['image'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/gallery/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/gallery/".$fileDelet);
                    };
                    $fileDelet=$fileRandom;
                }
                $data_gallery=array(
                    'image' => $fileDelet,
                    'id' => $id,
                    'alt' => $alt,
                    'link' => $link
                );

                $this->Menu_model->partnersUpdate($id,$data_gallery);
                redirect(base_url('SiteEdit/partners_view'));
            }
            $data['boxgallery']=$this->Menu_model->partnersForEdit($id);
            $this->load->view('admin/partners_view_edite',$data);
        }

        public function partnersDelete(){
            if($this->input->post('partnersDeleteButton')==0){
                $this->load->model('Menu_model');
                $partnersImg = $this->input->post('partnersImg');
                $partnersId = $this->input->post('partnersId');
                $data = array(
                    'id'=>$partnersId
                );
                $delet=$this->Menu_model->partnersDelete($data);
                if($delet==TRUE){
                    unlink("public/images/picture/partners/".$partnersImg);
                    echo '1';
                    exit();
                }
            }
        }

        /* partners */

        /* aboutGallery */

        public function about_gallery(){
            $this->load->model('Menu_model');
            if($this->input->post('addAboutGallery')){
                $alt=$this->input->post('alt');
                if(!empty($_FILES['gallery']['name'])){
                    $fileName=$_FILES['gallery'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/aboutgallery/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        $data['error']='Տվյալները պահպանվել են';
                    };
                    $data_aboutGallery = array(
                        'image' => $fileRandom,
                        'alt' => $alt
                    );
                    $this->Menu_model->aboutGalleryInsert($data_aboutGallery);
                }else{
                   $data['error']='Լրացրեք ազատ դաշտերը';
                }

            }
            $data['selectaboutGallery']=$this->Menu_model->aboutGallerySelect();
            $this->load->view('admin/about_gallery',$data);
        }

        public function aboutGalleryEdite($id=''){
            $this->load->model('Menu_model');
            $data['partnersEdit']=$this->Menu_model->aboutGalleryForEdit($id);
            if($this->input->post('updateBox')){
                $alt=$this->input->post('alt');
                $fileDelet=$data['partnersEdit']['image'];
                if(!empty($_FILES['image']['name'])){
                    $fileName=$_FILES['image'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/aboutgallery/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/aboutgallery/".$fileDelet);
                    };
                    $fileDelet=$fileRandom;
                }
                $data_gallery=array(
                    'image' => $fileDelet,
                    'id' => $id,
                    'alt' => $alt
                );

                $this->Menu_model->aboutGalleryUpdate($id,$data_gallery);
                redirect(base_url('SiteEdit/about_gallery'));
            }
            $data['boxgallery']=$this->Menu_model->aboutGalleryForEdit($id);
            $this->load->view('admin/about_gallery_edite',$data);
        }

        public function aboutGalleryDelete(){
            if($this->input->post('aboutGalleryDeleteButton')==0){
                $this->load->model('Menu_model');
                $aboutGalleryImg = $this->input->post('aboutGalleryImg');
                $aboutGalleryId = $this->input->post('aboutGalleryId');
                $data = array(
                    'id'=>$aboutGalleryId
                );
                $delet=$this->Menu_model->aboutGalleryDelete($data);
                if($delet==TRUE){
                    unlink("public/images/picture/aboutgallery/".$aboutGalleryImg);
                    echo '1';
                    exit();
                }
            }
        }

        /* aboutGallery */

        public function shortlink(){
            $this->load->view('admin/shortlink');
        }

        public function homeBlogFirst($id=""){
            $this->load->model('Menu_model');
            $data['partnersEdit']=$this->Menu_model->blogFirstForEdit($id);
            if($this->input->post('updateBox')){
                $arm_title=$this->input->post('arm_title');
                $rus_title=$this->input->post('rus_title');
                $eng_title=$this->input->post('eng_title');
                $arm_text=$this->input->post('arm_text');
                $rus_text=$this->input->post('rus_text');
                $eng_text=$this->input->post('eng_text');
                $alt=$this->input->post('alt');
                $link=$this->input->post('link');
                $fileDelet=$data['partnersEdit']['image'];
                if(!empty($_FILES['image']['name'])){
                    $fileName=$_FILES['image'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/shortlink/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/shortlink/".$fileDelet);
                    };
                    $fileDelet=$fileRandom;
                }
                $data_blogfirst=array(
                    'image' => $fileDelet,
                    'arm_title' => $arm_title,
                    'rus_title' => $rus_title,
                    'eng_title' => $eng_title,
                    'arm_text' => $arm_text,
                    'rus_text' => $rus_text,
                    'eng_text' => $eng_text,
                    'id' => $id,
                    'alt' => $alt,
                    'link' => $link
                );

                $this->Menu_model->blogFirstUpdate($id,$data_blogfirst);
                redirect(base_url('SiteEdit/shortlink'));
            }
            $data['boxgallery']=$this->Menu_model->blogFirstForEdit($id);
            $this->load->view('admin/home_blog_first',$data);
        }

        public function homeBlogSecond($id=""){
            $this->load->model('Menu_model');
            $data['partnersEdit']=$this->Menu_model->blogSecondForEdit($id);
            if($this->input->post('updateBox')){
                $data_blogSecond = $this->input->post();
                
                $fileDelet1=$data['partnersEdit']['image_first'];
                $fileDelet2=$data['partnersEdit']['image_second'];
                if(!empty($_FILES['image_first']['name'])){
                    $fileName=$_FILES['image_first'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/shortlink/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/shortlink/".$fileDelet1);
                    };
                    $fileDelet1=$fileRandom;
                }
                if(!empty($_FILES['image_second']['name'])){
                    $fileName=$_FILES['image_second'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/shortlink/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/shortlink/".$fileDelet2);
                    };
                    $fileDelet2=$fileRandom;
                }
                $data_blogSecond['image_first'] = $fileDelet1;
                $data_blogSecond['image_second'] = $fileDelet2;
                $data_blogSecond['id'] = $id;
                unset($data_blogSecond['updateBox']);

                $this->Menu_model->blogSecondUpdate($id,$data_blogSecond);
                redirect(base_url('SiteEdit/shortlink'));
            }
            $data['boxgallery']=$this->Menu_model->blogSecondForEdit($id);
            $this->load->view('admin/home_blog_second',$data);
        }

        public function homeBlogThird($id=""){
            $this->load->model('Menu_model');
            $data['partnersEdit']=$this->Menu_model->blogThirdForEdit($id);
            if($this->input->post('updateBox')){
                $data_blogThird = $this->input->post();

                $fileDelet1=$data['partnersEdit']['image_first'];
                $fileDelet2=$data['partnersEdit']['image_second'];
                $fileDelet3=$data['partnersEdit']['image_third'];
                if(!empty($_FILES['image_first']['name'])){
                    $fileName=$_FILES['image_first'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/shortlink/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/shortlink/".$fileDelet1);
                    };
                    $fileDelet1=$fileRandom;
                }
                if(!empty($_FILES['image_second']['name'])){
                    $fileName=$_FILES['image_second'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/shortlink/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/shortlink/".$fileDelet2);
                    };
                    $fileDelet2=$fileRandom;
                }
                if(!empty($_FILES['image_third']['name'])){
                    $fileName=$_FILES['image_third'];
                    $fileRand=rand(5,10000);
                    $fileRandom=$fileRand.'-'.$fileName['name'];
                    $imgSrc="public/images/picture/shortlink/".$fileRandom;
                    $addPhoto=$this->upload($fileName,$imgSrc);
                    if($addPhoto==true){
                        unlink("public/images/picture/shortlink/".$fileDelet3);
                    };
                    $fileDelet3=$fileRandom;
                }
                $data_blogThird['image_first'] = $fileDelet1;
                $data_blogThird['image_second'] = $fileDelet2;
                $data_blogThird['image_third'] = $fileDelet3;
                $data_blogThird['id'] = $id;
                unset($data_blogThird['updateBox']);

                $this->Menu_model->blogThirdUpdate($id,$data_blogThird);
                redirect(base_url('SiteEdit/shortlink'));
            }
            $data['boxgallery']=$this->Menu_model->blogThirdForEdit($id);
            $this->load->view('admin/home_blog_third',$data);
        }

        function order($table) {
            $data = $this->input->post("id_num");
            $this->load->model('menu_model');
            if($this->menu_model->order($table,$data)) {
                echo json_encode(array('status' => 'success'));
            }else{
                echo json_encode(array('status' => 'error'));
            }
        }

        public function email(){
            if($this->input->post('contact_submit')){
                $contact_firstname=$this->input->post('contact_firstname');
                $contact_lastname=$this->input->post('contact_lastname');
                $contact_email=$this->input->post('contact_email');
                $contact_message=$this->input->post('contact_message');

                if(!empty($contact_email)){
                    $config=array(
                        'protocol'=>'smtp',
                        'smtp_host'=>'ssl://smtp.mail.ru',
                        'smtp_port'=>465,
                        'smtp_user'=>'tvadstudio@bk.ru',
                        'smtp_pass'=>'admin123456'
                    );
                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from('tvadstudio@bk.ru', 'Tvad');
                    $this->email->to('vadstudio@bk.ru');
                    $this->email->subject('suport');
                    $this->email->message('Անուն։'.$contact_firstname.'--Ազգանուն։'.$contact_lastname.'--Email'.$contact_email.'--Նամակ'.$contact_message .':');

                    //$path = $this->config->item('server_root');

                    if($this->email->send()){
                        echo "Your email was sent,fool";
                    }else{
                        show_error($this->email->print_debugger());
                    }
                }
            }
            //$this->layout->view('contacts_v',true);
        }
        
        public function changePassword($id='1'){
            $this->load->model('Menu_model');
            if($this->input->post('updateBox')){
                $user=$this->input->post('user');
                $pass=$this->input->post('pass');
                $oldpass=$this->input->post('oldpass');
                $data_pass=array(
                    'user' => $user,
                    'pass' => $pass
                );
                if($pass != $oldpass){
                    $data['error'] = "Չեն համընկնում գաղտնաբառերը";
                }else{
                    $this->Menu_model->changePassword($id,$data_pass);
                    redirect(base_url('SiteEdit'));
                }

            }
            $data['boxgallery']=$this->Menu_model->selectpassForEdit($id);
            $this->load->view('admin/password_edite_v',$data);
        }


        private function upload($fileName=true,$imgSrc=true){
            $allowedExts=array('gif','jpeg','jpg','png','swf','JPG','PNG','JPEG');
            $temp=explode(".",$fileName['name']);
            $extension=end($temp);
            if ($fileName['size']<200000000000 && in_array($extension, $allowedExts)){
                if ($fileName['error']) {
                    echo "Return Code:Server Error";
                }
                else{
                    @move_uploaded_file($fileName['tmp_name'],$imgSrc);
                    return TRUE;
                }
            }
            else{
                echo "invalid files";
            }
        }

    }
   
    