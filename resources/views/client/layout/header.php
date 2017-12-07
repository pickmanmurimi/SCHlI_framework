<? include( SCHlI_CLIENT_VIEWS . 'layout/head.php');?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span class="fa fa-stethoscope fa-flip-horizontal"></span> <span>Benign Health</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <? if(sessions::trackSession('name')){?>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?=$_SESSION['name'];?></h2>
              </div>
            </div>
            <?}else{?>
            <ul class="nav side-menu">
              <li>
                <a href="<?=URL_ROOT?>auth/Login"><i class="fa fa-sign-in"></i> Login </span></a>
              </li>
              <li>
                <a href="<?=URL_ROOT?>auth/Login"><i class="fa fa-edit"></i> sign up </span></a>
              </li>
            </ul>
                <?}?>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <? include(SCHlI_CLIENT_VIEWS . 'Layout/sidebarmenu.php');?>
            <!-- /sidebar menu -->

        <!-- top navigation -->
        <? include(SCHlI_CLIENT_VIEWS . 'Layout/topnavigation.php'); ?>
        <!-- /top navigation -->