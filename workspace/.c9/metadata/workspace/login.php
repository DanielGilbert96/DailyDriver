{"changed":false,"filter":false,"title":"login.php","tooltip":"/login.php","value":"<?php\nsession_start();\n\nif(isset($_SESSION['usr_id'])!=\"\") {\n\theader(\"Location: index.php\");\n}\n\ninclude_once 'dbconnect.php';\n\n//check if form is submitted\nif (isset($_POST['login'])) {\n\n\t$email = mysqli_real_escape_string($con, $_POST['email']);\n\t$password = mysqli_real_escape_string($con, $_POST['password']);\n\t$result = mysqli_query($con, \"SELECT * FROM users WHERE email = '\" . $email. \"' and password = '\" . md5($password) . \"'\");\n\n\tif ($row = mysqli_fetch_array($result)) {\n\t\t$_SESSION['usr_id'] = $row['id'];\n\t\t$_SESSION['usr_name'] = $row['name'];\n\t\theader(\"Location: index.html\");\n\t} else {\n\t\t$errormsg = \"Incorrect Email or Password!!!\";\n\t}\n}\n?>\n\n<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n\t<meta charset=\"UTF-8\">\n\t<title>Login</title>\n\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1\">\n\t<link rel=\"stylesheet\" href=\"css/estilo.css\">\n</head>\n<body>\n<div>\n\t<img src=\"images/logo2.png\" alt=\"Daily Driver\" title=\"Daily Driver\">\n\t<form action=\"\" method=\"post\">\n\t\t<h2>Daily Driver Login</h2>\n\t\t<input type=\"text\" id=\"email\" placeholder=\"&#128104; email\" name=\"email\" required>\n\t\t<input type=\"password\" id=\"password\" placeholder=\"&#128273; Password\" name=\"password\" required>\n\t\t<input type=\"submit\" name=\"login\" value=\"Login\" class=\"btn btn-primary\" />\n\t\t<a href=\"register.php\">Not Registered yet?</a>\n\t</form>\n\t</div>\n</body>\n</html>","undoManager":{"mark":-1,"position":-1,"stack":[]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1479826236921}