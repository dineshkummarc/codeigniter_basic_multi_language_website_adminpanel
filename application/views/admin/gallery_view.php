<div id="galleryDeleteView" style="display: none" >
    <div id="delet"></div>
    <div id="yesNo" class="modal-content">
        <div class="delete-box">
            <p>Are you sure ?</p>
            <button class="Yes YesGallery btn btn-default">Yes</button>
            <button id="No" class="No btn btn-default">No</button>
        </div>
    </div>
</div>
<div class="container">
    <section class="right_col col-xs-12">
        
        <h1 class="paragraph">
            Gallery
        </h1>
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="text-right"><button class="open">Add Image</button></div>
            <div class="addmenu">
                <form action="<?=base_url('SiteEdit/gallery_view')?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">

                        <ul class="lang-change-admin hidden">
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
                        <div class="lang-arm hidden">
                            <label for="arm_title" class="col-sm-12 control-label">Armenian Title</label>
                            <input type="text" id="arm_title" name="arm_title" class="form-control"/>
                        </div>
                        <div class="lang-rus hidden">
                            <label for="rus_title" class="col-sm-12 control-label ">Russian Title</label>
                            <input type="text" id="rus_title" name="rus_title" class="form-control "/>
                        </div>
                        <div class="lang-eng hidden">
                            <label for="eng_title" class="col-sm-12 control-label ">English Title</label>
                            <input type="text" id="eng_title" name="eng_title" class="form-control"/>
                        </div>

                        <label for=""></label>
                        <input type="file" id="file_upload" name="gallery">

                        <label for="alt" class="col-sm-12 control-label">Alt</label>
                        <input type="text" id="alt" placeholder="" name="alt" class="form-control"/>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="button_save_send">
                            <input type="reset" class="Yes btn btn-defaul" value="Reset">
                            <input type="submit" class="No btn btn-defaul" name="addGallery" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="">   
            <?php foreach($selectGallery as $val):?>
                <div class="home_slide pull-left" style="height: 220px;">
                    <div class="parent_video">

                        <img class="img-responsive" src="<?php echo base_url('public/images/picture/gallery/'.$val['image'])?>">

                        <img class='delete galleryDeleteButton abs_delete' src='<?php echo base_url('public/images/picture/delete.png')?>' alt='<?php echo $val['image']?>' title='<?php echo $val['id']?>' width="30px" height="30px">
                        
                        <a class="hidden" href="<?php echo base_url('SiteEdit/partnersEdite/'.$val['id']);?>">
                            <img class='admin_change' src='<?php echo base_url('public/images/picture/exchange.png')?>' width="30px" height="30px">
                        </a>
                        <h1 class="hidden"><?php echo $val['arm_title'];?></h1>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        


        
    </section>
</div>
</body>
</html>