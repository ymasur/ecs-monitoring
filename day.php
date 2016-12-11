<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <title>ECS Arduino</title>
    <meta content="Yves Masur" name="author">
    <style type="text/css">
#Titre {  
  font-size: large;  
  font-weight: bolder;  
  font-family: Arial;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style> 
<?php
	include 'mdatefile.php'	
?>
  </head>
  <body>
    <p id="Titre">Températures eau chaude sanitaire</p>
    <div id="lastvalues">  

    </div>
    <table style="width: 35%;" border="1">
      <thead>
        <tr>
          <td style="width: 18%; background-color: #ccffff;">Date</td>
          <td style="width: 18%; background-color: #ccffff;">Heure</td>
          <td style="width: 10%; background-color: #ccffff;">Pompe</td>		  
          <td style="width: 15%; background-color: #ccffff;">T capteur</td>
          <td style="width: 15%; background-color: #ccffff;">T Eau solaire</td>
          <td style="width: 15%; background-color: #ccffff;">T ECS</td>
        </tr>
      </thead>
      <tbody>

	<div id="dataview">       
<?php
//<span style="font-family: Garamond;"></span><br>
	//echo "<H2>Aujourd'hui</H2>";
	$s = getToday();
	
	echo dataInTable($s);
	//echo "--fin des données--<br/>";
?>	
	</div>

    </tbody>
    </table>
  </body>
</html>
