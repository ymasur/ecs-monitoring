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
</head>
  <body>
    <p  id="Titre">Data ECS (dev) </p>
    <div  id="datavalues">
      <?php 	include ("mdatefile.php"); ?> 
	</div>

	
	<div style="overflow-x:auto;">
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
	<br />
<form  action="idate.php"> <label> Date: <span  class="ddown">
	<?php dateSelect(); ?>	
	</span> </label> <input  value="Affiche"  type="submit">
</form>	
<?php echo "<br/>test include<br />";
	include("http://127.0.0.1/arduino/temperature/");
?>
  </body>
</html>
