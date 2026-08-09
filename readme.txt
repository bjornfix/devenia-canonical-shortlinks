=== Devenia Canonical Shortlinks ===
Contributors: basicus
Tags: shortlinks, canonical, seo
Requires at least: 6.0
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPL-2.0-or-later

Outputs canonical permalinks for WordPress shortlinks.

== Description ==

Devenia Canonical Shortlinks filters WordPress shortlink output so generated shortlink tags use the canonical permalink for the post instead of the default `?p=` URL.

When WordPress supplies a post ID, the plugin resolves that post's current permalink and returns it as the shortlink. On a singular request without a supplied post ID, it uses the current queried post. If no post or permalink can be resolved, the incoming WordPress shortlink remains unchanged.

The plugin has no settings, storage, public endpoint, redirect, or content mutation. It does not change post slugs, canonical tags, or permalink settings. It changes only the value returned through WordPress's `get_shortlink` filter.

* Stable plugin download: https://downloads.devenia.com/devenia-canonical-shortlinks.zip

== Changelog ==

= 1.0.0 =
* Initial release.
