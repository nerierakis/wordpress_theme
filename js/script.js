jQuery(function($) {

    //読み込み時とリサイズ時に発火
    $(window).on('load resize', function () {
        console.log('test');
        let header = $('header'); // fixed DOM
        let addclass = 'scrolled'; // add css class
        let offset = header.offset();
        let scrollY = offset.top; // scroll


        $(window).scroll(function () {
            if ($(window).scrollTop() > scrollY) {
                header.addClass(addclass);

            } else {
                header.removeClass(addclass);

            }
        });
    });
});
