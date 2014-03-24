Some really bad PHP code I wrote for an election portal. Does LDAP checking of roll numbers to check department.

To use, place ldap.php on an inside-iit server (home.iitb), and change the url accordingly (the reverse proxy), eg `http://home.iitb.ac.in/~manishg/Stuff/ldap.php?user=$euser&pass=$epass`


Modify index.php to suit your needs. Ensure you modify the list of allowed candidates from magic.php

Also, modify the arrays in magic.php to check for roll numbers, branch change'd people, etc.

Also modify the ou=PHY to match your required LDAP ou.
