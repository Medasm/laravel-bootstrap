<div class="auth-login">
	<div class="row-fluid">
		<div class="span4">
			<div class="well">
				<?php echo Form::open('auth/login'); ?>
				<fieldset>
				 	<legend>Login</legend>

				 	<?php echo Form::label('email', 'E-mail'); ?>
					<?php echo Form::text('email', '', array('placeholder' => 'Enter your E-mail', 'class' => 'input-block-level')); ?>
					<?php echo Form::label('password', 'Password'); ?>
					<?php echo Form::password('password', array('placeholder' => 'Enter your password', 'class' => 'input-block-level')); ?>
				    
				    <button type="submit" class="btn">Login</button>
				</fieldset>
				<?php echo Form::close(); ?>
			</div>
		</div>
	</div>
</div>
