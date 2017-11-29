<?php
    class Menu_model extends CI_Model{

        public function getAllMenu($parent_id=null,$lang = null){
            $this->db->where('parent_id ',$parent_id);
            $this->db->order_by('number','asc');
            $this->db->select('id');
            $this->db->select('arm_title');
            $this->db->select('eng_title');
            $this->db->select('parent_id');
            $this->db->select('number');
            $this->db->select('menuImg');
            $this->db->select('url');
            if(isset($lang)){
                if($lang == 'am' || $lang == ''){
                    $this->db->select('arm_title menu');
                    $this->db->select('arm_text txtlang');
                }elseif($lang == 'ru'){
                    $this->db->select('rus_title menu');
                    $this->db->select('rus_text txtlang');
                }elseif($lang == "en"){
                    $this->db->select('eng_title menu');
                    $this->db->select('eng_text txtlang');
                }else{
                    $this->db->select('arm_title menu');
                    $this->db->select('arm_text txtlang');
                }
                $this->db->select('eng_title menu_url');
                $this->db->select('parent_id,id');
                $this->db->select('menuImg');
            }
            $query =  $this->db->get('menu');
            return $query->result_array();
        }


        public function getMenuIn($lang){
            $this->db->where('parent_id !=',0);
            $this->db->order_by('number','asc');
            if($lang == 'am' || $lang == ''){
                $this->db->select('arm_title menu');
            }elseif($lang == 'ru'){
                $this->db->select('rus_title menu');
            }elseif($lang == "en"){
                $this->db->select('eng_title menu');
            }else{
                $this->db->select('arm_title menu');
            }
            $this->db->select('url');
            $this->db->select('eng_title menu_url');
            $this->db->select('parent_id,id');
            $query =  $this->db->get('menu');
            return $query->result_array();
        }

        public function addMenu($addMenu){
            $this->db->insert('menu',$addMenu);
        }

        public function selectMenuForEdit($id){
            $query=  $this->db->get_where('menu',array('id'=>$id));
            return $query->row_array();
        }

        public  function updateMenu($id,$data_menu_edit){
            $this->db->set($data_menu_edit);
            $this->db->where('id',$id);
            $update=$this->db->update('menu');
            return $update;
        }

        public function deleteMenu($id){
            $delet_menu = $this->db->delete('menu',$id);
            return $delet_menu;
        }

        public function order($table,$data){
            foreach($data as $val){
                $this->db->where('id',$val["id"]);
                $update = array('number'=>$val["num"]);
                $this->db->update($table,$update);
            }
            return true;
        }

        public function addParentMenu($data){
            $this->db->insert('menu',$data);

        }

        public function deleteParentMenu($id){
            $delet_parent_menu = $this->db->delete('menu',$id);
            return $delet_parent_menu;
        }

        //menu_slide

        public function insertSlide($data_menuSlid){
            $this->db->insert('menuslide',$data_menuSlid);
        }

        public function selectSlide($id){
            $query=  $this->db->get_where('menuslide',array('parent_id'=>$id));
            return $query->result_array();
        }

        public function deletSlid($id){
            $delet_slid = $this->db->delete('menuslide',$id);
            return $delet_slid;
        }

        //menu_slide

        public function insertParentSlide($data_menuSlid){
            $this->db->insert('menuslide',$data_menuSlid);
        }

        public function selectParentSlide($id){
            $query=  $this->db->get_where('menuslide',array('parent_id'=>$id));
            return $query->result_array();
        }

        public function deletParentSlid($id){
            $delet_parent_slid = $this->db->delete('menuslide',$id);
            return $delet_parent_slid;
        }

        public  function updatePGallery($id,$data_pgallery_edit){
            $this->db->set($data_pgallery_edit);
            $this->db->where('id',$id);
            $update=$this->db->update('menuslide');
            return $update;
        }

        public function selectGalleryForEdit($id){
            $query=  $this->db->get_where('menuslide',array('id'=>$id));
            return $query->row_array();
        }

        public  function updateGallery($id,$data_gallery_edit){
            $this->db->set($data_gallery_edit);
            $this->db->where('id',$id);
            $update=$this->db->update('menuslide');
            return $update;
        }

         //slider

        public function slideInsert($data_slide){
            $this->db->insert('slide',$data_slide);
        }

        public function slideSelect(){
            $query=  $this->db->get_where('slide',array());
            return $query->result_array();
        }

        public function selectslideForEdit($id){
            $query=  $this->db->get_where('slide',array('id'=>$id));
            return $query->row_array();
        }    
            
        public  function slideUpdate($id,$data_slide){
            $this->db->set($data_slide);
            $this->db->where('id',$id);
            $update=$this->db->update('slide');
            return $update;
        }

        public function slideDelete($id){
            $slideDelete = $this->db->delete('slide',$id);
            return $slideDelete;
        }

        //slider

        //Gallery

        public function galleryInsert($data_gallery){
            $this->db->insert('gallery',$data_gallery);
        }

        public function gallerySelect(){
            $query=  $this->db->get_where('gallery',array());
            return $query->result_array();
        }

        public function galleryForEdit($id){
            $query=  $this->db->get_where('gallery',array('id'=>$id));
            return $query->row_array();
        }    
            
        public  function galleryUpdate($id,$data_gallery){
            $this->db->set($data_gallery);
            $this->db->where('id',$id);
            $update=$this->db->update('gallery');
            return $update;
        }

        public function galleryDelete($id){
            $galleryDelete = $this->db->delete('gallery',$id);
            return $galleryDelete;
        }

        //Gallery

        //Partners

        public function partnersInsert($data_partners){
            $this->db->insert('partners',$data_partners);
        }

        public function partnersSelect(){
            $query=  $this->db->get_where('partners',array());
            return $query->result_array();
        }

        public function partnersForEdit($id){
            $query=  $this->db->get_where('partners',array('id'=>$id));
            return $query->row_array();
        }    
            
        public  function partnersUpdate($id,$data_partners){
            $this->db->set($data_partners);
            $this->db->where('id',$id);
            $update=$this->db->update('partners');
            return $update;
        }

        public function partnersDelete($id){
            $partnersDelete = $this->db->delete('partners',$id);
            return $partnersDelete;
        }

        //Partners

        //About_Gallery

        public function aboutGalleryInsert($data_aboutGallery){
            $this->db->insert('aboutgallery',$data_aboutGallery);
        }

        public function aboutGallerySelect(){
            $query=  $this->db->get_where('aboutgallery',array());
            return $query->result_array();
        }

        public function aboutGalleryForEdit($id){
            $query=  $this->db->get_where('aboutgallery',array('id'=>$id));
            return $query->row_array();
        }    
            
        public  function aboutGalleryUpdate($id,$data_aboutGallery){
            $this->db->set($data_aboutGallery);
            $this->db->where('id',$id);
            $update=$this->db->update('aboutgallery');
            return $update;
        }

        public function aboutGalleryDelete($id){
            $aboutGalleryDelete = $this->db->delete('aboutgallery',$id);
            return $aboutGalleryDelete;
        }

        //About_Gallery

        //ShorLinks blogFirst

        public function blogFirstSelect(){
            $query=  $this->db->get_where('homeblogfirst',array());
            return $query->result_array();
        }

        public function blogFirstForEdit($id){
            $query=  $this->db->get_where('homeblogfirst',array('id'=>$id));
            return $query->row_array();
        }    
            
        public  function blogFirstUpdate($id,$data_blogfirst){
            $this->db->set($data_blogfirst);
            $this->db->where('id',$id);
            $update=$this->db->update(' homeblogfirst');
            return $update;
        }

        //ShorLinks blogFirst

        //ShorLinks blogSecond

        public function blogSecondSelect(){
            $query=  $this->db->get_where('homeblogsecond',array());
            return $query->result_array();
        }

        public function blogSecondForEdit($id){
            $query=  $this->db->get_where('homeblogsecond',array('id'=>$id));
            return $query->row_array();
        }    
            
        public  function blogSecondUpdate($id,$data_blogSecond){
            $this->db->set($data_blogSecond);
            $this->db->where('id',$id);
            $update=$this->db->update(' homeblogsecond');
            return $update;
        }

        //ShorLinks blogSecond

        //ShorLinks blogSecond

        public function blogThirdSelect(){
            $query=  $this->db->get_where('homeblogthird',array());
            return $query->result_array();
        }

        public function blogThirdForEdit($id){
            $query=  $this->db->get_where('homeblogthird',array('id'=>$id));
            return $query->row_array();
        }    
            
        public  function blogThirdUpdate($id,$data_blogThird){
            $this->db->set($data_blogThird);
            $this->db->where('id',$id);
            $update=$this->db->update(' homeblogthird');
            return $update;
        }

        //ShorLinks blogSecond
        
        //changePassword

        public function selectpassForEdit($id){
            $query=  $this->db->get_where('login',array('id'=>$id));
            return $query->row_array();
        }

        public function changePassword($id,$data_pass){
            $this->db->set($data_pass);
            $this->db->where('id',$id);
            $update=$this->db->update('login');
            return $update;
        }
        //changePassword

        
    }

