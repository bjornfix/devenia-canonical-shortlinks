# Devenia Canonical Shortlinks

Emits canonical permalinks for WordPress shortlink output so scanners and crawlers see the direct 200 URL instead of ?p= redirects.

[![GitHub release](https://img.shields.io/github/v/release/bjornfix/devenia-canonical-shortlinks)](https://github.com/bjornfix/devenia-canonical-shortlinks/releases)
[![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/gpl-2.0)
[![WordPress](https://img.shields.io/badge/WordPress-6.9%2B-blue.svg)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-8.0%2B-purple.svg)](https://php.net)

**Tested up to:** 7.0
**Stable tag:** 1.0.0
**License:** GPLv2 or later
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html

## What It Does

Emits canonical permalinks for WordPress shortlink output so scanners and crawlers see the direct 200 URL instead of ?p= redirects.

This is a small WordPress maintenance plugin built for a specific operational problem. It stays focused so the behavior is easy to understand, verify, and keep enabled.

**Example:** "Protect this site from the maintenance issue this plugin handles." - Install the plugin, verify the expected behavior, and let it keep doing that one job.

## The Real Workflow

In practice, the useful path is simple:

1. install and activate the plugin
2. confirm the behavior on a staging or low-risk page
3. leave the plugin active when the behavior fits the site
4. check release notes before updating

The human's job is to decide whether the behavior fits the site.
The plugin's job is to apply that behavior consistently.

## Why This Feels Different

Most small WordPress maintenance problems get handled manually or with broad plugins that do more than needed.

This plugin is different because it keeps a narrow scope:

- one clear purpose
- predictable behavior
- normal WordPress installation and update flow
- public source and release history

That changes the experience from:

- `Remember to handle this manually every time`

to:

- `Install the focused plugin and verify the result`

## Before vs After

### Before

- the issue depends on manual attention
- behavior can drift between maintenance runs
- fixes are easy to forget when work is repetitive

### After

- the site has a focused plugin for the job
- behavior is consistent between maintenance runs
- releases and source are easy to inspect

## Who It Is For

This is a good fit for:

- WordPress site owners with the specific maintenance problem this plugin solves
- agencies maintaining many WordPress sites
- operators who prefer focused plugins over broad toolkits
- teams that want public source and release notes before installing a plugin

## Documentation

Start with the public plugin page:

- [Plugin Page](https://devenia.com/plugins/devenia-canonical-shortlinks/)

## Start Here

If you are new to the plugin, use this order:

1. Read the plugin page
2. Download the latest release
3. Install it on WordPress
4. Verify the expected behavior
5. Keep it active if the behavior matches the site

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

## Contributing

PRs welcome. Keep changes focused on the plugin's stated WordPress maintenance behavior.

## License

GPL-2.0+

## Author

[Devenia](https://devenia.com) - We've been doing SEO and web development since 1993.

## Links

- [Plugin Page](https://devenia.com/plugins/devenia-canonical-shortlinks/)
- [GitHub Releases](https://github.com/bjornfix/devenia-canonical-shortlinks/releases)
- [Devenia Plugins](https://devenia.com/plugins/)

## Star and Share

If this plugin helps solve a real WordPress maintenance problem, please:

- star the repo
- share it with people running WordPress sites
- point them to the plugin page so they can see what it does

Why do it?

Because practical WordPress maintenance tools are better when they are easy to find, easy to understand, and easy to verify before use.
