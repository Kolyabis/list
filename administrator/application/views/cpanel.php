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
    <div id="topBar">
        <a href="" id="exit" ></a>
        <div id="loginUser">Вы: <?php echo $params['login']; ?></div>
        <div id="divMenu">
            <?php foreach($params['menuPanel'] as $key => $val){;?>
                <a id="menu" href="/administrator/<?php echo $key; ?>"><?php echo $val; ?></a>
            <?php } ?>
        </div>
    </div>
    <div class="bodyInfo">
        <div>
            <?php echo 'Info'; ?>
        </div>
    </div>
    <pre>
        <?php print_r($params); ?>
        <?php print_r($_SESSION); ?>
    </pre>
    <div id="error" style="display: none;"></div>
</body>
</html>