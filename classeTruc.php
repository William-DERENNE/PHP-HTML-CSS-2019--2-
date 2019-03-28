<?php   header ( 'Content-Type: text/html;charset=UTF-8' );


class Truc {
    
    public $x;
    
    
    /**
     * CONSTRUCTEUR
     *
     * @param int $_x
     */
    public function __construct ( int $_x ) {
        
        $this -> x = $_x;
        
    }
    
    
    public function getX() {
        echo '<br />' . $this -> x . '<br />';
    }
    
}?>
