<?php
 
    $nome = "Raiana";
 
    function teste() {
 
        global $nome;
 
        echo $nome;
 
   
 
    }
 
    function teste2(){
        global $nome;
        echo "<br/>".$nome." Agora no teste2";
 
    }
 
    teste();
	teste2();
 
 
?>