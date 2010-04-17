URLExpress 
----------------------

All the fun of bit.ly without unwittingly supporting Gaddafi, right on your own webserver. Based on linx which was based on lilURL. 

License: GPL3

Free to modify, redistribute or whatever it is Richard Stallman wants.

----------------------

Version 1.0 Aleph-1 RELEASE "enormous mongoose andy jackson"
----------------------

How to install:

1. Extract the contents of this compressed file into a folder and upload to your server.
2. Create a MySQL database and a user.
3. Open includes/conf.php.example and edit the database name and user/password as per step 2.
4. Benny Moto pro racer tip: Customize! GO KICKY FAST OKAY
4. Rename it to includes/conf.php
4. Import/Dump the contents of database.sql file using phpMyAdmin (if available). This is to create the database tables.
6. set an .htpasswrd file for the cookies/ directory. An example for how to do this (on dreamhost) is listed here: http://wiki.dreamhost.com/Password-protecting_directories#Using_.htaccess

------------------------

How to upgrade:

Using a RELEASE version (.tar.gz)
1. Back up your current install.
2. Unpack the tarball into the URLExpress directory. This will only overwrite the functional bits,
	all of your configuration and other stuff will be fine.
3. Compare your config.php to the new conf.php.example. If there are any new settings, add them to your conf.php
4. Delete config.php.example
5. Shorten some more URLs!

Using the git tree 
1. Just stage the new commit into your production directory. It's that easy.
 None of your config files or users or SQL db will be overwritten, promise.
2. Check if config.php.example has some new settings. Add them to config.php and delete the example.

NOTICE:
UPGRADING FROM COMMIT f8a313eef8372caf6e550350283cd770460e59ce(1002.27) & EARIER

Make sure to change the collate for the sql field 'id' to utf_bin from utf_general_ci. This will allow you to make use of the new case-sensitive URLs.
(If you don't, you'll just get uppercase URLs from now on. Weird huh?)



------------------------

I need help!

If you've followed this readme and still are having problems, feel free to lodge a trouble ticket:
http://github.com/bennyfactor/urlexpress/issues


AS IS, WHERE IS, NO WARRANTY EXPRESSED OR IMPLIED, VOID WHERE PROHIBITED BY LAW, DO NOT EXPORT TO CUBA, FAHV HUNNERT HORSEPOW'R.

------------------------

IAATB Industrie
www.iaatb.net
