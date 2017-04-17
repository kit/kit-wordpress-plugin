<?php
   /*
   Plugin Name: Kit
   Plugin URI: https://github.com/kitinc/kit-wordpress-plugin
   Description: Share your favorite products in an interactive, shoppable embed module directly on your blog.
   Version: 1.0
   Author: Kit.com
   Author URI: https://kit.com
   License: GPL2
   */
   wp_oembed_add_provider(
     'https://kit.com/*/*', 'https://kit.com/oembed', false);
?>
