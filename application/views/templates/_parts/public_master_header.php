<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="header">
	<div class="col-xs-4">
		<div class="logo">
			<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt=""></a>
		</div>
	</div>
	<div class="col-xs-8 header_right">
		<span class="menu"></span>
		<div class="top-menu">
			<ul>
				<li><a href="<?php echo base_url('/'); ?>"><i class="fa fa-home"></i> Home</a></li>
				<li><a href="<?php echo base_url('/about'); ?>"><i class="fa fa-star"></i> About</a></li>
				<li><a href="<?php echo base_url('/services'); ?>"><i class="fa fa-thumbs-up"></i> Services</a></li>
				<li><a href="<?php echo base_url('/gallery'); ?>"><i class="fa fa-picture-o"></i> Gallery</a></li>
				<li><a href="<?php echo base_url('/contact'); ?>"><i class="fa fa-envelope-o"></i> Contact</a></li>
				<div class="clearfix"></div>
			</ul>	
		</div>
		<script>
		$( "span.menu" ).click(function() {
			$( ".top-menu" ).slideToggle( "slow", function() {});
		});
		</script>
	</div>
	<div class="clearfix"> </div>
</div>