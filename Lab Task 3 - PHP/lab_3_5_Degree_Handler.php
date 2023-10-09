<?php
  $degree = $_REQUEST['degree'];
  if(empty($degree)) 
  {
    echo("You didn't select any Degree.");
  } 
  else 
  {
    $N = count($degree);

    echo("Degree: ");
    for($i=0; $i < $N; $i++)
    {
      echo($degree[$i] . " ");
    }
  }
?>