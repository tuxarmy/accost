<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<footer>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</footer>
	<script src="<?php echo base_url('assets/admin/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/metisMenu.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/raphael-min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/morris.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/morris-data.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/sb-admin-2.js'); ?>"></script>
</body>
</html>