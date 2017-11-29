<div class="col-sm-12">
    <section class="right_col">
    <a href="<?php echo base_url('SiteEdit/shortlink');?>" class="btn btn-default" style="border-radius: 0px"> Ետ գնալ </a>
    <div class="row">
        <form action=""  method="POST" enctype="multipart/form-data">
            
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
                                        Section Title Armenian
                                    </small>
                                </div>
                                <input type="text" placeholder="Menu paragraph Armenian" name="arm_title" value="<?php echo $boxgallery['arm_title'];?>">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="text_lenguage">
                                <div class="title_left">
                                    <small>
                                        Armenian text (h1 or h2 > Title , p > Text )
                                    </small>
                                </div>
                                <textarea name="arm_text" id="" placeholder="Text" class="TinyMCE"><?php echo $boxgallery['arm_text'];?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="title_lenguage">
                            <div class="title_left">
                                <small>
                                    Section Title Armenian img 1
                                </small>
                            </div>
                            <input type="text" placeholder="Menu paragraph Armenian" name="image_first_title_arm" value="<?php echo $boxgallery['image_first_title_arm'];?>">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="title_lenguage">
                            <div class="title_left">
                                <small>
                                    Section Title Armenian img 2
                                </small>
                            </div>
                            <input type="text" placeholder="Menu paragraph Armenian" name="image_second_title_arm" value="<?php echo $boxgallery['image_second_title_arm'];?>">
                        </div>
                    </div>
                </div>
                <div class="lang-rus">    
                    <div class="lenguage_box">
                        <div class="col-xs-12">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        Section Title Russian
                                    </small>
                                </div>
                                <input type="text" placeholder="Menu paragraph Russian" name="rus_title" value="<?php echo $boxgallery['rus_title'];?>">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="text_lenguage">
                                <div class="title_left">
                                    <small>
                                        Russian text (h1 or h2 > Title , p > Text )
                                    </small>
                                </div>
                                <textarea name="rus_text" id="" class="TinyMCE" placeholder="Text"><?php echo $boxgallery['rus_text'];?></textarea>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        Section Title Russian img 1
                                    </small>
                                </div>
                                <input type="text" placeholder="Menu paragraph Armenian" name="image_first_title_rus" value="<?php echo $boxgallery['image_first_title_rus'];?>">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        Section Title Russian img 2
                                    </small>
                                </div>
                                <input type="text" placeholder="Menu paragraph Armenian" name="image_second_title_rus" value="<?php echo $boxgallery['image_second_title_rus'];?>">
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
                                        Section Title English
                                    </small>
                                </div>
                                <input type="text" placeholder="Menu paragraph English" class="TinyMCE" name="eng_title" value="<?php echo $boxgallery['eng_title'];?>">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="text_lenguage">
                                <div class="title_left">
                                    <small>
                                        English text (h1 or h2 > Title , p > Text )
                                    </small>
                                </div>
                                <textarea name="eng_text" class="TinyMCE" id="" placeholder="Text"><?php echo $boxgallery['eng_text'];?></textarea>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        Section Title English img 1
                                    </small>
                                </div>
                                <input type="text" placeholder="Menu paragraph Armenian" name="image_first_title_eng" value="<?php echo $boxgallery['image_first_title_eng'];?>">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        Section Title English img 2
                                    </small>
                                </div>
                                <input type="text" placeholder="Menu paragraph Armenian" name="image_second_title_eng" value="<?php echo $boxgallery['image_second_title_eng'];?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="language_box col-xs-12">
                    <div class="col-xs-6">
                        <div class="title_lenguage">
                            <div class="title_left">
                                <small>
                                    Alt 1
                                </small>
                            </div>
                            <input type="text" placeholder="" class="TinyMCE" name="alt_first" value="<?php echo $boxgallery['alt_first'];?>">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="title_lenguage">
                            <div class="title_left">
                                <small>
                                    Alt 2
                                </small>
                            </div>
                            <input type="text" placeholder="" class="TinyMCE" name="alt_second" value="<?php echo $boxgallery['alt_second'];?>">
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 img_upload_min_height" style="margin-top: 20px;">
                <div class="col-xs-4">
                    <div class="col-xs-12">
                        Image Size (320x426)
                        <div class="image_upload">
                            <img src="<?php echo base_url('/public/images/picture/shortlink/'.$boxgallery['image_first']);?>" witdh="320px" height="426px">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="file_upload" style="width: 81%;">
                            <input type="file" id="file_upload" name="image_first">
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="col-xs-12">
                        Image Size (320x426)
                        <div class="image_upload">
                            <img src="<?php echo base_url('/public/images/picture/shortlink/'.$boxgallery['image_second']);?>" witdh="320px" height="426px">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="file_upload" style="width: 81%;">
                            <input type="file" id="file_upload" name="image_second">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 50px;">
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

