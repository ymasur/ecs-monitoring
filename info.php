<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<HTML>
<HEAD>
<META NAME="Generator" CONTENT="TextPad 4.4">
<META NAME="Author" CONTENT="Yves">
<META NAME="Keywords" CONTENT="Test">
<META NAME="Description" CONTENT="TCPIP adresse and browser used">
<TITLE>Infos par PHP</TITLE></HEAD>
</HEAD>
<BODY BGCOLOR="#FFFFFF" TEXT="#000000" LINK="#FF0000" VLINK="#800000" ALINK="#FF00FF" BACKGROUND="?">
<BIG>  
<HR ALIGN="center" WIDTH="100%">
Adresse:[port] utilises : <?php echo $_SERVER["REMOTE_HOST"]; ?> : [<?php echo $_SERVER["REMOTE_PORT"]; ?>]<BR>
<?php
echo "Global:", $_SERVER["DOCUMENT_ROOT"],"-<br>";
?>
<HR ALIGN="center" WIDTH="100%">
Browser utilise : <?php echo $_SERVER["HTTP_USER_AGENT"]; ?><BR>
<HR ALIGN="center" WIDTH="100%">
</BIG>
</BODY>
</HTML>
