<?php

// reusable checkbox function
function checkboxHTML($args) { 
  ?>
    <input type="checkbox" name="<?php echo $args['theName'] ?>" value="1" <?php checked(get_option($args['theName']), '1') ?>>
  <?php 
}