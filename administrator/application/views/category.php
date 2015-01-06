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
        <div>
            <ul id="project-list">
            <?php
                /************************************************ Функция для вывода категорий и подкатегорий на странице категорий **************************************************/
                function list_category($arr, $token, $parent_id = 0){
                    if(empty($arr[$parent_id])){
                        return;
                    }
                    echo "<ul>";
                    for($i = 0; $i < count($arr[$parent_id]) ;$i++){
                        echo "<li id='".$arr[$parent_id][$i]['id']."'>
                                <span>
                                    <a href='/administrator/category/update/token/".$token."/id/".$arr[$parent_id][$i]['id']."'>
                                        ".$arr[$parent_id][$i]['name']."
                                            <div class='disabled_link' style='float: right;'>
                                                ".$arr[$parent_id][$i]['data']."
                                            </div>
                                    </a>
                                    <span class='close-icon' id='".$arr[$parent_id][$i]['id']."' onClick=delCat(".$arr[$parent_id][$i]['id'].")></span>
                                </span>";
                        //echo "<span id='close-icon'></span>";
                        list_category($arr, $token, $arr[$parent_id][$i]['id']);
                        echo "</li>\n";
                    }
                    echo "<span id='error_del' style='display: none;'></span>";
                    echo "</ul>\n";
                }
                list_category($params['list_cat'], $params['token']);
            ?>
            </ul>
        </div>
    <div class="clear"></div>
    <div id="error" style="display: none;"></div>
    <div style="float: right; margin-left: 25px"></div>
</body>
<pre>
        <?php //print_r($params['category']); ?>
    </pre>
</html>