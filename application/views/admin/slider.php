<div id="boxDelete" style="display: none" >
    <div id="delet"></div>
    <div id="yesNo" class="modal-content">
        <div class="delete-box">
            <p>Are you sure ?</p>
            <button class="Yes btn btn-default" id="Yes">Yes</button>
            <button id="No" class="No btn btn-default">No</button>
        </div>
    </div>
</div>
<div class="container">
    <section class="right_col col-xs-12">
        
        <h1 class="paragraph">
            Slider
        </h1>
        
        <div class="">   
           <?php foreach($selectSlide as $val):?>
                <table id="example" class="table table-striped responsive-utilities jambo_table">
                    <thead class="sortable" data-table="menu">
                        <tr class="headings" data-id="<?=$val["id"]?>">
                            <th class="text_center"><?php echo $val['arm_paragraph'];?></th>
                            <th class="text_center">
                                <a href="<?php echo base_url('SiteEdit/slideEdite/'.$val['id']);?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </th>
                            <th class="text_center">
                                <span  alt='<?php echo $val['image']?>' title='<?php echo $val['id']?>' class="delete deleteSlid" >
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </span>
                            </th>
                        </tr>
                    </thead>
                </table>         
            <?php endforeach;?>
        </div>

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="text-right"><button class="open">Add Image</button></div>
            <div class="addmenu">
                <form action="<?=base_url('SiteEdit/slideInsert')?>" method="POST" enctype="multipart/form-data">
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
                            <label for="arm_text" class="col-sm-12 control-label">Armenian Text (h1 or h2 > Title , p > Text )</label>
                            <textarea name="arm_text" id="arm_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                        </div>
                        <div class="lang-rus">
                            <label for="rus_title" class="col-sm-12 control-label ">Russian Title </label>
                            <input type="text" id="rus_title" name="rus_paragraph" class="form-control "/>
                            <label for="rus_text" class="col-sm-12 control-label ">Russian Text ( p > Text )</label>
                            <textarea name="rus_text" id="rus_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                        </div>
                        <div class="lang-eng">
                            <label for="eng_title" class="col-sm-12 control-label ">English Title</label>
                            <input type="text" id="eng_title" name="eng_paragraph" class="form-control "/>

                            <label for="eng_text" class="col-sm-12 control-label ">English Text ( p > Text )</label>
                            <textarea name="eng_text" id="eng_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>
                        </div>

                        <label for="">Image size 455x465</label>
                        <input type="file" id="file_upload" name="menuSlid">


                        <label for="alt" class="col-sm-12 control-label">Alt</label>
                        <input type="text" id="alt" placeholder="" name="alt" class="form-control"/>

                        <label for="link" class="col-sm-12 control-label hidden">Address</label>
                        <input type="text" id="link" placeholder="http://example.com/" name="link" class="form-control hidden"/>

                        <label for="video" class="col-sm-12 control-label hidden">Video</label>
                        <input type="text" id="video" placeholder="https://www.youtube.com/watch?v=[8WsMQlqaxVA]" name="video" class="form-control hidden"/>


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
        


        
    </section>
</div>
</body>
</html>