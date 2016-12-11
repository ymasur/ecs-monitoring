<?php
/*
	Enregistre le texte passé en paramètre dans un fichier log.txt
	Ajoute une ligne à chaque appel
	La date/heure est celle du YUN
	Les caractères non ASCII sont encodés (ex. " " -> %20 )
*/
 date_default_timezone_set('Europe/London');
 $DateNow = date("Y/m/d\tH:i:s");
 $outtext = $DateNow . "\t " . $_SERVER['QUERY_STRING'] ."\n";
 $dfile = "./log.txt";
 $file = fopen($dfile,"a");
 $f = fputs($file,$outtext);
 fclose($file);   
 echo "Logged: " . $outtext;

?>
