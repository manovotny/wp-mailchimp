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
            bower: 'bower.json',
            composer: 'composer.json',
            composerLock: 'composer.lock',
            grunt: 'Gruntfile.js',
            jshint: '.jshintrc',
            package: 'package.json',
            readme: 'README.md',
            replace: 'replace.js',
            sassLint: '.scss-lint.yml',
            style: 'style.css'
        },
        paths: {
            admin: 'admin',
            bower: 'bower_components',
            classes: 'classes',
            composer: 'vendor',
            config: 'config',
            css: 'css',
            grunt: 'grunt',
            inc: 'inc',
            js: 'js',
            lib: 'lib',
            phpunit: 'vendor/bin/phpunit',
            sass: 'sass',
            tests: 'tests',
            translations: 'lang',
            views: 'views'
        },
        project: {
            composer: 'manovotny/wp-mailchimp-feed',
            description: 'Adds a WordPress feed for MailChimp for better content control.',
            git: 'git://github.com/manovotny/wp-mailchimp-feed.git',
            name: 'WP MailChimp Feed',
            package: 'WP_MailChimp_Feed',
            slug: 'wp-mailchimp-feed',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-mailchimp-feed',
            version: '1.0.0'
        }
    };

}());
