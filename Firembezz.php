<?php

require_once 'vendor/autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;
class Firembezz
{
     protected $database;
     protected $dbname='Client';

     public function __construct()
     {


         $firebase = (new Factory)
             ->withServiceAccount(__DIR__.'/sauce/ultra-4704e-firebase-adminsdk-6x0l9-4f453f2e59.json')
             ->createDatabase();

         $this->database=$firebase;

     }


     public function insert(array $data){
         if(empty($data) || !isset($data)){return FALSE;}

         foreach ($data as $key => $value){
             $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
         }

         return true;
     }

    public function get(string $userID = NULL){
        if (empty($userID) || !isset($userID)) { return FALSE; }
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
        } else {
            return FALSE;
        }
    }


}

