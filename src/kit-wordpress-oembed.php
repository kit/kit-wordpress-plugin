<?php
   /*
   Plugin Name: Kit
   Plugin URI: https://github.com/kitinc/kit-wordpress-plugin
   Description: Embed your kit urls on your wordpress blog
   Version: 1.2
   Author: Kit.com
   Author URI: https://kit.com
   License: GPL2
   */
   wp_oembed_add_provider(
     'https://kit.com/*/*', 'https://kit.com/oembed', false);
?>
