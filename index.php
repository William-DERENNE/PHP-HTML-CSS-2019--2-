<?php   header ( 'Content-Type: text/html;charset=UTF-8' );
    require_once 'classeTruc.php';
?>

<!doctype html>
<html lang="fr">
    <head>
    	<meta charset="utf-8">
      	<title>Kryptosphère 2019  -  Initiation PHP7-HTML5-CSS3  -  Maître Will;)</title>
      	<link rel="stylesheet" href="style.css">
      	<script src="fonctions.js"></script>
    </head>
    
    
    
    <body>
    
    	<div name = "affPHP" align = "center">
    		<font size = "200%" color = "orange">
    			<?php
                    $_truc = new Truc ( 15 );
                        $_truc -> getX();
                    
                
                ?>
        </font>
    </div>
        
        <div name = "affJAVASCRIPT" align = "center">
        	<font size = "200%" color = "orange">
        		<script>
        			document.write ( Objet.x );
					console.log ( Objet.x );
       			</script>
        	</font>
        </div>
        
        
    </body>
        
</html>
