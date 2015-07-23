<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<footer>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</footer>
	<script src="<?php echo base_url('assets/dashboard/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/js/metisMenu.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/js/raphael-min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/js/morris.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/js/morris-data.js'); ?>"></script>
	<script src="<?php echo base_url('assets/dashboard/js/sb-admin-2.js'); ?>"></script>
</body>
</html>