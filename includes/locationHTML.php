<?php

function locationHTML() { 
  ?>
    <select name="wcrt_location">
      <option value="0" <?php selected(get_option('wcrt_location'), '0') ?>>Beginning of post</option>
      <option value="1" <?php selected(get_option('wcrt_location'), '1') ?>>End of post</option>
    </select>
  <?php 
}