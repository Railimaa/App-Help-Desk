<?php

  /* session_start();

   echo '<pre>';
   print_r($_SESSION);
   echo '</pre>';

   
   //remover indices do array de sessão
   //unset()

   unset($_SESSION['x']);  //para remover o indice apenas se existir 

   echo '<pre>';
   print_r($_SESSION);
   echo '</pre>';


  //destruir todas variaveis
  //session_destroy()
  
  session_destroy($_SESSION['y']); //será destruida 
  //forçar um redirecionamento

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';*/

session_destroy();
header('Location: index.php');


?>