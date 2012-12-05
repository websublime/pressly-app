#PRESSLY APPLICATION#
Pressly application is used to install pressly composer library.
###How to use###
Clone repo under wordpress content directory,

<code>
cd /yourpath/wordpress/wp-content
git clone git://github.com/websublime/pressly-app.git pressly
</code>
It is important that you rename pressly-app to pressly on git clone.

You will see four files after cloning the repositorie.

	1.README.md
	2.bootstrap.php
	3.composer.json
	4.boot.php

1. README.md - is just this documentation.
2. bootstrap.php - is a bootstrap file for unit tests. If you want to use unit tests, clone from svn wordpress the unit folder for testing. More info at <http://codex.wordpress.org/Automated_Testing>. Pressly library just have a phpunit.xml ready to use.
<code>
svn co http://unit-tests.svn.wordpress.org/trunk/
</code>
3. composer.json - The file used by composer to install pressly and is dependencies.
4. boot.php - the file that will initialize our composer library to construct our theme.

After, you will need composer to install the pressly library. To install composer, just follow composer tutorial guide on <http://getcomposer.org/doc/00-intro.md>.

<code>
curl -s https://getcomposer.org/installer | php -- --install-dir=bin
</code>

Then run composer to install pressly. Composer will resolve all dependencies.

<code>
php composer.phar install
</code>

Great dude, your done! Our library is now installed under wordpress and ready to be use in our theme.

To make a theme with this library, please follow or clone the demo theme on <https://github.com/websublime/press-theme>.

This documentation is shortly, but i will update as soon as possible. Pressly is not totally functional because it is being developed on free time (with no rush). In current phase, you will see nothing, only Hello test and ChromeLog debugs.
