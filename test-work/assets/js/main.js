jQuery(document).ready(function($){

// Banner slider
    var slider = $('.banner .carousel').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        items:1,
        navText:['', ''],
        onInitialized: counter, //When the plugin has initialized.
        onTranslated: counter //When the translation of the stage has finished.
    });

    //Next project
    $('.banner .carousel .next-project').click(function(){
        slider.trigger('next.owl.carousel');
    });

    //Slider counter
    function counter(event) {
        var items = event.item.count;     // Number of items
        var item = event.item.index - 1;     // Position of the current item

       // it loop is true then reset counter from 1
       if(item > items) {
         item = item - items;
       }
       if ( item < 10 ) {
        item = '0' + item;
       }
       if ( items < 10 ) {
        items = '0' + items;
       }

       if( $('.banner .carousel .owl-nav').find('.counter').length == 0 ){
        $('.banner .carousel .owl-nav .owl-prev').after('<span class="counter"></span>');
       }
       $('.banner .carousel .owl-nav').find('.counter').html('<span>'+item+'</span>' + items);
    }

});