<div class="right_col" role="main">
    <div class="row">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="text-right"><button class="open">Add Menu</button></div>
                <div class="addmenu">
                    <form action="addMenu" method="POST" enctype="multipart/form-data">
                        <label for="arm_title" class="col-sm-2 control-label">Arm_title</label>
                        <input type="text" id="arm_title" name="arm_title" class="form-control"/>

                        <label for="rus_title" class="col-sm-2 control-label">Rus_title</label>
                        <input type="text" id="rus_title" name="rus_title" class="form-control"/>

                        <label for="eng_title" class="col-sm-2 control-label">Eng_title</label>
                        <input type="text" id="eng_title" name="eng_title" class="form-control"/>

                        <label for="arm_text" class="col-sm-2 control-label">Arm_text</label>
                        <textarea name="arm_text" id="arm_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>

                        <label for="rus_text" class="col-sm-2 control-label">Rus_text</label>
                        <textarea name="rus_text" id="rus_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>

                        <label for="eng_text" class="col-sm-2 control-label">Eng_text</label>
                        <textarea name="eng_text" id="eng_text" cols="15" rows="5" class="form-control TinyMCE"></textarea>


                        <div class="form-group">
                            <input type="file" id="file_upload" name="menuImg">
                        </div>
                        <input type="submit" name="addMenu" value="Add Menu"/>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                        <thead class="sortable" data-table="menu">
                        <?php foreach($select_menu as $menu):?>

                            <tr class="headings" data-id="<?=$menu["id"]?>">
                                <th class="text_center"><?php echo $menu['arm_title'];?></th>
                                <th class="text_center"><?php echo $menu['rus_title'];?></th>
                                <th class="text_center"><?php echo $menu['eng_title'];?></th>
                                <th class="text_center">
                                    <a href="">
                                        ParentMenu
                                    </a>
                                </th>
                                <th class="text_center">
                                    <a href="<?php echo base_url('SiteEdit/edit_menu/'.$menu['id']);?>">
                                        <img class='admin_change' src='<?php echo base_url('public/images/picture/exchange.png')?>' width="30px" height="30px">
                                    </a>
                                </th>
                                <th class="text_center"><img class='delete deleteMenu' src='<?php echo base_url('public/images/picture/delete.png')?>' alt='<?php echo $menu['menuImg']?>' title='<?php echo $menu['id']?>' width="30px" height="30px"></th>
                            </tr>

                        <?php endforeach;?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>