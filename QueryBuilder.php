<?php 

Class QueryBuilder extends Connection {


    public function create($array=[]){
        try{
            if(count($array)==0){
                throw new Exception("passing elemests is empty");
            }
            
        }catch(Exception $e){
            die($e->message);
        }
        
    }

    public function update($array=[]){

    }

    public function select($array=[]){

    }

    public function delete($array=[]){

    }
}