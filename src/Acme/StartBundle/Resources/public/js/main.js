$(function() {

    $('#menu li').on('click', function(){
        getContent($(this).attr('value'));
    })

    if (window.pluso)if (typeof window.pluso.start == "function") return;
    if (window.ifpluso==undefined) { window.ifpluso = 1;
        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
        s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
        s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
        var h=d[g]('body')[0];
        h.appendChild(s);
    }});

function getContent(url, conteiner){
   if (typeof(conteiner) == "undefined"){
       conteiner = "#body";
   }
    $.ajax({
        url: url,
        dataType: "html",
        success: function (data, textStatus) { // вешаем свой обработчик на функцию success
            $.each(data, function(i, val) {    // обрабатываем полученные данные
                /* ... */
            });
        }
    });

}