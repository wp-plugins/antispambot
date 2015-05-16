=== Anti-Spambot ===
Contributors: robert.peake
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Obfuscation of email via the <code>[email]...[/email]</code> shortcode syntax using built-in <a href="http://codex.wordpress.org/Function_Reference/antispambot#Examples" target="_blank">Wordpress Codex</a> functionality.

== Description ==

Obfuscation of email via the <code>[email]...[/email]</code> shortcode syntax using built-in <a href="http://codex.wordpress.org/Function_Reference/antispambot#Examples" target="_blank">Wordpress Codex</a> functionality.

== Installation ==

Install via "Add Plugin".

== Frequently Asked Questions ==

= How does this work? =

This plugin converts email addresses within the <code>[email]...[/email]</code> shortcodes using the built-in Wordpress Codex <a href="http://codex.wordpress.org/Function_Reference/antispambot">antispambot()</a> function. The function converts email address characters to HTML entities. It converts a random selection of characters each time, making it more difficult for spam-bots to "harvest" the email address programmatically.

= Is it foolproof? =

The only foolproof way to ensure email addresses do not get harvested from a web page is to not include them on the page in any form. However, the method created by the Wordpress developers that we employ here should provide reasonable protection against all but the most concerted automatic-harvesting efforts.

== Screenshots ==

1. Use the <code>[email]...[/email]</code> tag to wrap your email input
2. This will display as an email address wrapped in a mailto: hyperlink (i.e. clickable to open a mail client)
3. The source code used to render this involves randomly-encoded characters, making it more difficult for spambots to harvest

== Changelog ==

 * 1.0 - upgraded to stable version after eight months in the wild
 * 0.1-alpha - Initial release

== Upgrade Notice ==

