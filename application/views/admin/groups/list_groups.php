<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
	<div class="row" style="padding-top:10px;">
		<div class="col-lg-12">
			<a href="<?php echo site_url('admin/groups/create'); ?>" class="btn btn-primary">Create Group</a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<?php
			if(!empty($groups)){
				echo '<table class="table table-hover table-bordered table-condensed">';
				foreach($groups as $group){
					echo '<tr>';
					echo '<td>'.$group->name.'</td><td>'.$group->description.'</td><td>'.anchor('admin/groups/edit/'.$group->id,'<span class="fa fa-pencil"></span>');
					if(!in_array($group->name, array('admin','members'))) echo ' '.anchor('admin/groups/delete/'.$group->id,'<span class="fa fa-remove"></span>');
					echo '</td>';
					echo '</tr>';
				}
				echo '</table>';
			}
			?>
		</div>
	</div>
</div>