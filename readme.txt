=== Plugin Name ===
Contributors: tinycks
Tags: cloudbric, http_x_forwarded_proto, SSL, redirect loop, HTTPS, real ip, ip, proxy, http_x_forwarded_for, header, redirect
Requires at least: 3.0
Tested up to: 4.7
Stable tag: 0.9.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

fixed The Redirect Loop and Client IP address for Cloudbric.

== Description ==

Cloudbric is an enterprise level Web Application Firewall (WAF) service that automatically recognizes and filters malicious traffic utilizing our unique logic based detection engine.

Cloudbric provides all-inclusive protection to all users and issues Let's Encrypt SSL certificates to all websites for free. Basic SSL mode is set by default when you add a website to Cloudbric. You can always change SSL mode at Cloudbric console under settings page.

Basic SSL mode encrypts communication between a user and Cloudbric, but not between Cloudbric and your web server (User <--- Let's Encrypt SSL ---> Cloudbric Server <--- No SSL ---> Web Server). If you want do encrypt communication between Cloudbric and your web server as well, then you must have an SSL at your web server. In other words, you need to have SSLs at both Cloudbric and your web server. This is why Basic SSL mode is set by default at Cloudbric, as mentioned above. For your information, Basic SSL mode is safer than no SSL mode that is http communication only.

Cloudbric Basic SSL plugin is free to all WordPress users, and this is only those who added their websites at Cloudbric. There are two key features.

1. Prevent redirect loop error
2. Track visitor's original IP

= Prevent Redirect Loop Error =
When you enable Basic SSL mode and configure your WordPress site for SSL/HTTPS (either set your site's address to start with https or redirect http traffic to https), the infinite redirect loop error may happen.

= Track Visitor's IP =
Even if Cloudbric server is in between a visitor and a web server, visitor's original IP is trackable.
Usually, a WordPress based website cannot track visitor's IP address when a firewall is placed in front of your web server. When you install and activate Cloudbric Basic SSL plugin, you will be able to track visitor's original IP address, not Cloudbric's IPs.

== Installation ==

Please read all information and follow instructions carefully to fix the error.

1. Install any WordPress plugin that fixes all your websites' HTTP contents to HTTPS. One of the example plugins is the SSL Insecure Content Fixer https://wordpress.org/plugins/ssl-insecure-content-fixer/.
2. Install Cloudbric Basic SSL plugin to prevent a redirect loop when Cloudbric Basic SSL mode is enabled for your website. Usually, a WordPress based website cannot track visitor's IP address when a firewall is placed in front of your web server, but you will be able to track visitor's original IP address with this plugin. Upload plugin files to the `/wp-content/plugins/cloudbric-basic-ssl/` directory OR install the plugin through WordPress plugins page directly. Then, activate it.

== Frequently Asked Questions ==

= How do I fix the infinite redirect loop error? =

When you enable Cloudbric Basic SSL mode and configure your WordPress site for SSL/HTTPS (either set your site's address to start with https or redirect http traffic to https), the infinite redirect loop error may happen. Please go to description and installation page to resolve the issue.

= Need Help? =

Cloudbric Basic SSL plugin is built by the team so if you have any concerns or questions, please send an email to support@cloudbric.com.

== Screenshots ==

n/a

== Changelog ==

= 0.9.3 =
* handle HTTP_X_FORWARDED_FOR multiple ip.
* Wordpress version test.

= 0.9.2 =
* readme.txt change.

= 0.9.0 =
* First Release.