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
                    <?php print_r($params['mainMenu']); ?>
                    <?php
                        $mainMenu = $params['mainMenu'];
                        $cnt = count($mainMenu)-1;
                        echo "<ul id='ddmenu'>";
                        for($i = 0; $i <= $cnt; $i++){
                            if(empty($mainMenu[$i]['child'])){
                                echo "<div style='float:left;'><li><a href=/".$mainMenu[$i]['page']." class='menu' style='text-decoration: none;'>".$mainMenu[$i]['page']."</a></li></div>";
                                echo "<ul>";
                                for($n = 0; $n <= $cnt; $n++){
                                    if($mainMenu[$n]['child'] == $mainMenu[$i]['id']){
                                            echo "<li>".$mainMenu[$n]['page']."</li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                        /*for($i = 0; $i <= $cnt; $i++){
                           if(empty($mainMenu[$i]['child'])){
                               echo "<div style='float:left;'><li><a href=/".$mainMenu[$i]['page']." class='menu' style='text-decoration: none;'>".$mainMenu[$i]['page']."</a></li></div>";
                           }
                            echo "<ul>";
                            foreach($mainMenu[$i] as $key){
                                if(!empty($mainMenu[$i]['child'])){
                                    echo "<li>".$mainMenu[$i]['page']."</li>";
                                }
                            }
                            echo "</ul>";
                        }*/
                        echo "</ul>";
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