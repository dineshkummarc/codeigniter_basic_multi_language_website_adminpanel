<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login </title>
    <link rel="shortcut icon" href="public/images/favicon.ico">
    <link href="<?php echo base_url('public/css/admin/animate.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/admin/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/admin/custom.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('public/js/admin/jquery.min.js');?>"></script>
</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form action="" method="POST">
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" name="user" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name="pass" />
                        </div>
                        <div>
                             <input type="submit" value="Sign In" class="btn btn-default btn-sm"  name="adminBut" />
                           
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><a href="http://example.com/" target="_blank"> ExampleCompany </a></h1>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>