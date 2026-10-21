<div align="center">

# 🌐 Grav Open Publishing Space 2

### Ready-to-Run Skeleton Package

<p><em>An open guide or book site – with a blog, standard pages, and almost any other Grav page alongside it, all in portable Markdown files you control.</em></p>

[![Grav Discord Chat](https://img.shields.io/discord/501836936584101899.svg?logo=discord&colorB=728ADA&label=Grav%20Discord%20Chat)](https://chat.getgrav.org) [![Latest Release](https://img.shields.io/github/v/release/hibbitts-design/grav-skeleton-open-publishing-space?style=flat-square&label=Release)](https://github.com/hibbitts-design/grav-skeleton-open-publishing-space/releases/latest) [![License](https://img.shields.io/badge/License-MIT-blue.svg?style=flat-square)](https://github.com/hibbitts-design/grav-skeleton-open-publishing-space/blob/master/LICENSE) [![PHP](https://img.shields.io/badge/PHP-%3E%3D8.3-8892BF?style=flat-square&logo=php&logoColor=white)](https://learn.getgrav.org/17/basics/requirements)

<p>Try the <a href="https://demo.hibbittsdesign.org/grav-open-publishing-quark2/">demo</a> (or the <a href="https://demo.hibbittsdesign.org/grav-open-publishing-quark/">Grav 1.7 version</a>)</p>

<p>A free, open-source package built on <a href="https://getgrav.org">Grav CMS</a> and the <a href="https://github.com/hibbitts-design/grav-theme-quark2-open-publishing">Quark 2 Open Publishing</a> theme (<a href="https://github.com/hibbitts-design/grav-theme-quark-open-publishing">Quark Open Publishing</a> in the Grav 1.7 version), with Markdown file-based content, a built-in Admin panel, and no database required.</p>

<a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-dark.webp"><img alt="Open Education Essentials guide homepage with a cover image, guide details, a Continue reading bar, and section cards grouped into parts" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot.webp" width="49%"></picture></a> <a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-2.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-2-dark.webp"><img alt="Guide section page with Learning Objectives, section navigation in the sidebar, and Previous and Next links" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-2.webp" width="49%"></picture></a><br>
<a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-3.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-3-dark.webp"><img alt="Open Publishing Space blog with a mountain hero image, blog post cards, and a sidebar with tags and archives" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-3.webp" width="49%"></picture></a> <a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-4.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-4-dark.webp"><img alt="Blog post with a typography hero image, a notice, headings, and a sidebar with related posts and tags" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-open-publishing-space/refs/heads/master/screenshots/screenshot-4.webp" width="49%"></picture></a>

<p>Open Publishing Space – Guide homepage and section page (top), blog and blog post (bottom)</p>

</div>

A complete, pre-configured package for publishing an open guide or book – such as a course reader, handbook, or short open textbook – with section cards, parts, reading progress, and OER attribution. Because it's a full Grav CMS site, you can add almost any other kind of page alongside it: a blog, standard pages, modular landing pages, and embedded content. Content is stored as simple Markdown files you can keep locally, with a built-in Admin panel for browser-based editing and no database required. Runs on nearly any web hosting service.

## What Sets It Apart

- **An open guide or book, plus the rest of Grav** – one guide or several (listed as cards on a Guides page), with section cards, parts, reading progress, Previous/Next navigation, Keep My Place, Learning Objectives, and OER attribution, alongside a full blog, standard pages, and multi-section and modular pages. Guides use the same page settings as [Grav Helios Open Reader](https://github.com/hibbitts-design/grav-skeleton-helios-open-reader), so they can move there if your site becomes mainly about reading
- **Open authoring built in** – Git Sync keeps the site in step with GitHub or a similar Git service, with "Edit this Page" links to each page's Markdown source, plus a "This page as Markdown (.md)" link on pages and an optional full text link for each guide (Grav 2 version)
- **Embed anywhere** – add `/chromeless:true` or `?embedded=true` to any page URL to show only its content, ready to embed in an LMS or other site
- **A blog that's ready to go** – posts listed newest first in a card layout, featured (sticky) posts, tags, archives, and Atom/RSS feeds
- **Rich content** – shortcodes for Google Slides, H5P, PDF, iFrame, Embedly, and link preview cards, callout shortcodes (`[objectives]`, `[key-takeaways]`, `[example]`, `[exercise]`, `[definition]`, `[reflection]`, `[case-study]`, `[announcement]`, `[project-brief]`, `[feedback-requested]`, `[process-note]`, `[references]` and `[excerpt]`), and GitHub-style alerts
- **Search** – grouped results with the search words highlighted, from the blog sidebar, the Search page, or a search box on each guide that searches just that guide
- **Built on Quark 2** – Grav 2's modern default theme, with hero images, full-page mobile navigation, and Light, Dark and Auto modes with a toggle for visitors (the Grav 1.7 version uses Quark, with Dark Mode off, on, or following the visitor's system setting)
- **Portable by design** – your content is plain Markdown files on your server, ready to move to any tool or host if your needs change

## When is Grav Open Publishing Space a Good Candidate?

Grav Open Publishing Space is a good fit when you:

- Want to publish an open guide or book on your own hosting and domain
- Value Git-based, open authoring and collaboration on your writing
- Want flexible pages around your guide – a blog, landing pages, standard pages, or embedded content – rather than a site just for reading
- Prefer a clean, minimal design you can adjust through theme options

Other options might be better when you:

- Want a dedicated reading site, such as for open textbooks and course readers, with a table of contents on every page – consider [Grav Helios Open Reader](https://github.com/hibbitts-design/grav-skeleton-helios-open-reader), built on the premium Helios theme
- Want a course site alongside your LMS, with modules and a course blog – consider [Grav Open Course Hub](https://github.com/hibbitts-design/grav-skeleton-course-hub), or [Grav Open MultiCourse Hub](https://github.com/hibbitts-design/grav-skeleton-multicourse-hub) for several courses
- Want zero-server publishing directly from GitHub – consider [Docsify-This](https://docsify-this.net)
- Need comments, memberships, or newsletters built in
- Prefer fully visual drag-and-drop page builders over Markdown-based editing

Already have a guide in Open Publishing Space? See [moving to Grav Helios Open Reader](https://github.com/hibbitts-design/grav-skeleton-helios-open-reader#moving-from-grav-open-publishing-space) – the guide's folder copies across as a publication.

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

Everything below is done in the Admin Panel, or by editing the files in `user/pages` if you prefer. Folder names such as `01.open-education-essentials` start with a number that sets their order in the menu.

### Site Name and Homepage

1. Open **Configuration → Site** and set **Site Title** and **Description**
2. The Open Education Essentials guide is the homepage; to use another page (such as the Blog), change **Home Page** in **Configuration → System**

### Guides

A guide is a Section List page with its sections inside it, read in order with Previous and Next buttons. The example guide, **Open Education Essentials**, is in two parts, and is also the example guide in Grav Helios Open Reader.

On the guide's home page:

| Tab | Settings |
|---|---|
| **Details** | Subtitle, Cover Image (and its layout), Author(s), Edition, Last Updated, and Guides List Group, Badge Label and Badge Color |
| **Sections** | Section Label, the sections' order, Cards Per Row, Start Button Text, Show Search Box, Show Reading Progress, Keep My Place, and where the Previous and Next buttons go |
| **Attribution** | The OER attribution block: License, License URL and Attribution Text |

On each section: its Part (to group sections), Description and Card Image for its card, and Learning Objectives. For more, see the [Quark Open Publishing README](https://github.com/hibbitts-design/grav-theme-quark-open-publishing#multi-page-content), including moving a guide to Grav Helios Open Reader.

### More Than One Guide

Two unpublished examples show a site with several guides, as in the [multi-guide demo](https://demo.hibbittsdesign.org/grav-open-publishing-quark2-guides/): **Guides** (`00.guides`), a Guides List page with a card for each guide (the same page type as Grav Helios Open Reader's readers list), and **Sample Guide** (`02.sample-guide`), a second guide with placeholder sections.

1. Publish both
2. To make the Guides page the homepage, as in Open Reader, change **Home Page** in **Configuration → System** to `/guides`
3. Turn on **Hide from Menu** (on the **Advanced** tab) on each guide's home page, to leave the guides out of the menu (`visible: false` would leave a guide off the Guides page too)

A guide gets a card when it's a top-level, published and visible Section List page. To take a guide offline, move its folder out of `user/pages`: unpublishing its home page leaves it off the Guides page and out of search, but its pages can still be opened from their addresses.

### Blog

The Blog (`/blog`) lists its posts newest first, six per page, with its own text and image as the hero banner at the top.

1. Add a post with **Pages → Add**, as a folder inside `blog`
2. Tag a post `featured` to keep it at the top
3. Edit the notice above the posts in `blog/_important-notice`

### Pages, Menu, Sidebar and Footer

- Top-level pages (Open Education Essentials, Blog, Standard Page, Read Me, and so on) appear in the menu, in folder-number order; unpublish any you don't need
- The `guides`, `sample-guide`, `modular-page`, `modular-page-inject` and `multi-section-page` examples are unpublished – publish one to try it
- **Multi-Section Page** – a simpler alternative to a guide: a page with a side list of its sections and classic Next/Prev buttons. When embedded, it keeps its side list and buttons, while a guide shows only the page content
- **Sidebar** (`sidebar`) – set its `position` to `top` or `bottom` of the sidebar
- **Footer** (`footer`) – the text at the bottom of every page

### Search

Search uses the SimpleSearch plugin, from the blog sidebar, the Search page, and the search box on each guide; the optional TNTSearch plugin can be used instead. On sites set up with an earlier version of this skeleton, clear the **Category** filter in **Plugins → SimpleSearch** so search covers every page, not just blog posts.

### Theme and Theme Options

The Grav 2 version uses Quark 2 Open Publishing, and the Grav 1.7 version Quark Open Publishing, with the same pages and settings. My Theme, where your customizations go, works with either and shows the settings of the theme that's installed. Install the Quark 2 theme only together with Quark 2 Open Publishing, and check any custom CSS in My Theme when switching between the two.

Under **Themes → My Theme** (see the [Quark 2 Open Publishing](https://github.com/hibbitts-design/grav-theme-quark2-open-publishing#theme-options) and [Quark Open Publishing](https://github.com/hibbitts-design/grav-theme-quark-open-publishing#theme-options) READMEs for every option):

- **Look** – Light, Dark or Auto mode and accent colour (Quark 2 Open Publishing), or Dark Mode and text size on phones (Quark Open Publishing)
- **Layout** – logo, header and footer style, and a chromeless site (no menu, sidebar or footer)
- **More** – Creative Commons license, custom menu items, and the Git Sync Link (see below)

Sites created before Open Publishing Space 2.3.0 have a `streams` setting in `user/config/themes/mytheme.yaml` that only lists Quark Open Publishing. If guide pages then show "template not found", replace its `streams` block with the one below and clear the cache (and check `user/env/<domain>/config/themes/mytheme.yaml` too, if your site has one):

```yaml
streams:
  schemes:
    theme:
      type: ReadOnlyStream
      prefixes:
        '': [user/themes/mytheme, user/themes/quark2-open-publishing, user/themes/quark2, user/themes/quark-open-publishing, user/themes/quark]
```

### Embedding and Reuse

To show only a page's content, without the menu, sidebar or footer, ready to embed in an LMS or another site, add one of these to its address:

| Add to the address | For example |
|---|---|
| `/chromeless:true` | `https://yoursite.com/blog/hero-classes/chromeless:true` |
| `?embedded=true` | `https://yoursite.com/blog/hero-classes?embedded=true` |

In the Grav 2 version, pages can also be reused as Markdown, with the settings under **Reuse Pages as Markdown** in **Themes → My Theme**:

- **Any page as Markdown** – a "This page as Markdown (.md)" link below a page's content gets that page as Markdown (the same as adding `.md` to its address, for example `/blog/hero-classes.md`, or `/index.md` for the home page). This is Grav 2.1's Markdown output, which can be turned off in **Configuration → System → Content**. The settings choose where the link shows and which page templates hide it. The Copy as Markdown Button plugin is also included, turned off, for a one-click copy button on pages (turn it on in **Plugins**)
- **A whole guide as one file** – turn on **Display Full Text Link on Guides** to add a "Full text (llms-full.txt)" link on each guide's home page. It gives the whole guide – only its own pages, in reading order – as one Markdown file, at the guide's address with `/llms-full.txt` added (for example `/open-education-essentials/llms-full.txt`), as in Grav Helios Open Reader

### Git Sync and "Edit this Page"

1. Set up Git Sync in the Admin Panel (its own menu item in Grav 2, or **Plugins → Git Sync** in Grav 1.7), with a repository on GitHub, GitLab, Bitbucket or your own server
2. Under **Themes → My Theme → Git Sync Link**, choose where the link appears and whether it views or edits each page's source

## Importing a Pressbooks Book

A Pressbooks book can become a guide here. The free [Pressbooks Converter](https://pressbooks-converter.hibbittsdesign.org/) turns a Pressbooks export into a publication that works as a guide in Open Publishing Space:

1. Convert the book's export with the Pressbooks Converter, choosing **Grav Open Publishing Space** as the destination, and download the converted publication
2. Copy the book's folder into `user/pages`. The converter numbers it `10.` (for example `10.universal-design-for-2026`), so it appears after the guides in the menu, before the blog, and a long title gets a shorter menu label (the `menu` setting on the book's page)
3. Then choose how the site shows it:
   - **The book as the only guide** – delete `01.open-education-essentials`, rename the book's folder to `01.` to make it the first menu item, and change the **Home Page** setting in **Configuration → System** to the book
   - **The book alongside other guides** – publish the **Guides** page, change the **Home Page** setting to `/guides`, and turn on **Hide from Menu** (on the **Advanced** tab) on each guide's home page, so each guide has a card on the Guides page instead of a menu item

On the guide's home page, consider:

- **Section labels** – converted section titles often already start with "Module 1:" or "Chapter 1:", so keep the section labels off (converted books usually include `show_section_label: false`)
- **Cover image** – a portrait book cover is shown whole with either Cover Image Layout

Exercises, callouts, figures and captions carry over as they are. A few things to know:

- **Images** still load from the original Pressbooks site; to keep your own copies, add the images to each page's folder and update their addresses
- **Pressbooks tables** inserted with a shortcode (such as `[table id=5]`) show as text; replace them with a Markdown table

### Turning Links into Embeds

H5P activities and videos are converted to links back to the original Pressbooks book. To show them in the page instead:

- **H5P activities** – shown as "View H5P activity online" links (or an **Open Interactive Activity** button inside an exercise). On the original Pressbooks page, the activity's **Embed** option (when its author allows embedding) gives its embed address; replace the link with the H5P shortcode, for example:

  ```
  [h5p url="https://example.pressbooks.pub/wp-admin/admin-ajax.php?action=h5p_embed&id=3" title="UDL guidelines slide show"]
  ```

- **Videos** – the links go to the Pressbooks page that holds the video, not the video itself. Find the video's own address on that page (for example on YouTube), and replace the link using the included YouTube plugin:

  ```
  [plugin:youtube](https://www.youtube.com/watch?v=VIDEO_ID)
  ```

## Requirements

- PHP >= 8.3 (or >= 8.0.2 for the Grav 1.7 version)
- Grav CMS 2.1 or newer (included in the package), or Grav CMS 1.7 in the Grav 1.7 version

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
