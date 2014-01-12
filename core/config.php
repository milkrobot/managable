<?php
/*
 *  Configuration
 * 
 *  "Managable" - A custom database generator and manager
 *  Written by Doug Matlack, in 2014, under GNU GPL
 * 
 *  You don't have to leave this notice intact, and I
 *  don't take donations. No need to credit me anywhere.
 *  
 *  You can pay me back by contributing to the open source 
 *  community that so many of us depend on to buy bread
 *  and pay rent.
 * 
 *  Please also feel free to show me any projects you create
 *  using this tool, as well as offer any suggestions to improve
 * 	it, at doug@mad-factory.com.
 * 
 * 	CODE IS POETRY ~
 * 
 */

//select your database software
//currently only MySQL is supported
//the rest of the SQL family will be
//added in the near future, followed
//by NoSQL databases. Feel free to contribute here.

define('MANAGABLE_DATABASE_SOFTWARE','MySQL');

//database credentials
define('MANAGABLE_DATABASE_HOST','database_host');
define('MANAGABLE_DATABASE_NAME','database_name');
define('MANAGABLE_DATABASE_USER','database_user');
define('MANAGABLE_DATABASE_PASS','database_pass');

//file storage type
//currently supported types are "local", "rackspace", and "amazons3"
define('MANAGABLE_STORAGE_TYPE','local');

//options for local storage
define('MANAGABLE_STORAGE_LOCAL_ROOT',FALSE); //if left false, MANAGABLE_ROOT/media/ will be used
define('MANAGABLE_STORAGE_URL_ROOT',FALSE); //if left false, a relative path like /managable/media/44.jpg will be used



?>
