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
/*************************************************************************/
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
            url: "lib/lib.php", //url-адрес, по которому будет отправлен запрос
            dataType:"text", // Тип данных,  которые пришлет сервер в ответ на запрос ,например, HTML, json
            data:myData, //данные, которые будут отправлены на сервер (post переменные)
            success:function(response){
                if(response === ''){
                   alert('Pusto');
                   /* $("#error").slideDown(function(){
                        $("#error").html('Пользователь не найден!');
                    });*/
                }else if(response != ''){
                    alert(response);
                    /*var login = $("#login").val();
                    login = encodeURIComponent(login);
                    var pass = $("#pass").val();
                    pass = encodeURIComponent(pass);
                    var url = location.href;*/
                    //window.location.href = url+response+'.php?name='+login+'&pass='+pass;
                }
            },
            error:function (xhr, ajaxOptions, thrownError){
                alert(thrownError); //выводим ошибку
            }
        });
    }
}
/*************************************************************************/




