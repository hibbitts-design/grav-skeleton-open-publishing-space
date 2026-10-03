---
title: 'Embedding in Your LMS'
taxonomy:
    filter: [view1]
---

Any page can be shown inside your LMS (Canvas, Moodle, Brightspace and others) without the site's menu or footer. Add `?embedded=true` to the page's address and use it in an iframe:

```html
<iframe src="https://yoursite.com/multi-page-content/writing-for-the-web?embedded=true" width="100%" height="600" style="border:none;"></iframe>
```
