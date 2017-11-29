<div class="col-sm-12">
    <section class="right_col">
        <!-- <a href="<?php echo base_url('SiteEdit/');?>" class="btn btn-default" style="border-radius: 0px"> Ետ գնալ </a> -->
        <div class="row">
            <form action=""  method="POST" enctype="multipart/form-data">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 img_upload_min_height ">
                    <div class="col-xs-12">
                        <div class="image_upload">
                            <img src="<?php echo base_url('public/images/picture/menuCatalog/'.$boxgallery['image']);?>">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="file_upload">
                            <input type="file" id="file_upload" name="image">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin_lenguage">
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
                        <div class="lenguage_box">
                            <div class="col-xs-12">
                                <div class="title_lenguage">
                                    <div class="title_left">
                                        <small>
                                            Armenian Title
                                        </small>
                                    </div>
                                    <input type="text" placeholder="" name="arm_paragraph" value="<?php echo $boxgallery['arm_paragraph'];?>">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="text_lenguage">
                                    <div class="title_left">
                                        <small>
                                            Armenian Text ( p > Text)
                                        </small>
                                    </div>
                                    <textarea name="arm_text" id="" placeholder="Text" class="TinyMCE"><?php echo $boxgallery['arm_text'];?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="lang-rus">
                        <div class="lenguage_box">
                            <div class="col-xs-12">
                                <div class="title_lenguage">
                                    <div class="title_left">
                                        <small>
                                            Russian Title
                                        </small>
                                    </div>
                                    <input type="text" placeholder="" name="rus_paragraph" value="<?php echo $boxgallery['rus_paragraph'];?>">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="text_lenguage">
                                    <div class="title_left">
                                        <small>
                                            Russian Text ( p > Text )
                                        </small>
                                    </div>
                                    <textarea name="rus_text" id="" class="TinyMCE" placeholder="Text"><?php echo $boxgallery['rus_text'];?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lang-eng">
                        <div class="lenguage_box">
                            <div class="col-xs-12">
                                <div class="title_lenguage">
                                    <div class="title_left">
                                        <small>
                                            English Title
                                        </small>
                                    </div>
                                    <input type="text" placeholder="" class="TinyMCE" name="eng_paragraph" value="<?php echo $boxgallery['eng_paragraph'];?>">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="text_lenguage">
                                    <div class="title_left">
                                        <small>
                                            English Text ( p > Text )
                                        </small>
                                    </div>
                                    <textarea name="eng_text" class="TinyMCE" id="" placeholder="Text"><?php echo $boxgallery['eng_text'];?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="button_save_send">
                        <input type="reset" class="Yes btn btn-defaul" value="Reset">
                        <input type="submit" class="No btn btn-defaul" name="updateBox" value="Save">
                    </div>
                </div>
            </form>
        </div>
</div>
<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>


</section>
</div>
</body>
</html>

