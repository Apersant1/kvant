    //Получаем элементы

    var item_num = $('nav li').length;

    var btn_state = true;



    //hover работает
    $('nav li').hover(function() {
        $(this).addClass('hover');
    }, function() {
        $(this).removeClass('hover');
    });

    $('nav li').on('click', function() {
        if (btn_state) {
            btn_state = !btn_state;
            $('nav li').removeClass('currentPage');
            $(this).addClass('currentPage');

            var i = $('nav li').index(this);
            console.log(i);
            $('article').removeClass('show');
            $('article').addClass('hide');
            $('article').eq(i + 2).addClass('show');

            setTimeout(function() {
                btn_state = !btn_state;
            }, 500);
        }
    });