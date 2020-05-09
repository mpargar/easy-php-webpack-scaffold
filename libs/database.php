<?php
/**
 * This is your database class
 */
class Database{
    private $host='localhost';
    private $user='root';
    private $password='';
    private $database='databseName';

    private function getConnection(){
        return new mysqli($this->host, $this->user, $this->password, $this->database);
    }

    /**
     * This method allows you to get data from your data base.
     * 
     * @param string query your query here
     * @return json Description
     * 
     */
    public function get($query){
        $db=$this->getConnection();
        $queryResult=$db->query($query);
        $result=[];
        while($row=$queryResult->fetch_object()){
            $result[]=$row;
        }
        return $result;
    }
    
    /**
     * This method allows you to insert or update data.
     * 
     * @param string query your query here
     * @return json Description
     * 
     */
    public function post($command){
        $db=$this->getConnection();
        $commandSuccess=$db->query($command);
        $lastId=$db->insert_id;
        return array("success"=>$commandSuccess,"id"=>$lastId);
    }
}

// biotiquin1227