<?php
$json = new stdClass();
$json-> points= array(
  new stdClass(),
  new stdClass(),
  new stdClass()
  );
$json-> points[0]-> "movie"= "video.mp4";
$json-> points[1]-> "img_url"= "basilica.jpg";
$json-> points[1]-> "descr"= " La prima pietra della Basilica di San Francesco d’Assisi venne posata il 16 luglio del 1228, a soli due giorni dalla morte di Francesco e all’indomani della sua proclamazione a Santo da parte di Papa Gregorio IX. Secondo la tradizione fu lo stesso Francesco a indicare con esattezza il luogo in cui desiderava essere sepolto: la collina inferiore della città umbra dove abitualmente venivano sepolti i senza legge, i condannati dalla giustizia. La chiesa rappresenta uno dei capisaldi della diffusione del gotico in Italia. La costruzione della basilica venne avviata nel 1228 da Papa Gregorio IX per poi essere consacrata nel 1253 da Papa Innocenzo IV.";

$json-> points[2]-> "img_url"= "affreschi.jpg";
$json-> points[2]-> "descr"= "Gli affreschi che decorano la basilica di San Francesco d’Assisi rappresentano capolavori  immortali dell’arte italiana. I più celebri sono quelli che formano il ciclo pittorico “Storie di San Francesco” della navata della chiesa superiore. Divise in 28 episodi, le scene raccontano i momenti più significativi della vita del santo serafico.”. Le “Storie di San Francesco” sono caratterizzate da soluzioni formali rivoluzionarie, a cominciare dall’impaginazione delle scene che si differenzia dalle cornici geometriche dei pittori del ‘200";

$json-> points[3]-> "img_url"= "basinf.jpg";
$json-> points[3]-> "descr"= "La chiesa inferiore fu iniziata nel 1228 e terminata due anni dopo, quando vi fu traslato il corpo di San Francesco, deposto in un sarcofago sotto l’altare maggiore, nel punto in cui è conservato ancora oggi all’interno di una piccola cripta. Le decorazioni della chiesa inferiore comprendono i lavori degli artisti più illustri del tempo, come Giotto, Cimabue e Simone Martini. La chiesa inferiore è stata affrescata con scene nel transetto ad opera del Maestro di San Francesco e successivamente da Cimabue, che dipinse la Maestà"; 


echo json_encode($json);
?>