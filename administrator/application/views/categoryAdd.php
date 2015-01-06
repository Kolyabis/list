<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>CPanel</title>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One|Bad+Script|Jura|Open+Sans+Condensed:300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="/administrator/css/style.css" rel="stylesheet" type="text/css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
    <script src="/administrator/script/script.js"></script>
</head>
<body>
    <div id="topBar">
        <a href="" id="exit" ></a>
        <div id="loginUser">Вы: <?php echo $params['login']; ?></div>
        <div id="divMenu">
            <!--********************************************************************** Вывод меню административной панели *********************************************************-->
            <?php foreach($params['menuPanel'] as $key => $val){;?>
            <div style="float: left; margin-right: 8px;">
                <img id="menuImg" src="/images/icon/<?php echo $key; ?>.png" alt=""/><br />
                <a id="menu" href="/administrator/<?php echo $key; ?>/index/token/<?php echo $params['token']; ?>"><?php echo $val; ?></a>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="bodyInfo">
        <p>Новая категория</p>
       <div style="margin: 15px; border: 1px solid #787878; border-radius: 3px; padding: 3px; margin-left: auto; margin-right: auto">
            <div style="float: left;">
                <p>Наименование категории:</p>
                <input type="text" id="nameCat" placeholder="Наименование категории" name="nameCat" size="40"/><br/>
                <p>Описание категории:</p>
                <textarea rows="15" cols="60"></textarea>
            </div>
            <div style="float: right;"></div>
           <div class="clear"></div>
       </div>
    </div>
</body>
</html>