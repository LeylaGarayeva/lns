<?PHP SESSION_START();


$sitename='lns.az';
$site_url = 'http://localhost/lns/';
$site_url2 = '/project2/';
$dbhost = "localhost";
$dbname = "lns";
$dbuser = "root";
$dbpass = "";
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

// //////////////////////////////

class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "lns";
	private $conn;


	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		mysqli_set_charset($conn,"utf8");
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}


?>