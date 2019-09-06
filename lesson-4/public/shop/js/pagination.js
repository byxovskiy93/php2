$('document').ready(function () {
        var divShop = $('#shop-row');
        var loadShopButton = $('#load-shop');
        var nextPage;

        var count = loadShopButton.attr('data-load');

        loadShopButton.click(function (e) {
            e.preventDefault();
            nextPage = loadShopButton.attr('data-load');
            send(nextPage)
        });


       function send(data) {
           $.ajax({
               data:{next_page:data},
               dataType : 'json',
               method:'GET',
               asyns:false,
               success: function (e)
               {
                   if(e.html.length <= 0){
                       //Удаляем кнопку если получили все
                       loadShopButton.remove();
                   }
                   else {
                       loadShopButton.attr('data-load',parseInt(nextPage)+parseInt(count));
                       divShop.append(e.html);
                   }
               },
               error:function (e) {
                   alert('Произошла ошибка при передаче на сервер!');
               }
           });
       }

    });