<div id="menuDelete" style="display: none" >
    <div id="delet"></div>
    <div id="yesNo" class="modal-content">
        <div class="delete-box">
            <p>Are you sure ?</p>
            <button class="menuYes Yes btn btn-default">Yes</button>
            <button id="menuNo" class="No btn btn-default">No</button>
        </div>
    </div>
</div>
    <div class="col-sm-12">
        <section class="right_col">
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                        <thead class="sortable" data-table="menu">
                        <?php foreach($select_menu as $menu):?>
                            <tr class="headings" data-id="<?=$menu["id"]?>">
                                
                                <th class="text_center"><?php echo $menu['eng_title'];?></th>

                                <?php if($menu['url']=='home'): ;?>
                                    <th class="text_center">
                                        <a href="<?php echo base_url('SiteEdit/shortlink');?>">
                                            Shortlink
                                        </a>
                                    </th>
                                <?php elseif($menu['url']=='aboutus'):?>
                                    <th class="text_center">
                                        <a href="<?php echo base_url('SiteEdit/about_gallery');?>">
                                            Gallery
                                        </a>
                                    </th>
                                <?php elseif($menu['url']=='gallery'):?>
                                    <th class="text_center">
                                        <a href="<?php echo base_url('SiteEdit/gallery_view');?>">
                                            Gallery
                                        </a>
                                    </th>
                                <?php elseif($menu['url']=='partners'):?>
                                    <th class="text_center">
                                        <a href="<?php echo base_url('SiteEdit/partners_view');?>">
                                            Shortlink
                                        </a>
                                    </th>
                                <?php elseif($menu['url']=='contact'):?>
                                    <th class="text_center">
                                        <a href="<?php echo base_url('SiteEdit/');?>">
                                            <!-- Աշխատանքներ -->
                                        </a>
                                    </th>
                                <?php else:?>
                                    <th class="text_center">
                                        <a href="<?php echo base_url('SiteEdit/parentMenu/'.$menu['id']);?>">
                                            SubMenu
                                        </a>
                                    </th>
                                <?php endif;?>
                               
                                <th class="text_center hidden">
                                    <a href="<?php echo base_url('SiteEdit/insertSlide/'.$menu['id']);?>">
                                        Pictures
                                    </a>
                                </th>
                             

                                <th class="text_center">
                                    <a href="<?php echo base_url('SiteEdit/edit_menu/'.$menu['id']);?>">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                </th>              


                                <th class="text_center">
                                    <?php if($menu['id']=='1'|| $menu['id']=='2' || $menu['id']=='3' || $menu['id']=='4' || $menu['id']=='5' || $menu['id']=='6'): ;?>

                                        <i class="fa fa-times" aria-hidden="true" style="cursor: no-drop;"></i>
                                   
                                    <?php else:?>
                                        <img class='delete deleteMenu' src='<?php echo base_url('public/images/picture/delete.png')?>' alt='<?php echo $menu['menuImg']?>' title='<?php echo $menu['id']?>'  width="30px" height="30px">
                                   
                                    <?php endif;?>
                                </th>
                            </tr>
                        <?php endforeach;?>
                        </thead>
                    </table>
                </div>
                <div class="addmenu">
                    <form action="<?=base_url('SiteEdit/addMenu/')?>" method="POST" enctype="multipart/form-data">

                        <ul class="lang-change-admin">
                            <li>
                                <span class="arm-click">arm</span>
                            </li>
                            <li>
                                <span class="rus-click">rus</span>
                            </li>
                            <li>
                               <span class="eng-click">eng</span> 
                            </li>
                        </ul>

                        <div class="lang-arm">
                            <label for="arm_title" class="col-sm-12 control-label">Armenian Title</label>
                            <input type="text" id="arm_title" name="arm_title" class="form-control"/>
                            <label for="arm_text" class="col-sm-12 control-label">Text arm (h1 or h2 > title , p > text )</label>
                            <textarea name="arm_text" id="arm_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                            <div class="col-xs-12">
                                <div class="title_lenguage">
                                    <div class="title_left">
                                        <small>
                                            Title arm
                                        </small>
                                    </div>
                                    <input type="text" placeholder="" name="arm_meta_title" value="">
                                </div>
                            </div>
                        </div>
                        <div class="lang-rus">
                            <label for="rus_title" class="col-sm-12 control-label">Russian Title</label>
                            <input type="text" id="rus_title" name="rus_title" class="form-control"/>
                            <label for="rus_text" class="col-sm-12 control-label">Text arm (h1 or h2 > title , p > text )</label>
                            <textarea name="rus_text" id="rus_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                            <div class="col-xs-12">
                                <div class="title_lenguage">
                                    <div class="title_left">
                                        <small>
                                            Title rus
                                        </small>
                                    </div>
                                    <input type="text" placeholder="" name="rus_meta_title" value="">
                                </div>
                            </div>

                        </div>
                        <div class="lang-eng">
                            <label for="eng_title" class="col-sm-12 control-label">English Title</label>
                            <input type="text" id="eng_title" name="eng_title" class="form-control"/>
                            <label for="eng_text" class="col-sm-12 control-label">Text arm (h1 or h2 > title , p > text )</label>
                            <textarea name="eng_text" id="eng_text" placeholder="" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                            <div class="col-xs-12">
                                <div class="title_lenguage">
                                    <div class="title_left">
                                        <small>
                                            Title eng
                                        </small>
                                    </div>
                                    <input type="text" placeholder="" name="eng_meta_title" value="">
                                </div>
                            </div>

                        </div>
                        <div class="title_left">
                            <small style="padding-left: 7px;">
                                Meta Description
                            </small>
                        </div>
                        <textarea name="meta_description" class="textarea-menu"></textarea>

                        <div class="form-group hidden">
                            <input type="file" id="file_upload" name="menuImg">
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="button_save_send">
                                <input type="reset" class="Yes btn btn-defaul" value="Reset">
                                <input type="submit" class="No btn btn-defaul" name="addMenu" value="Save">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
</body>
</html>