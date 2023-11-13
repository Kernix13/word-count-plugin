<?php

function headlineHTML() { 
  ?>
    <input type="text" name="wcrt_headline" value="<?php echo esc_attr(get_option('wcrt_headline')) ?>">
  <?php 
}