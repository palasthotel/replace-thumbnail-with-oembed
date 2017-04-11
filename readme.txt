=== Replace Thumbnail with oEmbed ===
Contributors: palasthotel, greatestview
Donate link: https://palasthotel.de/
Tags: oembed, iframe, youtube, vimeo, instagram, twitter, soundcloud, thumbnail, image
Requires at least: 4.0
Tested up to: 4.7.3
Stable tag: 1.2
License: GNU General Public License v3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Replaces the thumbnail image with the oEmbed element from the first line of the content.

== Description ==
This plugin checks, if the first line of the content is a valid oEmbed URL. If that is the case, it replaces the thumbnail image with the oEmbed element (e. g. with a YouTube video). Now you don’t have to care too much about a thumbnail image, since instead you would see the video or any other oEmbed content. You can even e. g. watch videos on your blogs front page without opening the post.

Works for all WordPress contents, which have a thumbnail set and are not password protected.

The active WordPress Theme must use the_post_thumbnail() or get_the_post_thumbnail() functions for this to work!

== Installation ==
1. Upload `replace-thumbnail-with-oembed.zip` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. You’re done! Try pasting a YouTube, Instagram or any other oEmbed URL into the first line of a post or page. Open the post and see, that the thumbnail image has been replaced by the oEmbed element.

== Copyright ==
digitale Pracht WordPress Theme, Copyright 2017 Palasthotel GfdPmbH Berlin
digitale Pracht is distributed under the terms of the GNU GPL

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

== Changelog ==

= 1.2 =
* Now working for teaser as well

= 1.1 =
* Disabled, when passwort protection is active
* Disabled, when no thumbnail image is set

= 1.0.1 =
* Test release, no changes in plugin code

= 1.0 =
* First release
