<?php  

abstract Class Connection {
    private $connect ='';
    public  $connection_config=[];
    public function __construct($confing=[]){
       try {
            $this->connection_config=parse_url(getenv('DATABASE_URL'));
            $this->connect= new PDO('pgsql:host='.$this->connection_config['host'].';dbname='.str_replace('/','',$this->connection_config['path']).'', $this->connection_config['user'], $this->connection_config['pass']);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully"; 
        }
        catch(PDOException $e){
            die("Connection failed: " . $e->getMessage());
        }
    }

    protected function get_connection(){
        return $this->connect;
    }

}