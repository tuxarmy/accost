<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $page_title; ?></title>
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/metisMenu.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/timeline.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/sb-admin-2.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/morris.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<?php echo $this->config->item('acc_title'); ?> <small><i>admin</i></small>
					</a>
				</div>
				<!-- /.navbar-header -->
				
				<ul class="nav navbar-top-links navbar-right">
					<li><a href="<?php echo site_url('admin/groups'); ?>">Groups</a></li>
					<li><a href="<?php echo site_url('admin/users'); ?>">Users</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
						</li>
						<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
					</li>
					<li class="divider"></li>
					<li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
				</li>
			</ul>
			<!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
	</ul>
	<!-- /.navbar-top-links -->
	<?php $this->load->view('templates/_parts/admin_master_sidebar'); ?>
</nav>
</div>
<!-- /.wrapper -->