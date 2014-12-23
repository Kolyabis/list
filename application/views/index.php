<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Title</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="/script/script.js"></script>
</head>
<body>
<pre>
    <?php //print_r($params['mainMenu']); ?>
</pre>
    <div id="topBar"></div>
    <div class="body">
        <div id="logoMenu">
            <div id="logo"></div>
            <div>
                <div class="mainMenu">
                    <?php
                        function view_menu($arr, $parent_id = 0){
                            if(empty($arr[$parent_id])){
                                return;
                            }
                            if($parent_id == 0){
                                echo "<ul>";
                            }else{
                                echo "<ul >";
                            }
                            for($i = 0; $i < count($arr[$parent_id]) ;$i++){
                                echo "<li id='ddmenu-".$parent_id."' style='float:left;'><a href='#' class='menu' >".$arr[$parent_id][$i]['page']."</a>";
                                view_menu($arr, $arr[$parent_id][$i]['id']);
                                echo "</li>\n";
                            }
                            echo "</ul>\n";
                        }
                        view_menu($params['mainMenu']);
                    ?>
                </div>
























            </div>
            <div class="clear"></div>
        </div>
        <div class="topModule">
            <div id="topModule1"></div>
            <div id="topModule2"></div>
            <div id="topModule3"></div>
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