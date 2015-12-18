<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Perpustakaan</title>

<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>



<h1>Login PerpusCartoe</h1>

<div id="main">

<div id="addCommentContainer" align="center">
	<form method="post" action="cek.php">
    	<table>
        <tr>
        	<td><label for="name">Username :</label></td>
        	<td><input type="text" name="username" id="name" /></td></tr>
           <tr> 
            <td><label for="email">Password :</label></td>
            <td><input type="password" name="password" id="email" /></td></tr>
            
            <tr><td><label for="url">Validasi :</label></td>
            <td><input type="text" name="validasi" id="url" /></td> <td><img src="../captchasecurityimages.php?width=110&height=40&character=6" height="23"></td></tr><tr>

            <tr><td><input type="submit" id="submit" value="Login" /></td></tr>
        </table>
    </form>
	
	<marquee>
<p><strong>.::::: SILAHKAN MASUK KE HALAMAN ADMINISTRATOR :::::.</strong></p>
  </marquee>
</div>
<div id="footer">
			Copyright &copy; 2015 Emas_Rosminasih.
	</div>

</div>
<script type="text/javascript" src="script.js"></script>

</body>
</html>
