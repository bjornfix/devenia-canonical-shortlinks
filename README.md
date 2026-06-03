# Devenia Canonical Shortlinks

WordPress plugin that emits canonical permalinks for WordPress shortlink output.

[![GitHub release](https://img.shields.io/github/v/release/bjornfix/devenia-canonical-shortlinks)](https://github.com/bjornfix/devenia-canonical-shortlinks/releases)
[![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/gpl-2.0)

**Tested up to:** 7.0  
**Stable tag:** 1.0.0  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html

## What It Does

Devenia Canonical Shortlinks changes WordPress' generated shortlink value from the default `?p=<id>` URL to the post's canonical permalink.

For example, WordPress normally emits:

```html
<link rel="shortlink" href="https://example.com/?p=123" />
```

With this plugin active, the same post emits:

```html
<link rel="shortlink" href="https://example.com/example-post/" />
```

## Why This Exists

Some link scanners and crawlers treat redirected `?p=` shortlinks as broken or undesirable even when WordPress redirects them to the canonical permalink.

This plugin removes that avoidable redirect from generated shortlink output so scanners, crawlers, and validators see the direct URL that returns `200 OK`.

## Requirements

- WordPress 6.0+
- PHP 7.4+
- Pretty permalinks configured for posts

## Installation

1. Download the latest ZIP from GitHub releases or the Devenia downloads channel.
2. Upload via WordPress Admin > Plugins > Add New > Upload Plugin.
3. Activate the plugin.
4. Clear page cache/CDN cache if the site caches HTML head output.

The plugin has no settings screen. It is intentionally small and always-on when active.

## Release Pipeline

Expected Devenia release flow:

1. Update plugin metadata and docs.
2. Build the stable ZIP as `devenia-canonical-shortlinks.zip`.
3. Stage the ZIP to `https://downloads.devenia.com/devenia-canonical-shortlinks.zip`.
4. Install and activate the staged ZIP on `dev.devenia.com`.
5. Run WordPress Plugin Check.
6. Tag and publish the GitHub release.
7. Verify staged, public downloads, and GitHub release ZIP hashes match.
8. Deploy production sites from the verified Devenia downloads artifact.

## Safety Model

- The plugin does not store options.
- The plugin does not add public endpoints.
- The plugin does not change post slugs, redirects, canonical tags, or database content.
- The plugin only filters `get_shortlink` output at runtime.
- If WordPress cannot resolve a permalink for a post, the original shortlink is returned unchanged.

## Changelog

### 1.0.0

- Initial release.
- Filters WordPress shortlink output to canonical post permalinks.

## License

GPL-2.0+

## Author

[Devenia](https://devenia.com) - We've been doing SEO and web development since 1993.
