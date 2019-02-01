<?php 

Class QueryBuilder extends Connection {

    private $query='';    
    public function create($array=[]){
        try{
            if(count($array)==0){
                throw new Exception("passing elemests is empty");
            }
            $this->query="insert into users  (".implode(',',array_keys($array)).") values ('".implode('\',\'',$array)."') ";   
            if($this->get_connection()->exec($this->query)){
                echo "data enter";
            }
           
        }catch(Exception $e){
            die("Error " . $e->getMessage());
        }
        
    }

    public function update($array=[]){

    }

    public function select($array=[]){
        try {
            $this->query="select * from users";
            $stmt = $this->get_connection()->prepare($this->query); 
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt;
        } catch (Exception $e) {
            die("Error " . $e->getMessage());
        }
    }

    public function delete($array=[]){

    }
}