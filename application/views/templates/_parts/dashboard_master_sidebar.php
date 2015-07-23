<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li>
				<a href="<?php echo site_url(); ?>"><i class="fa fa-home fa-fw"></i> Frontpage</a>
			</li>
			<li>
				<a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
			</li>
			<?php echo $current_user_menu; ?>
		</ul>
	</div>
	<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->