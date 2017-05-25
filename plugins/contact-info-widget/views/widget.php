<!-- This file is used to markup the public-facing widget. -->

<?php if ( strlen( trim( $phone_number ) ) > 0 ) : ?>
  <p class="contact-info-text">
    <i class="fa fa-fw fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a>
  </p>
<?php endif; ?>

<?php if ( strlen( trim( $email ) ) > 0 ) : ?>
  <p class="contact-info-text">
    <i class="fa fa-fw fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
  </p>
<?php endif; ?>

<?php if ( strlen( trim( $address ) ) > 0 ) : ?>
  <p class="contact-info-text">
    <i class="fa fa-fw fa-map-marker" aria-hidden="true"></i> <?php echo $address ?>
  </p>
<?php endif; ?>