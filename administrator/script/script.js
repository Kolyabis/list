/**************** Метод обработки выпадающего меню **********************/
$(document).ready(function(){
        /*$('a').on('click', function(e){
            e.preventDefault();
        });*/
        $('#ddmenu li').hover(function () {
            clearTimeout($.data(this,'timer'));
            $('ul',this).stop(true,true).slideDown(200);
        }, function () {
            $.data(this,'timer', setTimeout($.proxy(function() {
                $('ul',this).stop(true,true).slideUp(200);
            }, this), 100));
        });
});
$(document).ready(function(){
    $('.tab_name').click(function() {
        var current_block = $('.show', $(this));
        // first step: slideUp all slides exept current
        $('.show').not(current_block).slideUp();
        // second step: slideDown current
        current_block.slideDown();
    });
});
/************************* Проверка юзера ********************************/
function checkUser(){
    var valid = true;
    if($('#login').val().length < 2){
        $("#error").slideUp();
        $('#error').slideDown(function(){
            $('#error').html('Поле ( Login ) пусто или не корректно заполнено!');
        });
        $("#login").focus();
        return false;
    }else if($('#pass').val().length < 2){
        $("#error").slideUp();
        $('#error').slideDown(function(){
            $('#error').html('Поле ( Password ) пусто или не корректно заполнено!');
        });
        $("#Pass").focus();
        return false;
    }else{
        $("#error").slideUp();
        var myData = "login="+$('#login').val()+"&pass="+$('#pass').val();
        jQuery.ajax({
            type: "POST", // HTTP метод  POST
            //url: "lib/lib.php", //url-адрес, по которому будет отправлен запрос
            url: "ajax/index", //url-адрес, по которому будет отправлен запрос
            dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
            data:myData, //данные, которые будут отправлены на сервер (post переменные)
            success:function(response){
                if(response === ''){
                   $("#error").slideDown(function(){
                        $("#error").html('Пользователь не найден!');
                    });
                }else if(response != ''){
                    /*var login = $("#login").val();
                    login = encodeURIComponent(login);
                    var pass = $("#pass").val();
                    pass = encodeURIComponent(pass);*/
                    var url = location.href;
                    window.location.href = url+'cpanel/index/token/'+response;
                }
            },
            error:function (xhr, ajaxOptions, thrownError){
                alert(thrownError); //выводим ошибку
            }
        });
    }
}
/******************* Функция удаления категории **************************/
function delCat(id){
    var myData = "id="+id;
    jQuery.ajax({
        type: "POST", // HTTP метод  POST
        url: "http://list/administrator/category/delete/", //url-адрес, по которому будет отправлен запрос
        dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
        data:myData, //данные, которые будут отправлены на сервер (post переменные)
        success:function(response){
            //alert(response);
            if(response === ''){
                $('#error_del').slideDown(function(){
                    $('#error_del').html('Не получилось удалить запись!');
                });
            }else if(response != ''){
                $("#"+response).slideUp();
            }
        },
        error:function (xhr, ajaxOptions, thrownError){
            alert(thrownError); //выводим ошибку
        }
    });
}
/*********************** Функция добавления новой категории ******************/
function addCat(token){
    var url = "http://list/administrator/category/insert/token/"+token;
    window.location.href = url;
}


