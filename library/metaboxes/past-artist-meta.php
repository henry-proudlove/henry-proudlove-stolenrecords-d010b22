<div class="my_meta_control">

<?php

$mb->the_field('present-past');

if(is_null($mb->get_the_value()))

	$mb->meta[$mb->name] = 'current';

?>

<input type="radio" name="<?php $mb->the_name(); ?>" value="current"<?php echo $mb->is_value('current')?' checked="checked"':''; ?>/> Current Artist

<input type="radio" name="<?php $mb->the_name(); ?>" value="past"<?php echo $mb->is_value('past')?' checked="checked"':''; ?>/> Catalogue

	<?php $mb->the_field('shy'); ?>
	<p><input type="checkbox" name="<?php $mb->the_name(); ?>" value="shy"<?php $mb->the_checkbox_state('shy'); ?>/> Don't show in Artists list <br/></p>

	<?php $mb->the_field('publishing'); ?>
	<p><input type="checkbox" name="<?php $mb->the_name(); ?>" value="publishing"<?php $mb->the_checkbox_state('publishing'); ?>/> Published by stolen <br/></p>
	
	<?php $mb->the_field('management'); ?>
	<p><input type="checkbox" name="<?php $mb->the_name(); ?>" value="management"<?php $mb->the_checkbox_state('management'); ?>/> Managed by Stolen <br/></p>

	<label>Booking contact </label>
	<input type="text" name="<?php $metabox->the_name('booking-email'); ?>" value="<?php $metabox->the_value('booking-email'); ?>"/>

</div>

