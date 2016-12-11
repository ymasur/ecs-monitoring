<!DOCTYPE html>
<html>
<head>
<meta  content="text/html; charset=windows-1252"  http-equiv="content-type">
<title>ECS Arduino</title>
<meta  content="Yves Masur"  name="author">
<style  type="text/css">
#Titre {  
  font-size: large;  
  font-weight: bolder;  
  font-family: Verdana;
}

table{ border-collapse: collapse; }
th {text-align: left;}
tr:nth-child(even){background-color: #f0f0f0}
</style> 
<?php 	include ("mdatefile.php"); ?> 
</head>
  <body>
    <p  id="Titre">Data ECS (dev) </p>
	<div id=""infos"">
<?php 
	echo "<b>Arduino infos</b><br />"; //données t réel de Arduino
	$ArduinoData = "http://localhost/arduino/temperature";
	$fd = fopen($ArduinoData, "html") or die("Arduino ne répond pas!");
	$data = fread($fd, 1000); // quelques lignes
	echo str_replace("\n", "<br />", $data);
?>
	</div>
	<p />
<form  action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="get"> 
	<label><b>Data du:</b>
	<span  class="ddown"> <?php echo dateSelect(); ?> </span> </label> 
	<input type="checkbox" name="filter" value="1" <?php if ($_GET['filter'] == "1") echo "checked";?> > Tout
	<input type="submit" value="Afficher"  >
	<INPUT type="reset" value="Raz" >
</form>
	<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Aujourd'hui</a>
	<div id=datavalues; style="overflow-x:auto;">
    <table  border="1">
      <thead>
        <tr>
          <td  style="width: 18%; background-color: #ccffff;">Date</td>
          <td  style="width: 18%; background-color: #ccffff;">Heure</td>
          <td  style="width: 10%; background-color: #ccffff;">Pompe</td>
          <td  style="width: 15%; background-color: #ccffff;">Panneau</td>
          <td  style="width: 15%; background-color: #ccffff;">Solaire</td>
          <td  style="width: 15%; background-color: #ccffff;">Sanit.</td>
        </tr>
      </thead>
      <tbody>
        <?php echo showDataDay(); ?>
      </tbody>
    </table>
    </div>
  </body>
</html>
