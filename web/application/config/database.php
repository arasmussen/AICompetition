<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'admin';
$active_record = TRUE;

$db['read']['hostname'] = 'localhost';
$db['read']['username'] = 'venzio_r';
$db['read']['password'] = getenv('VENZIO_READ_PASSWORD');
$db['read']['database'] = 'venzio';
$db['read']['dbdriver'] = 'mysql';
$db['read']['dbprefix'] = '';
$db['read']['pconnect'] = TRUE;
$db['read']['db_debug'] = TRUE;
$db['read']['cache_on'] = FALSE;
$db['read']['cachedir'] = '';
$db['read']['char_set'] = 'utf8';
$db['read']['dbcollat'] = 'utf8_general_ci';
$db['read']['swap_pre'] = '';
$db['read']['autoinit'] = TRUE;
$db['read']['stricton'] = FALSE;

$db['write']['hostname'] = 'localhost';
$db['write']['username'] = 'venzio_w';
$db['write']['password'] = getenv('VENZIO_WRITE_PASSWORD');
$db['write']['database'] = 'venzio';
$db['write']['dbdriver'] = 'mysql';
$db['write']['dbprefix'] = '';
$db['write']['pconnect'] = TRUE;
$db['write']['db_debug'] = TRUE;
$db['write']['cache_on'] = FALSE;
$db['write']['cachedir'] = '';
$db['write']['char_set'] = 'utf8';
$db['write']['dbcollat'] = 'utf8_general_ci';
$db['write']['swap_pre'] = '';
$db['write']['autoinit'] = TRUE;
$db['write']['stricton'] = FALSE;

$db['admin']['hostname'] = 'localhost';
$db['admin']['username'] = 'venzio_a';
$db['admin']['password'] = getenv('VENZIO_ADMIN_PASSWORD');
$db['admin']['database'] = 'venzio';
$db['admin']['dbdriver'] = 'mysql';
$db['admin']['dbprefix'] = '';
$db['admin']['pconnect'] = TRUE;
$db['admin']['db_debug'] = TRUE;
$db['admin']['cache_on'] = FALSE;
$db['admin']['cachedir'] = '';
$db['admin']['char_set'] = 'utf8';
$db['admin']['dbcollat'] = 'utf8_general_ci';
$db['admin']['swap_pre'] = '';
$db['admin']['autoinit'] = TRUE;
$db['admin']['stricton'] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */
