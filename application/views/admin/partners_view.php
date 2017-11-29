<div id="partnersDeleteView" style="display: none" >
    <div id="delet"></div>
    <div id="yesNo" class="modal-content">
        <div class="delete-box">
            <p>Are you sure ?</p>
            <button class="Yes YesPartners btn btn-default">Yes</button>
            <button id="No" class="No btn btn-default">No</button>
        </div>
    </div>
</div>
<div class="container">
    <section class="right_col col-xs-12">
        
        <h1 class="paragraph">
            Partners
        </h1>
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="text-right"><button class="open">Add link</button></div>
            <div class="addmenu">
                <form action="<?=base_url('SiteEdit/partners_view')?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <div class="col-xs-12">
                        <div class="col-xs-4 text-center">
                            <label for="">Image size 1920x1080</label>
                            <input type="file" id="file_upload" name="gallery"  style="margin: 0px auto;">
                        </div>
                        <div class="col-xs-4">
                            <label for="alt" class="col-sm-12 control-label">Alt</label>
                            <input type="text" id="alt" placeholder="" name="alt" class="form-control" />
                        </div>
                        <div class="col-xs-4">
                            <label for="link" class="col-sm-12 control-label">link</label>
                            <input type="text" id="link" placeholder="http://example.com/" name="link" class="form-control" />
                        </div>
                    </div>      

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="button_save_send">
                            <input type="reset" class="Yes btn btn-defaul" value="Reset">
                            <input type="submit" class="No btn btn-defaul" name="addPartners" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="">   
            <?php foreach($selectPartners as $val):?>
                <div class="home_slide pull-left" style="height: 255px;">
                    <div class="parent_video">

                        <img class="img-responsive" src="<?php echo base_url('public/images/picture/partners/'.$val['image'])?>">

                        <img class='delete partnersDeleteButton abs_delete' src='<?php echo base_url('public/images/picture/delete.png')?>' alt='<?php echo $val['image']?>' title='<?php echo $val['id']?>' width="30px" height="30px">
                        
                        <a href="<?php echo base_url('SiteEdit/partnersEdite/'.$val['id']);?>">
                            <img class='admin_change' src='<?php echo base_url('public/images/picture/exchange.png')?>' width="30px" height="30px">
                        </a>
                        <h1><a href="<?=$val['link']?>" target="_blank"><?=$val['link']?></a></h1>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        


        
    </section>
</div>
</body>
</html>