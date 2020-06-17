<?php
   
  class admin extends Controller {

    public function __construct(){
        parent::__construct();
        $this->dirname="admin";
        $this->layout="layout_admin";
        session_start ();
    }
    public function listeJoueurs(){
        $this->manager=new userManager();
        $joueur=$this->manager->Listejoueur();
        $this->data['joueur']=$joueur;
        $_SESSION['joueur']=$this->data['joueur'];
        $this->views="listeJoueurs";
        $this->render();
    }
    
    public function creerQuestions(){
        $this->views="creerQuestions";
        $this->render();
    }
    public function listeQuestions(){
        $this->views="listeQuestions";
        $this->render();
    }
    public function creerAdmin(){
        $this->dirname="security";
        $this->views="inscription";
        $this->render();
    }
  }