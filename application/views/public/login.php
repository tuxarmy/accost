<div class="container">
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		<div class="panel panel-info" style="border-color: #87D54D">
			<div class="panel-heading" style="color:#fff;background-color:#87D54D;border-color: #87D54D;">
				<div class="panel-title">Sign In</div>
				<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
			</div>
			<div style="padding-top:30px" class="panel-body" >
				<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
				<?php echo form_open('', array('class'=>'form-horizontal', 'role'=>'form')) ?>
					<div style="margin-bottom: 25px" class="input-group">
						<?php echo form_error('identity'); ?>
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<?php echo form_input(array('name'=>'identity', 'class'=>'form-control', 'placeholder'=>'username')); ?>
					</div>
					<div style="margin-bottom: 25px" class="input-group">
						<?php echo form_error('password'); ?>
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<?php echo form_password(array('name'=>'password', 'class'=>'form-control', 'placeholder'=>'password')); ?>
					</div>
					<div class="input-group">
						<div class="checkbox">
							<label>
								<?php echo form_checkbox('remember','1',FALSE);?> Remember me
							</label>
						</div>
					</div>
					<div style="margin-top:10px" class="form-group">
						<!-- Button -->
						<div class="col-sm-12 controls">
							<?php echo form_submit('submit', 'Log in', 'class="btn btn-success"');?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12 control">
							<div style="padding-top:15px; font-size:85%" >
								Don't have an account!
								<a href="register">
									Register Here
								</a>
							</div>
						</div>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>