module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            browserify: 'bundle'
        },
        paths: {
            curl: 'curl_downloads',
            source: 'src',
            translations: 'lang'
        },
        project: {
            composer: 'manovotny/wp-mailchimp-feed',
            description: 'Adds a WordPress feed for MailChimp for better content control.',
            git: 'git://github.com/manovotny/wp-mailchimp-feed.git',
            name: 'WP MailChimp Feed',
            slug: 'wp-mailchimp-feed',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-mailchimp-feed',
            version: '1.1.1'
        }
    };

}());
