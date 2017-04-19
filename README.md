# Kit.com - Share your Product Recommendations

    Contributors: kittechinc
    Tags: oembed, embed, kit, affiliate, eCommerce
    Requires at least: 2.9.1
    Tested up to: 4.7.3
    Stable tag: 1.0.0
    License: GPLv2
    License URI: http://www.gnu.org/licenses/gpl-2.0.html

Share your favorite products in an interactive, shoppable embed module directly on your blog.

## Description
### About Kit.com
Kit is a community to discover, discuss and get interesting products – grouped into kits – for activities like traveling, DJing, cooking, cycling and more. To learn more about Kit, please click [here](https://kit.com/for-influencers).

### About the Kit.com Wordpress Plugin
[The Kit.com WordPress Plugin](https://wordpress.org/plugins/kit-com/) is a free plugin for WordPress. The plugin enables you to paste links to your kits on [Kit.com](https://kit.com) and generate interactive, shoppable modules of your favorite products that you recommend, directly on your WordPress blog.

### Note
By installing this plugin you agree to accept Kit.com’s [Terms of Use](https://kit.com/terms).


## Installation
### Pre-requisites
#### Sign up for Kit.com
Sign up for a free account at [Kit.com](https://kit.com). Create kits of products that you use and want to recommend on your WordPress blog.

### Automatic Installation
1. Log in to your WordPress dashboard, navigate to the Plugins menu and click Add New.
2. Search for \"Kit.com - Share Your Product Recommendations\". Click \"Install Now\".

### Manual Installation
If you are self-hosting your WordPress blog you can use the following instructions:

1. Clone this repository
2. cd src && zip kit.zip *
3. Upload and activate the plugin through the \'Plugins\' menu in WordPress.

## Frequently Asked Questions
### Where can I find more information on Kit.com?
You can find out more on our [site](https://kit.com) and you can find answers to many frequently asked questions on our[FAQ](https://blog.kit.com/got-questions-8368a2eb3526).

### How does the plugin work?
Kit.com supports the oEmbed protocol ([http://oembed.com/](http://oembed.com/)) for allowing embedded representations of kit urls on third party sites. This plugin uses the wordpress function [wp_oembed_add_provider](https://codex.wordpress.org/Function_Reference/wp_oembed_add_provider) to register Kit.com as an oEmbed provider for your blog, allowing all users who can write posts to paste kit.com links and have them automatically replaced with interactive embed modules in the body of a post or page.

### How much does it cost?
It is free to create an account on Kit.com as well as to use the WordPress plugin.

## Screenshots

![Copy your kit link on its own line to replace it with a kit](documentation/kit-wordpress-plugin-example.png?raw=true "Embed Your Kit")

1. Write a post and paste a kit.com link on its own line
2. The link will be automatically replaced with an interactive shoppable kit module
3. Publish the post and your readers will be able to interact with the shoppable kit module.

## Changelog
### 1.0 - April 17, 2017
* Plugin released.
