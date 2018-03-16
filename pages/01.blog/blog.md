---
title: Blog
hide_git_sync_repo_link: false
sitemap:
    changefreq: monthly
body_classes: 'header-image fullwidth'
content:
    items: '@self.children'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
display_post_summary:
    enabled: false
post_icon: calendar-o
continue_link_as_button: false
modular_content:
    items: '@self.modular'
    order:
        by: folder
        dir: desc
blog_url: blog
feed:
    description: 'Sample Blog Description'
    limit: 10
pagination: true
---

## My Open Publishing Space
### Publish, share and collaboratively edit Markdown-based content
