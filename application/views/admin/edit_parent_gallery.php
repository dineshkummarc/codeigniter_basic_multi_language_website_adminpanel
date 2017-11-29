<div class="col-sm-12">
    <section class="right_col">
        <!-- <a href="<?php echo base_url('SiteEdit/');?>" class="btn btn-default" style="border-radius: 0px"> Go back </a> -->
        <div class="row">
            <form action=""  method="POST" enctype="multipart/form-data">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 img_upload_min_height ">
                    <div class="col-xs-12">
                        <div class="image_upload">
                            
                            <div class="bg-image" style="background-image: url(<?php echo base_url('public/images/picture/menucatalog/parentcatalog/'.$pboxgallery['image']);?>);width: 265px;height: 380px;">

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="file_upload" style="width: 89%;">
                            <input type="file" id="file_upload" name="image">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 margin_lenguage">
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
                                    <input type="text" placeholder="Menu paragraph Armenian" name="arm_paragraph" value="<?php echo $pboxgallery['arm_paragraph'];?>">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="text_lenguage">
                                    <div class="title_left">
                                        <small>
                                           Armenian Text ( p > Text)
                                        </small>
                                    </div>
                                    <textarea name="arm_text" id="" placeholder="Text" class="TinyMCE"><?php echo $pboxgallery['arm_text'];?></textarea>
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
                                    <input type="text" placeholder="Menu paragraph Russian" name="rus_paragraph" value="<?php echo $pboxgallery['rus_paragraph'];?>">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="text_lenguage">
                                    <div class="title_left">
                                        <small>
                                            Russian Text ( p > Text )
                                        </small>
                                    </div>
                                    <textarea name="rus_text" id="" class="TinyMCE" placeholder="Text"><?php echo $pboxgallery['rus_text'];?></textarea>
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
                                    <input type="text" placeholder="Menu paragraph English" class="TinyMCE" name="eng_paragraph" value="<?php echo $pboxgallery['eng_paragraph'];?>">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="text_lenguage">
                                    <div class="title_left">
                                        <small>
                                            English Text ( p > Text )
                                        </small>
                                    </div>
                                    <textarea name="eng_text" class="TinyMCE" id="" placeholder="Text"><?php echo $pboxgallery['eng_text'];?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lenguage_box">
                        <div class="col-xs-12">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        Alt
                                    </small>
                                </div>
                                <input type="text" placeholder="" class="TinyMCE" name="alt" value="<?php echo $pboxgallery['alt'];?>">
                            </div>
                        </div>
                    </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="button_save_send">
                        <input type="reset" class="Yes btn btn-defaul" value="Reset">
                        <input type="submit" class="No btn btn-defaul" name="updatePBox" value="Save">
                    </div>
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

