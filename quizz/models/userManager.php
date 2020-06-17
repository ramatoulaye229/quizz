<?php

class UserManager extends Manager{
   
    function __construct(){
        $this->className="user";
    }
    public function Listejoueur(){
        $sql="SELECT * FROM $this->className WHERE score IS NOT NULL ORDER BY score DESC ";
        return $this-> ExecuteSelect($sql);
    }


    public function create($objet){
       

    }
    public function update($objet){

    }
    public  function delete($id){
      
    }
    public function findAll(){
      
    }
    public function findById($id){

    }  
    public function loginExist($login){
        $sql="select * from $this->className where login='$login'";
        $akh=$this->ExecuteSelect($sql);
        return $akh;   
    }
    
    public function add($objet){
        $sql="INSERT INTO `user` (`id`, `login`, `pwd`, `profil`, `fullName`,`avatar`) VALUES (NULL, '".$objet->getLogin()."', '".$objet->getPwd()."', '".$objet->getProfil()."', '".$objet->getFullName()."', '".$objet->getAvatar()."');";
        return  $this->executeUpdate( $sql)!=0;

    }
    public function getUserByLoginAndPwd($login,$password){
       $sql="select * from $this->className where login='$login' and pwd='$password'";
       $user=$this-> ExecuteSelect($sql);
       return $user[0];
    }

    
}