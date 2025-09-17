<?php



session_start();

ob_start();

date_default_timezone_set('Europe/Istanbul');



class config

{

    public $db;

    public function __construct()

    {

        $hostname = "localhost";

        $name = "u1375338_ulusarp";

        $dbuser = "u1375338_ulusarp";

        $dbpassword = "na?%()!(?/na?%()!(?/";

        $this->db = new PDO("mysql:host=$hostname;dbname=$name;charset=utf8", $dbuser, $dbpassword);

        // if($this->db) {

        //  echo "başarılı";

        // }

    }

}

$config = new config();



// include class and function

require_once 'sessionmanager.php';

require_once 'helper.php';

require_once 'process.php';

// include class and function





// start class and function

$sessionmanager = new sessionmanager();

$process = new process();

//$helper = new helper();

// start class and function



// $settings = $config->db->prepare("SELECT * from settings where id=?");
// $settings->execute(array(1));
// $settingsAll = $settings->fetch();


$siteInfo = $config->db->prepare("SELECT * from settings where id=?");
$siteInfo->execute(array(1));
$siteInfoAll = $siteInfo->fetch();

//echo $infoAll['url'];

define("SITE_URL", $siteInfoAll['url']);

