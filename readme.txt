=== Replace Thumbnail with oEmbed ===
Contributors: palasthotel, greatestview
Donate link: https://palasthotel.de/
Tags: oembed, iframe, youtube, vimeo, instagram, twitter, soundcloud, thumbnail, image
Requires at least: 4.0
Tested up to: 5.1
Stable tag: 1.2.5
License: GNU General Public License v3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Replaces the thumbnail image with the oEmbed element from the first line of the content.

== Description ==
ATTENTION for WP Version 5+: This plugin does not work with Gutenberg (no problems with Classic Editor plugin though)! Gutenberg brings its own HTML structure for oEmbed elements, which is quite difficult to target.

This plugin checks, if the first line of the content is a valid oEmbed URL. If that is the case, it replaces the thumbnail image with the oEmbed element (e. g. with a YouTube video). Now you don’t have to care too much about a thumbnail image, since instead you would see the video or any other oEmbed content. You can even e. g. watch videos on your blogs front page without opening the post.

Works for all WordPress contents, which have a thumbnail set and are not password protected.

The active WordPress Theme must use the_post_thumbnail() or get_the_post_thumbnail() functions for this to work!

== Installation ==
1. Upload `replace-thumbnail-with-oembed.zip` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. You’re done! Try pasting a YouTube, Instagram or any other oEmbed URL into the first line of a post or page. Open the post and see, that the thumbnail image has been replaced by the oEmbed element.

== Changelog ==

= 1.2.5 =
* SVN fix

= 1.2.4 =
* SVN fix

= 1.2.3 =
* readme.txt fix

= 1.2.2 =
* WordPress 5.1 compatibility check and readme.txt update.

= 1.2.1 =
* Removed copyright section

= 1.2 =
* Now working for teaser as well

= 1.1 =
* Disabled, when passwort protection is active
* Disabled, when no thumbnail image is set

= 1.0.1 =
* Test release, no changes in plugin code

= 1.0 =
* First release
