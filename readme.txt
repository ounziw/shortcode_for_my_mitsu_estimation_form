=== Shortcode for My Mitsu Estimation FOrm ===
Contributors: ounziw
Donate link: http://pledgie.com/campaigns/8706
Description: You can embed an estimation(calculation) form, provided by a webservice in Japan called My Mitsu.
Tags: shortcode, estimation, calculation
Requires at least: 2.5
Tested up to: 4.7.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows users to put a My Mitsu form in your website.

== Description ==

My Mitsu, is a webservice in Japan, allows users to create an estimation(calculation) form. A powerful form allows you to create a conditional form with calculation, and outputs a PDF file. It is suited for business persons.
https://my-mitsu.com/ (written in Japanese.)

My Mitsu allows you to put a form into your WordPress website, by filling in a html code, like
<iframe src="..." width="..." height="..."></iframe>

This plugin allows you to output an iframe html tag in a simple way. Simply filling in a shortcode will ouput an iframe html code.

[mymitsu]274[/mymitsu] will output <iframe src="https://my-mitsu.jp/estimation/274" id="mymitsu" width="640" height="480"></iframe>

Optionally, a shortcode accepts an ID, width, and height as attributes.

[mymitsu id="myform" width="800" height="600"]274[/mymitsu] will output <iframe src="https://my-mitsu.jp/estimation/274" id="myform" width="800" height="600"></iframe>

* Note * In order to create an estimation form, you need to register My Mitsu https://my-mitsu.jp/register .

== Installation ==

1. Install a plugin and activate it
1. Upload `shortcode_for_my_mitsu_estimation_form' to the `/wp-content/plugins/` directory

== Screenshots ==

1. This plugin outputs an iframe.

== Changelog ==

= 1.0 =
* initial release
