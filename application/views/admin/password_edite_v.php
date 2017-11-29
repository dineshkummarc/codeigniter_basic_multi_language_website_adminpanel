<div class="container">
    <section class="right_col col-xs-12">
        <div class="row">
        <h1 class="paragraph" style="margin:0px 0px 20px 0px;text-align: center;">
            Change Password
        </h1>
            <form action=""  method="POST" enctype="multipart/form-data">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="lenguage_box">
                        <div class="col-xs-12">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        Older users։
                                    </small>
                                </div>
                                <input type="text" placeholder="" name="arm_paragraph" value="<?php echo $boxgallery['user'];?>">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        Old Password։
                                    </small>
                                </div>
                                <input type="text" placeholder="" name="arm_paragraph" value="<?php echo $boxgallery['pass'];?>">
                            </div>
                        </div>
                        
                    </div>
                        
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="lenguage_box">
                        <div class="col-xs-12">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        New user։
                                    </small>
                                </div>
                                <input type="text" placeholder="" name="user">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        New password։ <span style="color: red;"><?php echo $error ;?></span>
                                    </small>
                                </div>
                                <input type="password" placeholder="" name="pass">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="title_lenguage">
                                <div class="title_left">
                                    <small>
                                        Repeat password։ <span style="color: red;"><?php echo $error ;?></span>
                                    </small>
                                </div>
                                <input type="password" placeholder="" name="oldpass">
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

