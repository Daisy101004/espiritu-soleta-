<?php
class PDODatabase extends pdo
{
    private $DatabaseType;
    private $Host;
    private $User;
    private $Password;
    private $Database;

    public function __construct()
    {
        $this->DatabaseType = 'mysql'; 	//specify the Database Type
        $this->Host = 'localhost'; 		//the host to connect
        $this->User = 'root'; 			//username
        $this->Password = ''; 			//password
        $this->Database = 'db_pdo'; 	//database name
        $dsn = $this->DatabaseType . ':dbname=' . $this->Database . ";Host=" . $this->Host; 	//construct the Data Source Name
        parent::__construct($dsn, $this->User, $this->Password); 						//pass the parameter to the class constructor
    }
} 
?>
