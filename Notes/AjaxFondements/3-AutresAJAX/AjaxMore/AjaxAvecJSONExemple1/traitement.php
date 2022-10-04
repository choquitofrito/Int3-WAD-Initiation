<?php
 
// Get value of clicked button
$button = $_GET['button'];
 
// Red wine table
$red = array('Chianti', 'Barolo', 'Pinot Noir');
$white = array('Chardonnay', 'Cava', 'Chablis');
 
// Combine red and white tables into one multidimensional table
$winetable = array(
  "red" => $red,
  "white" => $white,
);
 
// Finally depending on the button value, JSON encode our winetable and print it
if ($button == "red") {
  print json_encode($red);
}
else if ($button == "white") {
  print json_encode($white);
}
else {
  print json_encode($winetable);
}
 
?>