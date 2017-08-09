<?php

require_once 'helper/Session.php';
$path = 'public/';

if(! Session::checkUserAunthenticate() ){

    header('location:index.php');
    exit;

}

if($_SERVER['REQUEST_METHOD'] == 'POST') {


    require_once 'class/Users.php';

    $users = new Users();

    require_once 'validation/Users/UserAddFormValidation.php';

    $errors = (new UserAddFormValidation())->rules($_POST);


    if ($errors['validate'] == 1) {

       $message = $users->userAdd($_POST);

    }
}


 ?>

<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body class="no-skin">

<?php include 'includes/navbar.php'; ?>



<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <?php include 'includes/sidebar.php'; ?>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">Users</li>
                </ul><!-- /.breadcrumb -->
            </div>

            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="ace-icon fa fa-cog bigger-130"></i>
                    </div>
                </div><!-- /.ace-settings-container -->

                <div class="page-header">
                    <h1>
                        Users
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            List
                        </small>

                        <a href="users_add.php"> <button class="btn btn-primary"><i class="fa fa-list"></i>Users List</button></a>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <?php if(isset($message)) : ?>
                            <div class="alert alert-block alert-success">
                                <?php echo $message; ?>
                            </div>
                        <?php endif; ?>

                        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" role="form">

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="username" placeholder="Username" class="col-xs-10 col-sm-5">
                                    <?php
                                    if(isset($errors['errors']['username'])) {
                                        echo "<span style='color:red;'>".$errors['errors']['username']."</span>";
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="email" placeholder="Email" class="col-xs-10 col-sm-5">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

                                <div class="col-sm-9">
                                    <input type="password" id="form-field-1" name="password" placeholder="Password" class="col-xs-10 col-sm-5">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gender </label>

                                <div class="col-sm-9">
                                    <select  id="form-field-1" name="gender"class="col-xs-10 col-sm-5">
                                        <option value="male">Male</option>
                                        <option value="female"> Female</option>
                                        <option value="others"> Others</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status </label>

                                <div class="col-sm-9">
                                    <select  id="form-field-1" name="status"class="col-xs-10 col-sm-5">
                                        <option value="1">Active</option>
                                        <option value="0"> InActive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

                                <div class="col-sm-9">
                                    <textarea  id="form-field-1" name="address" placeholder="Address" class="col-xs-10 col-sm-5"></textarea>

                                </div>
                            </div>

                            <div class="clearfix form-actions">
                                <div class="col-md-offset-3 col-md-9">
                                    <button class="btn btn-info" type="submit">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Submit
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="ace-icon fa fa-undo bigger-110"></i>
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <?php include 'includes/footer.php'; ?>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->


<?php include 'includes/footer.php'; ?>


<?php include 'includes/script.php'; ?>
</body>
</html>
