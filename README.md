<div align="center">

# 🌐 Grav Open Publishing Space

### Ready-to-Run Skeleton Package

<p><em>An open, collaborative space to create, share, and co-edit your writing – with content in portable Markdown files you control.</em></p>

[![Grav Discord Chat](https://img.shields.io/discord/501836936584101899.svg?logo=discord&colorB=728ADA&label=Grav%20Discord%20Chat)](https://chat.getgrav.org) [![Latest Release](https://img.shields.io/github/v/release/hibbitts-design/grav-skeleton-open-publishing-space?style=flat-square&label=Release)](https://github.com/hibbitts-design/grav-skeleton-open-publishing-space/releases/latest) [![License](https://img.shields.io/badge/License-MIT-blue.svg?style=flat-square)](https://github.com/hibbitts-design/grav-skeleton-open-publishing-space/blob/master/LICENSE) [![PHP](https://img.shields.io/badge/PHP-%3E%3D8.3-8892BF?style=flat-square&logo=php&logoColor=white)](https://learn.getgrav.org/17/basics/requirements)

<p>Try the <a href="https://demo.hibbittsdesign.org/grav-open-publishing-quark/">demo</a></p>

<p>A free, open-source package built on <a href="https://getgrav.org">Grav CMS</a> and the <a href="https://github.com/hibbitts-design/grav-theme-quark-open-publishing">Quark Open Publishing</a> theme, with Markdown file-based content, a built-in Admin panel, and no database required.</p>

<a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-dark.webp"><img alt="Open Publishing Space blog with a mountain hero image, blog post cards, and a sidebar with tags and archives" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot.webp" width="49%"></picture></a> <a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-2.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-2-dark.webp"><img alt="Blog post with a typography hero image, a notice, headings, and a sidebar with related posts and tags" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-2.webp" width="49%"></picture></a>

<p>Open Publishing Space – Blog (left) and blog post (right)</p>

</div>

A complete, pre-configured package for an open blog or publishing site – a place to write, share, and collaboratively edit content in the open, including short multi-page guides alongside your blog. Content is stored as simple Markdown files you can keep locally, with a built-in Admin panel for browser-based editing and no database required. Runs on nearly any web hosting service.

## What Sets It Apart

- **Open authoring built in** – Git Sync keeps the site in step with GitHub or a similar Git service, with "Edit this Page" links to each page's Markdown source
- **Embed anywhere** – add `/chromeless:true` or `?embedded=true` to any page URL to show only its content, ready to embed in an LMS or other site
- **A blog that's ready to go** – posts listed newest first in a card layout, featured (sticky) posts, tags, archives, and Atom/RSS feeds
- **Multi-page content** – a short guide or handbook with section cards, Learning Objectives, reading progress, Previous/Next navigation, and OER attribution, using the same page settings as [Grav Helios Open Reader](https://github.com/hibbitts-design/grav-skeleton-helios-open-reader) so it can move there if it grows
- **More than a blog** – standard, multi-section, and modular pages, plus shortcodes for Google Slides, H5P, PDF, iFrame, Embedly, and link preview cards, callout shortcodes such as `[objectives]` and `[key-takeaways]`, and GitHub-style alerts
- **Search** – grouped results with the search words highlighted, from the blog sidebar, the Search page, or a search box on multi-page content that searches just that content
- **Built on Quark** – Grav's lightweight, responsive default theme, with hero images and full-page mobile navigation
- **2026 Refresh with Dark Mode** – off, on, or following the visitor's system setting
- **Portable by design** – your content is plain Markdown files on your server, ready to move to any tool or host if your needs change

## When is Grav Open Publishing Space a Good Candidate?

Grav Open Publishing Space is a good fit when you:

- Want an open blog or publishing site with your own hosting and domain
- Value Git-based, open authoring and collaboration on your writing
- Want to publish a short guide or handbook alongside your blog
- Prefer a clean, minimal design you can adjust through theme options

Other options might be better when you:

- Want to publish substantial, standalone open content, such as an open textbook, or several readers on one site – consider [Grav Helios Open Reader](https://github.com/hibbitts-design/grav-skeleton-helios-open-reader)
- Want zero-server publishing directly from GitHub – consider [Docsify-This](https://docsify-this.net)
- Need comments, memberships, or newsletters built in
- Prefer fully visual drag-and-drop page builders over Markdown-based editing

## Quick Start

Open Publishing Space is best suited for writers and educators comfortable with web hosting and folder-based content. An online Admin panel is included for browser-based editing – no code editor required.

### Pre-flight Checklist
1. Confirm your web server meets [Grav's requirements](https://learn.getgrav.org/17/basics/requirements) (PHP 8.3 or higher, or PHP 8.0.2 or higher for the Grav 1.7 version)
2. Have your web server login credentials ready (username and password)

### Installation Steps
1. **Download** the [Open Publishing Space Skeleton](https://github.com/hibbitts-design/grav-skeleton-open-publishing-space/releases/latest/download/grav-skeleton-open-publishing-space.zip) package (a Grav 1.7 version is also available on the [release page](https://github.com/hibbitts-design/grav-skeleton-open-publishing-space/releases/latest))
2. **Unzip** the package onto your desktop
3. **Copy** the entire Grav Open Publishing Space folder to your web server
4. **Open your browser** and go to your site's URL
5. **Create your site administrator account** when prompted
6. **You're done!** – press the preview icon in the Admin Panel to view your site

> [!TIP]
> When copying the Grav Open Publishing Space folder to your web server, copy the **entire folder** – it contains hidden files (such as `.htaccess`) that are not selected by default. Omitting these hidden files can cause problems when running Grav.

## Site Setup

- **Site name and description** – in the Admin Panel under **Configuration → Site**
- **Blog** – the Blog page is the homepage; its text and image form the hero banner at the top. Each post is a folder inside `blog` (add one with **Pages → Add**), listed newest first, six per page. Tag a post `featured` to keep it at the top, and edit the notice above the posts in `blog/_important-notice`
- **Other pages** – top-level pages (Standard Page, Multi-Page Content, Read Me, and so on) appear in the menu, ordered by their folder number; unpublish any you don't need
- **Multi-Section Page** – a simpler alternative to Multi-Page Content: a page with a side list of its sections and classic Next/Prev buttons, at `/multi-section-page`. It isn't shown in the menu; set it to visible to add it. When embedded, it keeps its side list and buttons, while Multi-Page Content shows only the page content
- **Multi-Page Content** – an example guide using the Section List page type: set its subtitle, cover image, author(s), edition, section label, and OER attribution on its home page, and each section's card description, image, and Learning Objectives on the section (see the [Quark Open Publishing README](https://github.com/hibbitts-design/grav-theme-quark-open-publishing#multi-page-content), including moving a guide to Grav Helios Open Reader)
- **Search** – uses the SimpleSearch plugin, from the blog sidebar, the Search page, and the search box on multi-page content; the optional TNTSearch plugin can be used instead. On sites set up with an earlier version of this skeleton, clear the **Category** filter in **Plugins → SimpleSearch** so search covers every page, not just blog posts
- **Shared parts** – edit the `sidebar` page (set its `position` to `top` or `bottom` of the sidebar) and the `footer` page
- **Look and options** – under **Themes → My Theme**: Dark Mode, text size on phones, logo, header and footer style, chromeless site, Creative Commons license, and custom menu items (see the [Quark Open Publishing README](https://github.com/hibbitts-design/grav-theme-quark-open-publishing#theme-options) for all options)
- **Embedding** – add `/chromeless:true` or `?embedded=true` to any page URL, for example `/blog/hero-classes/chromeless:true` or `/blog/hero-classes?embedded=true`
- **Git Sync and "Edit this Page"** – set up the Git Sync plugin in the Admin Panel, then choose where the link appears and whether it views or edits the source in the theme's Git Sync Link options

## Requirements

- PHP >= 8.3 (or >= 8.0.2 for the Grav 1.7 version)
- Grav CMS 2.0 (included in the package), or Grav CMS 1.7 in the Grav 1.7 version

## Support

### Contact and Support
- Share your feedback in the [Open Publishing Space Survey](https://docs.google.com/forms/d/e/1FAIpQLSeDVXsE1k9mljDvGD687QZO8alchaXqe4dXcIKmnjjWVXatgQ/viewform)
- Follow [@hibbittsdesign@mastodon.social](https://mastodon.social/@hibbittsdesign) on Mastodon for updates
- 👩🏻‍💻🧑🏻‍💻 Join the [Grav Discord](https://chat.getgrav.org) and often find me there
- Add a ⭐️ [star on GitHub](https://github.com/hibbitts-design/grav-skeleton-open-publishing-space) to the Open Publishing Space project repository
- For bugs or feature requests, [open an issue](https://github.com/hibbitts-design/grav-skeleton-open-publishing-space/issues) on GitHub

### Professional Services

By leveraging his extensive UX design expertise and systems-oriented approach, Paul helps teams and individuals utilize open content in education and publication settings. Professional services include user experience and workflow consulting, premium support subscriptions, workshops, and custom development. Interested? Send a note to [paul@hibbittsdesign.org](mailto:paul@hibbittsdesign.org).

## License

MIT – Hibbitts Design
