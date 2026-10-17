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

- **Site name and description** – in the Admin Panel under **Configuration → Site**
- **Homepage** – the Open Education Essentials guide is the homepage; to use another page (such as the Blog), change the **Home Page** setting in **Configuration → System**
- **Blog** – at `/blog`; its text and image form the hero banner at the top. Each post is a folder inside `blog` (add one with **Pages → Add**), listed newest first, six per page. Tag a post `featured` to keep it at the top, and edit the notice above the posts in `blog/_important-notice`
- **Other pages** – top-level pages (Open Education Essentials, Blog, Standard Page, Read Me, and so on) appear in the menu, ordered by their folder number; unpublish any you don't need. The `guides`, `sample-guide`, `modular-page`, `modular-page-inject` and `multi-section-page` examples are unpublished – publish one to try it
- **Multi-Section Page** – a simpler alternative to a guide: a page with a side list of its sections and classic Next/Prev buttons. When embedded, it keeps its side list and buttons, while a guide shows only the page content
- **Open Education Essentials** – the example guide, in two parts, using the Section List page type; it is also the example guide in Grav Helios Open Reader. Set its subtitle, cover image, author(s), edition, last updated date, section label, reading progress, Keep My Place, Previous/Next position, and OER attribution on its home page, and each section's Part, card description, image, and Learning Objectives on the section (see the [Quark Open Publishing README](https://github.com/hibbitts-design/grav-theme-quark-open-publishing#multi-page-content), including moving a guide to Grav Helios Open Reader)
- **More than one guide** – two examples, unpublished: **Guides** (`00.guides`), a Guides List page with a card for each guide on the site (the same page type as Grav Helios Open Reader's readers list), and **Sample Guide** (`02.sample-guide`), a second guide with placeholder sections. Publish both to see a site with several guides. To make the Guides page the homepage, as in Open Reader, change the **Home Page** setting in **Configuration → System** to `/guides`, and turn on **Hide from Menu** (on the **Advanced** tab) on each guide's home page to leave the guides out of the menu (`visible: false` would leave a guide off the Guides page too). A guide gets a card when it's a top-level, published and visible Section List page; its **Guides List Group**, **Badge Label** and **Badge Color** settings (on its **Details** tab) add a heading and a badge such as "Draft"
- **Search** – uses the SimpleSearch plugin, from the blog sidebar, the Search page, and the search box on each guide; the optional TNTSearch plugin can be used instead. On sites set up with an earlier version of this skeleton, clear the **Category** filter in **Plugins → SimpleSearch** so search covers every page, not just blog posts
- **Shared parts** – edit the `sidebar` page (set its `position` to `top` or `bottom` of the sidebar) and the `footer` page
- **Theme** – the Grav 2 version uses Quark 2 Open Publishing, and the Grav 1.7 version Quark Open Publishing, with the same pages and settings. My Theme, where your customizations go, works with either and shows the settings of the theme that's installed. Install the Quark 2 theme only together with Quark 2 Open Publishing, and check any custom CSS in My Theme when switching between the two
- **Moving an existing site to Quark 2 Open Publishing** – sites created before Open Publishing Space 2.3.0 have a `streams` setting in `user/config/themes/mytheme.yaml` that only lists Quark Open Publishing. If guide pages then show "template not found", replace its `streams` block with the one below and clear the cache (and check `user/env/<domain>/config/themes/mytheme.yaml` too, if your site has one):

  ```yaml
  streams:
    schemes:
      theme:
        type: ReadOnlyStream
        prefixes:
          '': [user/themes/mytheme, user/themes/quark2-open-publishing, user/themes/quark2, user/themes/quark-open-publishing, user/themes/quark]
  ```

- **Look and options** – under **Themes → My Theme**: Light, Dark or Auto mode and accent colour (Quark 2 Open Publishing) or Dark Mode and text size on phones (Quark Open Publishing), plus logo, header and footer style, chromeless site, Creative Commons license, and custom menu items (see the [Quark 2 Open Publishing](https://github.com/hibbitts-design/grav-theme-quark2-open-publishing#theme-options) and [Quark Open Publishing](https://github.com/hibbitts-design/grav-theme-quark-open-publishing#theme-options) READMEs for all options)
- **Embedding** – add `/chromeless:true` or `?embedded=true` to any page URL, for example `/blog/hero-classes/chromeless:true` or `/blog/hero-classes?embedded=true`
- **Markdown of any page** (Grav 2 version) – a "This page as Markdown (.md)" link below a page's content gets that page as Markdown, ready to reuse (the same as adding `.md` to the page URL, for example `/blog/hero-classes.md`, or `/index.md` for the home page). This is Grav 2.1's Markdown output, which can be turned off in **Configuration → System → Content**. The link's settings, including where it shows and which page templates hide it, are under **Reuse Pages as Markdown** in **Themes → My Theme**. The Copy as Markdown Button plugin is also included, turned off, for anyone who'd like a one-click copy button on pages (turn it on in **Plugins**).
- **Full text of a guide** (Grav 2 version) – turn on **Display Full Text Link on Guides**, under **Reuse Pages as Markdown** in **Themes → My Theme**, to add a "Full text (llms-full.txt)" link on each guide's home page. It gives the whole guide – only its own pages, in reading order – as one Markdown file, at the guide's address with `/llms-full.txt` added (for example `/open-education-essentials/llms-full.txt`), as in Grav Helios Open Reader.
- **Git Sync and "Edit this Page"** – set up Git Sync in the Admin Panel (its own menu item in Grav 2, or Plugins → Git Sync in Grav 1.7), then choose where the link appears and whether it views or edits the source in the theme's Git Sync Link options

## Importing a Pressbooks Book

A Pressbooks book can become a guide here. The free [Pressbooks Converter](https://pressbooks-converter.hibbittsdesign.org/) turns a Pressbooks export into a publication that works as a guide in Open Publishing Space:

1. Convert the book's export with the Pressbooks Converter, choosing **Grav Open Publishing Space** as the destination, and download the converted publication
2. Copy the book's folder into `user/pages`. The converter numbers it `10.` (for example `10.universal-design-for-2026`), so it appears after the guides in the menu, before the blog, and a long title gets a shorter menu label (the `menu` setting on the book's page). To replace the Open Education Essentials guide instead, delete `01.open-education-essentials`, and rename the book's folder to `01.` to make it the first menu item
3. To make the book the homepage, change the **Home Page** setting in **Configuration → System** to the guide. With the Guides page published, the book also gets a card there

On the guide's home page, consider:

- **Section labels** – converted section titles often already start with "Module 1:" or "Chapter 1:", so keep the section labels off (converted books usually include `show_section_label: false`)
- **Previous/Next** – set **Prev/Next Page Controls Position** to **Top and bottom**, for long pages
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
