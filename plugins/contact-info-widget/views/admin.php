<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('phone_number'); ?>">Phone Number:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('phone_number'); ?>" name="<?php echo $this->get_field_name('phone_number'); ?>" type="text" value="<?php echo $phone_number; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('email'); ?>">Email:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('address'); ?>">Address (do not add for footer):</label>
		<input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>">
   </p>

   <p>
    <input class="checkbox" type="checkbox" <?php checked( $instance[ 'social_media' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'social_media' ); ?>" name="<?php echo $this->get_field_name( 'social_media' ); ?>" /> 
    <label for="<?php echo $this->get_field_id( 'social_media' ); ?>">Check for Social Media icons (required for footer).</label>
  </p>

</div>