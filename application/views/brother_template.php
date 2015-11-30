<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <link href="<?php echo base_url(); ?>assets/css/navbar-custom.css" rel="stylesheet">
    
	<title>Home</title>
</head>
<body>
	    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>index.php/Brother"><img src="<?php echo base_url();?>assets/images/LogoMontfort_small.png" style="margin-top : -17px;"></a>
                <a class="navbar-brand" href="<?php echo base_url();?>index.php/Brother">The Montfort Brothers of St. Gabriel</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลส่วนตัว<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/Education">ประวัติการศึกษา</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/Experience">ประวัติการทำงาน</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/Work">ผลงาน</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">เลขานุการ<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="newSecretary.php">ให้สิทธิเลขานุการ</a>
                            </li>
                            <!-- <li>
                                <a href="editSecretary.php">แก้ไขข้อมูลเลขานุการ</a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ยินดีต้อนรับ<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                                <li>
                                <a href="<?php echo base_url(); ?>index.php/Home/editprofile">แก้ไขประวัติส่วนตัว</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Logout">ออกจากระบบ</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        <?php $this->load->view($content); ?>
    </div> 

</body>
</html>