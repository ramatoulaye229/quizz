<?php

    class Validator{

        private $errors=[];

        public function getErrors(){
            return $this->errors;
        }

        public function is_valid(){
            return count($this->errors)===0;
        }

        public function is_number($nbr,$key,$errormessage="entrer un nombre"){
            if (!is_numeric($nbr)){
                $this->errors[$key]=$errormessage; 
            }
        }
        
        public function is_empty($nbr,$key,$sms=null){
            if (empty($nbr)){
                if($sms==null){
                    $sms="Le nombre est obligatoire";
                }
                $this->errors[$key]=$sms; 
            }
        }
    
        public function is_positif($nbr,$key,$errormessage="entrer un nombre positif"){
            $this->is_number($nbr,$key);
            if($this->is_valid()){
                if($nbr<=0){
                    $this->errors[$key]=$errormessage;
                }
            }
        }
    
        public function compare($nbr1,$nbr2,$key1,$key2,$errormessage="la longueur doit etre plus grand que la largeur"){
            $this->is_positif($nbr1,$key1);
            $this->is_positif($nbr2,$key2);      
            if($this->is_valid()){ 
                if ($nbr1<$nbr2){
                    $this->errors['all']=$errormessage;
                }
            }

                
        }
    
        public function is_Egal($val1,$val2,$key,$sms="Les Valeurs ne sont pas identiques"){
            if($val1!=$val2){
                $this->errors[$key]=$sms;
            }
        }

        public function  is_email($valeur,$key,$sms=null){
            $masque = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";
        
            if(!preg_match($masque, $valeur)) {
            $this->errors[$key]= $sms;

            }
        }


        public function  is_telephone($valeur,$key,$sms=null){
            if(!preg_match("#[7][5-8][- \.?]?[0-9][0-9][0-9][- \.?]?([0-9][0-9][- \.?]?){2}$#", $valeur) || !preg_match("#[7][0][- \.?]?[0-9][0-9][0-9][- \.?]?([0-9][0-9][- \.?]?){2}$#", $valeur)){
                if($sms==null){
                    $sms="Le Numéro de telephone n'est pas reglo";
                }
                $this->errors[$key]= $sms;

                }
            }

}

