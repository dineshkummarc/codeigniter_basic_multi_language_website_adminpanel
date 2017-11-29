<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CPanel  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" href="<?php echo base_url('public/images/favicon.ico');?>" type="image/gif" sizes="16x16">
    <link href="<?php echo base_url('public/css/admin/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/admin/admin_style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/admin/custom.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/admin/jquery-ui.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/admin/floatexamples.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('public/js/admin/jquery_mini.js');?>"></script>
    <script src="<?php echo base_url('public/js/admin/bootstrap.min.js');?>" ></script>
    <script src="<?php echo base_url('public/js/admin/admin_init.js');?>" ></script>
    <script src="<?=base_url('/tinymce/js/tinymce/tinymce.min.js');?> "></script>
    <script src="<?=base_url('/public/js/admin/jquery-ui.min.js');?> "></script>
    <script src="<?=base_url('/public/js/admin/jquery.ui.sortable-animation.js');?> "></script>
    <script src="<?=base_url('/public/js/admin/order_table.js');?> "></script>
</head>
<body>



<div class="col-xs-12">
    <header>
        <ul>
            <li>
                <a href="<?php echo base_url('/SiteEdit');?>">Main</a>
            </li>
            <li>
                <a href="<?php echo base_url('/SiteEdit/slideInsert/');?>">Slider</a>
            </li>
            <li>
                <a href="<?php echo base_url('SiteEdit/changePassword');?>"><i class="fa fa-key" aria-hidden="true"></i> Password</a>
            </li>
            <li>
                <a href="<?=base_url();?>" target="_blank">View Site</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/logOut');?>">LogOut</a>
            </li>
        </ul>
    </header>
</div>


    