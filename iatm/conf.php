<?PHP SESSION_START();


$sitename='iatm.az';
$site_url = 'http://iatm.az/';
$site_url2 = '/project2/';
$dbhost = "localhost";
$dbname = "iatmaz_orxan";
$dbuser = "iatmaz_orxan";
$dbpass = "iatmaz_orxan";
/*
mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Mysqele qoshulmada sef var');
mysqli_select_db($dbname) or die ('Bazaya qoshulmada sef var');*/

///////////////////////////////////////////////////////////

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$connection) {
    die("Mysqele qoshulmada sef var: " . mysqli_error());
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection,$dbname);
if (!$db_select) {
    die("Bazaya qoshulmada sef var: " . mysqli_error());
}
/////////////////////////////////////////////////////////

//mysqli_query ("SET NAMES UTF8");
mysqli_set_charset($connection,"utf8");


$site_dir = str_replace('\\', '/', getcwd());
$site_dir = substr($site_dir, -1, 1) == '/' ? substr($site_dir, 0, -1) : $site_dir;

?>