<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<div class="copy">
		<div class="container">
			<p>© 2015 Accomodation Finder System <a href="<?php base_url(); ?>">Accost</a> </p>
		</div>
	</div>

	<script src="<?php echo base_url('assets/public/js/jquery-1.11.3.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/public/js/responsiveslides.min.js');?>"></script>
	<script src="<?php echo base_url('assets/public/js/easyResponsiveTabs.js'); ?>"></script>	
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>	
	<script>
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		});
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
	});
	</script>
</body>
</html>