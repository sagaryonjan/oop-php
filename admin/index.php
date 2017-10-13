<?php

$path = 'public/';

require_once 'helper/Session.php';

if( Session::checkUserAunthenticate() ) {

    header('location:dashboard.php');

}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once 'class/Users.php';
    require_once 'validation/LoginValidation.php';

    $users = new Users();

    $errors = ( new LoginValidation() )->rules($_POST);

    if( $errors['validate'] == 1 ) {

        $message = $users->login($_POST);

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo $path; ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $path; ?>font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo $path; ?>css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo $path; ?>css/ace.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo $path; ?>css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo $path; ?>css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo $path; ?>css/ace-ie.min.css" />
    <![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="<?php echo $path; ?>js/html5shiv.min.js"></script>
    <script src="<?php echo $path; ?>js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">Admin</span>
                            <span class="white" id="id-text2">News Portal</span>
                        </h1>
                        <h4 class="blue" id="id-company-text">&copy; OCD </h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        Please Enter Your Information
                                    </h4>

                                    <div class="space-6"></div>

                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <fieldset>
                                            <?php if(isset($message)) : ?>
                                            <div class="alert alert-block alert-danger">
                                                <?php echo $message; ?>
                                            </div>
                                            <?php endif; ?>
                                            <label class="block clearfix">

                                                <span class="block input-icon input-icon-right">
                                                    <input type="text" name="email" class="form-control" value="" placeholder="Email" />
                                                    <i class="ace-icon fa fa-user"></i>
                                                </span>

                                                <?php
                                                if(isset($errors['errors']['email'])) {
                                                    echo "<span style='color:red;'>".$errors['errors']['email']."</span>";
                                                }
                                                ?>

                                                <?php
                                               /*
                                                    errorDisplay($errors,'email');
                                                }*/
                                                ?>

                                            </label>

                                            <label class="block clearfix">

                                                <span class="block input-icon input-icon-right">
                                                    <input type="password" name="password" value="" class="form-control" placeholder="Password" />
                                                    <i class="ace-icon fa fa-lock"></i>
                                                </span>

                                                <?php
                                                if(isset($errors['errors']['password'])) {
                                                    echo "<span style='color:red;'>".$errors['errors']['password']."</span>";
                                                }
                                                ?>

                                                <?php
                                                /*if(isset($errors)) {
                                                    errorDisplay($errors, 'password');
                                                }*/
                                                ?>

                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Remember Me</span>
                                                </label>

                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">Login</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>

                                </div><!-- /.widget-main -->

                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->
                    </div><!-- /.position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?php echo $path; ?>js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo $path; ?>js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo $path; ?>js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

</body>
</html>
