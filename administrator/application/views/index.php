<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>CPanel</title>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One|Bad+Script|Jura|Open+Sans+Condensed:300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="/administrator/css/style.css" rel="stylesheet" type="text/css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="/administrator/script/script.js"></script>
</head>
<body>
    <div class="bodyForm">
        <div id="formCp">
            <p id="cpanelLogo"></p>
            <div>
                <input id="login" placeholder="Login" name="login" type="text" size="20"/>
            </div>
            <div>
                <input id="pass" placeholder="Password" name="Pass" type="password" size="20"/>
            </div>
            <div>
                <input id="buttonCp" type="button" value="Войти" onclick="checkUser()"/>
            </div>
        </div>
        <div id="error" style="display: none"></div>
    </div>
</body>
</html>