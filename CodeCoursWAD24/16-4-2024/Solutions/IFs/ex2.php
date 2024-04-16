<?php

$temp = readline ("Donnez moi la temperature: ");

if ($temp < 15) {
    print ("froid");
}
else if ($temp < 25){
    print ("il fait bon");
}
else {
    print ("chaud");
}


if ($temp > 25) {
    print ("chaud");
}
else if ($temp >= 15){
    print ("il fait bon");
}
else {
    print ("froid");
}