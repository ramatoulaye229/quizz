<?php
    abstract class Manager{

        private $pdo=null;
        protected $className;

        
        private function getConnexion(){
            
            try {
                if($this->pdo==null){
                $this->pdo=new PDO('mysql:host=localhost;dbname=quizz','root','');
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                }
            } catch (Exception $ex) {
                die("verifier les parametre de connexion".$ex->getMessage());
            }    
            
        }
        
        private function closeConnexion(){
            if($this->pdo!=null){
                $this->pdo=null;
            }
        }

        public function ExecuteSelect($sql){
            $this->getConnexion();
                        
            $query=$this->pdo->query($sql);
            $data=[];
            while($row=$query->fetch()){
               
                $data[]=new $this->className($row);
            }
            
            $this->closeConnexion();
            return $data;
        }


        public function ExecuteUpdate($sql){
            $this->getConnexion();
            $nbL=$this->pdo->exec($sql);
            $this->closeConnexion();
            return $nbL;
        }


        public abstract function create($data);
        public abstract function update($data);
        public abstract function delete($id);
        public abstract function findAll();/*selecte*/
        public abstract function findById($id);



    }

?>