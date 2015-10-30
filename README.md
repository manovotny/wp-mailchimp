# wp-mailchimp-feed

Adds a WordPress feed for MailChimp for better content control.

## Features

### Creates a MailChimp Specific WordPress Feed

The plugin will a new WordPress feed specifically for MailChimp, which should be used to send subscriber emails.

It's better to have a separate feed from the RSS feed, so you can have more granular control over the content, which might have different requirements than RSS. 

The feed it creates is: `http://example.com/feed/mailchimp`

### Automatic Image Adjustments

The plugin will automatically set the images in the MailChimp emails to have a `max-width: 100%`.

This fixes overflow issues with images in the email template.

### Custom Hook for Additional Content Manipulation

The plugin adds a `wp_mailchimp_feed_modify_dom` hook where you can, within a theme or another plugin, do additional DOM / content modifications to the MailChimp feed. 

A good example is if your content contains a JavaScript only button, like a button for printing the page. You can use this hook to remove that button from the MailChimp email since JavaScript execution is not allowed in email viewers.

## Installation

It can be installed as a regular WordPress plugin or as a Composer dependency.
