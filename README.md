# GrocerEase

In order to run this app, you'll need to test it locally with
Xampp by creating a local repository in your /htdocs directory
and pulling the files in.

In order to create a working database, import the SQL file included in the repo into your Xampp
MySQL server.

Upon pushing for the final production, the connectdb.php file
will need be changed to connect to the Google Cloud Platform database
(by commenting out the relevant database variables at the
top of the file). It's unclear whether the PHP headers will have be changed for this
too. 

All with MySQL calls should be in the format: nameofpage_db_functions.php.

The front end is based off of POTD 5.
