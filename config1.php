<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) 

Host name -
sql111.epizy.com
User name -
epiz_30424908
DB name and table name -
epiz_30424908_kbp_cred
pass -
gtwED1WwFlM

*/
define('DB_SERVER', 'sql111.epizy.com');
define('DB_USERNAME', 'epiz_30424908');
define('DB_PASSWORD', 'gtwED1WwFlM');
define('DB_NAME', 'epiz_30424908_kbp_cred');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>