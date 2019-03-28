<?php   header ( 'Content-Type: text/html;charset=UTF-8' );

class Arme {
    
    public $nom;
    public $nomObjet;
    
    public $attaque;
    
    
        public function __construct ( string $_nom, string $_description, int $_attaque ) {
            
            $this -> nom = $_nom;
            $this -> description = $_description;
            $this -> attaque = $_attaque;
            
        }
    
    
        public function getArme() {
            echo '<pre>'; print_r ( $this ); echo '</pre>';
        }
    
    
    
    
}?>
