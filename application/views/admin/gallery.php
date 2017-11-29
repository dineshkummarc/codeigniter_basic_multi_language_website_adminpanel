<div id="slidDelete" style="display: none" >
    <div id="delet"></div>
    <div id="yesNo" class="modal-content">
        <div class="delete-box">
            <p>Are you sure ?</p>
            <button class="slidYes Yes btn btn-default">Yes</button>
            <button id="slideNo" class="No btn btn-default">No</button>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <section class="right_col">
        <div class="col-xs-12">
            <a href="<?php echo base_url('SiteEdit/');?>" class="btn btn-default" style="border-radius: 0px"> Go back </a>
        </div>
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="text-right"><button class="open">Add Image</button></div>
            <div class="addmenu">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
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
                            <input type="text" id="arm_title" name="arm_paragraph" class="form-control"/>

                            <label for="arm_text" class="col-sm-12 control-label">Armenian Text ( p > Text)</label>
                            <textarea name="arm_text" id="arm_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                        </div>
                        <div class="lang-rus">
                            <label for="rus_title" class="col-sm-12 control-label">Russian Title</label>
                            <input type="text" id="rus_title" name="rus_paragraph" class="form-control"/>

                            <label for="rus_text" class="col-sm-12 control-label"> Russian Text ( p > Text )</label>
                            <textarea name="rus_text" id="rus_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                        </div>
                        <div class="lang-eng">
                            <label for="eng_title" class="col-sm-12 control-label">Menu paragraph English</label>
                            <input type="text" id="eng_title" name="eng_paragraph" class="form-control"/>

                            <label for="eng_text" class="col-sm-12 control-label">English Text ( p > Տեքստ )</label>
                            <textarea name="eng_text" id="eng_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                        </div>
                        <input type="file" id="file_upload" name="menuSlid">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="button_save_send">
                            <input type="reset" class="Yes btn btn-defaul" value="Reset">
                            <input type="submit" class="No btn btn-defaul" name="addCatalog" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php foreach($selectSlide as $val):?>
            <div class="home_slide pull-left">
                <div class="parent_video">
                    <h1><?php echo $val['arm_paragraph'];?></h1>

                    <img class="img-responsive" src="<?php echo base_url('public/images/picture/menuCatalog/'.$val['image'])?>">

                    <img class='delete deleteSlid abs_delete' src='<?php echo base_url('public/images/picture/delete.png')?>' alt='<?php echo $val['image']?>' title='<?php echo $val['id']?>' width="30px" height="30px">
                    
                    <a href="<?php echo base_url('SiteEdit/edit_gallery/'.$val['id']);?>">
                        <img class='admin_change' src='<?php echo base_url('public/images/picture/exchange.png')?>' width="30px" height="30px">
                    </a>
                    <?php echo $val['arm_text'];?>
                </div>
            </div>
        <?php endforeach;?>

        
    </section>
</div>
</body>
</html>