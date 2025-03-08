<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout {
    private $obj;
    private $layout_view;
    private $home_view;
    private $title = '';
    private $lengChange = '';
    private $controller = '';
    private $titleRus = '';
    private $titleEng = '';
    private $menu = '';
    private $menuIn = '';
    private $reklam = '';
    private $css_list = array(), $js_list = array();
    private $block_list, $block_new, $block_replace = false;

    function __construct() {
        $this->obj =& get_instance();
        $this->layout_view = "layout/default.php";
        $this->home_view = "layout/defaultHome.php";
        // Grab layout from called controller
        if (isset($this->obj->layout_view)) $this->layout_view = $this->obj->layout_view;
    }


    function view($view, $data = null, $return = false) {
        // Render template
        $data['title_for_layout'] = $this->title;
        $data['title_for_layoutRus'] = $this->titleRus;
        $data['title_for_layoutEng'] = $this->titleEng;
        $data['menu'] = $this->menu;
        $data['menuIn'] = $this->menuIn;
        $data['reklam'] = $this->reklam;
        $data['lengChange'] = $this->lengChange;
        $data['controller'] = $this->controller;
        $data['content_for_layout'] = $this->obj->load->view($view, $data, true);


        // Render resources
        $data['js_for_layout'] = '';
        foreach ($this->menu as $v){
            $data['menu']=$v;
        }
        foreach ($this->menuIn as $v){
            $data['menuIn']=$v;
        }
        foreach ($this->menu as $v){
            $data['txtlang']=$v;
        }
//        foreach ($this->reklam as $v){
//           $data['reklam']=$v;
//        }
        foreach ($this->js_list as $v)
            $data['js_for_layout'] .= sprintf('<script type="text/javascript" src="%s"></script>', $v);

        $data['css_for_layout'] = '';
        foreach ($this->css_list as $v)
            $data['css_for_layout'] .= sprintf('<link rel="stylesheet" type="text/css"  href="%s" />', $v);

        // Render template
        $this->block_replace = true;
        $output = $this->obj->load->view($this->layout_view, $data, $return);

        return $output;
    }
    function viewHome($view, $data = null, $return = false) {
        // Render template
        $data['content_for_layout'] = $this->obj->load->view($view, $data, true);
        $data['title_for_layout'] = $this->title;
        $data['title_for_layoutRus'] = $this->titleRus;
        $data['title_for_layoutEng'] = $this->titleEng;
        $data['lengChange'] = $this->lengChange;
        $data['controller'] = $this->controller;
        $data['menu'] = $this->menu;
        foreach ($this->menu as $v){
            $data['menu']=$v;
        }
        // Render resources
        $data['js_for_layout'] = '';
        foreach ($this->js_list as $v)
            $data['js_for_layout'] .= sprintf('<script type="text/javascript" src="%s"></script>', $v);

        $data['css_for_layout'] = '';
        foreach ($this->css_list as $v)
            $data['css_for_layout'] .= sprintf('<link rel="stylesheet" type="text/css"  href="%s" />', $v);

        // Render template
        $this->block_replace = true;
        $output = $this->obj->load->view($this->home_view, $data, $return);

        return $output;
    }

    /**
     * Set page title
     *
     * @param $title
     */
    function lengChange($lengChange) {
        $this->lengChange = $lengChange;
    }
    function controller($controller) {
        $this->controller = $controller;
    }
    function title($title) {
        $this->title = $title;
    }
     /**
     * Set page title
     *
     * @param $titleRus
     */
    function titleRus($titleRus) {
        $this->titleRus = $titleRus;
    }
     /**
     * Set page title
     *
     * @param $titleEng
     */

 function titleEng($titleEng) {
        $this->titleEng = $titleEng;
    }


    /**
     * Adds Javascript resource to current page
     * @param $item
     */
    function js($item) {
        $this->js_list[] = $item;
    }
     function menu($item) {
        $this->menu[] = $item;
    }
    function menuIn($item) {
        $this->menuIn[] = $item;
    }
    function reklam($item) {
        $this->reklam[] = $item;
    }

    /**
     * Adds CSS resource to current page
     * @param $item
     */
    function css($item) {
        $this->css_list[] = $item;
    }

    /**
     * Twig like template inheritance
     *
     * @param string $name
     */
    function block($name = '') {
        if ($name != '') {
            $this->block_new = $name;
            ob_start();
        } else {
            if ($this->block_replace) {
                // If block was overriden in template, replace it in layout
                if (!empty($this->block_list[$this->block_new])) {
                    ob_end_clean();
                    echo $this->block_list[$this->block_new];
                }
            } else {
                $this->block_list[$this->block_new] = ob_get_clean();
            }
        }
    }

}
