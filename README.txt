URLExpress 
----------------------

All the fun of bit.ly without unwittingly supporting Gaddafi, right on your own webserver. Based on linx which was based on lilURL. 

License: GPL3 (see below)

Free to modify, redistribute or whatever it is Richard Stallman wants.

----------------------

Version 1.0 Aleph-2 RELEASE "screaming babies in mozart wigs"
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

Version history:

1.0a2 ("screaming babies in mozart wigs")
	Removal of CSS from inline to its own file, minor code improvements.

1.0a1 ("enormous mongoose andy jackson")
	Initial public release, containing all of the bare minimum URLExpress goodies.

------------------------

Further help:

If you've followed this readme and still are having problems, feel free to lodge a trouble ticket:
http://github.com/bennyfactor/urlexpress/issues

------------------------

LICENSE

This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

In short:

AS IS, WHERE IS, NO WARRANTY EXPRESSED OR IMPLIED, OFFER VOID WHERE PROHIBITED BY LAW, DO NOT EXPORT TO CUBA, FAHV HUNNERT HORSEPOW'R.

------------------------

IAATB Industrie
www.iaatb.net
