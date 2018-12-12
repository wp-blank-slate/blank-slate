=== Blank Slate ===
Contributors: areimann, wpscholar, woodent
Donate link: http://aaronreimann.com/wordpress
Tags: blank, empty, canvas, landing, page builder
Requires at least: 4.7
Requires PHP: 5.3
Tested up to: 5.0
Stable tag: 1.1.4

This plugin creates a page template giving you a blank page so “the_content()” of the page is all that is displayed, no header, no footer.

== Description ==

This creates a page template giving you a blank page so only the content of the page is displayed. Header and footer are totally empty. This is great for page builders (Beaver Builder, Divi, etc), landing pages and squeeze pages.

[youtube https://www.youtube.com/watch?v=B8V-b8RDjiU]

== Screenshots ==

1. Shows you how to select the page template called “Blank Slate”

== Installation ==

1. Unzip and upload the plugin into the plugins directory and then activate it.
2. Go to Pages
3. Add New, or select an existing page
4. Scroll down on the right (in theory) and select the page template called “Blank Slate”

== Other Notes ==

This plugin will load everything that is normally included in the wp_head() and wp_footer(), so all scripts should load as normal.

== Upgrade Notice ==

= 1.1.4 =
* Added support for language translations. Minor bugfix. Compatible with WordPress 5.0.

= 1.1.3 =
* The latest version of Blank Slate requires WordPress version 4.7 or greater! Compatible with version 5.0.

== Changelog ==

= 1.1.4 =
* Added support for language translations.
* Bugfix for template context. Prevent assigned template from being used on archive pages where the first page is using the Blank Slate template.

= 1.1.3 =
* Removed old approach that is only supported in WordPress version 4.6 and older.
* Updated code for better integration with the pro version.
* Updated code to better adhere to WordPress coding standards.
* Tested in WordPress 5.0.

= 1.1.2 =
* Showing title for themes that don't support title-tag

= 1.1.1 =
* Template that is loaded now loads viewport correctly

= 1.1 =
* Fixes where it will work with WP 4.7.0

= 1.0 =
* Initial release
