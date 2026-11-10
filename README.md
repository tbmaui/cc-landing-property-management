# Complete Controller — Property Management

The Property Management page and its WordPress integration, reviewed November 10, 2026. Theme baseline: **cc-modern 1.3.13**.

## Contents

- `wordpress/patterns/page-industry-property-management.php`: the editable Gutenberg whole-page starter.
- `wordpress/patterns/contact-form.php`: the shared consultation section.
- `wordpress/assets/`: page photography/illustration, self-hosted fonts, and the theme's shared stylesheet and progressive enhancements.
- `wordpress/inc/` and `wordpress/theme.json`: reviewed shared dependencies and design tokens.
- `source/`: the supplied design reference. The WordPress pattern is the maintained implementation; preserve matching industry copy in the HTML source when editing it.
- `tools/`: native page preview and block validation helpers.
- `page.json`: provenance and integration metadata.

## Preview and validate

With PHP 8+ and Node.js installed, run from the repository root:

```sh
node tools/validate-blocks.js
php tools/build-preview.php
```

Open `build/preview.html` in a browser. This previews the page content and local assets; the installed theme supplies the shared site header, footer, navigation and optional live CAS-i widget. Generated previews are ignored by Git.

You can also open `source/index.html` directly to inspect the HTML reference. Its preview form does not submit production leads; the WordPress implementation uses the existing theme consultation integration.

## Apply to WordPress

This repository contains **page additions for an existing cc-modern theme**, not a complete installable theme. Use the updated 1.3.13 theme package from the parent workspace as the installation baseline. The [shared theme repository](https://github.com/tbmaui/complete-controller-modern-theme) is maintained separately; these page repositories do not automatically update it.

1. Back up the installed theme and target page. Compare shared files against your installed version before replacing them; shared CSS, JavaScript and PHP are snapshots and may include newer changes on your site.
2. Copy `wordpress/patterns/page-industry-property-management.php` and the page-specific assets into the matching paths in `wp-content/themes/cc-modern/`. Merge shared dependencies only if missing or outdated. The 1.3.13 theme already loads `inc/industry-page.php` and offers the shared consultation form.
3. Create a review draft using the **Full Width** template. Insert **Page — Industry: Property Management** from **CC — Whole Page Starters**.
4. Review forms, links, mobile layout and any site-specific copy before applying the reviewed content at the existing URL. Updating a theme pattern does not update content already saved in a WordPress page. The starter importer also skips existing URLs.
5. Keep the shared theme's header/footer. Configure the actual consultation destination in the theme; do not substitute the reference HTML's preview-only form.

## Feedback incorporated

Added invitations to ask about rent assistance and tracking in other software, including the rent FAQ and plan note.

All four WordPress pages share the CAS-i touch-screen landscape dock fix in the included shared assets.

## Verification

The source theme passed PHP syntax checks, actual WordPress 6.6.3 editor validation and responsive checks at 390, 768, 1024, 1440 and 1920px. The four-page review contained 776 valid blocks, no horizontal overflow or broken images, 166 passing contrast pairs and no utility regressions. CAS-i dock checks used a noninteractive iframe; no real call or booking was started.

