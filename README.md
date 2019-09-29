# Blog Post Featured Image Finder

This plugin adds replaces the RainLab.Blog plugin's "featured images" with a way to add a featured image from the media library instead of a file upload. This is beneficial to CDN users by using the configured CDN/cloud storage provider and not the web server's local storage.

# Configuration

Nothing! This plugin stores the featured image in the 'metadata' column of the blog post table, making it easy to export your posts later.

# Usage

Simply add an image and optional captions to a blog post, then add use the following twig code to access the image:

```
<img src="{{ post.metadata.featured_image.url|media }}" alt="{{ post.metadata.featured_image.alt }}" title="{{ post.metadata.featured_image.credit">
```

# License

MIT

# Change Log

* 1.0.1 - Initial version