=== Simple Nivo Slider ===
Contributors: tmus
Donate link: 
Tags: slider, jquery, nivo, image, gallery, banner
Requires at least: 2.9.2
Tested up to: 3.1.1
Stable tag: 0.4.5

"The world's most awesome jQuery slider" by Gilbert Pellegrom, made easily available for WordPress.

== Description ==

The Simple Nivo Slider plugin provides easy access to Gilbert Pellegrom's excellent jQuery-based Nivo Slider. The admin panel makes it easy to tweak the most commonly used Nivo Slider options from within WordPress.

Visit http://nivo.dev7studios.com for more info on the Nivo Slider, that's where the real magic happens.

Valid XHTML 1.0 code generation and CSS stylability are priorities.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `simple-nivo-slider` plugin directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu
1. Select an appropriate "category" from the plugin options page (the plugin will use the "Featured Images" from posts in the selected category)
1. Place `<?php if (function_exists('simple_nivo_slider')) simple_nivo_slider(); ?>` in your templates

Optionally:

* Custom Field `simple_nivo_caption` can be used to specify a caption for the image
* Custom Field `simple_nivo_link` can be used to specify a link other the default which links to the post (specify `none` to disable link completely)

== Upgrade Notice ==

* When upgrading, new transitions will be disabled by default.

== Frequently Asked Questions ==

= Can I make the link for a particular slide take me to a non-default page or another site? =
You can specify a custom link, using the `simple_nivo_link` custom field on the slide post.

= Can the link for a particular slide be disabled completely? =
Yes, use `none` as the value for the `simple_nivo_link` custom field on the slide post.

= Will Simple Nivo Slider work with post-link plugins like "Page Links To"? =
Most likely, yes.

= I'd like to put captions on some of my slides, is that possible? =
You can specify a caption for a slide, using the `simple_nivo_caption` custom field on the slide post.

= How do I reset all Simple Nivo Slider options to defaults? =
Uninstalling the plugin, removes all settings as well. Re-installing, will return all options to their default values.

= The slider is not behaving as expected (no effects, controls not working etc) =
If you have other Nivo based slider plugins installed, try to deactivate them and see if that helps. Loading multiple instances (and even versions) of the same jQuery function, can yield unpredictable results.

= I have some suggestions or found a bug in the plugin. Can I contact You with info? =
Please do. I can't make too many promises up front, but I promise I'll check my mail. You'll find my mail address in the Contact section.

== Screenshots ==

No screenshots included - Visit http://nivo.dev7studios.com to see the slider in action

== Changelog ==

= 0.4.5 =
Added support for using post image sizes other than 'full'. Full remains the default value.

= 0.4.4 =
Updated to nivo slider 2.5.1.
Fixed a few minor problems.

= 0.4.3 =
Fixed php warning in database update code. This would in some situations cause problems activating or upgrading the plugin.

= 0.4.2 =
A few small fixes. New arrow- and loader images.

= 0.4.1 =
Fix CSS problems.

= 0.4.0 =
Improved handling of non-automatic plugin updates. This should make the plugin behave nicely for updates performed manually too.
Other minor fixes and improvements were thrown in as well.

= 0.3.1 =
Added plugin database update helper functionality to make sure database is "sane" after an update.

= 0.3.0 =
Nivo-Slider updated to version 2.5. Support for new transitions added to plugin code and CSS was cleaned up.

= 0.2.2 =
Insignificant documentation updates

= 0.2.0 =
Fixed small but significant bug, causing JS problems on some IE configurations

= 0.1.1 =
Removed incorrect upgrade notice statement in readme.txt

= 0.1 =
Initial release

== Credits ==

The plugin was originally based on the WP Nivo Slider plugin by Rafael Cirolini (quickly turned into a complete rewrite though).

The actual slider code was developed by Gilbert Pellegrom over at http://nivo.dev7studios.com.

== Contact ==

Thomas M Steenholdt (plugin developer): tmus at tmus dot dk

