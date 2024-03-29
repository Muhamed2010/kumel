<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tripify- Travel more, Sell it, Enjoy your travelling!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/common.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/home.css" rel="stylesheet">

  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Aristo/Aristo.css" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/netra.js"></script>
  
  <!--<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>-->
  <!--<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>-->
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">
    </head>

    <body>

      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="menu">
          <div class="container">
            <div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" width="149px" height="30px"></a></div>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">Hot Deals</a></li>
				<?php if(!$_user): ?>
				
                <li><a href="<?php echo $_data_user['login_url']; ?>">Login/Sign Up</a></li>
				<?php elseif($_user): ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello <?php echo $_data_user['user_profile']['first_name']; ?><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('main/logout'); ?>">Logout</a></li>
                  </ul>
                </li>
				<?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

