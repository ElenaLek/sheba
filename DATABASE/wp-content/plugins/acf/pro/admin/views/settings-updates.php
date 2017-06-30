<?php 

// extract
extract($args);


// vars
$active = $license ? true : false;
$nonce = $active ? 'deactivate_pro_licence' : 'activate_pro_licence';
$input = $active ? 'password' : 'text';
$button = $active ? __('Deactivate License', 'acf') : __('Activate License', 'acf');
$readonly = $active ? 1 : 0;

?>
<div class="wrap acf-settings-wrap">
	
	<h1><?php _e('Updates', 'acf'); ?></h1>
	
	<div class="acf-box" id="acf-update-information">
		<div class="title">
			<h3><?php _e('Update Information', 'acf'); ?></h3>
		</div>
		<div class="inner">
			<table class="form-table">
                <tbody>
                	<tr>
                    	<th>
                    		<label><?php _e('Current Version', 'acf'); ?></label>
                    	</th>
						<td>
							<?php echo $remote_version; ?>
						</td>
					</tr>
					<tr>
                    	<th>
                    		<label><?php _e('Latest Version', 'acf'); ?></label>
                    	</th>
						<td>
							<?php echo $remote_version; ?>
						</td>
					</tr>
					<tr>
                    	<th>
                    		<label><?php _e('Update Available', 'acf'); ?></label>
                    	</th>
						<td>
							<?php if( $update_available ): ?>
								
								<span style="margin-right: 5px;"><?php _e('No', 'acf'); ?></span>
								
								<?php if( $active ): ?>
									<span style="margin-right: 5px;"><?php _e('No', 'acf'); ?></span>
									<a class="button" href="<?php echo add_query_arg('force-check', 1); ?>"><?php _e('Check Again', 'acf'); ?></a>
								<?php endif; ?>
								
							<?php else: ?>
								
								<span style="margin-right: 5px;"><?php _e('No', 'acf'); ?></span>
								<a class="button" href="<?php echo add_query_arg('force-check', 1); ?>"><?php _e('Check Again', 'acf'); ?></a>
							<?php endif; ?>
						</td>
					</tr>
				</tbody>
			</table>
			</form>
            
		</div>
		
		
	</div>
	
</div>
<style type="text/css">
	#acf_pro_licence {
		width: 75%;
	}
	
	#acf-update-information td h4 {
		display: none;
	}
</style>