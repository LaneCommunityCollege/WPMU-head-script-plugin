# WPMU-head-script-plugin
A simple plugin to inject a &lt;script> ... &lt;/script> line in the &lt;head> section of WordPress.  Written for WPMU, but should work just as well in straight WordPress.

To Use:
Edit lane-mega-menu.php and replace the <script>...</script> stuff with whatever you want inserted.

Upload to wp-content/plugins and enable just like any plugin.

There are no settings or menus added to Dashboard.  It just works.


_Thoughts:_
If you have multiple scripts you want to insert, you can probably do one of a couple things.  1) Duplicate lane-mega-menu.php, calling it something else, and change the code you want to insert.  Or, 2) Just add additional scripts to the variable that gets outputted in the plugin.  Which way you choose kind of depends on what your aim is and how you like to organize things.  Either way should work though.

This plugin should work with anything you want added to the head section of WordPress.  So, custom CSS files should work just the same.  There are better ways to do this, but the reason I wrote this instead of using one of those "better ways" is that I wanted to enable the plugin for the whole server without having anything added to the Dashboard menus.  This plugin just works without even being seen by sub-site users.

_Concerns:_
There is no checking to see if a script is already being loaded.  In other words, if you use this to load something like Mondernizr, and Modernizr is already being loaded by another plugin, or as part of a theme, you'll be loading it twice.  May not be an issue, but could cause wonky problems.


v1.0
Initial Release
