//README


This plugin is for deleting any wp options in the MySQL database containing values matching
Wildcard/String You define/ Wildcard

For example if there are values that have a common but of string in the wp options.

The name could be "This_is_MyWildcard_APIKey".

Set the wildcard to "MyWildcard" in the uninstall.php file and the plugin will delete anything it finds with MyWildCard form the table.

This deletion happens when you delete the plugin from WordPress.

I have used this mostly when testing a WP plugin over and over again. Useful to remove all the old values.

Use at your own risk! Use the wrong wildcard and you could really wreck your WordPress database.
