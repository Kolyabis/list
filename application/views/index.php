<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Title</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Poiret+One|Bad+Script|Jura|Open+Sans+Condensed:300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="/script/script.js"></script>
</head>
<body>
    <div id="topBar"></div>
    <div class="body">
        <div id="logoMenu">
            <div id="logo"></div>
            <div>
                <div class="mainMenu">
                    <nav>
                    <?php
                        function view_menu($arr, $parent_id = 0){
                            if(empty($arr[$parent_id])){
                                return;
                            }
                            echo "<ul id='ddmenu'>";
                            for($i = 0; $i < count($arr[$parent_id]) ;$i++){
                                echo "<li id='ddmenu-".$parent_id."' ><a href='/".$arr[$parent_id][$i]['controller']."'>".$arr[$parent_id][$i]['page']."</a>";
                                view_menu($arr, $arr[$parent_id][$i]['id']);
                                echo "</li>\n";
                            }
                            echo "</ul>\n";
                        }
                        view_menu($params['mainMenu']);
                    ?>
                    </nav>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="topModule">
            <div id="topModule1">sdfsdf</div>
            <div id="topModule2">sdsdf</div>
            <div id="topModule3">sdfsdf</div>
            <div class="clear"></div>
        </div>
        <div id="content">
            <div id="left">left</div>
            <div id="center">center</div>
            <div id="right">right</div>
            <div class="clear"></div>
        </div>
        <div id="bottonModule">
            bottonModule
            <div class="clear"></div>
        </div>
        <div id="footer">
            <span>
                <div id="logoFooter"></div>
            </span>
            <div class="clear"></div>
        </div>
    </div>
</body>
</html>