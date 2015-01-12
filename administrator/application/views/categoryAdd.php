<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
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
        <form name="form_category" method="post" action="">
        <div style="float: right;">
            <input class="button" type="button" value="<?php echo lib::lan('save'); ?>" onClick="saveCat()"/>
        </div>
        <div class="section">
            <ul class="tabs">
                <li class="current"><?php echo lib::lan('new_cat'); ?></li>
                <li><?php echo lib::lan('description_cat'); ?></li>
                <li>Третья вкладка</li>
                <li>Червертая вкладка</li>
            </ul>
            <div class="box visible">
                <label><?php echo lib::lan('name_cat'); ?>:<br/><input type="text" id="name_cat" name="name_cat" size="40"/></label><br/>
                <label><?php echo lib::lan('alias_cat'); ?>:<br/><input type="text" id="alias_cat" name="alias_cat" size="40"/></label><br/>
                <label><?php echo lib::lan('und_cat'); ?>:<br/>
                    <select size="1" id="und_cat" name="und_cat">
                        <option value="0"><?php echo lib::lan('disabled'); ?></option>
                        <?php for($i = 0; $i < count($params['list_cat']); $i++){;?>
                            <option value="<?php echo $params['list_cat'][$i]['id']; ?>"><?php echo $params['list_cat'][$i]['name']; ?></option>
                        <?php }; ?>
                    </select>
                </label><br/>
                <label><?php echo lib::lan('status'); ?>:<br/>
                    <p>
                        <input checked="checked" type="radio" name="status" value="1" id="radio_cat_yes"><label for="radio_cat_yes"> <?php echo lib::lan('yes'); ?></label>
                        <input type="radio" name="status" value="0" id="radio_cat_no"><label for="radio_cat_no"> <?php echo lib::lan('no'); ?></label>
                    </p>
                </label><br/>
            </div>
            <div class="box">
                <label><?php echo lib::lan('description'); ?>:<br/><textarea rows="15" cols="60" name="description_cat"></textarea></label><br/>
            </div>
            <div class="box">
                    <p>параграф</p>
            </div>
            <div class="box">
                    <p>параграф</p>
            </div>
        </div>
        </form>
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
<script type="text/javascript">
    (function($) {
        $(function() {

            $('ul.tabs').delegate('li:not(.current)', 'click', function() {
                $(this).addClass('current').siblings().removeClass('current')
                    .parents('div.section').find('div.box').hide().eq($(this).index()).fadeIn(150);
            })

        })
    })(jQuery)
    function saveCat(){
        alert('SAVE');
    }
</script>
</html>