<?php   header ( 'Content-Type: text/html;charset=UTF-8' );
    require_once 'classeArme.php';
    require_once 'classeArmure.php';
    require_once 'classePersonnage.php';
?>

<!doctype html>
<html lang="fr">
    <head>
    	<meta charset="utf-8">
      	<title>Kryptosphère 2019  -  Initiation PHP7-HTML5-CSS3 n°4: JdR Partie 2 -  Maître Will;)</title>
      	<link rel="stylesheet" href="style.css">
      	<script src="fonctions.js"></script>
    </head>
    
    
    
    <body>
    
    	<div name = "affPHP" align = "center">
    		<font color = "orange">
    			<?php
                    $_personnage = new Personnage ( 'Marcelus GORDON', '-aucune description-', 40, 8, 6, 4, 5 );
                        
                        $_personnage -> getPersonnage();

                    echo '<hr />';
                    
                    $_épée = 'Epée De Chevalier';
                    $_armure = 'Armure De Lumière';
                    
                        $_personnage -> arme = $_épée;
                        $_personnage -> attaque += 10;          // L'épée donne un bonus de +10 en attaque !    
                        
                        $_personnage -> armure = $_armure;
                        $_personnage -> défense += 10;          // L'armure donne un bonus de défense de +10 !
                        
                        $_personnage -> getPersonnage();
                        
                    echo '<hr />';
                        
                    $_torche = 'Torche Pourrie';
                    $_corde = 'Corde de 5m';
                    $_briquet = 'Briquet D\'Amadou';
                    
                    $_sacADos = array (                                     // On crée le sac à dos en le remplissant au passage..
                            $_torche,
                            $_corde
                    );
                    
                    $_poches = array ();                                     // Là on crée les poches du personnage, elles sont vides.
                    
                        $_personnage -> poches[] = $_briquet;     // On met le briquet dans les poches du personnage.
                    
                    
                        $_personnage -> PO += 975;
                    
                        $_personnage -> sacADos = $_sacADos;    // Le personnage endosse son sac à dos avec les objets dedans.
                        
                        $_personnage -> getPersonnage();
                        
                    echo '<hr />';
                        
                    
    			?>
        	</font>
    	</div>
    </body>
        
</html>
