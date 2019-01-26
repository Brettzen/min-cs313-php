$().ready(function() {
    $('.btn-cart').on('click', function(){
        $data = JSON.parse($(this).attr('data'));
        $top = $(this).offset().top;
        $left = $(this).offset().left + 55;
        console.log ($(this).offset());
        console.log($data);
        $.ajax({
            url: 'index.php?action=addToCart',
            method: 'POST',
            data: $data,
            dataType: 'json',
            success: function(data) {
                $alert = '<div class="add-to-cart-alert alert alert-primary" role="alert">Added to cart!</div>';
                $('body').append($alert);
                if(!($('.cart-badge').length)) {
                    $('.go-to-cart').append("<span class='badge badge-light cart-badge'>"+ data +"</span>");
                }
                $('.cart-badge').html(data);
                $('.add-to-cart-alert:last-of-type').css({'top': $top, 'left': $left});
                $('.add-to-cart-alert:last-of-type').show(0).animate({
                    top: $top - 100 + "px"
                }, {
                    duration: 500,
                    easing: "swing",
                    complete: function(){ $(this).addClass('fade').alert('close');
                }});
            },
            error: function(xhr, status, error) {
               console.log("error: " + error);
               console.log("xhr: " + JSON.stringify(xhr));
               console.log("status: " + status);
            }
        });
   });
   
});

