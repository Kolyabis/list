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
            <div style="float: left; margin-right: 8px;">
                <img id="menuImg" src="/images/icon/<?php echo $key; ?>.png" alt=""/><br />
                <a id="menu" href="/administrator/<?php echo $key; ?>/index/token/<?php echo $params['token']; ?>"><?php echo $val; ?></a>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="bodyInfo">
        <div style="float: right;">
            <div class="info">
                <?php
                    $modify = $params['last_modifay_table'];
                    $cnt = count($modify);
                    foreach($modify as $key => $val){; ?>
                    <div class="tab_name" id="tab_name<?php echo '-'.$key; ?>">
                        Последние изминения в базе:
                        <?php echo lib::lan($key); ?>
                        <div style="float: right; margin-left: 15px">
                            <?php echo $val['data'] ?>
                        </div>
                        <div class="show"  style="display: none;">
                            <?php foreach($val as $k => $v ){; ?>
                                <div style="margin-bottom: 2px;">
                                    <?php print_r(lib::lan($k)." - ".$v); ?>
                                </div>
                            <?php }; ?>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    <div class="clear"></div>
    <div id="error" style="display: none;"></div>
    <div style="float: right; margin-left: 25px"></div>
</body>
<pre>
        <?php print_r($params); ?>
    </pre>
</html>