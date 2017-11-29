<div class="container">
    <section class="right_col col-xs-12">
        <div class="row">
            <form action=""  method="POST" enctype="multipart/form-data">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 img_upload_min_height ">
                <div class="col-xs-12">
                    <div class="image_upload">
                    <div class="text-center">
                        1920x1080
                    </div>
                        <div style="background-image: url('<?php echo base_url('public/images/picture/aboutgallery/'.$boxgallery['image']);?>');width: 100%;height: 240px;" class="bg-image">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="file_upload">
                        <input type="file" id="file_upload" name="image">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 margin_lenguage">
                
                <div class="lenguage_box">
                    <div class="col-xs-12">
                        <div class="title_lenguage">
                            <div class="title_left">
                                <small>
                                    Alt
                                </small>
                            </div>
                            <input type="text" placeholder="" class="TinyMCE" name="alt" value="<?php echo $boxgallery['alt'];?>">
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

