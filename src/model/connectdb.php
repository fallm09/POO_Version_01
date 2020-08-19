<?php
//namespace '../src./model';
class connectdb 
{
   public $db;
   public function get()
  // private function __construct() 
   {
       $this->getConnection();
   }
   public function getConnection()
   {
       
    $host = 'mysql:host=localhost;dbname=createclient';
    $username = 'root';
    $password = '';
     
    try {
        $this->db=new PDO($host,$username,$password);
    } catch(PDOException $ex){
            die($ex->getMessage());
        }
        return $this->db;

    }
  
   }

