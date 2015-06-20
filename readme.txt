=== WooCommerce Unit Of Measure ===
Contributors: Brad Davis
Tags: woocommerce, woocommerce-price
Requires at least: 4.0
Tested up to: 4.2.2
Stable tag: 1.0.1
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

WooCommerce Unit Of Measure allows you to add a unit of measure, or any text after the price in WooCommerce.

== Description ==
WooCommerce Unit Of Measure allows you to add a unit of measure (UOM), or any text you require after the price in WooCommerce.

** Requires WooCommerce to be installed. **

== Installation ==
1. Upload WooCommerce Image Hover to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it.

== Frequently Asked Questions ==

= Will this work with my theme? =
Hard to say really, so many themes to test so little time.

= Can I upload the unit of measure text when with WooCommerce CSV Import Suite? =
Yes you can, follow these steps:
- Add a column to your Import Product CSV document
- Add the following title to your new column, meta:_woo_uom_input
- Fill your column with your required unit of measure or whatever text you want to add after the price for your product

= Can I add a unit of measure to a variation, downloadable or virtual product? =
Accept for a product variation, yes you can.

== Changelog ==

= 1.0.1 =
* Removed error on line 96, passed a variable that was not needed to the woo_uom_render_output function
* Removed the conditional statement from the constructor
* Renamed the return variable in the woo_uom_render_output function

= 1.0 =
* Original commit and released to the world