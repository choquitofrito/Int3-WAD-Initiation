<?php
 
$choix= $_GET['choix'];
 
$filmsTable= array ("Comédie"=>array ("Film1"=>50, "Film2"=>70),
                    "Drame"=>array ("Film3"=>70,"Film4"=>70));



echo json_encode($filmsTable);
if ($choix=="Comédie"){
//    echo json_encode($filmsTable['Comédie']);
    
    //sans JSON
//    echo ($filmsTable['Comédie'][0]);
//    echo ($filmsTable['Comédie'][1]);
    
}
elseif ($choix=="Drame") {
  //  echo json_encode($filmsTable['Drame']);
//    echo ($filmsTable['Drame'][0]);
//    echo ($filmsTable['Drame'][1]);
//    
}

 
 
?>