<div id="parentSlideDelete" style="display: none" >
    <div id="delet"></div>
    <div id="yesNo" class="modal-content">
        <div class="delete-box">
            <p>Are you sure ?</p>
            <button class="parentSlideYes Yes btn btn-default">Yes</button>
            <button id="parentSlideNo" class="No btn btn-default">No</button>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <section class="right_col">
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
                            <label for="arm_title" class="col-sm-12 control-label">Title Armenian</label>
                            <input type="text" id="arm_title" name="arm_paragraph" class="form-control"/>
                            <div>
                                <label for="arm_text" class="col-sm-12 control-label">Text Armenian ( p > Text )</label>
                                <textarea name="arm_text" id="arm_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                            </div>
                        </div>
                        <div class="lang-rus">
                            <label for="rus_title" class="col-sm-12 control-label">Title Russian</label>
                            <input type="text" id="rus_title" name="rus_paragraph" class="form-control"/>
                            <div>
                                <label for="rus_text" class="col-sm-12 control-label">Text Russian ( p > Text )</label>
                                <textarea name="rus_text" id="rus_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                            </div>
                        </div>
                        <div class="lang-eng">
                            <label for="eng_title" class="col-sm-12 control-label">Title English</label>
                            <input type="text" id="eng_title" name="eng_paragraph" class="form-control"/>

                            <div>
                                <label for="eng_text" class="col-sm-12 control-label">Text English ( p > Text )</label>
                                <textarea name="eng_text" id="eng_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                            </div>
                        </div>



                        <input type="file" id="file_upload" name="parentMenuSlid">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="button_save_send">
                            <input type="reset" class="Yes btn btn-defaul" value="Reset">
                            <input type="submit" class="No btn btn-defaul" name="addParentCatalog" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php foreach($selectParentSlide as $val):?>
            <div class="home_slide pull-left" style="width: 265px;">
                    

                    <div class="bg-image" style="background-image: url(<?php echo base_url('public/images/picture/menucatalog/parentcatalog/'.$val['image'])?>);width: 265px;height: 380px;">
                        
                    </div>      
                    <img class='delete deleteParentSlide abs_delete_pslide' src='<?php echo base_url('public/images/picture/delete.png')?>' alt='<?php echo $val['image']?>' title='<?php echo $val['id']?>' width="30px" height="30px">
                    <a href="<?php echo base_url('SiteEdit/edit_parent_gallery/'.$val['id']);?>">
                        <img class='admin_change abs_change_pslide' src='<?php echo base_url('public/images/picture/exchange.png')?>' width="30px" height="30px">
                    </a>
                    <h1 class="pslide_title"><?php echo $val['arm_paragraph'];?></h1>
            </div>
        <?php endforeach;?>
    </section>
</div>
</body>
</html>